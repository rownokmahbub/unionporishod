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
    <title>2 step Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>
<body >
<div class="bg-slate-100 flex justify-center items-center md:h-screen">
    <form class="flex flex-col justify-center items-center max-w-3xl px-10 py-10 gap-10 bg-white
    rounded-2xl shadow-2xl shadow-gray-300" action="createuserprocess.php" method="POST">
        <h2 class="text-2xl font-bold">Create Your User Here</h2>

        <input class="px-4 py-2 bg-slate-100 text-gray-500 rounded-xl w-full" type="email" name="email" id="title" placeholder="Enter email" required>

        <input class="px-4 py-2 bg-slate-100 text-gray-500 rounded-xl w-full" type="password" name="password" id="title" placeholder="Enter password" required>
        <button class="px-4 text-lg text-white font-semibold py-2 bg-purple-500 rounded-2xl mt-3 hover:bg-purple-700
         hover:scale-95 transition duration-500" type='submit'>Create User</button>

    </form>
</div>

</body>
</html>