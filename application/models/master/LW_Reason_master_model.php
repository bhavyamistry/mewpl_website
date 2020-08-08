<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class LW_Reason_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$lw_reason_name = ucwords($data['lw_reason_name']);
		$lw_reason_status = $data['lw_reason_status'];
		$lw_reason_date = date('Y-m-d H:i:s');
		$lw_reason_user_inserted = $user_name;
		$query = "INSERT into lw_reason_master (lw_reason_date,lw_reason_name,status,user_inserted) values ('$lw_reason_date','$lw_reason_name','$lw_reason_status','$lw_reason_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_LW_Reason_record($pid,$user_name,$user_type)
 	{
 		$lw_reason_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from lw_reason_master where lw_reason_id = '{$lw_reason_id['lw_reason_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from lw_reason_master where lw_reason_id = '{$lw_reason_id['lw_reason_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchlw_reasonRow = $stmt->result_array()[0];

 		return $fetchlw_reasonRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$lw_reason_id = $data['lw_reason_id'];
		$lw_reason_name = ucwords($data['edit_lw_reason_name']);
		$lw_reason_status = $data['edit_lw_reason_status'];
		$lw_reason_user_updated = $user_name;

		$lw_reason_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE lw_reason_master set
			 	lw_reason_name = '{$lw_reason_name}',
			 	status = '{$lw_reason_status}',
			 	user_inserted = '{$lw_reason_user_updated}',
			 	lw_reason_date = '{$lw_reason_date}'			 	
			 	where lw_reason_id = '{$lw_reason_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_LW_Reason_mod()
 	{ 				
 		$fetchlw_reasons = $this->db->query("SELECT * from lw_reason_master ORDER BY lw_reason_id DESC"); 			 		
 		return $fetchlw_reasons->result();
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