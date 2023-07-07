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
    <img src="/images/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <P class="maintitle">Road and Traffic Legal Assistant</p>
  </a>
</nav>





<div class="leftbar">

<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
			
				<div class="p-4 pt-5">
		  		<h1><a class="logo">MENU</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="Wdataentery.php">Add Records</a>
	            
	          </li>
	          <li>
	              <a href="">About</a>
	          </li>
	          <li>
              <a href="">User Info</a>
              
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
<p class=accountname> WELCOME BACK </p>
    <?php
   
     echo "<p style='text-align:center ;
     text-align:center ;
     font-family: Saira;
 font-style: normal;
 font-weight: normal;
 font-size: 64px;
 line-height: 75px;
 color: #05224B;'>".$_SESSION['userid'];"</p>";
    ?>
   

 
    </div>
</div>
    





    </body>