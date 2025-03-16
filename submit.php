<?php
$botToken = '6877329238:AAE9bR6nV8C0W3H5BfgGjwsgN0JRlwzn4o8';
$adminChatId = '5439813552';

$firstName = htmlspecialchars($_POST['firstName']);
$lastName = htmlspecialchars($_POST['lastName']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$messageText = htmlspecialchars($_POST['message']);

$message = "New Contact Form Submission:\n\n";
$message .= "First Name: $firstName\n";
$message .= "Last Name: $lastName\n";
$message .= "Email: $email\n";
$message .= "Phone: $phone\n";
$message .= "Message:\n$messageText";

$apiUrl = "https://api.telegram.org/bot$botToken/sendMessage";

$response = file_get_contents($apiUrl . "?chat_id=$adminChatId&text=" . urlencode($message));

if ($response) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message. Please try again.";
}
?>
