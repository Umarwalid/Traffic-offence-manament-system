<?php
    session_start();
    if (isset($_SESSION['username'])) {
     
        
    } else {
        

        $_SESSION['username'] = "yourloginprocesshere";
        $_SESSION['id'] = 444;
    }
?>
