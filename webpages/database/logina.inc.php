<?php

if (isset($_POST['login-submitA'])){
    require "mydb.php";
    $username= $_POST['users'];
    $password= $_POST['password'];

    if (empty( $username) || empty( $password)){
    header("Location: ../index.php?error=emptyfields");
    exit();
    }
    else{
        $sql= "SELECT * FROM sysadmin WHERE adminid=?";
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../Aloginpage.php?error=sqlerror");
            exit();
          }
          else {
             mysqli_stmt_bind_param($stmt,"s", $username );
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
             if( $row=mysqli_fetch_assoc( $result)){
              
                 $pwdcheck= password_verify($password,$row['apassword']);
              
                 if( $pwdcheck == false){
                    header("Location: ../Aloginpage.php?error=wrongpassword".$row['apassword'].$password);
                    exit();
             }

             else if ($pwdcheck == true){
                 session_start();
                 $_SESSION['userid']= $row['adminid'];
                 $_SESSION['userfn']= $row['firstname'];
                 $_SESSION['userln']= $row['lastname'];
            
                 
           

                 header("Location: ../Ahomepage.php?login=SUCCESSFULL");
              exit();
            }
            else{
                header("Location: ../Aloginpage.php?error=wrongpassword");
                exit();
            }
        }
            
        }
      }
      
}

else{
  header("Location: ../index.php");
}
