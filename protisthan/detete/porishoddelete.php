<?php
include '../../_dbconnect.php';

  
    
        $id = $_POST['id'];
     
        
        $delete="DELETE FROM `upprotisthan` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:../edit/pedit.php");
        }
    
?>