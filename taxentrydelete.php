<?php
include './_dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `taxentry` WHERE `holdingno`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:./taxentryedit.php");
        }
    
?>