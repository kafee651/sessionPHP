<?php
    session_start();
   
    if( isset( $_SESSION['userid'] ) ) {
        header("location: profile.php");
    }
    else if(!$_POST['userid']{
        $_SESSION['userid']=$_POST['userid'];
        header("location: profile.php");
    }
    else{
        header("location: login.php");
    }
      
?>