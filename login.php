<?php
session_start();
include "backend/config.php"; // Assuming this contains the database connection and query methods.

class loginClass extends Config
{
    private $user_email;
    private $pins;

    function __construct($user_email, $pins)
    {
        $this->user_email = $user_email;
        $this->pins = $pins;
    }

    function loginUser()
    {
        $sql = "SELECT first_name,email,position from user where email='$this->user_email' and passwords='$this->pins'";

        $result = $this->queryConn($sql); //i called connection

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $_SESSION['first_name'] = $row['first_name'];

            $jsonArray = json_encode($row);
            echo $jsonArray;

            // If you want to handle redirection based on user position:
            if ($row['position'] == 'client') {
                header('Location: index.html');
                exit();
            } else if ($row['position'] == 'employee') {
                header('Location: dash_index.html');
                exit();
            }

            exit(); // Ensure no more code is executed
        } else {
            $_SESSION['status'] = 'User does not exist in our database, please register or contact Riseonic admin';
            echo json_encode(['status' => $_SESSION['status']]);
            exit();
        }
    }
}



// Testing the login functionality
$email = $_POST['email'];
$passwords = $_POST['passwords'];

$logme = new loginClass($email, $passwords); //pass values to object
$logme->loginUser();
