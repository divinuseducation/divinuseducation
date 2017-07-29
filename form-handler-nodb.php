<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below

$myemail = "info@divinuseducation.com"; 
// Replace with your email, please


// Receive and sanitize input

$name = $_PUT['name'];

$email = $_PUT['email'];

$phone = $_PUT['phone'];

$message = $_PUT['message'];


// set up email

$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);

mail($email,"Thank you for your form submission",$msg);

echo 'Thank you for your submission.  Please <a href="index.html">Click here to return to our homepage.</a>';

?>
