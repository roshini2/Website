<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $country = htmlspecialchars(strip_tags(trim($_POST['country'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // Set the recipient email address
    $to = 'roshinishukla822@gmail.com'; // Change this to your email address
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nCountry: $country\nMessage:\n$message";
    $headers = "From: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
} else {
    echo json_encode(["success" => false]);
}

