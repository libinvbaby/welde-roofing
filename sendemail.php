<?php

// Import the PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load the PHPMailer library
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create a new instance of the PHPMailer class
$mail = new PHPMailer(true);

// Set the SMTP server
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'vblibin885@gmail.com';
$mail->Password = 'xpcqyghkvbfqaiee';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

// Set the recipient, subject, and message
$mail->setFrom($email, $name);
$mail->addAddress('vblibin885@gmail.com');
$mail->Subject = 'New Contact Form Submission from Solar Landing Page';
$mail->Body = "
<table style='border-collapse: collapse; width: 100%;'>
  <tr style='border: 1px solid black; background-color: #f2f2f2;'>
    <th style='padding: 8px; text-align: left; border: 1px solid black;'>Name</th>
    <th style='padding: 8px; text-align: left; border: 1px solid black;'>Email</th>
    <th style='padding: 8px; text-align: left; border: 1px solid black;'>Phone</th>
    <th style='padding: 8px; text-align: left; border: 1px solid black;'>Message</th>
  </tr>
  <tr style='border: 1px solid black;'>
    <td style='padding: 8px; text-align: left; border: 1px solid black;'>$name</td>
    <td style='padding: 8px; text-align: left; border: 1px solid black;'>$email</td>
    <td style='padding: 8px; text-align: left; border: 1px solid black;'>$phone</td>
    <td style='padding: 8px; text-align: left; border: 1px solid black;'>$message</td>
  </tr>
</table>";
$mail->IsHTML(true);


$mail->send();
// Send the email
 
echo
"
<script>
alert('message sent Successfully')
document.location.href= 'index.html'
</script>
"

?>