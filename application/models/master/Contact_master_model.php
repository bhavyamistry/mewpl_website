<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Contact_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}

 	public function get_Customer_record()
 	{	
 		$cust=$this->db->query("SELECT * FROM customer_master");		

 		return $cust->result();
 	}
 	public function get_Zone_record()
 	{	
 		$zone=$this->db->query("SELECT * FROM zone_master");		

 		return $zone->result();
 	}
 	public function get_City_record()
 	{	
 		$city=$this->db->query("SELECT * FROM state_city_master");		

 		return $city->result();
 	}

 	public function insert_records($data,$user_name)
 	{	
		$customer_name = $data['customer_name_hidden'];
		$zone = $data['zone_hidden'];
		$location = $data['location_hidden'];
		$adress_1 = $data['address1_hidden'];
		$adress_2 = $data['address2_hidden'];
		$city = $data['city_hidden'];
		$state = $data['state_hidden'];
		$country = $data['country_hidden'];
		$pincode = $data['pincode_hidden'];
		$contact_status = $data['contact_status'];
		$designation = $data['designation'];
		$cell_no = $data['cell_no'];
		$phone_no = $data['phone_no'];
		$extn = $data['extn'];
		$email = $data['email'];
		$contact_name = ucwords($data['contact_name']);
		$gender= $data['gender'];
		$full_contact_name ="";
		if($gender=="male")
		{
			if(strpos( $contact_name, 'Mr' ) !== false)
			{

			}
			else
			{
				$full_contact_name = "Mr. ".$contact_name;
			}
		}
		else if($gender=="female")
		{
			if((strpos( $contact_name, 'Ms' ) !== false)||(strpos( $contact_name, 'Mrs' ) !== false))
			{

			}
			else
			{
				$full_contact_name = "Ms. ".$contact_name;
			}
		}
		$contact_date = date('Y-m-d H:i:s');
		$contact_user_inserted = $user_name;
		$query = "INSERT into contact_master (contact_date,customer_name,zone,location,adress_1,adress_2,city,state,country,pincode,contact_name,designation,cell_no,phone_no,extn,email_id,status,user_inserted) values ('$contact_date','$customer_name','$zone','$location','$adress_1','$adress_2','$city','$state','$country','$pincode','$full_contact_name','$designation','$cell_no','$phone_no','$extn','$email','$contact_status','$contact_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_State_record($city)
 	{
 		print_r($city);
 		$state=$this->db->query("SELECT state from state_city_master where city = '{$city['city']}'"); 		
 		// echo "SELECT state from state_city_master where city = '{$city_name['city_name']}'";
 		$fetchstateRow = $state->result_array()[0];
 		// print_r($fetchstateRow);

 		return $fetchstateRow;
 	}
 	
 	public function get_Contact_record($pid,$user_name,$user_type)
 	{
 		$contact_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from contact_master where contact_master_id = '{$contact_id['contact_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from contact_master where contact_master_id = '{$contact_id['contact_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchcontactRow = $stmt->result_array()[0];

 		return $fetchcontactRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$customer_name = $data['edit_customer_name_hidden'];
		$zone = $data['edit_zone_hidden'];
		$location = $data['edit_location_hidden'];
		$adress_1 = $data['edit_address1_hidden'];
		$adress_2 = $data['edit_address2_hidden'];
		$city = $data['edit_city_hidden'];
		$state = $data['edit_state_hidden'];
		$country = $data['edit_country_hidden'];
		$pincode = $data['edit_pincode_hidden'];
		$contact_status = $data['edit_contact_status'];
		$designation = $data['edit_designation'];
		$cell_no = $data['edit_cell_no'];
		$phone_no = $data['edit_phone_no'];
		$extn = $data['edit_extn'];
		$email = $data['edit_email'];
		$contact_name = ucwords($data['edit_contact_name']);
		$gender= $data['edit_gender'];
		$full_contact_name ="";
		$contact_id = $data['edit_contact_id'];
		if($gender=="male")
		{
			if(strpos( $contact_name, 'Mr' ) !== false)
			{
				$full_contact_name = $contact_name;
			}
			else
			{
				$full_contact_name = "Mr. ".$contact_name;
			}
		}
		else if($gender=="female")
		{
			if((strpos( $contact_name, 'Ms' ) !== false)||(strpos( $contact_name, 'Mrs' ) !== false))
			{
				$full_contact_name = $contact_name;
			}
			else
			{
				$full_contact_name = "Ms. ".$contact_name;
			}
		}
		echo $full_contact_name;


		$contact_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE contact_master set
				contact_date = '{$contact_date}',
				customer_name = '{$customer_name}',
				zone = '{$zone}',
				location = '{$location}',
				adress_1= '{$adress_1}',
				adress_2= '{$adress_2}',
				city= '{$city}',
				state= '{$state}',
				country= '{$country}',
				pincode= '{$pincode}',
				contact_name= '{$full_contact_name}',
				designation= '{$designation}',
				cell_no= '{$cell_no}',
				phone_no= '{$phone_no}',
				extn= '{$extn}',
				email_id= '{$email}',
				status= '{$contact_status}',
				user_inserted= '{$user_name}'			 				 	
			 	where contact_master_id = '{$contact_id}'";
			 echo "UPDATE contact_master set
				contact_date = '{$contact_date}',
				customer_name = '{$customer_name}',
				zone = '{$zone}',
				location = '{$location}',
				adress_1= '{$adress_1}',
				adress_2= '{$adress_2}',
				city= '{$city}',
				state= '{$state}',
				country= '{$country}',
				pincode= '{$pincode}',
				contact_name= '{$full_contact_name}',
				designation= '{$designation}',
				cell_no= '{$cell_no}',
				phone_no= '{$phone_no}',
				extn= '{$extn}',
				email_id= '{$email}',
				status= '{$contact_status}',
				user_inserted= '{$user_name}'			 				 	
			 	where contact_master_id = '{$contact_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_Contact_mod()
 	{ 				
 		$fetchcontacts = $this->db->query("SELECT * from contact_master ORDER BY contact_master_id DESC"); 			 		
 		return $fetchcontacts->result();
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