<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Inquiry_type_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$inquiry_type_name = ucwords($data['inquiry_type_name']);
		$inquiry_type_status = $data['inquiry_type_status'];
		$inquiry_type_date = date('Y-m-d H:i:s');
		$inquiry_type_user_inserted = $user_name;
		$query = "INSERT into inquiry_type_master (inquiry_type_date,inquiry_type_name,status,user_inserted) values ('$inquiry_type_date','$inquiry_type_name','$inquiry_type_status','$inquiry_type_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_Inquiry_type_record($pid,$user_name,$user_type)
 	{
 		$inquiry_type_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from inquiry_type_master where inquiry_type_id = '{$inquiry_type_id['inquiry_type_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from inquiry_type_master where inquiry_type_id = '{$inquiry_type_id['inquiry_type_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchinquiry_typeRow = $stmt->result_array()[0];

 		return $fetchinquiry_typeRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$inquiry_type_id = $data['inquiry_type_id'];
		$inquiry_type_name = ucwords($data['edit_inquiry_type_name']);
		$inquiry_type_status = $data['edit_inquiry_type_status'];
		$inquiry_type_user_updated = $user_name;

		$inquiry_type_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE inquiry_type_master set
			 	inquiry_type_name = '{$inquiry_type_name}',
			 	status = '{$inquiry_type_status}',
			 	user_inserted = '{$inquiry_type_user_updated}',
			 	inquiry_type_date = '{$inquiry_type_date}'			 	
			 	where inquiry_type_id = '{$inquiry_type_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_Inquiry_type_mod()
 	{ 				
 		$fetchinquiry_types = $this->db->query("SELECT * from inquiry_type_master ORDER BY inquiry_type_id DESC"); 			 		
 		return $fetchinquiry_types->result();
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