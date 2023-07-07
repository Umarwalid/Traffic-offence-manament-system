<?php
require './database/mydb.php';

$dln= $_SESSION['userid'];
   
        $sql= "SELECT * FROM records WHERE dln= ? ";
        
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
             mysqli_stmt_bind_param($stmt,"s", $dln );
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
          }
        
  
      

