<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('Location:subuser.php'); 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome  Home</title>
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

<!--navigation-->
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">
        <div class="flex space-x-7">
          <div>
            <!-- Website Logo -->
            <a href="#" class="flex items-center py-4 px-2">
              <img src="Assets/logo.png" alt="Logo" class="h-8 w-8 mr-2">
              <span class="font-semibold text-gray-500 text-lg">UP </span>
            </a>
          </div>
          <!-- Primary Navbar items -->
          <div class="hidden md:flex items-center space-x-1">
            <a href="taxentry.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Taxentry</a>
            <a href="tadeentry.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Tadeentry</a>
            <a href="banijjik.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Banijjik kor</a>
            <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact Us</a>
          </div>
        </div>
        <!-- Secondary Navbar items -->
        <div class="hidden md:flex items-center space-x-3 ">
  
          

<button class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide
text-white transition duration-200 rounded-full shadow-md bg-purple-400
hover:bg-purple-700 focus:shadow-outline focus:outline-none" type='submit'>Log Out</button>
</form>
        </div>
        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button class="outline-none mobile-menu-button">
          <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
            x-show="!showMenu"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
        </div>
      </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
      <ul class="">
        <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
        <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a></li>
        <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a></li>
        <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li>
      </ul>
    </div>
    <script>
      const btn = document.querySelector("button.mobile-menu-button");
      const menu = document.querySelector(".mobile-menu");

      btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
      });
    </script>
  </nav>


<!--create blog-->

<div class="relative px-4 pt-16 mx-auto lg:py-32 md:px-8 xl:px-20 sm:max-w-xl md:max-w-full">
    <div class="max-w-xl mx-auto lg:max-w-screen-xl">
        <div class="mb-16 lg:max-w-lg lg:mb-0">
            <div class="max-w-xl mb-6">
                <div>
                    <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                       Hello There
                    </p>
                </div>
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    Mr Rownok<br class="hidden md:block" />
                    Welcome to Your Dashboard

                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                   here you can upload your new blog with so many category .Okey now
                    let's create some blog by clicking this create blog button
                </p>
            </div>
            <div class="flex items-center">
                <a
                        href="importfile.php"
                        class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide
                 text-white transition duration-200 rounded shadow-md bg-purple-400
                  hover:bg-purple-700 focus:shadow-outline focus:outline-none"
                >
                    Add Entries
                </a>

            </div>
        </div>
    </div>
    <div class="flex justify-center h-full overflow-hidden lg:w-2/3 xl:w-1/2 lg:absolute lg:justify-start lg:bottom-0 lg:right-0 lg:items-end">
        <img src="https://kitwind.io/assets/kometa/full-browser.png" class="object-cover object-top w-full h-64 max-w-xl -mb-16 rounded shadow-2xl lg:ml-64 xl:ml-8 lg:-mb-24 xl:-mb-28 lg:h-auto lg:max-w-screen-md" alt="" />
    </div>
</div>
</body>
</html>