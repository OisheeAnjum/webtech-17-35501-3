 <?php  
 $message = '';  
 $error = '';
 
 if(isset($_POST["submit"]))  
 { 

     $newpass = $_POST['newpass'];
     $renewpass = $_POST['renewpass'];

     if($newpass != $renewpass)
     {

         $error = "<label class='text-danger'>passwords doesn't match</label>"; 
     }

 
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter old password</label>";  
      }
      else if(empty($_POST["newpass"]))  
      {  
           $error = "<label class='text-danger'>enter new pasword</label>";  
      } 
      else if(empty($_POST["renewpass"]))  
      {  
           $error = "<label class='text-danger'>re enter new pasword</label>";  
      } 

 }  
 ?>  

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">change password</h3><br />                 
                <form method="post">  
                    <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>
                     <br />  
                     <label>current password</label>  
                     <input type="text" name="current password" /><br />  
                     <label>new password</label>
                     <input type="text" name = "newpass" /><br />
                     <label>retype new password</label>
                     <input type="text" name = "renewpass" /><br />
                    
                     
                     <input type="submit" name="submit" value="save new password" class="btn btn-info" /><br />                      
                          <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
     
     <a href="login.php">Go to login page</a>&nbsp;&nbsp;&nbsp;&nbsp;
     

     <a href="homepage.html">Go to home page</a>&nbsp;&nbsp;&nbsp;&nbsp; 
           <br />  
      </body>  
 </html>  