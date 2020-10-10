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
                        <div class="col-xs-6">
                      
                            
                            <?php insert_category(); ?>
                            
                        <form action="" method="post">
                            <div class="form-group">
                            <label for="cat-title">Add Category</label>
                            <input class="form-control"type="text" name="cat_title">
                            </div>
                             <div class="form-group">
                            <input class ="btn btn-primary"type="submit" name="submit" value="Add Category">
                            </div>
                            </form>
                        <form action="" method="post">
                            <div class="form-group">
                            <label for="cat-title">Update Category</label>
<?php         //updateCATEGORIES QUERY
    
                                
    if(isset($_GET['update'])) {
    $cat_id = $_GET['update'];  
    $query = "SELECT * FROM category WHERE cat_id =  $cat_id ";             $select_category_id = mysqli_query($connect,$query);     
    while($row = mysqli_fetch_assoc( $select_category_id))
    {
        $cat_id = $row['cat_id'];   
        $cat_title= $row['cat_title'];  
      
?>
                                
    <input value="<?php if(isset($cat_title)){echo $cat_title; } ?>"class="form-control"type="text" name="cat_title">                     
                                
        
   <?php } } ?>
                                
<?php  //update query
    
    if(isset($_POST['cat_title']))
   {
       $the_cat_title = $_POST['cat_title'];
       $query = "UPDATE category SET cat_title= '{$the_cat_title}' WHERE cat_id = {$cat_id} ";     
       $update_query = mysqli_query($connect,$query);              
        if(!$update_query)
        {
            die("QUERY FAILED" . mysqli_error($connect));
        }
       
       
   }                                           
                                
                                
                                
?>
                                
 
                            </div>
                             <div class="form-group">
                            <input class ="btn btn-primary"type="submit" name="update" value="Update Category">
                            </div>
                            </form>
                         </div>
                            
                            
                         </div><!-- Add Category Form -->
                        
                         
                         </div>
                        
                    <div class="col-xs-6">
                                                
                    <table class="table table-bordered table-hover">
                        <thead>
                    <tr>
                          <th>ID</th>
                          <th>Category Title</th>
                                
                    </tr>
                       </thead>
                        
                        <tbody>

<?php         //FIND ALL CATEGORIES QUERY
                            
   $query = "SELECT * FROM category";                           $select_category = mysqli_query($connect,$query);
         
   while($row = mysqli_fetch_assoc( $select_category))
   {
       
   $cat_id = $row['cat_id'];   
   $cat_title= $row['cat_title'];
       
 echo "<tr>" ;     
 echo "<td>{$cat_id}</td>";
 echo "<td>{$cat_title}</td>";
 echo "<td><a href='category.php?delete={$cat_id}'>Delete</a></td>";
 echo "<td><a href='category.php?update={$cat_id}'>Update</a></td>";
 echo "</tr>" ;  
  
    }
                                
?>     
                            
<?php  //Delete query
   if(isset($_GET['delete']))
   {
       $the_cat_id = $_GET['delete'];
       $query = "DELETE FROM category WHERE cat_id = {$the_cat_id} ";     $delete_query = mysqli_query($connect,$query);              
       header("Location: category.php"); //refresh                   
       
       
   }                         
                    
                            
?>
                            
                            
                            

                            
                          
    
                            
                            

                            
                            
                            
                            
                            

                       </tbody>
         
                    </table>
                            
                            
                            
                            
                            
                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php"; ?>
  
