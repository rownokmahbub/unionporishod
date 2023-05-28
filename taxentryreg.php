<?php
     include '_dbconnect.php';/// received data collect
      session_start();
    // to receive the post data we need to call $_POST variable
    // $_POST represents an associative array

    
       
        /// to establish a connection with database server
        
       
        $var2=$_POST['holdingno'];
        $var3=$_POST['name'];
        $var4=$_POST['fname'];
        $var5=$_POST['gram'];
        $var6=$_POST['ward']; 
        
        
         $var8=$_POST['tax'];
         $var9=$_POST['mnum'];
         
         
     
   $query=" INSERT INTO `taxentry`(`holdingno`, `name`, `fatherhusband`, `gram`, `ward`, `totaltax`, `voterid`) VALUES ('$var2','$var3','$var4','$var5','$var6','$var8','$var9')";

	if(mysqli_query($con, $query)){
    
 $_SESSION['tax_entry'] = 'success';
 echo 'inset successfull';
  header('location:taxentry.php');
      
	 
        }
        else{
      $_SESSION['tax_entry'] = 'error';
      header('location:taxaday.php');
        }

       // echo $query;
 ?>