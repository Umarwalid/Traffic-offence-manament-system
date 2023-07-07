<?php

if (isset($_POST['findref'])){
    require "mydb.php";
    $reference= $_POST['offref'];

    if (empty( $reference) ){
    header("Location: ../index.php?error=emptyfields");
    exit();
    }
    else{
       
        
      $sql = mysqli_query($con, "UPDATE records
      SET fstatus = 'cancelled'
      WHERE recordid = $reference") or die(
      mysqli_error($con));


        
                
                  
                 header("Location: ../removeoffence.php?login=SUCCESSFULL&");
              exit();
                
           
        }
    }

    
      
