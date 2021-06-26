
<!DOCTYPE html>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
	<form method="post" action="">
  <table>
   <tr>
    <td>User Name :</td>
    <td><input type="text" name="Uname" placeholder="User name"></td>
   </tr>
   
   
   <tr>
    <td>Pasword :</td>
    <td><input type="Pasword" name="pasword"></td>
   </tr>


   <tr>
    <td>remember me :</td>
    <td>
     <input type="checkbox" name="remember :">


    </td>
   </tr>





   <tr>
    <td></td>
    <td><input type="submit" name="submit"></td>
   </tr>
 
  
  </table>
 </form>


</body>
</html>
<?php

    
  if(isset($_POST['submit']))
  {
  if($_POST['Uname'] == "")
    {echo "User Name cannot be empty\n";}
  $Uname = $_POST['Uname']; 
  if (!preg_match("/^[a-zA-Z -]*$/",$Uname))
  {
    echo "only letter allowed in name field/n";
  }
    if($_POST['pasword'] == "")
    {echo "pasword cannot be empty\n";}


  }

?>