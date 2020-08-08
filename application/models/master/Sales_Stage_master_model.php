<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Sales_Stage_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$sales_stage_name = ucwords($data['sales_stage_name']);
		$sales_stage_status = $data['sales_stage_status'];
		$sales_stage_date = date('Y-m-d H:i:s');
		$sales_stage_user_inserted = $user_name;
		$query = "INSERT into sales_stage_master (sales_stage_date,sales_stage_name,status,user_inserted) values ('$sales_stage_date','$sales_stage_name','$sales_stage_status','$sales_stage_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_Sales_Stage_record($pid,$user_name,$user_type)
 	{
 		$sales_stage_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from sales_stage_master where sales_stage_id = '{$sales_stage_id['sales_stage_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from sales_stage_master where sales_stage_id = '{$sales_stage_id['sales_stage_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchsales_stageRow = $stmt->result_array()[0];

 		return $fetchsales_stageRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$sales_stage_id = $data['sales_stage_id'];
		$sales_stage_name = ucwords($data['edit_sales_stage_name']);
		$sales_stage_status = $data['edit_sales_stage_status'];
		$sales_stage_user_updated = $user_name;

		$sales_stage_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE sales_stage_master set
			 	sales_stage_name = '{$sales_stage_name}',
			 	status = '{$sales_stage_status}',
			 	user_inserted = '{$sales_stage_user_updated}',
			 	sales_stage_date = '{$sales_stage_date}'			 	
			 	where sales_stage_id = '{$sales_stage_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_Sales_Stage_mod()
 	{ 				
 		$fetchsales_stages = $this->db->query("SELECT * from sales_stage_master ORDER BY sales_stage_id DESC"); 			 		
 		return $fetchsales_stages->result();
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