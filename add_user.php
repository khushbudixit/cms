<!DOCTYPE html>
<html lang="en">
<?php include "includes/admin_header.php"; ?>
<body>
    <div id="wrapper">
        <!-- Navigation -->
       <?php include "includes/admin_navigation.php"; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Welcome to Admin
                           
                        </h1>   
              
                        
                        

<?php

if(isset($_POST['create_user']))
{
    
    
    $username =  $_POST['username'];
    $user_passwd= $_POST['user_passwd'];
    $user_email= $_POST['user_email'];
   // $user_image = $_FILES['images']['name'];
    //$user_image_temp =$_FILES['image']['tmp_name'];
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
            <input class ="btn btn-primary"type="submit" name="create_user" value="Create User">
            </div>
            </form>    
   


               
                         </div>
                            
                            
                         </div><!-- Add Category Form -->
                        
                         
                         </div>
                        
    
                            
                            
                            
                            
                            
                        </div>
                        
        </div>
<?php include "includes/admin_footer.php"; ?>
  