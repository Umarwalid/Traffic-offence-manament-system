<?php
include('database/mydb.php');
 

?>
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<title>initiate</title> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="icon" type="images/x-icon" href="images/favicon.png">
</head>

<body style="background-color:#EFF7FF ;  height:700px;">

<div class ="success">
<h1 style="text-align: center; font-size:50px">TRANSFER FROM ACCOUNT NAME:

<?php

 echo "<p style='color:white;'>".$_GET['name']; ;"</p>";
?>

</h1>
<div class="verify">



<h1 style="text-align: center;font-size:50px"> 


 
<br> <br>SUCCESSFULL
</h1>
 





<div class="buttonpos"><a href="homepage.php"  class="btn btn-primary mb-3" style="width: 300px; height: 100px;background:;
    border-radius: 99px; font-size: 50px;">Back </a>
    </div> 

  
    </div>


</body>
