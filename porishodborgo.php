

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css"  rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
  <script>
    tailwind.config = {
      theme: {
        colors: {
      primary: '#075985',
      secondary: '#0284c7',
    },
        extend: {
    animation: {
      marquee: 'marquee 35s linear infinite',
    },
    keyframes: {
      marquee: {
        '0%': { transform: 'translateY(0%)' },
        '100%': { transform: 'translateY(-100%)' },
      }
    },
  }
      }
    }
  </script>
 
</head>
<body class="md:px-32 mx-auto bg-gradient-to-r from-teal-50 to-sky-50">
	<!-- Navbar goes here -->
  <?php
include './navbar.php'
?>
<!--hero section-->
<div class="my-10 px-5">
    <p class="text-center text-3xl font-semibold mb-5">পরিষদ বর্গ</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-5 ">
    <?php
                    include './_dbconnect.php';
                    $query = "SELECT * FROM `porishodborgo` ORDER BY `id` ASC";
                    $poriciti = mysqli_query($con, $query);
                    
                    while ($row = mysqli_fetch_assoc($poriciti)) {
                        $id=$row['slno'];
                        
                    ?>
  <div class="bg-[#ffffff] drop-shadow-lg flex flex-col max-h-96 items-center rounded-xl overflow-hidden">
            <p class="bg-primary px-5 py-2 text-lg font-semibold w-full text-white capitalize text-center"><?php echo $row['podobi']; ?></p>
          
            <img class="w-full max-h-56  min-h-28" src="./Assets/image/<?php echo $row['filename']; ?>">
 
 
           <div class='flex flex-col items-center -space-y-1'>
           
         
           
           <p class="text-sm capitalize font-semibold mt-3"><?php echo $row['name']; ?></p>
         
  
            <p class="text-sm  px-2 py-2"><?php echo $row['mobileno']; ?></p>
           </div>
      
        </div>
                    <?php
        }
        ?>
      
    
       
       
    </div>
</div>


  <!-- footer area -->
  <div class="px-4  mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
      <div class="md:max-w-md lg:col-span-2">
        <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
        <img src="Assets/logo.png" alt="logo">
          <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">UP</span>
        </a>
        <div class="mt-4 lg:max-w-sm">
          <p class="text-sm text-gray-800">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
          </p>
          <p class="mt-4 text-sm text-gray-800">
            Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
          </p>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
        <div>
          <p class="font-semibold tracking-wide text-gray-800">Category</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">News</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">World</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Games</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">References</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="font-semibold tracking-wide text-gray-800">Business</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Web</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">eCommerce</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Business</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Entertainment</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Portfolio</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="font-semibold tracking-wide text-gray-800">Apples</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Media</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Brochure</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Nonprofit</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Educational</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Projects</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="font-semibold tracking-wide text-gray-800">Cherry</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Infopreneur</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Personal</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Wiki</a>
            </li>
            <li>
              <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Forum</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="flex flex-col justify-between pt-5 pb-10 border-t sm:flex-row">
      <p class="text-sm text-gray-600">
        © Copyright 2020 Lorem Inc. All rights reserved.
      </p>
      <div class="flex items-center mt-4 space-x-4 sm:mt-0">
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
            ></path>
          </svg>
        </a>
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
            <circle cx="15" cy="15" r="4"></circle>
            <path
              d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
            ></path>
          </svg>
        </a>
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
            ></path>
          </svg>
        </a>
      </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
<script src="style.js"></script>
</body>
</html>