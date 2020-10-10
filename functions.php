  <?php

 function insert_category(){
     
     global $connect;
      
                            if(isset($_POST['submit']))
                                
                                
                            {
                                $cat_title =$_POST['cat_title'];
                                
                                
                                if($cat_title == "")
                                {
                                    echo "please enter category";
                                }
                                else
                                {
                                    $query =" INSERT INTO category(cat_title) ";
                                    $query .= "VALUES('{$cat_title}') ";
                                    
                                    $create = mysqli_query($connect,$query);
                                    
                                    if(!$create)
                                    {
                                        die("QUERY FAILED" . myqli_error($connect));
                                    }
                                    
                                }
                                
                            
                            }
                            
                            
                           
     
     
 }


?>


