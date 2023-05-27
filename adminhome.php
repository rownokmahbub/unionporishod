<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('Location:login2.php'); 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
  
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class='flex flex-col justify-center items-center md:h-screen'>
        <p>Welcome Admin</p>
 <form action="logout.php">
  
    <a href='createuser.php' class='px-4 py-2 cursor-pointer bg-teal-500 rounded-full text-white font-semibold'> Create User</a>
    <input type="button" class="px-4 py-2 bg-blue-500 rounded-3xl mt-10 text-white cursor-pointer"  value="User Log here" onclick="log();" >
        <script> function log(){
             location.assign('userlog.php');
        }</script>
        <br><br>
    <button class="px-4 py-2 bg-red-500 rounded-3xl mt-4 text-white cursor-pointer" type='submit'>Log Out</button>
    </form>
    </div>
   
</body>
</html>