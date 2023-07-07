<?php

if (isset($_POST['createAccount'])){
    require "mydb.php";
    $driverln= $_POST['dln'];
    $dob= $_POST['dob'];
    $Firstname= $_POST['fn'];
    $lastname= $_POST['ln'];
   


    if ( empty( $driverln) ||  empty( $dob) ||    empty($Firstname) ||  empty( $lastname) ){
          header("Location: ../signup.inc.php?error=emptyfields&user=".$driverln."&email=".$dob."&fn=".$Firstname."&ln=".$lastname);
          exit();
      }

     

      else{
        $sql="INSERT INTO drivers (dln,firstname,lastname,dob) VALUES(?,?,?,?)";
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../signup.php?error=sqlerror");
          exit();
        }
      
        else {

           mysqli_stmt_bind_param($stmt,"ssss",$driverln, $Firstname,$lastname, $dob );
           mysqli_stmt_execute($stmt);
           header("Location: ../index.php?signup=SUCCESSFULL");
        exit();
      }
    }
      mysqli_stmt_close($stmt);
      mysqli_close($scon);


}
else{
  header("Location: ../createacct.php");
}
