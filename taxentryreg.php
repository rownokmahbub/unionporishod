<?php
     include '_dbconnect.php';/// received data collect
      
    // to receive the post data we need to call $_POST variable
    // $_POST represents an associative array

    if($_SERVER["REQUEST_METHOD"] == "POST"){

   
       
        $var1=$_POST['holdingno'];
        $var2=$_POST['name'];
        $var3=$_POST['fname'];
        $var4=$_POST['gram'];
        $var5=$_POST['ward']; 
        $var6=$_POST['housetype']; 
        $var7=$_POST['roomno']; 
        $var8=$_POST['tax'];
        $var9=$_POST['mnum'];
         
         
     
   $sql="INSERT INTO `taxentry`(`holdingno`, `name`,`fatherhusband`, `gram`, `ward`, `housetype`, `roomno`, `totaltax`, `voterid`) VALUES ('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9'";

   

if(mysqli_query($con, $sql)){


header("Location:taxentry.php");
      
} else{
   echo "ERROR: Hush! Sorry $sql. "
       . mysqli_error($con);
}

// Close conection
mysqli_close($con);
}

       // echo $query;
 ?>