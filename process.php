<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "onlinetickets433@gmail.com";
    $headers = "From: $email";

    if(mail($to,$subject,$message,$headers)){
        echo "Thank you for your message.";
    }else{
        echo "Message sending failed";
    }
}

?>