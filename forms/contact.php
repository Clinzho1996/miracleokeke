<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "mokeke185@gmail.com"; 
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Subject: $subject\n\n";
    $mailBody .= "Message:\n$message";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Form sent successfully"; 
    } else {
        echo "error"; 
    }
} else {
    header("HTTP/1.1 400 Bad Request");
    echo "This page is not meant to be accessed directly.";
}
?>
