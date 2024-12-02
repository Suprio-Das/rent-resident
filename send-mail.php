<?php
session_start();
include("navbar.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'foundationsofwebdev@gmail.com'; // Replace with your Gmail address
        $mail->Password = 'qwdj tepn jqpv bhdw'; // Replace with your Gmail password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
    
        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($email); // Replace with the recipient's email address
    
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<h2>New Message from Contact Form</h2>
                       <p><strong>Name:</strong> {$name}</p>
                       <p><strong>Email:</strong> {$email}</p>
                       <p><strong>Subject:</strong> {$subject}</p>
                       <p><strong>Message:</strong><br>{$message}</p>";
    
        $mail->send();
    
        // HTML response
        echo '
        <div class="w-[95%] h-screen flex justify-center items-center mx-auto">
            <img src="./images/sent-mail-svgrepo-com.svg" alt="" class="w-11">
            <p class="text-3xl mx-3 text-green-700"> Thank you! Your message has been sent.</p>
        </div>';
    } catch (Exception $e) {
        echo "Sorry, something went wrong. Please try again later.";
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
    
}
?>