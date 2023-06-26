
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include '../_dbconnect.php';
    $id = $_POST['id'];
    $seba = $_POST['seba'];
    $sebardhoron = $_POST['sebardhoron'];
           
   


     
       $sql = "INSERT INTO `seba`(`id`, `seba`, `sebardhoron`) VALUES ('$id','$seba','$sebardhoron')";
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