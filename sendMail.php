
<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if (isset($_POST['btnSend'])) {

    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'tshidaisa@outlook.com';                     //SMTP username
        $mail->Password   = 'Rango123@';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //yyyg wfqi gxly culd
        //Recipients
        $mail->setFrom($email, $fullname); //free email must come only from the same server
        $mail->addAddress('tshidaisa@gmail.com', 'riseonic');     //Add a recipient
        //$mail->addAddress('tshidaisa@gmail.com', 'riseonic');


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = '<h2>hello,you got a new enquery  from Riseonic website</h2>
    <h5>full name: ' . $fullname . '</h5> 
    <h5>Email: ' . $email . '</h5>
     <h5>Subject: ' . $subject . '</h5>
     <h5>Subject: ' . $phone . '</h5>
     <h5>Message: ' . $message . '</h5>
    ';



        if ($mail->send()) {
            $_SESSION['status'] = 'thank you for contacting us .TEAM Risonic';
            header('location:contact.php');
        } else {
            $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header('location:contact.php');
        }

        echo 'Message has been sent';
    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
