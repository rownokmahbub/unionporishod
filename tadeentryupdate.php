
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include './_dbconnect.php';
     $id = $_POST['hid'];
    $licence = $_POST['licenceno'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $ward = $_POST['word'];
    $bplace = $_POST['bplace'];
    $tradename = $_POST['tradename'];
    $bdhoron = $_POST['bdhoron'];
    $kor = $_POST['kor'];
    $vid = $_POST['voterid'];
    $mnum = $_POST['mnum'];
    $upozela = $_POST['upozela'];
    $zela = $_POST['zela'];
    
           
   


     
       $sql = "UPDATE `tadeentry` SET `licence_no`='$licence',`name`='$name',`father_husband`='$fname',`mother_name`='$mname',`word`='$ward',`bplace`='$bplace',`tradename`='$tradename',`babshardhoron`='$bdhoron',`kor`='$kor',`voterid`='$vid',`mobileno`='$mnum',`upozela`='$upozela',`zela`='$zela' WHERE `id`=$id";;
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:tadeentrytable.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }

?>