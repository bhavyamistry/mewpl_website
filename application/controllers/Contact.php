<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

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

		public function sendMail()
		{
			if(isset($_POST['button_pressed']))
			{
				$to = "bhavya.mstry@gmail.com";
				$from = $_REQUEST['email'];
				$name = $_REQUEST['name'];
				$subject = $_REQUEST['subject'];				
				$cmessage = $_REQUEST['message'];
				$headers = "From: $from";
				$headers = "From: " . $from . "\r\n";
				$headers .= "Reply-To: ". $from . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				mail($to, $subject, $cmessage, $headers);
			}
		}

	}
?>