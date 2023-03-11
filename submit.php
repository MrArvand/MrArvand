<?php
if(!isset($_POST['submit']))
{
    //This page should not be accessed directly. Need to submit the form.
    echo "error; You need to submit the form";
}
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Validate first
if(empty($name) || empty($email) || empty($subject) || empty($message))
{
    echo "You cannot send form with empty elements. Please fill the form";
    exit;
}

$email_form = 'mr.arvand1@gmail.com';
$email_subject = 'New Form submission';
$email_body = "Hey Arvand!\n
You have recieved a new message from the user $name\n
and subject is: $subject.\n
sender email is: $email \n
here is the message:\n
$message";
$to = "mr.arvand1@gmail.com";
$headers = "From $email \r\n";


//send the email
mail($to,$email_subject,$email_body,$headers);

//Done. redirect to thank you page.
header('Location: index.html#home');
die();