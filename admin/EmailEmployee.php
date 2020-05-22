<?php
/*
$to = "rohit.abburi@gmail.com"; // this is your Email address
$from = "mikeross1909@gmail.com"; // this is the sender's Email address
$first_name = "heya";
$last_name = "working";
$subject = "Form submission";
$subject2 = "Copy of your form submission";
$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" ;
//$message2 = "Here is a copy of your message " . $first_name . "\n\n" ;

$headers = "From:" . $from;
$headers2 = "From:" . $to;
mail($to,$subject,$message,$headers);
//mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

*/

$to      = 'mikeross1909@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: rohit.abburi@gmail.com' . "\r\n" .
    'Reply-To: rohit.abburi@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>