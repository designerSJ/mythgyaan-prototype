<?php
    $name = $_POST['name'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    $formcontent = "From: $name \n Message = $message";
    $recipient = "shubhamhell90@gmail.com";
    $subject = "Mythgyaan Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
?>