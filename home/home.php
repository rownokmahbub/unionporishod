<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('Location:../login2.php'); 
  }
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css"  rel="stylesheet" />

  <link rel="stylesheet" href="style.css">


 
</head>
<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50">
<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
  <div class="flex flex-col items-center max-w-2xl md:px-8">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <a href='../adminhome.php' class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         <img src="../Assets/logo.png" alt="">
        </a>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
          </svg>
          Create Or Edit Your Up Carousal Here
      </h2>
      <form method='POST' action='' class="space-y-5 flex flex-col items-start justify-start">
      <input class='rounded-xl overflow-hidden px-2 py-2 border border-sky-800 w-full' type="file" name="carousal" id="">
      <div class="flex gap-3 justify-center items-center w-full">
        <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition' type="submit">Create</button>
        <a href='edit/homeedit.php' class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>    
        Edit</a>
        </div>
       

    </form>

    </div>

   
  </div>
  <img src="../Assets/carousal.png" class="w-full max-w-screen-sm mx-auto rounded shadow-2xl md:w-auto lg:max-w-screen-md" alt="" />
</div>
<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
  <div class="flex flex-col items-center max-w-2xl md:px-8">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <a href='../adminhome.php' class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         <img src="../Assets/logo.png" alt="">
        </a>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
          </svg>
          ইউনিয়ন পরিচিতি তথ্য যোগ করুন
      </h2>
      <form method='POST' action='upporicitireg.php' class="space-y-5 flex flex-col items-start justify-start">
     
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="poriciti" id="" placeholder='ইউনিয়ন পরিচিতি তথ্য যোগ করুন....'>
        <div class="flex gap-3 justify-center items-center w-full">
        <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition' type="submit">Create</button>
        <a href='edit/homeedit.php' class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>    
        Edit</a>
        </div>
       

    </form>

    </div>

   
  </div>
  <img src="../Assets/upporichoy.png" class="w-full max-w-screen-sm mx-auto rounded shadow-2xl md:w-auto lg:max-w-screen-md" alt="" />
</div>
<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
  <div class="flex flex-col items-center max-w-2xl md:px-8">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <a href='../adminhome.php' class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         <img src="../Assets/logo.png" alt="">
        </a>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
          </svg>
          ইউনিয়ন খবর যোগ করুন
      </h2>
      <form method='POST' action='khoborreg.php' class="space-y-5 flex flex-col items-start justify-start">
     
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="khobor" id="" placeholder=' ইউনিয়ন খবর যোগ করুন ...'>
        <div class="flex gap-3 justify-center items-center w-full">
        <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition' type="submit">Create</button>
        <a href='edit/homeedit.php' class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>    
        Edit</a>
        </div>
       

    </form>

    </div>

   
  </div>
  <img src="../Assets/khobor.png" class="w-full max-w-screen-sm mx-auto rounded shadow-2xl md:w-auto lg:max-w-screen-md" alt="" />
</div>
<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
  <div class="flex flex-col items-center max-w-2xl md:px-8">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <a href='../adminhome.php' class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         <img src="../Assets/logo.png" alt="">
        </a>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
          </svg>
          ইউনিয়ন এর নোটিশ যোগ করুন
      </h2>
      <form method='POST' action='noticereg.php' class="space-y-5 flex flex-col items-start justify-start">
     
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="notice" id="" placeholder='ইউনিয়ন এর নোটিশ যোগ করুন ...'>
        <div class="flex gap-3 justify-center items-center w-full">
        <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition' type="submit">Create</button>
        <a href='edit/homeedit.php' class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>    
        Edit</a>
        </div>
       

    </form>

    </div>

   
  </div>
  <img src="../Assets/notice.png" class="w-full max-w-screen-sm mx-auto rounded shadow-2xl md:w-auto lg:max-w-screen-md" alt="" />
</div>
<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
  <div class="flex flex-col items-center max-w-2xl md:px-8">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <a href='../adminhome.php' class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         <img src="../Assets/logo.png" alt="">
        </a>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
          </svg>
          ইউনিয়ন এর সেবার শর্ত যোগ করুন
      </h2>
      <form method='POST' action='sebarsortoreg.php' class="space-y-5 flex flex-col items-start justify-start gap-3">
      <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="id" id="" placeholder='ক্রমিক নং যোগ করুন...'>

        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="seba" id="" placeholder='ইউনিয়ন এর সেবার শর্ত যোগ করুন...'>

