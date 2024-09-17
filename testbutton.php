<?php
// PHP file (e.g., data.php)

class User
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }


    function display($num1, $num2)
    {

        $result = $num1 * $num2;
        $message = '';
        if ($result > 50) {
            $messageText = "you got a good number";
        } else {
            $messageText = "you play alot";
        }



        echo json_encode($messageText);

        // echo json_encode($result);
    }
}

$user = new User("John Doe", "john.doe@example.com");
$user->display(10, 5);
// Convert the PHP object to JSON
//echo json_encode($user);
