<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Customer_master_model extends CI_Model
 {

 	public function __construct()
 	{
 		parent::__construct(); 		
 	}	

 	
 	public function insert_records($data,$user_name)
 	{	
		$customer_name = ucwords($data['customer_name']);
		$customer_type = $data['customer_type'];
		$industry_category = $data['industry_category'];
		$customer_status = $data['customer_status'];
		$customer_date = date('Y-m-d H:i:s');
		$customer_user_inserted = $user_name;
		$query = "INSERT into customer_master (customer_date,customer_name,customer_type,industry_category,status,user_inserted) values ('$customer_date','$customer_name','$customer_type','$industry_category','$customer_status','$customer_user_inserted')";
		$this->db->query($query);
		return 1;
 	}

 	public function get_Customer_record($pid,$user_name,$user_type)
 	{
 		$customer_id = $pid;
 		$u_name = $user_name;
 		$u_type = $user_type;
 		if($u_type=="Admin")
 		{
 			$stmt=$this->db->query("SELECT * from customer_master where customer_id = '{$customer_id['customer_id']}'");			
 		}
 		else
 		{
 			$stmt=$this->db->query("SELECT * from customer_master where customer_id = '{$customer_id['customer_id']}' AND user_inserted='$user_name' ");		
 		} 		
 		$fetchcustomerRow = $stmt->result_array()[0];

 		return $fetchcustomerRow;
 	}

 	public function update_records($data,$user_name)
 	{	
		$customer_id = $data['customer_id'];
		$customer_name = ucwords($data['edit_customer_name']);
		$customer_type= $data['edit_customer_type'];
		$industry_category= $data['edit_industry_category'];
		$customer_status = $data['edit_customer_status'];
		$customer_user_updated = $user_name;

		$customer_date = date('Y-m-d H:i:s');
		
		$query1 = "UPDATE customer_master set
			 	customer_name = '{$customer_name}',
			 	customer_type = '{$customer_type}',
			 	industry_category = '{$industry_category}',
			 	status = '{$customer_status}',
			 	user_inserted = '{$customer_user_updated}',
			 	customer_date = '{$customer_date}'			 	
			 	where customer_id = '{$customer_id}'";
		$this->db->query($query1);	
		return 1;

 	}

 	public function get_Customer_mod()
 	{ 				
 		
 		

 		$fetchcustomers = $this->db->query("SELECT * from customer_master ORDER BY customer_id DESC"); 			 		
 		return $fetchcustomers->result();
 	}
 	public function get_Customer_search($c_name)
 	{ 				
 		// echo $c_name;
 		$fetchcustomers = $this->db->query("SELECT * from customer_master WHERE customer_name LIKE '$c_name%' OR customer_name LIKE '%$c_name' OR customer_name LIKE '%$c_name%' ORDER BY customer_id DESC"); 			 		
 		return $fetchcustomers->result();
 	}
 	public function get_Customer_Type_mod()
 	{ 				
 		$fetchcustomers = $this->db->query("SELECT customer_type_name from customer_type_master WHERE status='Active' ORDER BY customer_type_name ASC"); 			 		
 		return $fetchcustomers->result();
 	}
 	public function get_Industry_Category_mod()
 	{ 				
 		$fetchcustomers = $this->db->query("SELECT industry_name from industry_master WHERE status='Active' ORDER BY industry_name ASC"); 			 		
 		return $fetchcustomers->result();
 	}

 	public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("customer_master");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }
    public function get_current_page_search_records($c_name) 
    {
        // echo "limit:".$limit;
        // echo "offset:".$start;

        $query =  $this->db->query("SELECT * from customer_master WHERE customer_name LIKE '$c_name%' OR customer_name LIKE '%$c_name' OR customer_name LIKE '%$c_name%' ORDER BY customer_id DESC");
        // echo "SELECT * from customer_master WHERE customer_name LIKE '$c_name%' OR customer_name LIKE '%$c_name' OR customer_name LIKE '%$c_name%' ORDER BY customer_id DESC";
        // $this->db->limit($limit, $start);
        // $query = $this->db->get("customer_master");
        // $this->db->like('customer_master', 'pattern')
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }
     
    public function get_total() 
    {
        return $this->db->count_all("customer_master");
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