<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class About extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			// $this->load->model("Login_model");
			// $this->load->database();
		}

		public function index() {
	 		$this->load->view('header');
	 		$this->load->view('about');
	 		$this->load->view('footer');
		}

		public function Quality_Assurance() {
			$this->load->view('header');
			$this->load->view('quality_assurance');
			$this->load->view('footer');
	   }

	   public function Certificate() {
		$this->load->view('header');
		$this->load->view('certificate');
		$this->load->view('footer');
   		}
	}
?>