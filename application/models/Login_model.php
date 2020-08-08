<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_model extends CI_Model {

	 	public function __construct() {
	 		parent::__construct(); 		
	 	}

	 	public function user_login($data){

	 		$user_email = $data['user_email'];
	 		$user_pass = $data['user_pass'];

	 		$checkuserlogin = $this->db->query("SELECT * from user_master where user_email='{$user_email}' and user_pass='{$user_pass}' and user_status = 'Active'");
	 		$checkuserloginCount = $checkuserlogin->num_rows();

	 		if($checkuserloginCount > 0){

	 			$checkuserloginRow = $checkuserlogin->result_array()[0];

	 			$session_login = array('user_mob_no'=>$checkuserloginRow['user_mob_no'], 'user_id'=>$checkuserloginRow['user_id'], 'user_type'=>$checkuserloginRow['user_type'],'user_name'=>$checkuserloginRow['user_name'],
	 				'user_gender'=>$checkuserloginRow['user_gender']);
				$this->session->set_userdata($session_login);

				return "success";
	 		} else {
	 			return "wrong_credential";
	 		}
	 	}
	}
?>