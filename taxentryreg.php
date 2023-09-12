
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include './_dbconnect.php';
    $holdingno = $_POST['holdingno'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $gram = $_POST['gram'];
    $ward = $_POST['ward'];

    $tax = $_POST['tax'];

           
   


     
       $sql = "INSERT INTO `taxentry`(`holdingno`, `name`, `fatherhusband`, `gram`, `ward`, `totaltax`)  VALUES ('$holdingno','$name','$fname','$gram','$ward','$tax')";
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:taxentry.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }

?>