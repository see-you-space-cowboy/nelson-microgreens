<?php
// Get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone'];
 
$to = "nelsonmicrogreens@gmail.com";
$subject = "New contact us message";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n   Phone = ". $phone . "\r\n  Message =" . $message;
 
$headers = "From: noreply@nelsonmicrogreens.com" . "\r\n" .
            "CC: lsfl80@gmail.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:index.html");
?>