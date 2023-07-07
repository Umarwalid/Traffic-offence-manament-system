<?php require "../header.php"; ?>
<?php

if (isset($_POST['addoff'])){
    require "mydb.php";
    $driversln= $_POST['dln'];
    $offname= $_POST['offname'];
    $offcode= $_POST['offcode'];
    $VRN= $_POST['vrn'];
    $status= $_POST['status'];
    $date= $_POST['offdate'];
    $amount= $_POST['famount'];
    $location= $_POST['loc'];
    $wid= $_SESSION['userid'];
   


    if ( empty( $driversln) ||  empty( $offname) ||  empty( $amount) ||   empty( $offcode) ||   empty($VRN) ||   empty($wid) ||   empty($location) 
     ){  
          header("Location: ../Wdataentery.php?error=emptyfields&user=".$wid."&driverln=".$driversln."&offname=".$offname."&offcode=".$offcode
          ."&vrn=".$VRN."&status=".$status."&date=".$date."&amount=".$amount."&location=".$location);
          exit();
      }

      
      else{
        $sql="INSERT INTO records (dln,wardenid,offencename,offencecode,vehicleregnum,offlocation,offdate,amount,fstatus) VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../Wdataentry.php?error=sqlerror");
          exit();
        }
      
        else {
          
           mysqli_stmt_bind_param($stmt,"sssssssss",$driversln,$wid, $offname, $offcode, $VRN, $location,$date,$amount,$status );
           mysqli_stmt_execute($stmt);
           header("Location: ../Wdataentery.php?signup=SUCCESSFULL");
        exit();
      }
    }
      mysqli_stmt_close($stmt);
      mysqli_close($scon);


}
else{
  header("Location: ../Wdataentery.php");
}
