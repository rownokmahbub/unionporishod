
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include './_dbconnect.php';
    $holdingno = $_POST['holdingno'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $gram = $_POST['gram'];
    $ward = $_POST['ward'];
    $housetype = $_POST['housetype'];
    $roomno = $_POST['roomno'];
    $tax = $_POST['tax'];
    $mnum = $_POST['mnum'];
           
   


     
       $sql = "INSERT INTO `taxenrty`(`holdingno`, `name`, `fatherhusband`, `gram`, `ward`, `housetype`, `roomno`, `totaltax`, `voterid`)  VALUES ('$holdingno','$name','$fname','$gram','$ward','$housetype','$roomno','$tax','$mnum')";
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:phome.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }

?>