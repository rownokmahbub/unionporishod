<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Secure Login Page</title>
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
        <body>

        <div class="relative flex flex-col justify-center items-center min-h-screen overflow-hidden bg-slate-100">
            <form class="p-10 bg-white r drop-shadow-lg space-y-4 rounded-2xl shadow-2xl shadow-gray-300 flex flex-col" action="verify.php" id="demo-form" method="POST">
                <a href='index.html' class="flex gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                <p>Home</p>
           
                </a>
                

                <!-- Email -->
                <div class="flex flex-col">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" required class="peer border-slate-400 border w-64 rounded-lg px-4 py-2 ">
                    <p class="invisible peer-invalid:visible text-red-700 font-light w-full">
                        Please enter a valid email address
                    </p>
                </div>


                <div class="flex flex-col">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" required class="peer border-slate-400 w-64 border rounded-lg px-2 py-2">

                    <p class="invisible peer-invalid:visible text-red-700 font-light">
                        Please enter your password
                    </p>
                </div>


                <button class="g-recaptcha px-5 py-2 bg-purple-500 text-white rounded-lg" 
        type='submit'>Login</button>
            </form>
          
        </body>
</html>
