<?php
    include '_dbconnect.php';/// received data collect

    // to receive the post data we need to call $_POST variable
    // $_POST represents an associative array

    
       
        /// to establish a connection with database server
        
        $var0=$_POST['licence'];
        $var1=$_POST['name'];
        $var2=$_POST['fname'];
        $var3=$_POST['mname'];
        $var4=$_POST['ward'];
        $var5=$_POST['vid']; 
        $var6=$_POST['kor'];
        $var7=$_POST['mes'];
        $var8=$_POST['bdhoron'];
         
         
     
   $query=" INSERT INTO `tadeentry`(`licence_no`, `name`, `father_husband`, `mother_name`, `word`, `voterid`, `kor`, `messars`, `babshardhoron`) VALUES ('$var0','$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8')";

	if(mysqli_query($con, $query)){

    
	  header('location:tadeentry.php');
        }
        else{
          
	 header('location:userhome.php');
        }

      // echo $query;
 ?>