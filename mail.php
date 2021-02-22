<?php 
    ini_set("SMTP", "localhost");
    ini_set("smtp_port","25");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $formcontent = "From: $name \n $message";
    $subject = "Contact form";
    $mailheader = "From: $email \r\n";
    $recipient = "igorlakic2@gmail.com";

    mail($recipient, $subject, $message, $mailheader) or die("Error");
    header("Location: index.php");
    
?>