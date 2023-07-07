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
   
    <P class="maintitle">Road And Traffic Legal Assistant</p>
  </a>
</nav>
<div class="leftbar">

<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
			
				<div class="p-4 pt-5">
		  		<h1><a class="logo">MENU</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="homepage.php">Home</a>
	            
	          </li>
	          <li>
	              <a href="payment.php">pay fine</a>
	          </li>
	          <li>
              <a href="#pageSubmenu">User Info</a>
              
	          </li>
	          <li>
              <a href="#"> Help</a>
	          </li>
	          <li>
              <a href="index.php">Log Out</a>
	          </li>
	        </ul>

</div>
</div>
</div>
    
<div class="mainbody">

    
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Driver's Record</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">refence number.</th>
                  <th scope="col">Drivers lincence number</th>
                  <th scope="col">warden id</th>
                  <th scope="col"> Offence name</th>
                  <th scope="col">Offence code</th>
                  <th scope="col">vehicle registration number</th>
                  <th scope="col"> Offence location</th>
                  <th scope="col">Offence date</th>
                  <th scope="col"> Fine amount</th>
                  <th scope="col">Status</th>
              
                  
                </tr>
              </thead>
              <tbody>
                <?php include 'retrieve-data.php'; ?>
              
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    <td><?php echo $array[7];?></td>
                    <td><?php echo $array[8];?></td>
                    <td><?php echo $array[9];?></td>
                  
                    
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>

<div>
</div>
    





    </body>