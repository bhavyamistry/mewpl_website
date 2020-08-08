<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Sub_automation extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			// $this->load->model("Login_model");
			// $this->load->database();
		}

		public function index() {
	 		$this->load->view('header');
	 		$this->load->view('sub_products/sub_automation');
	 		$this->load->view('footer');
		}

	}
?>