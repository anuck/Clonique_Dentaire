<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$patient = $_POST['patient'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "anucharley@gmail.com";

$sendMail = "Name : " . $name . "\r\n
Email : " . $email . "\r\n
Phone : " . $phone . "\r\n
Patient : " . $patient . "\r\n
Subject : " . $subject . "\r\n
Message : " . $message;

$headers = "From : " . $email;

if ($email != null) {
    mail($to, $subject, $sendMail);
    http_response_code(200);
    print json_encode(['error' => 0, "msg" => "Thankyou! Your message has been sent."]);
} else {
    http_response_code(500);
    print json_encode(['error' => 1, 'msg' => 'There was a problem in your submission, please try again']);
}

?>