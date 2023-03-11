<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $message = $_POST['message'];


    $email_from = 'admin@hjllcsc.com';
    $email_subject = "New website query";
	$email_body = "Name: $name.\n".
                    "Email: $visitor_email.\n".
                    "Phone: $visitor_phone.\n".
                    "Message:\n $message".

    $to = "glynn.colm@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
?>