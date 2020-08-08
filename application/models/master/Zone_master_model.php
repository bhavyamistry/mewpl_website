<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Zone_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$Zone_name = ucwords($data['zone_name']);
		$Zone_status = $data['zone_status'];
		$Zone_date = date('Y-m-d H:i:s');
		$Zone_user_inserted = $user_name;
		$query = "INSERT into Zone_master (zone_date,zone_name,status,user_inserted) values ('$Zone_date','$Zone_name','$Zone_status','$Zone_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_Zone_record($pid,$user_name,$user_type)
 	{
 		$Zone_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from Zone_master where zone_id = '{$Zone_id['Zone_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from Zone_master where zone_id = '{$Zone_id['Zone_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchZoneRow = $stmt->result_array()[0];

 		return $fetchZoneRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$Zone_id = $data['zone_id'];
		$Zone_name = ucwords($data['edit_zone_name']);
		$Zone_status = $data['edit_zone_status'];
		$Zone_user_updated = $user_name;

		$Zone_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE Zone_master set
			 	Zone_name = '{$Zone_name}',
			 	status = '{$Zone_status}',
			 	user_inserted = '{$Zone_user_updated}',
			 	Zone_date = '{$Zone_date}'			 	
			 	where zone_id = '{$Zone_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_Zone_mod()
 	{ 				
 		$fetchZones = $this->db->query("SELECT * from Zone_master ORDER BY zone_id DESC"); 			 		
 		return $fetchZones->result();
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