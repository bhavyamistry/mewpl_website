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

		public function checkEmail()
		{
			// $validate = array();
			$email = $this->input->post('email');//pass an email here to test
			// echo '<h1>email is: ' .$email. '</h1>';
			//
			$vmail = new verifyEmail();
			$vmail->setStreamTimeoutWait(20);
			// $vmail->Debug= FALSE;
			// $vmail->Debugoutput= 'html';
	
			$vmail->setEmailFrom('saturnvalves@gmail.com');//email which is used to set from headers,you can add your own/company email over here
			
			if ($vmail->check($email)) {
				// echo '<h1>email &lt;' . $email . '&gt; exist!</h1>';
				echo "true";
				$validate['v_email'] =  'true';
			}
			elseif (verifyEmail::validate($email)) {
				// echo '<h1>email &lt;' . $email . '&gt; valid, but not exist!</h1>';					
				echo "false";
				$validate['v_email'] =  'false';
			} 
			else {
				// echo '<h1>email &lt;' . $email . '&gt; not valid and not exist!</h1>';					
				echo "false";
				$validate['v_email'] =  'false';
			}
			// return json_encode($validate);
		}

		public function sendMail()
		{
			$name = $this->input->post('name');
			$bname = $this->input->post('bname');
			$num = $this->input->post('num');
			$email = $this->input->post('email');
			$message = $this->input->post('message');			

			print_r("<p>Name:".$name."</p><br>");
			print_r("<p>bname:".$bname."</p><br>");
			print_r("<p>num:".$num."</p><br>");
			print_r("<p>email:".$email."</p><br>");
			print_r("<p>message:".$message."</p><br>");
			print_r("<p>div_arr:"."</p><br>");
			
			// ini_set("SMTP","ssl:smtp.gmail.com" );
			// ini_set("smtp_port","465");
			// ini_set('sendmail_from', 'bhavya.mevada13@gmail.com');  
			$to = "bhavya.mstry@gmail.com";
			$from = $this->input->post('email');
			$name = $this->input->post('name');;
			$subject = "Contacting From Website";				
			$cmessage = "Name : ".$name." \n"."Company Name : ".$bname." \n"."Phone Number : ".$num." \n"."Message : ".$message." \n"."Date of Contacting:".date("d-m-Y");
			// $cmessage = $cmessage.'From :'.$_REQUEST['num'];
			print_r($cmessage);
			$headers = "From: $from";
			$headers = "From: " . $from . "\r\n";
			$headers .= "Reply-To: ". $from . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			// mail($to, $subject, $cmessage, $headers);
			
			// redirect(base_url().'Home');
		}
	}
?>