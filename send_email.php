<?php
$to = 'aniketkumarsaha5@gmail.com';
$subject = 'Mail from PHP';
$message = "Hi,\r\nThis mail has been sent using PHP!";
$success = mail($to, $subject, $message);
if ($success) {
//PHP Programming Cookbook 30 / 63
$response = 'Message has been sent successfully';
} else {
$response = 'The message could not be sent.';
}
echo $response;
?>