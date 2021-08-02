<?php  
session_start();

     include("connection.php");
     //include("functions.php");
   //$user_data = check_login($con);
    // session_start();

if (isset($_SESSION['user_id'])) {
    //echo "<h1> Welcome </h1>";
    //echo "<h1> Welcome ".$_SESSION['user_name']."</h1>";


}
else{
        header("location:login.php");
        // echo "<script>location.href='login.php'</script>";
    }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        welcome
    </title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>

    <br />
    
    <h3 align="center">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font face="cinzel" size="4">
            <a href="viewprofile.php">view profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="editprofile.php">edit profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="logout.php">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;

            


        </font>
    </h3>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <h1 align="center">

        <font face="Lato" color="#017bf5" size="7">
            welcome to your profile
        </font>
    </h1>
</body>
</html>

