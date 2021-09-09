<?php
$to = 'nick.napat123@gmail.com';
$subject = "Email Subject";

$message = 'Dear '.'nick'.',<br>';
$message .= "We welcome you to be part of family<br><br>";
$message .= "Regards,<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: nick.napat123@gmail.com' . "\r\n";
$headers .= 'Cc: nick.napat123@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>