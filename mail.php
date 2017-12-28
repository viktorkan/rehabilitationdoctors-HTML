<?php



$recepient = "REHABILITATIONDOCTORS@GMAIL.COM";

$sitename = "Klinika";



$name = trim($_POST["name"]);

$subject = trim($_POST["subject"]);

$phone = trim($_POST["phone"]);

$email = trim($_POST["email"]);

$message = trim($_POST["message"]);



$pagetitle = "New message \"$sitename\"";

$message = "Name: $name \nPhone: $phone \nSubject: $subject \nEmail: $email \nMessage: $message";

mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");