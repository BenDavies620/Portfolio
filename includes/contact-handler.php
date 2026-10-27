<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/mail.php';

$errors = [];
$firstName = '';
$lastName = '';
$email = '';
$telephone = '';
$subject = '';
$message = '';

$successMessage = $_SESSION['success-message'] ?? '';
unset($_SESSION['success-message']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstNameInput = $_POST['firstName'] ?? '';
    $lastNameInput = $_POST['lastName'] ?? '';
    $emailInput = $_POST['email'] ?? '';
    $telephoneInput = $_POST['telephone'] ?? '';
    $subjectInput = $_POST['subject'] ?? '';
    $messageInput = $_POST['message'] ?? '';


    if (is_string($firstNameInput)) {
        $firstName = trim($firstNameInput);
    } else {
        $errors['firstName'] = 'Please enter a valid first name.';
    }
    if (is_string($lastNameInput)) {
        $lastName = trim($lastNameInput);
    } else {
        $errors['lastName'] = 'Please enter a valid last name.';
    }
    if (is_string($emailInput)) {
        $email = trim($emailInput);
    } else {
        $errors['email'] = 'Please enter a valid email address.';
    }
    if (is_string($telephoneInput)) {
        $telephone = trim($telephoneInput);
    } else {
        $errors['telephone'] = 'Please enter a valid telephone number.';
    }
    if (is_string($subjectInput)) {
        $subject = trim($subjectInput);
    } else {
        $errors['subject'] = 'Please enter a valid subject.';
    }
    if (is_string($messageInput)) {
        $message = trim($messageInput);
    } else {
        $errors['message'] = 'Please enter a valid message.';
    }

    $fieldValues = [
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'message' => $message,
    ];

    $requiredFields = [
        'firstName' => 'Please enter your first name.',
        'lastName' => 'Please enter you last name.',
        'email' => 'Please enter your email address.',
        'message' => 'Please enter your message.'
    ];
    
    foreach ($requiredFields as $field => $errorMessage) {
        if ($fieldValues[$field] === '' && !isset($errors[$field])) {
            $errors[$field] = $errorMessage;
        }
    }

    if ($email !== '') {
        $result = filter_var($email, FILTER_VALIDATE_EMAIL);

        if ($result === false) {
            $errors['email'] = 'Please enter a valid email address.';
        }
    }

    if (!preg_match("/^[\p{L}\p{M}]+(?:[ '\x{2019}-][\p{L}\p{M}]+)*$/u", $firstName)) {
        $errors['firstName'] = 'Please enter a valid first name.';
    }
    if (mb_strlen($firstName) > 100) {
        $errors['firstName'] = 'Please enter a first name no longer than 100 characters.';
    }
    if (!preg_match("/^[\p{L}\p{M}]+(?:[ '\x{2019}-][\p{L}\p{M}]+)*$/u", $lastName)) {
        $errors['lastName'] = 'Please enter a valid last name.';
    }
    if (mb_strlen($lastName) > 100) {
        $errors['lastName'] = 'Please enter a last name no longer than 100 characters.';
    }
    if (mb_strlen($email) > 254) {
        $errors['email'] = 'Please enter an email address no longer than 254 characters.';
    }
    if (mb_strlen($telephone) > 255) {
        $errors['telephone'] = 'Please enter a telephone number no longer than 30 characters.';
    }
    if (mb_strlen($subject) > 255) {
        $errors['subject'] = 'Please enter a subject message no longer than 255 characters.';
    }
    if (mb_strlen($message) > 5000) {
        $errors['message'] = 'Please enter a message no longer than 5000 characters.';
    }

    if ($errors === []) {
        $sql = 'INSERT INTO enquiries(firstName, lastName, email, telephone, subject, message)
        VALUES (:firstName, :lastName, :email, :telephone, :subject, :message)';

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'telephone' => $telephone,
            'subject' => $subject,
            'message'=> $message,
        ]);

        try {
            $mail->addAddress('bendavies2503@hotmail.com');
            $mail->setFrom('portfolio@example.com', 'Portfolio Contact Form');
            $mail->addReplyTo($email);
            $mail->Subject = 'New Portfolio Enquiry';
            $mail->CharSet = 'UTF-8';

            $mail->Body =
                "A new enquiry has been submitted through your portfolio.\n\n" .
                "Name: $firstName $lastName\n" .
                "Email: $email\n" .
                "Telephone: $telephone\n" .
                "Subject: " . ($subject !== '' ? $subject : '(No subject provided)') . "\n\n" .
                "Message:\n$message";

            $mail->send();

        } catch (\Throwable $e) {
            error_log('Portfolio enquiry email failed: ' . $e->getMessage());
        }

        $_SESSION['success-message'] = 'Thanks for getting in touch! Your enquiry has been received.';
        
        header('Location: index.php', true, 303);
        exit;
    }
}

?>