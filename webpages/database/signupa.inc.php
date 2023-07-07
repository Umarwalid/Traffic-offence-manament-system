<?php

if (isset($_POST['createAccountA'])){
    require "mydb.php";
    $adminid= $_POST['adminid'];
    $firstname= $_POST['fn'];
    $lastname= $_POST['ln'];
    $password= $_POST['password'];
    $passwordRepeat= $_POST['passwordRe'];
    

    if (  empty( $adminid) || empty( $firstname) ||  empty( $lastname) ||  empty( $lastname)  ||   empty($passwordRepeat) ){
          header("Location: ../signupe.inc.php?error=emptyfields&id=".$adminid."&firstname=".$firstname."&lastname=".$lastname.
          "&password=".$password."&passwordre=".$passwordRepeat);
          exit();
      }

      else if($password !== $passwordRepeat){
        header("Location: ../signupa.inc.php?error=passworddontmatch&username=".$adminid);
        exit();
      }

      else{
        $sql="INSERT INTO sysadmin (adminid,firstname,lastname,apassword) VALUES(?,?,?,?)";
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../signupa.php?error=sqlerror");
          exit();
        }
      
        else {
          $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
           mysqli_stmt_bind_param($stmt,"ssss", $adminid,$firstname,$lastname,$hashedPwd );
           mysqli_stmt_execute($stmt);
           header("Location: ../Aloginpage.php?signup=SUCCESSFULL");
        exit();
      }
    }
      mysqli_stmt_close($stmt);
      mysqli_close($scon);


}
else{
  header("Location: ../Acreateacct.php");
}
