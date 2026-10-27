<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . '/../vendor/autoload.php';

$mail = new PHPMailer(true);

$mail->isSMTP();

$mail->Host = $_ENV['SMTP_HOST'];
$mail->SMTPAuth = true;
$mail->Username = $_ENV['SMTP_USERNAME'];
$mail->Password = $_ENV['SMTP_PASSWORD'];
$mail->Port = (int) $_ENV['SMTP_PORT'];
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
