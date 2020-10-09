<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<style>
body {
  font-family: "Lato", sans-serif;
}
::selection { background-color: #E13300; color: white; }
  ::-moz-selection { background-color: #E13300; color: white; }

  body {
    background-color: #eee;
    
    color: #4F5155;
  }

  a {
    color: #003399;
    background-color: transparent;
    font-weight: normal;
  }

  h1 {
    margin: auto;
    padding: 50px 50px 50px 50px;
    text-align: center;
  }

  code {
    font-family: Consolas, Monaco, Courier New, Courier, monospace;
    font-size: 12px;
    background-color: #f9f9f9;
    border: 1px solid #D0D0D0;
    color: #002166;
    display: block;
    margin: 14px 0 14px 0;
    padding: 12px 10px 12px 10px;
  }
  #body {
     width: 50%;
   
    margin: auto;
  }

  p.footer {
    text-align: right;
    font-size: 11px;
    border-top: 1px solid #D0D0D0;
    line-height: 32px;
    padding: 0 10px 0 10px;
    margin: 20px 0 0 0;
  }



.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
@media screen and (max-width: 650px) {
  .sidenav {
    display: none;
  }
    #body {margin: 0px; width: 100%;}
    .main {
  margin-left: 0px; /* Same as the width of the sidenav */
  padding: 20px;
}
}
</style>

</head>
<body>
  <div class="sidenav">
      <a href="http://localhost/user-registration-codeigniter/welcome">Home</a>
      <a href="#">Plan</a>
      <a href="http://localhost/user-registration-codeigniter/myaccount">My Account</a>
      
  </div>
     

<div class="main">
  <h1>Welcome to CodeIgniter!</h1>

  <div id="body">
    
    <h2><?php $this->db->where( 'id', 42 );
     $query = $this->db->get('users');
     $user=$query->result();
     echo "Hi" . " " . $user[0]->first_name; ?></h2>
      <br>
     <h4><?php //$this->db->where( 'user_id', 42 );
     $this->db->where( 'number', $number );
     $query = $this->db->get('cards');
     $card=$query->result();
     $total = count($card);
     echo $total . " " . "cards found for this user ";?></h4>
     <?php if ($total<1) {
       redirect(site_url().'Billing_controller/register');
     }  ?>

          
       
     
     <table class="table" style="border: solid 1px #111;">
  <thead class="thead-dark" style="background-color: #111; color: white;">
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Card Number</th>
      <th scope="col">Expiry Date</th>
      <th scope="col">Currency</th>
    </tr>
  </thead>
  <tbody>
    <?php 
         for ($i=0; $i < $total ; $i++) { 
          
            ?>
    <tr style="background-color: white;">
      <th scope="row"> <?php  echo $card[$i]->type ; ?> </th>
      <th><?php  echo $card[$i]->number ; ?></td>
      <th ><?php  echo $card[$i]->date_valid_to ; ?></td>
      <th><?php  echo $card[$i]->currency ; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

  
    

<br>

     <a href="http://localhost/user-registration-codeigniter/main/logout/"><button type="button" class="btn btn-primary">Logout</button></a>
  </div>

  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>