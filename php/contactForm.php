<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$patient = $_POST['patient'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "kainasklaska@gmail.com";

$sendMail = "Name : " . $name . "\r\n
Email : " . $email . "\r\n
Phone : " . $phone . "\r\n
Patient : " . $patient . "\r\n
Subject : " . $subject . "\r\n
Message : " . $message;

$headers = "From : " . $email;

if ($email != null) {
    mail($to, $subject, $headers, $sendMail);
    http_response_code(200);
    print json_encode(['error' => 0, "msg" => "Thankyou! Your message has been sent."]);
} else {
    http_response_code(500);
    print json_encode(['error' => 1, 'msg' => 'There was a problem in your submission, please try again']);
}

?>









/*//process request post

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//get data

$name = test_input($_POST['name']);
$email = test_input($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone = test_input($_POST['phone']);
$patient = test_input($_POST['patient']);
$subject = test_input($_POST['subject']);
$message = test_input($_POST['message']);

$to = "kainasklaska@gmail.com";

$sendMail = "Name : " . $name . "\r\n Email : " . $email . "\r\n Phone : " . $phone .
"\r\n Patient : " . $patient . "\r\n Subject : " . $subject . "\r\n Message : " . $message;

$headers = "From : noreplay.clinique.angus@outlook.com";

if ($email != null) {
mail($to, $subject, $sendMail, $headers);
http_response_code(200);
print json_encode(['error' => 0, "msg" => "Thankyou! Your message has been sent."]);
} else {
http_response_code(500);
print json_encode(['error' => 1, 'msg' => 'There was a problem in your submission, please try again']);
}
} else {
http_response_code(403);
print json_encode(['error' => 1, 'msg' => 'There was a problem in your submission, please try again']);
}
//mail("kainasklaska@gmail.com", "My subject", "hello");



//validate inputs

function test_input($data)
{
$data = trim($data);
$data = filter_var($data, FILTER_SANITIZE_STRING);
$data = str_replace(array("\r", "\n"), array("", ""), $data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
*/