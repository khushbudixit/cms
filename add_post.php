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
                            <small>Author</small>
                        </h1>   
   
<?php

if(isset($_POST['create_post']))
{
    
    
    $post_title =  $_POST['title'];
    $post_author= $_POST['author'];
    $post_date = date('d-m-y');
   // $post_image = $_FILES['images']['name'];
    $post_image_temp =$_FILES['image']['tmp_name'];
    
    
    $post_content = $_POST['content'];
    $post_tags = $_POST['tags'];
    
    //move_uploaded_file( $post_image_temp, "./images/$post_image" );
    
                                
   $query =" INSERT INTO posts(post_title,post_author,post_date,post_content,post_tags) ";
   $query .= "VALUES('{$post_title}','{$post_author}','{$post_date }','{$post_content}','{$post_tags}') ";
   $post_create = mysqli_query($connect,$query);
                                    
     if(!$post_create)
    {
     die("QUERY FAILED" . mysqli_error($connect));
    }
}


?>



<form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label for="cat-title">Post Title</label>
            <input class="form-control"type="text" name="title">
            </div>
                            
          <div class="form-group">
            <label for="cat-title">Post Author </label>
            <input class="form-control"type="text" name="author">
            </div>
                    
      <div class="form-group">
            <label for="cat-title">Date</label>
            <input class="form-control" type="date" name="date">
            </div>
                    
      <div class="form-group">
            <label for="cat-title">Image</label>
            <input type="file" name="image">
         
            </div>
                    
      <div class="form-group">
            <label for="cat-title">Content</label>
            <input class="form-control"type="text" name="content">
            </div>
                    
      <div class="form-group">
            <label for="cat-title">Tags</label>
            <input class="form-control"type="text" name="tags">
            </div>
      
      <div class="form-group">
     <input class ="btn btn-primary"type="submit" name="create_post" value="Publish Posts">
    </div>
</form>
                        
                        
                        
                    
                        
                        
                        
                                 
                         </div>
                            
                            
                         </div><!-- Add Category Form -->
                        
                         
                         </div>
                        
    
                            
                            
                            
                            
                            
                        </div>
                        
             
<?php include "includes/admin_footer.php"; ?>
  
