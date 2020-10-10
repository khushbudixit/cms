
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
                        
                            
                            
                            <small>
                            <?php   
                                 echo $_SESSION['username'];
                            ?>
                            </small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                
                                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <?php
                                
                 $query = "SELECT * FROM posts";
                $select_posts = mysqli_query($connect,$query);
                                    
        $post_count = mysqli_num_rows($select_posts);
                    echo  "<div class='huge'>{$post_count}</div>"  ;       
                                
                                
                                ?>
              
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                     <div class='huge'>23</div>
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                                
                        $query = "SELECT * FROM user";
                       $select_user = mysqli_query($connect,$query);
                                    
                       $user_count = mysqli_num_rows($select_user);
                       echo  "<div class='huge'>{$user_count}</div>"  ;       
                                
                                
                                ?>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="view.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                                
                           $query = "SELECT * FROM category";
                           $select_cat = mysqli_query($connect,$query);
                                    
                           $cat_count = mysqli_num_rows($select_cat);
                           echo  "<div class='huge'>{$cat_count}</div>"  ;       
                                
                                
                        ?>
           
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="category.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
           
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php"; ?>
  
