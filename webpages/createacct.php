<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" type="images/x-icon" href="images/favicon.png">
</head> 

<body style="background-color:  #EFF7FF;">
<div class=createacct>
<p class="labelstyle" style="text-align: center;"> Please fill in your information</p>
<form action="database/signup.inc.php" method="post">
<div class="input">
     <label class="labelstyle" for="fn">Firstname </label></br>
     <input type="text" class="form-control" name="fn" style="float: left;width: 70%;height:50px;background: #ffffff;border-radius: 10px; font-size:20px;"
      value="" required /><br><br>
         </div>
    
 
<div class="input">
    <label class="labelstyle" for="ln">Lastname </label>  </br>
    <input type="text" class="form-control" name="ln"  style="float: left;width: 70%;height:50px;background: #ffffff;border-radius: 10px; font-size:20px;"
    value="" required /><br><br>
 </div>
            
 
 <div class="input">
    <label class="labelstyle" for="dln">driver's licence number</label></br>
    <input type="text" class="form-control" name="dln" minlength="12" maxlegth="12" style="float: left;width: 70%;height:50px;background: #ffffff;border-radius: 10px; font-size:20px;"
    value="" required /><br><br>   
</div>

<div class="input">
    <label class="labelstyle" for="dob">date of birth</label></br>
    <input type="date" class="form-control" name="dob"  style="float: left;width: 70%;height:50px;background: #ffffff;border-radius: 10px; font-size:20px;"
    value="" required /><br><br>   
</div>



<div class="buttonpos1"><input type="submit" class="btn btn-primary mb-3" name="createAccount"style="width:100px ; height:50px ;background: #ECDFDF ; color:#05224B;
    border-radius: 99px;font-size: 20px; padding-top: 10px;  " 
    name="account" value="Confirm"></button></div> 

    

<div class="buttonpos2"> <a href="index.php" class="btn btn-primary mb-3" style="width:100px ; height:50px ;background: #B9DAFA; color:#05224B;
    border-radius: 99px;font-size: 20px; padding-top: 10px;  margin-left:30%">Back 
     </a></div>
</form>
</div>

    </body>