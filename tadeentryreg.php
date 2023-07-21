
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include './_dbconnect.php';
    $licence = $_POST['licence'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $ward = $_POST['ward'];
    $bplace = $_POST['bplace'];
    $tradename = $_POST['tradename'];
    $bdhoron = $_POST['bdhoron'];
    $kor = $_POST['kor'];
    $vid = $_POST['vid'];
           
   


     
       $sql = "INSERT INTO `tadeentry`(`licence_no`, `name`, `father_husband`, `mother_name`, `word`, `bplace`, `tradename`, `babsardhoron`, `kor`, `voterid`)  VALUES ('$licence','$name','$fname','$mname','$ward','$bplace','$tradename','$bdhoron','$kor','$vid')";
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:tadeentry.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }

?>