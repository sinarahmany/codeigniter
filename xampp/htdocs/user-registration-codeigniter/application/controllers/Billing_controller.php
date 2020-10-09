<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing_controller extends CI_Controller {
    
        function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Billing_model');
             }
             
    
	public function index()
	{   
                        
            /*front page*/
             
            $this->load->view('header');            
             redirect(site_url().'Billing_controller/viewbilling');
            $this->load->view('footer');
	}
        
        
        public function register()
        {
         /*load registration view form*/
        $this->load->view('biiling_register');
    
        /*Check submit button */
        if($this->input->post('save'))
        {
            $data['user_id']=33;
            $data['type']=$this->input->post('type');
            $data['currency']=$this->input->post('currency');
            $data['number']=$this->input->post('number');
            $data['date_valid_from']=$this->input->post('date_valid_from');
            $data['date_valid_to']=$this->input->post('date_valid_to');
            //$this->Billing_model->user_exists(23423411);
            $total=$this->Billing_model->user_exists(234234);
            
           if($total == 0){
                $user=$this->Billing_model->saverecords($data);
                if(0<$user){

                     echo "Records Saved Successfully";
                }
                 else{
                     echo "Insert error !";
                 } 
            }
            else{
               $this->load->view('exist');
            } 
            
                
              
        }
        }
        public function viewbilling(){
            $number=33225544678;
            $total=$this->Billing_model->user_exists($number);
            $data1 = array('number' => $number);
            if ($total == 1) {
                $this->load->view('billing',$data1);
            }else{
                redirect(site_url().'Billing_controller/register');
            }
            
        }
        
     
}
