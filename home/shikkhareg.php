
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include '../_dbconnect.php';
    
    $shikkha = $_POST['shikkha'];
    $shikkhardhoron = $_POST['shikkhardhoron'];
           
   

     
       $sql = "INSERT INTO `shikkha`(`shikkha`, `sshikkhardhoron`) VALUES ('$shikkha','$shikkhardhoron')
       ";
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