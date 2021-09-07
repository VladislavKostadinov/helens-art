<?php
require_once "dbconnect.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "Composer/vendor/autoload.php";

$mail = new PHPMailer;
$mail->CharSet = "utf-8";


$mail->addAddress('vladicius@gmail.com', 'Vladislav Kostadinov');
$mail->addAddress("bgoutlaw_@abv.bg", "Vladislav Kostadinov");
$mail->addAddress("elis.k@abv.bg", "Elena Beleva");

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = 'vladicius@gmail.com';
$mail->Password = '088470701hateE';
$mail->From = "bgoutlaw_@abv.bg";
$mail->FromName = "Vladislav";
$mail->isHTML(true);
$mail->setFrom('vladicius@gmail.com', $_POST['email']);
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    ?><script>alert('Съобщението е изпратено успешно');
window.location.href = "contact.php";</script> <?php
} catch (Exception $e) {

}