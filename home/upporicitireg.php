
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include '../_dbconnect.php';
    $up = $_POST['poriciti'];
           
   


     
       $sql = "INSERT INTO `unionporiciti`(`poriciti`) VALUES ('$up')";
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:home.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }

?>