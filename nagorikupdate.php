
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include './_dbconnect.php';
    $sarok = $_POST['hid'];
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
           
   


     
       $sql = "UPDATE `nagorik` SET `sarok`='$sarok',`name`='$name',`fathername`='$fname',`mothername`='$mname',`gram`='$gram',`word`='$ward',`birthno`='$birthno',`voterid`='$voterid',`mobileno`='$mnum',`gender`='$gender',`dakghor`='$dakghor' WHERE `sarok`=$sarok";;
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:nagoriktable.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }

?>