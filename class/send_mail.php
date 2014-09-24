<?php
class SendMail
{
	public $sender;
	public $receiver;
	public $Subject;
	public $message;
	public $message_back;
		
	function SendMail($sender, $receiver, $subject, $message, $message_back){
	
		$this->sender = $sender;
		$this->receiver = $receiver;
		$this->subject = $subject;
		$this->message = $message;
		$this->message_back = $message_back;
	
	}
	
	function send_mail (){
		
/*		echo $this->sender . '<br>';
		echo $this->receiver . '<br>';
		echo $this->subject . '<br>';
		echo $this->message . '<br>';
		echo $this->message_back . '<br>';*/
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
		$headers_back = $headers.'From: '.$this->receiver. "\r\n";
		$headers .= 'From: '.$this->sender. "\r\n";
		//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
		//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
		
/*		echo $headers . '<br />';
		echo $headers_back . '<br />';*/
		
		
		// Mail it
		mail($this->sender, $this->subject, $this->message, $headers);
		mail($this->receiver, $this->subject, $this->message_back, $headers_back);

	}
}
?>