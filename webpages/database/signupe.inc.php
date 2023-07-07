<?php

if (isset($_POST['createAccountE'])){
    require "mydb.php";
    $wardenid= $_POST['wardenid'];
    $firstname= $_POST['fn'];
    $lastname= $_POST['ln'];
    $station= $_POST['station'];
    $password= $_POST['password'];
    $passwordRepeat= $_POST['passwordRe'];
    

    if (  empty( $wardenid) || empty( $firstname) ||  empty( $lastname) ||  empty( $lastname) ||    empty( $station) ||   empty($passwordRepeat) ){
          header("Location: ../signupe.inc.php?error=emptyfields&uwardenid=".$wardenid."&station=".$station."&firstname=".$firstname."&lastname=".$lastname.
          "&password=".$password."&passwordre=".$passwordRepeat);
          exit();
      }

      else if($password !== $passwordRepeat){
        header("Location: ../signupe.inc.php?error=passworddontmatch&username=".$wardenid."&station=".$station);
        exit();
      }

      else{
        $sql="INSERT INTO wardens (wardenid,firstname,lastname,station,wpassword) VALUES(?,?,?,?,?)";
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../signupe.php?error=sqlerror");
          exit();
        }
      
        else {
          $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
           mysqli_stmt_bind_param($stmt,"sssss", $wardenid,$firstname,$lastname,$station,$hashedPwd );
           mysqli_stmt_execute($stmt);
           header("Location: ../index.php?signup=SUCCESSFULL");
        exit();
      }
    }
      mysqli_stmt_close($stmt);
      mysqli_close($scon);


}
else{
  header("Location: ../Wcreateacct.php");
}
