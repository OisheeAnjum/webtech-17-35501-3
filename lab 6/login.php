
<?php  
session_start();

     include("connection.php");
     //include("functions.php");
   // $user_data = check_login($con);



 if(isset($_POST["submit"]))  
 { 
     //$user_id = $_POST['user_id']; 

     $user_name = $_POST['user_name']; 
     $pass = $_POST['pass'];

     if(empty($_POST["user_name"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
     
       else  
      {


              $query ="select * from manager_info where user_name = '$user_name' limit 1";

               mysqli_query($con, $query);

              $result = mysqli_query($con, $query);
              
              //$result=mysql_query($sql);
              if($result)
              {
                if($result && mysqli_num_rows($result) > 0)
                {
                 $user_data = mysqli_fetch_assoc($result);
                    if($user_data['pass'] === $pass)
                      {
                           $_SESSION['user_id'] = $user_data['user_id'];
                           header("Location: profile.php");
                           die;
                       }
      

      
                 }echo "boo!";
              }
              else
              {
                echo "boo!";
              }
    



 
     }  
   }
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>

             <br />  
           <div class="container" style="width:500px;">  
            <h3 align="">login into your account</h3><br /> 
                            
                
                <form method="post">

                     <br />  
                     <label>User Name</label>  
                     <input type="text" name="user_name" placeholder="User name" class="form-control" value="<?php if(isset($_COOKIE["user_name"])) { echo $_COOKIE["user_name"]; } ?>" />
                     <br />  
                     <label>Pasword</label>
                     <input type="text" name="pass"placeholder="type your pasword" class="form-control" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>"> 
                     <br />
                     <input type="submit" name="submit" value="Login" class="btn btn-info" /><br />
                     <input type="checkbox" name="remember" value ="1" /> Remember me
                     

  <table>




    <tr>
    <td><a href="homepage.html">Go back to home page</a></td>
  
   </tr>
   <tr>
 
  
  </table>
 </form>


</body>
</html>


