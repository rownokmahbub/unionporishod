<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">


</head>

<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50">
  <div class="flex flex-col md:flex-row px-5 justify-between items-center md:h-screen">
    <div class="space-y-2">
      <p class='text-4xl font-semibold leading-snug'>Welcome Dear Sir/Maa'm <br> To Your Admin Panel</p>
      <p class='m'>Here you can update your file and website easily</p>
      <form action="logout.php">

        <a href='createuser.php' class='px-4 py-2.5 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition'> Create User</a>
        <input type="button" class="px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition" value="User Log" onclick="log();">
        <script>
          function log() {
            location.assign('userlog.php');
          }
        </script>
        <div class="flex items-center gap-1 mt-3">
          <a href='home/home.php' class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition'>HomePage</a>
          <a href='./gallery/ghome.php' class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition'>Gallery</a>
          <a href='./protisthan/phome.php' class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition'>Protisthan</a>

        </div>
        <br><br>
        <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full duration-300 text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type='submit'>Log Out</button>
      </form>
    </div>
    <img class='max-w-xl' src="Assets/adminhome.png" alt="admin home">
  </div>


</body>

</html>