<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $subject = trim(strip_tags($_POST['subject']));
       $message = htmlentities($_POST['message']);

       // set here
       // $subject = "Contact form submitted!";
       $to = 'luchonaveiro@gmail.com';

       $body = $message;

       $headers = "From: $email\r\n";
       $headers = "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       // header('Location: thanks.html');
?>
