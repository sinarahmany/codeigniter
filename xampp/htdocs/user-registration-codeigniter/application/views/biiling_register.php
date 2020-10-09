<!DOCTYPE html>  
<html>
<head>
<title>Registration form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style type="text/css">
  
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
    width: 40%;
   
    margin: auto;

  }
  #form-group{
    background-color: white;
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
  

  <div id="body">
    <h1>Billing Registration Form</h1>
  <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
    <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex.VISA/Debit">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Currency</label>
    <input type="text" name="number" class="form-control" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Card Number</label>
    <input type="text" name="currency" class="form-control" id="exampleInputPassword2" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword3">Date Valid From</label>
    <input type="text" name="date_valid_from" class="form-control" id="exampleInputPassword3" placeholder="MM/YYYY">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword4">Expiry Date</label>
    <input type="text" name="date_valid_to" class="form-control" id="exampleInputPassword4" placeholder="MM/YYYY">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Use your info for personal use</label>
  </div>
  <br>
  <input type="submit" name="save" value="Submit" class="btn btn-lg btn-primary btn-block"/>
  </div>
  </div>

  </div>
</body>
</html>