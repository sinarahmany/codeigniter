<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){
            parent::__construct();
            $this->load->model('User_model', 'user_model', TRUE);
        }


	public function index()
	{
		

      
		//load the database  
        $this->load->database();  
        //load the model  
        $this->load->model('users');  
        //load the method of model  
        //$data['h']=$this->users->select();  
		//print_r( $data['h']);
        $store=42;
		$this->db->where( 'id', $store);
		 $query = $this->db->get('users');
		 $user=$query->result();
		 //echo "Hi" . " " . $user[0]->first_name;
		 $data = array('store' => $store);
		 
		 
		if (empty($this->session->userdata('id'))) {
            $this->session->set_flashdata('alert', array('error' => 'Please login.'));
            redirect(base_url('main/login'));
        }
		 
		 if ($user[0]->role == "admin") {
		  	$this->load->view('admin' ,$data);
		  }elseif ($user[0]->role == "subscriber") {
		  	$this->load->view('subscriber',$data );
		  } 

	}
	
	
}
