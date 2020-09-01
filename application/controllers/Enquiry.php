<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	include_once 'class.verifyEmail.php';

	class Enquiry extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			// $this->load->model("Login_model");
			// $this->load->database();
		}

		public function index() {
            $this->load->view('header');
            $this->load->view('enquiry');
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

	}
?>