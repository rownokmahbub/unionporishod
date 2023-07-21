
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include './_dbconnect.php';
    $sarok = $_POST['sarok'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $gram = $_POST['gram'];
    $ward = $_POST['ward'];
    $birthno = $_POST['birthno'];
    $voterid = $_POST['voterid'];
    
           
   


     
       $sql = "INSERT INTO `nagorik`(`sarok`, `name`, `fathername`, `mothername`, `gram`, `word`, `birthno`, `voterid`) VALUES ('$sarok','$name','$fname','$mname','$gram','$ward','$birthno','$voterid')";
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