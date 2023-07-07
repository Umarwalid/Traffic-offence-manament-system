<?php

if (isset($_POST['login-submitE'])){
    require "mydb.php";
    $username= $_POST['users'];
    $password= $_POST['password'];

    if (empty( $username) || empty( $password)){
    header("Location: ../index.php?error=emptyfields");
    exit();
    }
    else{
        $sql= "SELECT * FROM wardens WHERE wardenid=?";
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../Wloginpage.php?error=sqlerror");
            exit();
          }
          else {
             mysqli_stmt_bind_param($stmt,"s", $username );
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
             if( $row=mysqli_fetch_assoc( $result)){
              
                 $pwdcheck= password_verify($password,$row['wpassword']);
              
                 if( $pwdcheck == false){
                    header("Location: ../Wloginpage.php?error=wrongpassword".$row['wpassword'].$password);
                    exit();
             }

             else if ($pwdcheck == true){
                 session_start();
                 $_SESSION['userid']= $row['wardenid'];
                 $_SESSION['userfn']= $row['firstname'];
                 $_SESSION['userln']= $row['lastname'];
                 $_SESSION['userad']= $row['station'];
                 
           

                 header("Location: ../Whomepage.php?login=SUCCESSFULL");
              exit();
            }
            else{
                header("Location: ../Wloginpage.php?error=wrongpassword");
                exit();
            }
        }
            
        }
      }
      
}

else{
  header("Location: ../index.php");
}
