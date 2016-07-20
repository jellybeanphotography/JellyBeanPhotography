<?php
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$enquiry = $_POST['enquiry'];

$to = "info@jellybeanphotography.me.uk";
$subject = "JellyBean Photography Website Enquiry";

mail ($to, $subject, $enquiry, "From: " . $name);
header("Location: /thankyou.php"); /* Redirect Browser */
exit();
