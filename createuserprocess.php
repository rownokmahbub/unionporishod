
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){

  
    if(
        isset($_POST['email']) &&
        isset($_POST['password'])  &&
        !empty($_POST['email']) &&
        !empty($_POST['password'])
    )
    include '_dbconnect.php';
    $email = $_POST['email'];
           
    $password =  $_POST['password'];

       // We are going to insert the data into our sampleDB table
       
       $sql = "INSERT INTO `subuser`( `email`, `password`) VALUES ('$email','$password')";

   // Check if the query is successful
   if(mysqli_query($con, $sql)){

    
    header("Location:adminhome.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }

?>