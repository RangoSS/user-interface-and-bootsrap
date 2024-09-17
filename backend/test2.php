<?php
session_start();

// Simulate some session data



include "config.php";

class Api extends Config
{


    var $caption;
    var $gallerytype;
    var $title_name;
    public  function __construct()
    {
        $this->caption = $_POST['caption'];
        $this->gallerytype = $_POST['gallerytype'];
        $this->title_name = $_POST['title_name'];
    }

    // Method to fetch all records from the "users" table
    public function fetch_all()
    {
        $sql = "SELECT * FROM user"; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    // Method to insert data into the "users" table
    public function insert()
    {
        session_start();

        $form_data = array(
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'position' => $_POST['position'],
            'contact' => $_POST['contact'],
            'm_email' => $_POST['m_email'],
            'passwords' => $_POST['passwords']


            // 'first_name' => 'malamba',

        );
        // Hash the password before storing it

        // $hashed_password = password_hash($form_data['passwords'], PASSWORD_DEFAULT);
        // Prepare the SQL insert query

        $query = "INSERT INTO user (first_name, last_name,position, contact, email,passwords)
                   VALUES ('" . mysqli_real_escape_string($this->getConnection(), $form_data['first_name']) . "', 
                           '" . mysqli_real_escape_string($this->getConnection(), $form_data['last_name']) . "', 
                           '" . mysqli_real_escape_string($this->getConnection(), $form_data['position']) . "',   
                           '" . mysqli_real_escape_string($this->getConnection(), $form_data['contact']) . "', 
                           '" . mysqli_real_escape_string($this->getConnection(), $form_data['m_email']) . "',
                           '" . mysqli_real_escape_string($this->getConnection(), $form_data['passwords']) . "')";


        $userData = array(
            'message' => $_SESSION['message'],
            'error' => $_SESSION['error']
        );

        if ($this->queryConn($query)) {
            $userData = $_SESSION['message'] = "User updated successfully";
        } else {
            $userData = $_SESSION['error'] = "User was not updated";
        }




        // Return JSON response
        echo json_encode($userData);


        // Redirect to the correct location with exit to prevent further script execution
        // header("Location: /register.php");
    }


    public function updloadProcurement()
    {
        // Check if the file was uploaded without errors
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            // File information
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileType = $_FILES['file']['type'];
            $fileError = $_FILES['file']['error'];

            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

            // Set upload directory and file path
            $uploadDir = 'upload/';
            $filePath = $uploadDir . basename($fileName);

            // Ensure the upload directory exists
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Move the file to the upload directory
            if (move_uploaded_file($fileTmpName, $filePath)) {
                // URL to access the uploaded file
                $fileUrl = 'http://localhost/archiark-main/backend/' . $filePath;

                // Prepare the SQL query
                $query = "INSERT INTO images (img_title,img_caption,img_src,portfolio) VALUES ('" . mysqli_real_escape_string($this->getConnection(),  $this->title_name) . "',
                                                                           '" . mysqli_real_escape_string($this->getConnection(), $this->caption) . "',
                                                                           '" . mysqli_real_escape_string($this->getConnection(), $fileUrl) . "',
                                                                           '" . mysqli_real_escape_string($this->getConnection(), $this->gallerytype) . "')";

                // Execute the query
                if ($this->queryConn($query)) {
                    $message = 'Data submitted successfully';
                } else {
                    $message = 'Failed to insert data into the database';
                }
            } else {
                $message = 'Failed to move uploaded file';
            }
        } else {
            $message = 'No file was uploaded or an error occurred';
        }

        echo $message;
    }

    public function updateProcurement($id)
    {
        // Check if the file was uploaded without errors
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            // File information
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileType = $_FILES['file']['type'];
            $fileError = $_FILES['file']['error'];

            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

            // Set upload directory and file path
            $uploadDir = 'upload/';
            $filePath = $uploadDir . basename($fileName);

            // Ensure the upload directory exists
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Move the file to the upload directory
            if (move_uploaded_file($fileTmpName, $filePath)) {
                // URL to access the uploaded file
                $fileUrl = 'http://localhost/archiark-main/backend/' . $filePath;

                $form_data = array(
                    'first_name' => $_POST['first_name'],
                    'last_name' => $_POST['last_name'],
                    'position' => $_POST['position'],
                    'contact' => $_POST['contact'],
                    'm_email' => $_POST['m_email'],
                    'passwords' => $_POST['passwords']


                    // 'first_name' => 'malamba',
                );


                $title_name = "mike";
                $fileUrl = "directory4";
                $caption = "testing";
                $gallerytype = "procurement";

                // SQL query to update the image record in the database
                // $sql = "UPDATE images SET img_title = '$title_name', img_src = '$fileUrl', img_caption = '$caption', portfolio = '$gallerytype' WHERE image_id = 61";
                $sql = "UPDATE images SET img_title ='$this->title_name',img_src='$fileUrl',img_caption='$this->caption',portfolio='$this->gallerytype' WHERE image_id ='$id'";

                // Execute the query
                $queryResult = $this->queryConn($sql);

                if ($queryResult) {
                    $message = 'Data updated successfully';
                } else {
                    $message = 'Failed to update data in the database';
                }

                // Echo the message to the user
                echo $message;
            }
        }
    }

    public function galleryArchitect()
    {
        $sql = "SELECT * FROM images"; // Replace with your actual table name
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return $myImages;
    }

    public function deleteUser($id)
    {

        $sql = "DELETE from images where image_id='$id'";



        $this->queryConn($sql);
    }
}







if (isset($_POST['action']) && $_POST['action'] === 'insert') {
    // Get the parameter from the POST request
    $main = new Api();
    $main->insert();
}
if (isset($_POST['action']) && $_POST['action'] === 'uploading') {
    $main = new Api();
    $main->updateParchitect();
}

if (isset($_POST['action']) && $_POST['action'] === 'uploadProc') {
    $main = new Api();
    $main->updloadProcurement();
}

if (isset($_POST['action']) && $_POST['action'] === 'update') {

    $image_id = $_POST['image_id'];
    $intVar = (int) $image_id;
    $main = new Api();
    $main->updateProcurement($intVar);
}


if (isset($_POST['action']) && $_POST['action'] === 'delete') {
    // Get the parameter from the POST request
    $image_id = $_POST['image_id'];
    $intVar = (int) $image_id;
    $main = new Api();
    $main->deleteUser($intVar);
}

//$main = new Api();
//$main->updateProcurement();
    








/*
// Directly calling insert method if not using AJAX
//this is a global when calling buton type submit
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $main = new Api();
    $main->insert();
}*/

//if we are using button type button we use this
//$btnRegister = $_POST['btnRegister'];
//if (isset($_POST['btnRegister'])) {
//   $main = new Api();
// $main->insert();
//}

//$main = new Api();
//$main->insert();
//you gonna use this isset if function is called by ajax
//if (isset($_POST['insert'])) {
// Instantiate the Api class
//$main = new Api();
//$main->insert(); // Call the insert method
//}
