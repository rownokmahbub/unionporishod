<?php
include './_dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `nagorik` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:./nagoriktable.php");
        }
    
?>