<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// Function to send request to Follow Up Boss API
function sendToFollowUpBoss($data)
{
    $url = 'https://api.followupboss.com/v1/events';

    // Prepare the Follow Up Boss payload
    $payload = array(
        'person' => array(
            'contacted' => false,
            'firstName' => explode(' ', $data['name'])[0],
            'lastName' => implode(' ', array_slice(explode(' ', $data['name']), 1)),
            'emails' => array(
                array('value' => $data['email'])
            ),
            'phones' => array(
                array('value' => $data['phone'])
            ),
            'tags' => array('Mira Towns', 'Barrie')
        ),
        'source' => 'miratowns.ca',
        'system' => 'Custom Website',
        'type' => 'Inquiry',
        'message' => $data['message']
    );

    // Initialize cURL
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Basic ZmthXzAwTlVCbDF2bGZzRXhyZlZXMmNCYVlqMXJXZzJ6NUNoN2c6'
    ));

    // Execute cURL request
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close cURL connection
    curl_close($ch);

    return $httpCode >= 200 && $httpCode < 300;
}

// Function to send request to Homebaba API
function sendToHomebabaAPI($data)
{
    $baseUrl = 'https://admin.homebaba.ca';
    $url = $baseUrl . '/api/contact-form-submit/';

    // Set the full URL to a static value
    $fullUrl = 'https://miratowns.ca';

    // Prepare form data
    $formData = array(
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'message' => $data['message'],
        'realtor' => $data['realtor'],
        'full_url' => $fullUrl
    );

    // Initialize cURL
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $formData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Accept: */*'
    ));

    // Execute cURL request
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close cURL connection
    curl_close($ch);

    return $httpCode >= 200 && $httpCode < 300;
}

// Initialize PHPMailer
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'mail.miratowns.ca';
$mail->SMTPAuth = true;
$mail->Username = 'info@miratowns.ca';
$mail->Password = 'mail@miratowns';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('info@miratowns.ca', $_POST['name']);
$mail->addAddress('contact@homebaba.ca');
$mail->addReplyTo($_POST['email']);
$mail->isHTML(true);

$mail->Subject = "Mira Towns Barrie - Landing Page Inquiry";

// Prepare email message
$message = "
    Name: " . strip_tags($_POST['name']) . "<br/>
    Phone: " . strip_tags($_POST['phone']) . "<br/>
    Email: " . strip_tags($_POST['email']) . "<br/>
    Realtor or working with one?: " . strip_tags($_POST['realtor']) . "<br/>
    Message: " . strip_tags($_POST['message']) . "<br/>
    Source: miratowns.ca
";

$mail->Body = $message;
$mail->AltBody = $_POST['message'] . $_POST['email'] . $_POST['name'] . $_POST['phone'];

// Attempt to send email and Follow Up Boss notification
try {
    $emailSent = $mail->send();

    // Prepare data for Follow Up Boss and Homebaba API
    $fubData = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'message' => $_POST['message'],
        'realtor' => $_POST['realtor']
    );

    $fubSent = sendToFollowUpBoss($fubData);
    $homebabaSent = sendToHomebabaAPI($fubData);

    if ($emailSent && $fubSent && $homebabaSent) {
        $_SESSION["success"] = "Application submitted successfully.";
        header("Location: ./thankyou/");
        exit();
    } else {
        $_SESSION["error"] = "Application partially submitted. Please try again.";
        header("Location: index.php");
        exit();
    }

} catch (Exception $e) {
    $_SESSION["error"] = "Application not submitted: " . $mail->ErrorInfo;
    header("Location: index.php");
    exit();
}
?>