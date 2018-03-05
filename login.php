<!DOCTYPE HTML>
<?php
    session_start();
   
    if( isset( $_SESSION['userid'] ) ) {
        header("location: profile.php");
    }
      
?>
<html lang="en">
    <head>
        <title>Session test</title>
    </head>
    <body>
        <form action="session.php" method="put">
            First name: <input type="text" name="fname"><br>
            Last name: <input type="text" name="lname"><br>
            Userid: <input type="text" name="userid"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>