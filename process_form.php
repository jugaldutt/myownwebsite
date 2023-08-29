<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $Mob_number = $_POST["Mob_number"];
    $message = $_POST["message"];
    
    $to = "jugal2019it027abesit@gmail.com";  // Replace with your email address
    $subject = $_POST["Email_subject"];
    $headers = "From: $email\r\n";
    
    mail($to, $subject, $message, $headers);
    
    echo "Thank you for your submission!";
}
?>
