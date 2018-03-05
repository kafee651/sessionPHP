
<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Session test</title>
    </head>
    <body>
    <?php
    session_start();
   
    if( isset( $_SESSION['userid'] ) ) {
        echo "if";
        header("location: profile.php");
    }
    else if($_POST['userid']{
        echo "elseif";
        $_SESSION['userid']=$_POST['userid'];
        header("location: profile.php");
    }
    else{
        echo "else";
        header("location: login.php");
    }
      
?>
        <form action="session.php" method="put">
            First name: <input type="text" name="fname"><br>
            Last name: <input type="text" name="lname"><br>
            Userid: <input type="text" name="userid"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>