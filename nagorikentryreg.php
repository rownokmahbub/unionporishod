
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
    $mnum = $_POST['mnum'];
    $gender = $_POST['gender'];
    $dakghor = $_POST['dakghor'];
    
           
   


     
       $sql = "INSERT INTO `nagorik`(`sarok`, `name`, `fathername`, `mothername`, `gram`, `word`, `birthno`, `voterid`, `mobileno`,`gender`,`dakghor`) VALUES ('$sarok','$name','$fname','$mname','$gram','$ward','$birthno','$voterid','$mnum','$gender','$dakghor')";
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:nagorikentry.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }

?>