<?php

if (isset($_POST['login-submit'])){
    require "mydb.php";
    $username= $_POST['dln'];


    if (empty( $username) ){
    header("Location: ../index.php?error=emptyfields");
    exit();
    }
    else{
        $sql= "SELECT * FROM drivers WHERE dln=? ";
        
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
             mysqli_stmt_bind_param($stmt,"s", $username );
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
             if( $row=mysqli_fetch_assoc( $result)){

              
                 session_start();
                 $_SESSION['userid']= $row['dln'];
                 $_SESSION['userdob']= $row['dob'];
                 $_SESSION['userfn']= $row['firstname'];
                 $_SESSION['userln']= $row['lastname'];
                
           

                 header("Location: ../homepage.php?login=SUCCESSFULL");
              exit();
            }
            else{
                header("Location: ../index.php?error=wrongpassword");
                exit();
            }
        }
            
    }
  }
      


else{
  header("Location: ../index.php");
}
