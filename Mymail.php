<?php
require 'phpmailer/PHPMailerAutoload.php';
class MyMail extends PHPMailer
{
    private $_host = "in-v3.mailjet.com";
    private $_user = "3f387a77bc1b364b8eda20dc02ef6544";
    private $_password = "92e0ded368c21c86d4ad7afd1483bbb1";

    public function __construct($exceptions=true)
    {
        $this->Host = $this->_host;
        $this->Username = $this->_user;
        $this->Password = $this->_password;
        $this->Port = 25;
        $this->SMTPAuth = true;
        $this->SMTPSecure = 'tls';
        $this->isSMTP();
        parent::__construct($exceptions);
   }

   public function sendMail($from, $to, $subject, $body)
   {
      $this->setFrom($from);
      $this->addAddress($to);
      $this->Subject = $subject;
      $this->Body = $body;
		if($this->send()){
			echo 'Success. The mail has been sent to '.$to;
		}else{
			echo 'Failed. The mail has not been sent to '.$to;
		}
  }
}
$m = new MyMail();
$result = $m->sendMail('anishpraba@hotmail.com', 'kkanchi@gmail.com', 'Test from script', 'test message from script');