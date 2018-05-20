<?php
require_once "PHPMailer/PHPMailerAutoload.php";
$mail = new PHPMailer;
//Enable SMTP debugging.
//$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "in-v3.mailjet.com";
//Set this to true if SMTP host requires authentication
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "3f387a77bc1b364b8eda20dc02ef6544";
$mail->Password = "92e0ded368c21c86d4ad7afd1483bbb1";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
//$mail->Port = 587;
$mail->Port = 25;
$mail->From = "anishpraba@hotmail.com";
$mail->FromName = "Anusuya";
$mail->addAddress("anishpraba@hotmail.com", "Anusuya");
$mail->isHTML(true);
$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";
if($mail->send()){
    echo "Message has been sent successfully";
}
?>