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
		public function sendSingleEnquiry()
		{
			$name = $this->input->post('name');
			$bname = $this->input->post('bname');
			$num = $this->input->post('num');
			$email = $this->input->post('email');
			$require = $this->input->post('message');
			$product = $this->input->post('product');
			$sub_pro = $this->input->post('sub_pro');
			print_r("<p>Name:".$name."</p><br>");
			print_r("<p>bname:".$bname."</p><br>");
			print_r("<p>num:".$num."</p><br>");
			print_r("<p>email:".$email."</p><br>");
			print_r("<p>message:".$require."</p><br>");
			print_r("<p>product:".$product."</p><br>");
			print_r("<p>subproduct:".$sub_pro."</p><br>");
			
		}
		public function sendEnquiry()
		{
			$name = $this->input->post('name');
			$bname = $this->input->post('bname');
			$num = $this->input->post('num');
			$email = $this->input->post('email');
			$require = $this->input->post('message');
			$div_nos = $this->input->post('div_nos');
			$div_arr = explode (",", $div_nos);
			$products = array();
			$pro_string = "";

			print_r("<p>Name:".$name."</p><br>");
			print_r("<p>bname:".$bname."</p><br>");
			print_r("<p>num:".$num."</p><br>");
			print_r("<p>email:".$email."</p><br>");
			print_r("<p>message:".$require."</p><br>");
			print_r("<p>div_arr:"."</p><br>");
			$size = count($div_arr);
			for($i=0;$i<$size;$i++)
			{
				if($div_arr[$i]!="")
				{
					print_r(gettype(($div_arr[$i])));
					$row = array();
					$row['product'] = 	$this->input->post('product'.$div_arr[$i]);
					$row['sub_pro'] = 	$this->input->post('sub_pro'.$div_arr[$i]);
					$pro_string = $pro_string."Product : ".$row['product']." Sub-Product :".$row['sub_pro']." \n";
					array_push($products,$row);
				}
			}
			print_r($products);

			// ini_set("SMTP","ssl:smtp.gmail.com" );
			// ini_set("smtp_port","465");
			// ini_set('sendmail_from', 'bhavya.mevada13@gmail.com');  
			$to = "bhavya.mevada13@gmail.com";
			$from = "saturnva@saturnvalves.com";
			$name = $this->input->post('name');;
			$subject = "Enquiry From Website";				
			$cmessage = "Name : ".$name."<br>Email : ".$email."<br>Company Name : ".$bname."<br>Phone Number : ".$num."<br>".$pro_string."<br>Requirements : ".$require."<br>Date of Enquiry Sent:".date("d-m-Y");
			// $cmessage = $cmessage.'From :'.$_REQUEST['num'];
			// print_r($cmessage);
			$headers = "From: " . $from . "<br>";
			$headers .= "Reply-To: ". $from . "<br>";
			$headers .= "MIME-Version: 1.0<br>";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1<br>";
			// print_r($headers);
			// mail($to, $subject, $cmessage, $headers);
			redirect(base_url().'Thankyou?send=1');
		}

	}
?>