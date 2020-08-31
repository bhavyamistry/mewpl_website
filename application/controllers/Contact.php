<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	include_once 'class.verifyEmail.php';

	class Contact extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			// $this->load->model("Login_model");
			// $this->load->database();
		}

		public function index() {
	 		$this->load->view('header');
	 		$this->load->view('contact');
	 		$this->load->view('footer');
		}

		public function verify()
		{
			
		}

		public function sendMail()
		{
			$validate = array();
			if(isset($_POST['button_pressed']))
			{
				$email = $_REQUEST['email'];//pass an email here to test
				//
				$vmail = new verifyEmail();
				$vmail->setStreamTimeoutWait(20);
				// $vmail->Debug= FALSE;
				// $vmail->Debugoutput= 'html';
		
				$vmail->setEmailFrom('saturnvalves@gmail.com');//email which is used to set from headers,you can add your own/company email over here
				
				if ($vmail->check($email)) {
					echo '<h1>email &lt;' . $email . '&gt; exist!</h1>';
					$validate['v_email'] =  'true';
				}
				elseif (verifyEmail::validate($email)) {
					echo '<h1>email &lt;' . $email . '&gt; valid, but not exist!</h1>';					
					$validate['v_email'] =  'false';
				} 
				else {
					echo '<h1>email &lt;' . $email . '&gt; not valid and not exist!</h1>';					
					$validate['v_email'] =  'false';
				}

				if($validate['v_email'] ==  'true')
				{
					ini_set("SMTP","ssl:smtp.gmail.com" );
					ini_set("smtp_port","465");
					ini_set('sendmail_from', 'bhavya.mevada13@gmail.com');  
					$to = "bhavya.mstry@gmail.com";
					$from = $_REQUEST['email'];
					$name = $_REQUEST['name'];
					$subject = $_REQUEST['subject'];				
					$cmessage = $_REQUEST['message'];
					$cmessage = $cmessage.'Company Name :'.$_REQUEST['bname'];
					$cmessage = $cmessage.'From :'.$_REQUEST['num'];
					$headers = "From: $from";
					$headers = "From: " . $from . "\r\n";
					$headers .= "Reply-To: ". $from . "\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					mail($to, $subject, $cmessage, $headers);
				}
			}
			return json_encode($validate);
 
			//
			
			// if(isset($_POST['button_pressed']))
			// {
			// 	$to = "bhavya.mstry@gmail.com";
			// 	$from = $_REQUEST['email'];
			// 	$name = $_REQUEST['name'];
			// 	$subject = $_REQUEST['subject'];				
			// 	$cmessage = $_REQUEST['message'];
			// 	$headers = "From: $from";
			// 	$headers = "From: " . $from . "\r\n";
			// 	$headers .= "Reply-To: ". $from . "\r\n";
			// 	$headers .= "MIME-Version: 1.0\r\n";
			// 	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			// 	mail($to, $subject, $cmessage, $headers);
			// }
		}

	}
?>