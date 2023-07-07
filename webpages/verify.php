<?php
include("database/mydb.php") ; 
if (isset($_POST['verify'])) {   
$AcctNumb = mysqli_real_escape_string($con, $_POST['account_number']); 
$BankCode = mysqli_real_escape_string($con, $_POST['bank_code']); 

$sql = mysqli_query($con, "SELECT * FROM transfer_sender WHERE account_number = '$AcctNumb'") or die(mysali_error(
));
if ($sql->num_rows > 0) { 

$data = mysqli_fetch_array($sql); 
$sender_code = $data[ 'sender_code']; 
$name = $data["account_name"]; 
echo "<script> alert('Account Number is already verified with correct bank code generating a sender code, Click 
on INITIATE button to transfer fund');</script>"; 

}
else{
$curl = curl_init(); 
curl_setopt_array($curl, array( 
CURLOPT_URL => "https://api.paystack.co/bank/resolve?account_number=".rawurlencode($AcctNumb)."&bank_code=". 
rawurlencode ($BankCode), 
CURLOPT_RETURNTRANSFER => true, 
CURLOPT_ENCODING => "", 
CURLOPT_MAXREDIRS => 10, 
CURLOPT_TIMEOUT => 30, 
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
CURLOPT_CUSTOMREQUEST => "GET", 
CURLOPT_HTTPHEADER => array( 
    "Authorization: Bearer sk_test_5472e7cced04c2535e828fe2a699e1d6febc1cd6",
    "Cache-Control: no-cache",
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
// echo $response; 
$result = json_decode($response);
$verify = $result->status;
}
if($verify){
$name = $result->data->account_name; 

# code... 
echo "<script> alert('Account Number is resolved/verified with the Bank Code');</script>"; 
header('Location: sender.php?account_name=' .$name .'&account_number='.$AcctNumb .'&bank_code='.$BankCode) ; 
exit(); 
}
else{ 
echo "<script> alert('Invalid Account Number or Bank Code, its NOT resolved/verified'); </script>"; 
}
} 
}

?>
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<title></title> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="images/x-icon" href="images/favicon.png">
</head>
<body style="background-color:#EFF7FF ;  height:700px;">
<div class="verify">
<p class="labelstyle" style="text-align: center;"> Enter  Destiantion Account Details</p>
<form method="post" action="">

<div class="input">
    <label class="labelstyle"> Account number </label>  
    <input type="number" class="form-control" name="account_number" style="float: left;width: 400px;height: 50px;background: #D6D6D6;border-radius: 10px;font-size:40px;" value="<?php if(isset($_POST['account_number'])){
echo htmlentities ($_POST['account_number']);}?>" required /><br><br>
 </div>
 <div class="input">
     <label class="labelstyle" > Bank  code</label>
     
     <input type="number" class="form-control" name="bank_code"style="float: left;width: 400px;height: 50px;background: #D6D6D6;border-radius: 10px;font-size:40px;" value="<?php if(isset($_POST['bank_code'])){echo
htmlentities ($_POST['bank_code']);}?>" required /><br><br>
 </div>


 

<div class="buttonpos1"><button type="submit" name="verify"  value="" class="btn btn-primary mb-3"style="width: 100px; font-size: 20px; height: 50px;background: #CB0707;border-radius: 99px; color:white">
VERIFY</button></div> 

    

<div class="buttonpos2"><a href="homepage.php"  class="btn btn-primary mb-3" style="width: 100px; font-size: 20px; height: 50px;background: #17CB07;
    border-radius: 99px;">Back </a></div> 
</div>
    </form>

<?php
if (!empty($_POST['account_number']) && !empty($sender_code)){


header("Location: initiate.php?sender_code=$sender_code ");
}
?>

</body>

