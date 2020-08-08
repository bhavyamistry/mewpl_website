<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Industry_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$Industry_name = ucwords($data['indstry_name']);
		$Industry_status = $data['indstry_status'];
		$Industry_date = date('Y-m-d H:i:s');
		$Industry_user_inserted = $user_name;
		$query = "INSERT into Industry_master (industry_date,industry_name,status,user_inserted) values ('$Industry_date','$Industry_name','$Industry_status','$Industry_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_Industry_record($pid,$user_name,$user_type)
 	{
 		$Industry_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from Industry_master where industry_id = '{$Industry_id['Industry_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from Industry_master where industry_id = '{$Industry_id['Industry_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchIndustryRow = $stmt->result_array()[0];

 		return $fetchIndustryRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$industry_id = $data['indstry_id'];
		$Industry_name = ucwords($data['edit_indstry_name']);
		$Industry_status = $data['edit_indstry_status'];
		$Industry_user_updated = $user_name;

		$Industry_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE Industry_master set
			 	industry_name = '{$Industry_name}',
			 	status = '{$Industry_status}',
			 	user_inserted = '{$Industry_user_updated}',
			 	industry_date = '{$Industry_date}'			 	
			 	where industry_id = '{$industry_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_Industry_mod()
 	{ 				
 		$fetchIndustrys = $this->db->query("SELECT * from Industry_master ORDER BY industry_id DESC"); 			 		
 		return $fetchIndustrys->result();
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