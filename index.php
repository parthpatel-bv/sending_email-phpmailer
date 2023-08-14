<?php
// Get the email from the form submission
$email = $_POST['email_id'];

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

// Function to send a simple email
function simple_mail($email) {
    $mail = new PHPMailer;
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'parth.patel36428@gmail.com';
    $mail->Password = 'zfqyvxzwonbcigef';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('parth.patel36428@gmail.com', 'Parth Patel');
    $mail->addAddress($email);
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using PHPMailer and Gmail SMTP.';

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
}



function file_mail($email) {
    $mail = new PHPMailer;
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'parth.patel36428@gmail.com';
    $mail->Password = 'zfqyvxzwonbcigef';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom($email);
    $mail->addAddress($email);
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using PHPMailer and Gmail SMTP.';
    
    // Attach a file
    $attachmentPath = '/home/parth_patel/Downloads/15_aug.jpg'; // Change this to the actual file path
    $mail->addAttachment($attachmentPath, '15_aug.jpg'); // Change the filenames as desired

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
}

function cc_email($email){
    $mail = new PHPMailer;
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'parth.patel36428@gmail.com';
    $mail->Password = 'zfqyvxzwonbcigef';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom($email);
    $mail->addAddress($email);
    $mail->addCC('samir.tak@brainvire.com'); // Add CC recipient's email address
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using PHPMailer and Gmail SMTP.';
    
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
}

function bcc_email($email){
    $mail = new PHPMailer;
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'parth.patel36428@gmail.com';
    $mail->Password = 'zfqyvxzwonbcigef';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom($email);
    $mail->addAddress($email);
    $mail->addCC('samir.tak@brainvire.com'); 
    $mail->addBCC('isha.dadhania@brainvire.com');
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using PHPMailer and Gmail SMTP.';
    
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
}


simple_mail($email);
file_mail($email);
cc_email($email);
bcc_email($email);
?>

