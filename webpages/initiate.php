<?php require "header.php"; ?>
<?php
include('database/mydb.php');
if (empty($_GET['sender_code'])) { 
header("location: javascript://history.go(-1)"); 
} 
$stored_sender_code='';

if (isset($_POST['transfer'])) {
$sender_code = $_GET['sender_code'];



$sender_code = $_GET['sender_code'];
$sql2 = mysqli_query($con, "SELECT * FROM transfer_sender WHERE sender_code = '$sender_code'") or die(
mysqli_error($con));
if($sql2->num_rows >0){

$data2 = mysqli_fetch_array($sql2);
$account_name = $data2['account_name'];

$ref=$_SESSION['offref'];

$sq2 = mysqli_query($con, "UPDATE records
SET fstatus = 'Paid'
WHERE recordid = $ref") or die(
mysqli_error($con));


header('Location: success.php?name='.$account_name .'&amount='.$amount) ; 
exit(); 
}

}

?>
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<title>initiate</title> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="images/x-icon" href="images/favicon.png">
<title></title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog" ).dialog();
  } );
  </script>
</head>

<?php
$sender_code = $_GET['sender_code'];
$sql2 = mysqli_query($con, "SELECT * FROM transfer_sender WHERE sender_code = '$sender_code'") or die(
mysqli_error($con));
if($sql2->num_rows >0){

$data2 = mysqli_fetch_array($sql2);
$account_name = $data2['account_name'];
}


?>

<body style="background-color:#EFF7FF ;  height:700px;">


<h1 style="text-align: center;">Initiate a Transfer from this Account Name:

<?php
if (empty($account_name)) {
} else
 echo "<p style='color: #05224B;'>".$account_name;"</p>";
?>
  
   

</h1>
<div class="verify">

<form method="post" action="">


 <div class="input">
     <label class="labelstyle" > transcation pin</label>
     <input type="text" class="form-control" name="reason" value="" 
style="float: left;width: 900px;height: 139px;background: #D6D6D6;border-radius: 10px;font-size:100px" />
 </div>

 


 <div class="buttonpos1"><button type="submit" name="transfer" value=""  class="btn btn-primary mb-3" style="width: 300px; height: 100px;background: #CB0707;border-radius: 99px; font-size:40px; color:white">
 TRANSFER </button>
    </div>
    

<div class="buttonpos2"><a href="homepage.php"  class="btn btn-primary mb-3" style="width: 300px; height: 100px;background: #17CB07;
    border-radius: 99px; font-size: 50px;">Back </a>
    </div> 

    </form>
    </div>


</body>
