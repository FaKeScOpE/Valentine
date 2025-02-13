<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;   // Enable verbose debug output (remove in production)
    $mail->isSMTP();                         // Send using SMTP
    $mail->Host = 'smtp.gmail.com';          // Set the SMTP server to send through
    $mail->SMTPAuth = true;                  // Enable SMTP authentication
    $mail->Username = 'WynnGanYongHang@gmail.com'; // Your Gmail address
    $mail->Password = 'lhuq gxen oscb mvqz';    // Use **Google App Password** instead of your real password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption (Use ENCRYPTION_SMTPS for Port 465)
    $mail->Port = 587;                        // TCP port to connect to (Use 465 for SSL)

    // Recipients
    $mail->setFrom('WynnGanYongHang@gmail.com', 'Wynn'); // Sender
    $mail->addAddress('WynnGanYongHang88@gmail.com', 'Test'); // Add a recipient

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'I Love You ❤️';
    $mail->Body    = 'Happy Valentine’s Day, my love! I love you so much. 💖';

    $mail->send();
    echo 'Message has been sent!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
