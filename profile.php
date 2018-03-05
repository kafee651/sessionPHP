<!DOCTYPE HTML>
<?php
    session_start();
   
    if( !isset( $_SESSION['userid'] ) ) {
        header("location: login.php");
    }
      
?>
<html lang="en">
    <head>
        <title>Session test</title>
    </head>
    <body>
    <h1>Hi kafee<?php echo $_SESSION['userid']?></h1>
    <a href="logout.php">Logout</a>
    </body>
</html>