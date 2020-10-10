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
<!--
       
-->
                        
                        
                        
                        
    <table class="table table-bordered table-hover">
     <thead>
         <tr>
               <th>ID</th>
               <th>UserName</th>
              
               <th>Email</th>
               <th>role</th>
              
         </tr>
     </thead>
     <tbody>
     <?php
         $query = "SELECT * FROM user"; 
         $select_user= mysqli_query($connect,$query);
         
   while($row = mysqli_fetch_assoc( $select_user))
   {
       
   $user_id = $row['user_id']; 
   $username = $row['username'];     
   $user_email= $row['user_email'];
   $user_role = $row['user_role'];
 
  
    
           
       
         
          echo "<tr>" ;     
          echo "<td>{$user_id}</td>";
          echo "<td>{$username}</td>";   
          echo "<td>{$user_email}</td>"; 
          echo "<td>{$user_role}</td>"; 
          echo "<td><a href='view.php?delete={$user_id}'>Delete</a></td>";
 echo "<td><a href='view.php?update={$user_id}'>Update</a></td>";
       echo"</tr>";
          
          }
     ?>        

         
         
                                    
<?php  //Delete query
   if(isset($_GET['delete']))
   {
       $the_user_id = $_GET['delete'];
       $query = "DELETE FROM user WHERE user_id = {$the_user_id} ";     
       $delete_query = mysqli_query($connect,$query);              
       header("Location: view.php"); //refresh                   
       
       
   }                         
                    
                            
?>
                            
                            
                            

         
    
     </tbody>
           
 </table>
                        
   
                        
             
                        
                        
                         </div>
                            
                            
                         </div><!-- Add Category Form -->
                        
                         
                         </div>
                        
    
                            
                            
                            
                            
                            
                        </div>
                        
             
<?php include "includes/admin_footer.php"; ?>
  
