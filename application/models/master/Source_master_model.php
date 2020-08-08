<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Source_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$source_name = ucwords($data['source_name']);
		$source_status = $data['source_status'];
		$source_date = date('Y-m-d H:i:s');
		$source_user_inserted = $user_name;
		$query = "INSERT into source_master (source_date,source_name,status,user_inserted) values ('$source_date','$source_name','$source_status','$source_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_Source_record($pid,$user_name,$user_type)
 	{
 		$source_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from source_master where source_id = '{$source_id['source_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from source_master where source_id = '{$source_id['source_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchsourceRow = $stmt->result_array()[0];

 		return $fetchsourceRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$source_id = $data['source_id'];
		$source_name = ucwords($data['edit_source_name']);
		$source_status = $data['edit_source_status'];
		$source_user_updated = $user_name;

		$source_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE source_master set
			 	source_name = '{$source_name}',
			 	status = '{$source_status}',
			 	user_inserted = '{$source_user_updated}',
			 	source_date = '{$source_date}'			 	
			 	where source_id = '{$source_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_Source_mod()
 	{ 				
 		$fetchsources = $this->db->query("SELECT * from source_master ORDER BY source_id DESC"); 			 		
 		return $fetchsources->result();
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