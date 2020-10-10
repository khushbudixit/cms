<?php include "db.php" ?>

<?php  session_start();  ?>

<?php
    
    if(isset($_POST['login']))
        
    {
     $username=$_POST['username'];
     $passwd=$_POST['passwd'];
        
        
    $username=mysqli_real_escape_string($connect,$username);
    $passwd=mysqli_real_escape_string($connect,$passwd);    
      
        
        
        
    $query = "SELECT * FROM user WHERE username = '{$username}' ";        
    $select_user = mysqli_query($connect,$query);
        
    if(!$select_user)
    {
        die("Query FAILED" . mysqli_error($connect));
    }
        
        
        while($row = mysqli_fetch_array($select_user))
        {
            $db_id = $row['user_id'];
            $db_username = $row['username'];
            $db_passwd =$row['user_passwd'];
            $db_email=$row['user_email'];
            $db_role=$row['user_role'];
       
          
            
        }
      if($username !== $db_username && $passwd !== $db_passwd)
      {
          
          header("Location: ../index.php");
      }
        else if ($username == $db_username && $passwd == $db_passwd)
        {
            
            $_SESSION['username'] = $db_username;
               
            $_SESSION['user_email'] = $db_email;
               
            $_SESSION['user_role'] = $db_role;
               
        
            header("Location: ../admin");
            
            
        }
        else
        {

            header("Location: ../index.php");
        
        
        }
    
     
        
        
        
        
        
        
        
        
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    ?>