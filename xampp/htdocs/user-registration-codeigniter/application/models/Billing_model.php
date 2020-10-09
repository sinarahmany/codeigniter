<?php
class Billing_model extends CI_Model {

    
    /*Insert*/
    /*Insert*/
    function saverecords($data)
    {
          $this->db->insert('cards',$data);
          return $this->db->insert_id();
    }
    function user_exists($number)
	{	
		$this->db->where( 'number', $number );
    	$query = $this->db->get('cards');
     	$card=$query->result();
     	$total = count($card);
		//$this->db->where('number', $number);
		//$query = $this->db->get('cards');
		
		if($total >= 1)
		{
		echo "Already exist ";
			return 1;
           // redirect(site_url().'main/login');
		}else{
			return 0;
		}
	}
}
