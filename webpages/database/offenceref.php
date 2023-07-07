<?php

if (isset($_POST['findref'])){
    require "mydb.php";
    $reference= $_POST['offref'];

    if (empty( $reference) ){
    header("Location: ../index.php?error=emptyfields");
    exit();
    }
    else{
        $sql= "SELECT * FROM records WHERE recordid= ? ";
        
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
             mysqli_stmt_bind_param($stmt,"s", $reference );
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
             if( $row=mysqli_fetch_assoc( $result)){

              
                 session_start();
                 $_SESSION['offref']= $reference;

                 header("Location: ../verify.php".$row['wpassword'].$password);
                    exit();
            }
        }
            
    }
  }
      


else{
  header("Location: ../index.php");
}
