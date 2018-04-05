<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'yafetsh';                 // SMTP username
    $mail->Password = 'YAFETSHILbacmath2';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('yafet.shil@esprit.tn', 'Yafet');
    $mail->addAddress('yafet.shil@esprit.tn');     // Add a recipient


$body='Votre réclamation a été ajoutés avec succés!';
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'FASHION MAKEUP';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent';
		echo ' Mailer Error: ' .$mail->ErrorInfo;
}
?>
