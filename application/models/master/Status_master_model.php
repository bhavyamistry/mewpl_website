<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Status_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$status_name = ucwords($data['status_name']);
		$status_of_status = $data['status_of_status'];
		$status_date = date('Y-m-d H:i:s');
		$status_user_inserted = $user_name;
		$query = "INSERT into status_master (status_date,status_name,status_of_status,user_inserted) values ('$status_date','$status_name','$status_of_status','$status_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_Status_record($pid,$user_name,$user_type)
 	{
 		$status_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from status_master where status_id = '{$status_id['status_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from status_master where status_id = '{$status_id['status_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchstatusRow = $stmt->result_array()[0];

 		return $fetchstatusRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$status_id = $data['status_id'];
		$status_name = ucwords($data['edit_status_name']);
		$status_of_status = $data['edit_status_of_status'];
		$status_user_updated = $user_name;

		$status_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE status_master set
			 	status_name = '{$status_name}',
			 	status_of_status = '{$status_of_status}',
			 	user_inserted = '{$status_user_updated}',
			 	status_date = '{$status_date}'			 	
			 	where status_id = '{$status_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_status_mod()
 	{ 				
 		$fetchstatuss = $this->db->query("SELECT * from status_master ORDER BY status_id DESC"); 			 		
 		return $fetchstatuss->result();
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