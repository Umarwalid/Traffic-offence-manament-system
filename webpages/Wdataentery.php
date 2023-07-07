<?php require "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" type="images/x-icon" href="images/favicon.png">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        
</head> 

<body style="background-color: #EFF7FF; " >
<div class=mainpage>
<nav class="navbar navbar-custom" style="background-color: #EFF7FF; margin:0 0 0 0";>
  <a class="navbar-brand" href="#">
   
    <P class="maintitle">Road and traffic legal assistant</p>
  </a>
</nav>
<div class="leftbar">

<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
			
				<div class="p-4 pt-5">
		  		<h1><a class="logo">MENU</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="Whomepage.html">Home</a>
	            
	          </li>
	          <li>
	              <a href="#">About</a>
	          </li>
	          <li>
              <a href="#pageSubmenu">User Info</a>
              
	          </li>
	          <li>
              <a href="#"> Help</a>
	          </li>
	          <li>
              <a href="Wloginpage.php">Log Out</a>
	          </li>
	        </ul>

</div>
</div>
</div>
    
<div class="mainbody">

    

    
    
    <form action="database/addoffence.php" method="post">
    <span class="input-group-text"> Offence Name:</span>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="offname" dis aria-label="offname" for="offname" id="offname" name="offname">
            </div>
            
          </div>

          <span class="input-group-text">Offence Code :</span>
        <input type="text" class="form-control" id="offcode"  name="offcode">

        <span class="input-group-text">Offence Date :</span>
        <input type="date" class="form-control" id="offdate"  name="offdate">

        <span class="input-group-text">Location</span>
        <input type="text" class="form-control" id="loc" name="loc">
 
        <span class="input-group-text">Vechicle Registration Number:</span>
        <div class="mb-3">
            <input type="text" class="form-control" id="vrn" placeholder="232342344234"name="vrn">
          </div>

          <span class="input-group-text">Fine amount:</span>
        <input type="text" class="form-control" id="famount" placeholder="1000" for="famount" name="famount">
  

        <span class="input-group-text"> Fine Status</span>
        <div >
        <select class="form-select" aria-label="Default select example" name="status">
            <option value="Paid">Paid</option>
            <option value="Not-Paid">Not Paid</option>
          </select>
       </div>
         
        <span class="input-group-text">Driver Lincence Number :</span>
        <input type="text" class="form-control" id="dln" placeholder="ABC112223345" for="dln" name="dln">
  
<div>    
   </div>
   
<button type="submit" class="btn btn-primary mb-3" style="float:right;" name="addoff">Confirm </button>
    </div>
    </form>
<div>
</div>
    





    </body>