<div class="flex gap-3 justify-center items-center w-full">
        <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition' type="submit">Create</button>
        <a href='edit/homeedit.php' class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>    
        Edit</a>
        </div>
       

    </form>

    </div>

   
  </div>
  <img src="../Assets/sebarsorto.png" class="w-full max-w-screen-sm mx-auto rounded shadow-2xl md:w-auto lg:max-w-screen-md" alt="" />
</div>

<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
  <div class="flex flex-col items-center max-w-2xl md:px-8">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <a href='../adminhome.php' class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         <img src="../Assets/logo.png" alt="">
        </a>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
          </svg>
          ইউনিয়ন এর সেবার মূল্য যোগ করুন
      </h2>
      <form method='POST' action='sebarmulloreg.php' class="space-y-5 flex flex-col items-start justify-start gap-3">
      <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="id" id="" placeholder='ক্রমিক নং যোগ করুন...'>

        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="seba" id="" placeholder='ইউনিয়ন এর সেবার মূল্য যোগ করুন...'>

<div class="flex gap-3 justify-center items-center w-full">
        <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition' type="submit">Create</button>
        <a href='edit/homeedit.php' class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>    
        Edit</a>
        </div>
       

    </form>

    </div>

   
  </div>
  <img src="../Assets/sebarmullo.png" class="w-full max-w-screen-sm mx-auto rounded shadow-2xl md:w-auto lg:max-w-screen-md" alt="" />
</div>


<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
  <div class="flex flex-col items-center max-w-2xl md:px-8">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <a href='../adminhome.php' class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         <img src="../Assets/logo.png" alt="">
        </a>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
          </svg>
          শিক্ষা প্রতিষ্ঠানের তথ্য  যোগ করুন
      </h2>
      <form method='POST' action='shikkhareg.php' class="space-y-5 flex flex-col items-start justify-start gap-3">
     
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="college" id="" placeholder='কলেজ'>
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="maddhomik" id="" placeholder='মাধ্যমিক বিদ্যালয়'>
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="nimno" id="" placeholder='নিম্ন মাধ্যমিক বিদ্যালয়'>
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="prathomik" id="" placeholder='প্রাথমিক বিদ্যালয়'>
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="madracha" id="" placeholder='মাদ্রাসা'>
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="community" id="" placeholder='কমিউনিটি সেন্টার'>
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="shikkharhar" id="" placeholder='শিক্ষার হার'>

<div class="flex gap-3 justify-center items-center w-full">
        <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition' type="submit">Create</button>
        <a href='edit/homeedit.php' class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>    
        Edit</a>
        </div>
       

    </form>

    </div>

   
  </div>
  <img src="../Assets/shikkha.png" class="w-full max-w-screen-sm mx-auto rounded shadow-2xl md:w-auto lg:max-w-screen-md" alt="" />
</div>

<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
  <div class="flex flex-col items-center max-w-2xl md:px-8">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <a href='../adminhome.php' class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         <img src="../Assets/logo.png" alt="">
        </a>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
          </svg>
          ইউনিয়ন এর তথ্য যোগ করুন
      </h2>
      <form method='POST' action='protisthan.php' class="space-y-5 flex flex-col items-start justify-start gap-3">
     
        <input class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" name="protisthan" id="" placeholder='  ইউনিয়ন এর তথ্য যোগ করুন ...'>

<select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " name='protisthandhoron'>

  <option value="ডাকঘর">ডাকঘর</option>
  <option value="গ্রাম">গ্রাম</option>
  <option value="মৌজা">মৌজা</option>
  <option value="হাটবাজার">হাটবাজার</option>
  <option value="পুলিশ ক্যাম্প">পুলিশ ক্যাম্প</option>
  <option value="এনজিও সংস্থা">এনজিও সংস্থা</option>
  <option value="ভূমি অফিস">ভূমি অফিস</option>
  <option value="মসজিদ">মসজিদ</option>
  <option value="কবরস্থান">কবরস্থান</option>
  <option value="ঈদগাহ ময়দান">ঈদগাহ ময়দান</option>
  <option value="মন্দির">মন্দির</option>
  <option value="শ্মশান">শ্মশান</option>
 
</select>

<div class="flex gap-3 justify-center items-center w-full">
        <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition' type="submit">Create</button>
        <a href='edit/homeedit.php' class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>    
        Edit</a>
        </div>
       

    </form>

    </div>

   
  </div>
  <img src="../Assets/union.png" class="w-full max-w-screen-sm mx-auto rounded shadow-2xl md:w-auto lg:max-w-screen-md" alt="" />
</div>



  </div>
  


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
<script src="style.js"></script>
</body>
</html>