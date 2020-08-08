<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Customer_type_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$customer_type_name = ucwords($data['customer_type_name']);
		$customer_type_status = $data['customer_type_status'];
		$customer_type_date = date('Y-m-d H:i:s');
		$customer_type_user_inserted = $user_name;
		$query = "INSERT into customer_type_master (customer_type_date,customer_type_name,status,user_inserted) values ('$customer_type_date','$customer_type_name','$customer_type_status','$customer_type_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_Customer_type_record($pid,$user_name,$user_type)
 	{
 		$customer_type_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from customer_type_master where customer_type_id = '{$customer_type_id['customer_type_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from customer_type_master where customer_type_id = '{$customer_type_id['customer_type_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchcustomer_typeRow = $stmt->result_array()[0];

 		return $fetchcustomer_typeRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$customer_type_id = $data['customer_type_id'];
		$customer_type_name = ucwords($data['edit_customer_type_name']);
		$customer_type_status = $data['edit_customer_type_status'];
		$customer_type_user_updated = $user_name;

		$customer_type_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE customer_type_master set
			 	customer_type_name = '{$customer_type_name}',
			 	status = '{$customer_type_status}',
			 	user_inserted = '{$customer_type_user_updated}',
			 	customer_type_date = '{$customer_type_date}'			 	
			 	where customer_type_id = '{$customer_type_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_Customer_type_mod()
 	{ 				
 		$fetchcustomer_types = $this->db->query("SELECT * from customer_type_master ORDER BY customer_type_id DESC"); 			 		
 		return $fetchcustomer_types->result();
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