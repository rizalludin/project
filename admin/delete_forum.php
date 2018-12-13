<?php  
    include("../include/config.php");  
    $delete_id=$_GET['del'];  
    $delete_query="delete  from forum_topic WHERE id_topic='$delete_id'"; 
    $result=mysqli_query($conn,$delete_query);  
    if($result)  
    {   
        echo "<script>window.open('view_forum.php?deleted=forum has been deleted','_self')</script>";  
    }  
      
    ?>  
