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
    
    if(isset($_POST['update']))
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
                       
                        