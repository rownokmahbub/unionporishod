<?php
include './_dbconnect.php';

  
    if (isset($_POST['submit'])) {
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
        
        
        
        
        $edit="UPDATE `nagorik` SET `sarok`='$sarok',`name`='$name',`fathername`='$fname',`mothername`='$mname',`gram`='$gram',`word`='$ward',`birthno`='$birthno',`voterid`='$voterid',`mobileno`='$mnum',`gender`='$gender',`dakghor`='$dakghor' WHERE `sarok`='$sarok'";
        echo $edit;
        $query=mysqli_query($con,$edit);
        if($query){
            header("location:nagoriktable.php");
        }
    }
?>