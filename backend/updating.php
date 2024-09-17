<?php
session_start();

include "config.php";

class Api extends Config
{
    var $caption;
    var $gallerytype;
    var $title_name;

    public function __construct()
    {
        // Validate and assign POST data
        $this->caption = isset($_POST['img_caption']) ? $_POST['img_caption'] : '';
        $this->gallerytype = isset($_POST['gallerytype']) ? $_POST['gallerytype'] : '';
        $this->title_name = isset($_POST['title_name']) ? $_POST['title_name'] : '';
    }

    // Method to fetch all records from the "user" table (sample function)
    public function fetch_all()
    {
        $sql = "SELECT * FROM user";
        $result = $this->queryConn($sql);

        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    // Method to update image information
    public function updatingImages()
    {
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            // File details
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

            // Validate file extension (only allow specific file types)
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid file type']);
                return;
            }

            // Set upload directory and ensure it exists
            $uploadDir = 'upload/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Define the file path
            $filePath = $uploadDir . basename($fileName);

            // Move the file to the upload directory
            if (move_uploaded_file($fileTmpName, $filePath)) {
                $fileUrl = 'http://localhost/archiark-main/backend/' . $filePath;

                // Sanitize inputs before using in SQL
                $imageId = intval($_POST['imageId']);
                $title = $_POST['title'];
                $img_caption = $_POST['img_caption'];

                // SQL query to update the image
                $sql = "UPDATE images SET img_title = '$title', img_src = '$fileUrl', img_caption = '$img_caption' WHERE image_id = $imageId";

                if ($this->queryConn($sql)) {
                    echo json_encode(['status' => 'success', 'message' => 'Image updated successfully']);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Failed to update image']);
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to move uploaded file']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No file uploaded or upload error']);
        }
    }

    // Method to fetch procurement-related images
    public function procurement()
    {
        $sql = "SELECT * FROM images WHERE portfolio = 'procurement'";
        $result = $this->queryConn($sql);

        $myImages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $myImages[] = $row;
        }

        return json_encode($myImages);
    }

    // Method to delete an image record
    public function deleteUser($id)
    {
        $id = intval($id);
        $sql = "DELETE FROM images WHERE image_id = $id";
        if ($this->queryConn($sql)) {
            echo json_encode(['status' => 'success', 'message' => 'Image deleted successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete image']);
        }
    }
}

// Handle AJAX actions
if (isset($_POST['action'])) {
    $main = new Api();

    switch ($_POST['action']) {
        case 'getImages':
            echo $main->procurement();
            break;

        case 'update':
            $main->updatingImages();
            break;

        case 'delete':
            $imageId = intval($_POST['image_id']);
            $main->deleteUser($imageId);
            break;

        default:
            echo json_encode(['status' => 'error', 'message' => 'Invalid action']);
            break;
    }
}
