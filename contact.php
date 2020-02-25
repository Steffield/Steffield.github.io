<?php
// if($_POST["submit"]) {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $formcontent="From: $name \n Message: $message";
    $recipient="steffilebby@gmail.com";
    $subject =$_POST["subject"];
    $mailheader="From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";

?>