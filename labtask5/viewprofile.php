

<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
        <div class="container" style="width:500px;">  
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <h1 align="center">

        <font face="Lato" color="#017bf5" size="7">
            Your profile info
        </font>
                    
    </h1>            
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>User name</th>   
                               <th>Gender</th>   
                                
                          </tr>  
                          <?php  
                          session_start();

     include("connection.php");
     include("functions.php"); 
                                   $query ="select * from manager_info  ";

               $result = mysqli_query($con, $query);

              //$result = mysqli_query($con, $query);
                          while($row=mysqli_fetch_array($result))  
                          {
                         ?>  
                          <tr>
                               <td> <?php echo $row['name'];?> </td>
                               <td> <?php echo $row['email'] ?></td>
                               <td> <?php echo $row['user_name'] ?></td>
                               <td> <?php echo $row['gender']?> </td>
                               
                               
                             
                         </tr>
                         <?php  
                          }  
                           ?>
                     </table>  
                   </div>
                 </div>
    <h1 align="center">
     <a href="profile.php">Go back</a>&nbsp;&nbsp;&nbsp;&nbsp;
     </h1> 

      </body>  
 </html>  