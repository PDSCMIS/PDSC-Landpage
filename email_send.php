<?php

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set('Asia/Manila');
 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $name = $_POST['name'] ?? 'No name provided';
    $mobile = $_POST['mobile'] ?? 'No mobile provided';
    $email = $_POST['email'] ?? 'No email provided';
    $message = $_POST['message'] ?? 'No message provided';

    $to = "mis@pdsclinics.com";

  
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();  
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true; 
        $mail->Username = 'martolentino1997@gmail.com';  
        $mail->Password = 'ucjo fikv uzvh dnnu'; 
        $mail->SMTPSecure = 'tls';  
        $mail->Port = 587; 

        // Recipients
        $mail->setFrom('martolentino1997@gmail.com', 'PDSCI Website'); 
        $mail->addAddress($to); 
        $mail->addReplyTo($to); 

        // Content
        $mail->isHTML(false); 
        $mail->Subject = "FROM WEBSITE : INQUIRY SUBMISSION  (Date " . date('m-d-Y H:i') . ")";
        $mail->Body    = "You have received a new message from the contact form: \n\n" .
                         "Name: " . $name . "\n" .
                         "Mobile#: " . $mobile . "\n" .
                         "Email: " . $email . "\n" .
                         "Message: " . $message . "\n";

        $mail->send();
        echo
        "
       <script> 
           alert('Message sent successfully!');
                document.location.href = 'contact.html';
       </script>
        ";
    } catch (Exception $e) {
          "<script>
          alert('Failed to send message. Mailer Error!');
         document.location.href = 'contact.html';
          </script>";
    }
} else {
  echo
  "
 <script>
          alert('Failed to send message. Mailer Error!');
          document.location.href = 'contact.html';
 </script>
  ";
}
