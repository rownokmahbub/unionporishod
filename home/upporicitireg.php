
<?php

 if($_SERVER["REQUEST_METHOD"] == "POST"){

  
   
    include '../_dbconnect.php';
    $up = $_POST['poriciti'];
           
    


    
       $sql = "INSERT INTO `unionporiciti`(`poriciti`) VALUES ('$up')";
      
       
   if(mysqli_query($con, $sql)){
    print_r(error_get_last());
   
    header("Location:home.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }

?>