<?php 

$name = $_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$patient=$_POST['patient'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to = "kainasklaska@gmail.com";

$sendMail = "Name : ". $name . "\r\n Email : ". $email . "\r\n Phone : " . $phone .
"\r\n Patient : ". $patient ."\r\n Subject : ". $subject ."\r\n Message : ". $message ;

$headers = "From : noreplay.clinique.angus@outlook.com";

if($email!=null) {
    mail($to,$subject,$sendMail,$headers);
}
?>