<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Priority_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$priority_name = ucwords($data['priority_name']);
		$priority_status = $data['priority_status'];
		$priority_date = date('Y-m-d H:i:s');
		$priority_user_inserted = $user_name;
		$query = "INSERT into priority_master (priority_date,priority_name,status,user_inserted) values ('$priority_date','$priority_name','$priority_status','$priority_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_Priority_record($pid,$user_name,$user_type)
 	{
 		$priority_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from priority_master where priority_id = '{$priority_id['priority_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from priority_master where priority_id = '{$priority_id['priority_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchpriorityRow = $stmt->result_array()[0];

 		return $fetchpriorityRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$priority_id = $data['priority_id'];
		$priority_name = ucwords($data['edit_priority_name']);
		$priority_status = $data['edit_priority_status'];
		$priority_user_updated = $user_name;

		$priority_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE priority_master set
			 	priority_name = '{$priority_name}',
			 	status = '{$priority_status}',
			 	user_inserted = '{$priority_user_updated}',
			 	priority_date = '{$priority_date}'			 	
			 	where priority_id = '{$priority_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_Priority_mod()
 	{ 				
 		$fetchprioritys = $this->db->query("SELECT * from priority_master ORDER BY priority_id DESC"); 			 		
 		return $fetchprioritys->result();
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