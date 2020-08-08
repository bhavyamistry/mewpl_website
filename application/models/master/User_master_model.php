<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class User_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data)
 	{	
		$user_name = $data['u_name'];
		$user_email = $data['email_addr'];
		$user_mob_no = $data['number'];
		$user_pass = $data['password'];
		$user_type = $data['user_type'];		
		$user_role = $data['user_type'];
		$user_gender = $data['gender'];
		$user_status = 'Active';
		$user_date = date('Y-m-d H:i:s');
		$query = "INSERT into user_master (user_name,user_mob_no,user_email,user_pass,user_type,user_role,user_gender,user_status,user_date) values ('$user_name','$user_mob_no','$user_email','$user_pass','$user_type','$user_role','$user_gender','$user_status','$user_date')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_user_record($uid)
 	{
 		$user_id = $uid;
 		$stmt=$this->db->query("SELECT * from user_master where user_id = '{$user_id['user_id']}'");		
 		$fetchuserRow = $stmt->result_array()[0];

 		return $fetchuserRow;
 	}

 	public function update_records($data)
 	{	
		$user_id = $data['user_id'];
		$user_name = $data['edit_name'];
		$user_email = $data['edit_email_addr'];
		$user_mob_no = $data['edit_moble_number'];
		$user_pass = $data['edit_password'];
		$user_type = $data['edit_user_type'];
		$user_gender = $data['edit_gender'];

		$user_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE user_master set
			 	user_name = '{$user_name}',
			 	user_email = '{$user_email}',
			 	user_mob_no = '{$user_mob_no}',
			 	user_pass = '{$user_pass}',
			 	user_type = '{$user_type}',
			 	user_role = '{$user_type}',			 	
			 	user_date = '{$user_date}',
			 	user_gender = '{$user_gender}'
			 	where user_id = '{$user_id}'";
		$this->db->query($query1);
		return 1;

 	}

 	public function get_user_mod($uid,$utype)
 	{
 		$user_id = $uid;
 		$user_type = $utype; 				
 		if($user_type=="Admin"|| $user_type=="admin")
 		{
 			$fetchuser = $this->db->query("SELECT * from user_master ORDER BY user_id DESC"); 			
 		}
 		else
 		{
 			$fetchuser = $this->db->query("SELECT * from user_master where user_id = '{$user_id['user_id']}'");
 		}
 		return $fetchuser->result();
 	}


 	


}
 	// public function save_records($name)
 	// {
 	// 	//$rt = 
 	// 	$$data = $arrayName = array('name' => $name);
 	// 	//$sql = "INSERT INTO testing values '$name'";
 	// 	$this->db->insert('testing',$data);
 	// }
?>