<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Err404 extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			// $this->load->model("Login_model");
			// $this->load->database();
		}

		public function index() {
            // $this->load->view('header');
            $this->output->set_status_header('404');
            $this->load->view('errors/cli/err404');
	 		// $this->load->view('footer');             
		}

	}
?>