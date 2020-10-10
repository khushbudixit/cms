<!DOCTYPE html>
<html lang="en">
<?php include "includes/header.php"; ?>
<body>
    <div id="wrapper">
        <!-- Navigation -->
       
        <div id="page-wrapper">
            <div class="container-fluid">
<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" class="container">
                          Welcome to CMS 
                            Register here :)
                        </h1>   
              
                        
                        

<?php

if(isset($_POST['register']))
{
    
    
    $username =  $_POST['username'];
    $user_passwd= $_POST['user_passwd'];
    $user_email= $_POST['user_email'];
    $user_image = $_FILES['images']['name'];
    $user_image_temp =$_FILES['image']['tmp_name'];
    $user_role = $_POST['user_role'];
    
  
   // move_uploaded_file( $user_image_temp, "../images/$user_image");
    
                                
   $query =" INSERT INTO user(username,user_passwd,user_email,user_role) ";
   $query .= "VALUES('{$username}','{$user_passwd}','{$user_email }','{$user_role}')  ";
   $user_create = mysqli_query($connect,$query);
                                    
     if(!$user_create)
    {
     die("QUERY FAILED" . mysqli_error($connect));
    }
}


?>
                        
                        
                        
                        
                        
                    

           <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label for="username">UserName</label>
            <input class="form-control"type="text" name="username">
            </div>
            <div class="form-group">
            <label for="user_passwd">Password</label>
            <input class="form-control"type="password" name="user_passwd">
            </div>   
            <div class="form-group">
            <label for="user_email">Email Address</label>
            <input class="form-control"type="email" name="user_email">
            </div> 
          
            <div class="form-group">
            <label for="username">User Role</label>
            <input class="form-control"type="text" name="user_role">
            </div> 
            <div class="form-group">
            <input class ="btn btn-primary"type="submit" name="register" value="Register">
            </div>
            </form>    
   


               
                         </div>
                            
                            
                         </div><!-- Add Category Form -->
                        
                         
                         </div>
                        
    
                            
                            
                            
                            
                            
                        </div>
                        
        </div>
<?php include "includes/footer.php"; ?>
  