<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Client extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			// $this->load->model("Login_model");
			// $this->load->database();
		}

		public function index() {
			$this->load->view('header');
	 		$this->load->view('client');
	 		$this->load->view('footer');
		}

		public function Customer_Appraisal() {
			$this->load->view('header');
	 		$this->load->view('customer_appraisal');
	 		$this->load->view('footer');
		}

	}
?>