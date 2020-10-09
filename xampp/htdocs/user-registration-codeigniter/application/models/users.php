<?php  
   class users extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
         $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
      }  
      //we will use the select function  
      public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('users');  
         return $query;

         
      }  
   }  
?> 