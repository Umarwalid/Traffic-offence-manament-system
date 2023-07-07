<?php
$con = mysqli_connect('localhost:3306','root','','rtla');
if(!$con){
    echo " Not connected to the database".mysqli_error($con);
}
?>