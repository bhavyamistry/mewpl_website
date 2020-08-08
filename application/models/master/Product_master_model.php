<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Product_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$product_name = strtoupper($data['pro_name']);
		$product_status = $data['pro_status'];
		$pro_date = date('Y-m-d H:i:s');
		$pro_user_inserted = $user_name;
		$query = "INSERT into product_master (pro_date,product_name,status,user_inserted) values ('$pro_date','$product_name','$product_status','$pro_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_product_record($pid,$user_name,$user_type)
 	{
 		$product_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from product_master where pro_id = '{$product_id['product_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from product_master where pro_id = '{$product_id['product_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchproductRow = $stmt->result_array()[0];

 		return $fetchproductRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$pro_id = $data['pro_id'];
		$pro_name = strtoupper($data['edit_pro_name']);
		$pro_status = $data['edit_pro_status'];
		$pro_user_updated = $user_name;

		$pro_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE product_master set
			 	product_name = '{$pro_name}',
			 	status = '{$pro_status}',
			 	user_inserted = '{$pro_user_updated}',
			 	pro_date = '{$pro_date}'			 	
			 	where pro_id = '{$pro_id}'";
		$this->db->query($query1);
		return 1;

 	}

 	public function get_product_mod()
 	{ 				
 		$fetchproducts = $this->db->query("SELECT * from product_master ORDER BY pro_id DESC"); 			 		
 		return $fetchproducts->result();
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