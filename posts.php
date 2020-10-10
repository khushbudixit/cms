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
                        
         <?php
                        
        if(isset($_GET['source']))
        {
            
            $source = $_GET['source'];
            
            
            
        }
                        
        else{
            
            $source ='';
        }
        switch($source){
                
                case '34';
                echo "NICE 34";
                break;
                
                
                
            default:
                
                include "includes/view_all_posts.php";
                break;
                
                
        }
                        
                        
                        
                        
                        
        ?>
-->
                        
                        
                        
                        
                        <table class="table table-bordered table-hover">
     <thead>
         <tr>
               <th>ID</th>
               <th>Title</th>
               <th>Author</th>
               <th>Date</th>
               <th>Image</th>
               <th>Content</th>
               <th>Tags</th>
         </tr>
     </thead>
     <tbody>
     <?php
         $query = "SELECT * FROM posts"; 
         $select_posts = mysqli_query($connect,$query);
         
   while($row = mysqli_fetch_assoc( $select_posts))
   {
       
   $post_id = $row['post_id']; 
   $post_title = $row['post_title']; 
   $post_author = $row['post_author'];       
   $post_date= $row['post_date'];
   $post_image = $row['post_image'];
   $post_content = $row['post_content'];
   $post_tags = $row['post_tags'];
  
    
           
       
         
          echo "<tr>" ;     
          echo "<td>{$post_id}</td>";
          echo "<td>{$post_title}</td>";   
          echo "<td>{$post_author}</td>"; 
          echo "<td>{$post_date}</td>"; 
          echo "<td><img width='100' src='../images/$post_image'></td>"; 
          echo "<td>{$post_content}</td>"; 
          echo "<td>{$post_tags}</td>";  
          echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
 echo "<td><a href='posts.php?update={$post_id}'>Update</a></td>";
       echo"</tr>";
          
          }
     ?>        

         
         
                                    
<?php  //Delete query
   if(isset($_GET['delete']))
   {
       $the_post_id = $_GET['delete'];
       $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";     
       $delete_query = mysqli_query($connect,$query);              
       header("Location: posts.php"); //refresh                   
       
       
   }                         
                    
                            
?>
                            
                            
                            

         
    
     </tbody>
           
 </table>
                        
   
                        
             
                        
                        
                         </div>
                            
                            
                         </div><!-- Add Category Form -->
                        
                         
                         </div>
                        
    
                            
                            
                            
                            
                            
                        </div>
                        
             
<?php include "includes/admin_footer.php"; ?>
  
