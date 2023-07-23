

<?php
 session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    include './_dbconnect.php';
  
    if(
        isset($_POST['email']) &&
        isset($_POST['password'])  &&
        !empty($_POST['email']) &&
        !empty($_POST['password'])
    )

    $email = $_POST['email'];
           
    $password =  $_POST['password'];

       // We are going to insert the data into our sampleDB table
       echo 'fgfg';
       $sql = "SELECT * FROM `subuser` WHERE email = '$email' and password='$password'";
       echo $sql;
   // Check if the query is successful
   if(mysqli_query($con, $sql)){
    $_SESSION['email'] = $email;
    header("Location:userhome.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }

?>