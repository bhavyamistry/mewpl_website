<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Win_percent_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$win_percent_number = $data['win_percent_number'];		
		$win_percent_status = $data['win_percent_status'];
		$win_percent_date = date('Y-m-d H:i:s');
		$win_percent_user_inserted = $user_name;
		$query = "INSERT into win_percent_master (win_percent_date,win_percent_number,status,user_inserted) values ('$win_percent_date','$win_percent_number','$win_percent_status','$win_percent_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_Win_percent_record($pid,$user_name,$user_type)
 	{
 		$win_percent_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from win_percent_master where win_percent_id = '{$win_percent_id['win_percent_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from win_percent_master where win_percent_id = '{$win_percent_id['win_percent_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchwin_percentRow = $stmt->result_array()[0];

 		return $fetchwin_percentRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$win_percent_id = $data['win_percent_id'];
		$win_percent_number = $data['edit_win_percent_number'];
		$win_percent_status = $data['edit_win_percent_status'];
		$win_percent_user_updated = $user_name;

		$win_percent_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE win_percent_master set
			 	win_percent_number = '{$win_percent_number}',
			 	status = '{$win_percent_status}',
			 	user_inserted = '{$win_percent_user_updated}',
			 	win_percent_date = '{$win_percent_date}'			 	
			 	where win_percent_id = '{$win_percent_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_Win_percent_mod()
 	{ 				
 		$fetchwin_percents = $this->db->query("SELECT * from win_percent_master ORDER BY win_percent_id DESC"); 			 		
 		return $fetchwin_percents->result();
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