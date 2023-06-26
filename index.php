<?php
 include '_dbconnect.php';

$result="SELECT * FROM `unionporiciti`";



?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css"  rel="stylesheet" />
 
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
  <style>
    .google-maps {
    position: relative;
    padding-bottom: 40%; 
    height: 0;
    overflow: hidden;
}
.google-maps iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 60% !important;
}

  </style>
</head>
<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50">
	<!-- Navbar goes here -->
  <nav class="sticky top-0 left-0 w-full bg-white z-40 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="index.html" class="flex items-center">
          <img src="Assets/logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap ">UP</span>
      </a>
      <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto " id="navbar-dropdown">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-4 space-y-8 md:space-y-0 md:mt-0 md:border-0 items-center">
          <li>
            <a href="index.html" class="block py-2 pl-3 pr-4 text-white  rounded md:bg-transparent md:text-primary md:p-0 " aria-current="page">মুল পাতা</a>
          </li>
          <li class="">
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 md:w-auto  ">ট্যাক্স দেখুন <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                  <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">আবাসিক করদাতা</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">বাণিজ্যিক করদাতা</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">সনদ যাচাই করুন</a>
                    </li>
                  </ul>
                  
              </div>
          </li>
        
          <li class="z-50">
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar5" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 md:w-auto  ">গ্যালারি  <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar5" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="porishodborgo.html" class="block px-4 py-2 hover:bg-primary hover:text-white ">পরিষদ বর্গ</a>
                  </li>
                  <li>
                    <a href="kormokortaborgo.html" class="block px-4 py-2 hover:bg-primary hover:text-white ">কর্মকর্তা বর্গ</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white ">ভিডিও</a>
                  </li>
                </ul>
                
            </div>
        </li>
          <li class="z-50">
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 md:w-auto  ">অন্যান্য  <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar2" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="shikkhaprotisthan.html" class="block px-4 py-2 hover:bg-primary hover:text-white ">শিক্ষা প্রতিষ্ঠান</a>
                  </li>
                  <li>
                    <a href="protisthan.html" class="block px-4 py-2 hover:bg-primary hover:text-white ">প্রতিষ্ঠান সমূহ</a>
                  </li>
                 
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white ">বাজেট</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white ">ভিজিডি তালিকা</a>
                  </li>
                </ul>
                
            </div>
        </li>
        <li class="z-50">
          <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar3" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 md:w-auto  ">ভাতাভোগী তালিকা  <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdownNavbar3" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
              <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white ">বয়স্ক ভাতা</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white ">বিধবা ভাতা</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white ">প্রতিবন্ধি ভাতা</a>
                </li>
              </ul>
          
          </div>
      </li>
      <li class="hover:scale-95">
        <a href="subuser.php" class="block py-2 pl-3 pr-4 bg-primary text-white rounded-full hover:bg-secondary  duration-300 transition" aria-current="page">User Login</a>
      </li>
      <li class="hover:scale-95">
        <a href="login2.php" class="block py-2 pl-3 pr-4 bg-primary text-white rounded-full hover:bg-secondary  duration-300 transition" aria-current="page">Admin Login</a>
      </li>
        </ul>
      </div>
    </div>
  </nav>
  
<!--hero section-->

<div id="default-carousel" class="relative w-full mt-10 rounded-lg overflow-hidden" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-56 overflow-hidden  md:h-96">
       <!-- Item 1 -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
          <img src="Assets/hero1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          <div class="relative top-500 top-1/2 px-4 py-2 opacity-100 ">
            <h2 class="text-xl text-white font-bold text-center ">স্থানীয় সরকার প্রকৌশল অধিদপ্তর</h3>
            <h2 class="text-xl text-white font-bold text-center ">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h3>
        
          </div>   
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="Assets/hero2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          <div class="relative top-500 top-1/2 px-4 py-2 opacity-100 ">
            <h2 class="text-xl text-white font-bold text-center ">স্থানীয় সরকার প্রকৌশল অধিদপ্তর</h3>
            <h2 class="text-xl text-white font-bold text-center ">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h3>
        
          </div> 
          
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="Assets/hero3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          <div class="relative top-500 top-1/2 px-4 py-2 opacity-100 ">
            <h2 class="text-xl text-white font-bold text-center ">স্থানীয় সরকার প্রকৌশল অধিদপ্তর</h3>
            <h2 class="text-xl text-white font-bold text-center ">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h3>
        
          </div> 
      </div>
   
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
     
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>

<!-- Main sections -->

<div class="my-10">
  <p class="text-xl font-semibold text-center ">ইউনিয়ন পরিচিতি</p>
  <p class="text-justify text-gray-600">

    নবগঠিত গড়াইটুপি ইউনিয়ন প্রায় ৩০ বর্গ কিলোমিটার আয়তন বিশিষ্ট। 
    এ ইউনিয়ন পরিষদটি গড়াইটুপি মৌজার ৬৯৭ নং খতিয়ানের ১২৯০ ও ১২৯১ নং দাগে ০.৩৩০০ শতাংশ
     জমির উপর গড়াইটুপি ইউনিয়ন পরিষদ কমপ্লেক্স ভবন স্থাপিত হবে। ইউনিয়নের জনসংখ্যা গত ২০১১ সালের
      আদম শুমারী অনুযায়ী পুরুষ ১০৪২৭ জন ও মহিলা ১০৫০০০ জন মোট ২০৯২৭ জন । ইউনিয়নে মোট ১৬টি গ্রাম,
       ১১টি মৌজা রয়েছে। ইউনিয়ন পরিষদের পূর্বে সাধুহাটি ইউনিয়ন, পশ্চিমে তিতুদহ ইউনিয়ন দক্ষিনে আন্দুলবাড়ীয়া ইউনিয়ন
        এবং উত্তরে কুতুবপুর ইউনিয়ন পরিষদ। জেলা সদর থেকে এ ইউনিয়নটি ২০ কিলোমিটার দূরে অবস্থিত। 
  </p>

</div>

<!-- notice  -->
<div class="bg-white rounded-xl px-5 py-5 drop-shadow-lg my-10">
  <div class="flex gap-5">
    <div class="space-y-3">
      <p class="text-xl font-semibold">Khobor</p>
      <img class="w-20 h-20 rounded-full flex-shrink-0" src="Assets/mike.jpg" alt="mike">
    </div>
    <div class="overflow-x-hidden">
      <div class="py-5 animate-marquee  flex flex-col gap-10">
          <span class="mx-4 text-xl">নবগঠিত গড়াইটুপি ইউনিয়ন প্রায় ৩০ বর্গ কিলোমিটার আয়তন বিশিষ্ট। এ ইউনিয়ন পরিষদটি গড়াইটুপি মৌজার ৬৯৭ নং খতিয়ানের ১২৯০ ও ১২৯১ নং দাগে ০.৩৩০০ শতাংশ জমির উপর গড়াইটুপি ইউনিয়ন পরিষদ কমপ্লেক্স ভবন স্থাপিত হবে।</span>
          <span class="mx-4 text-xl">পশ্চিমে তিতুদহ ইউনিয়ন দক্ষিনে আন্দুলবাড়ীয়া ইউনিয়ন এবং উত্তরে কুতুবপুর ইউনিয়ন পরিষদ। জেলা সদর থেকে এ ইউনিয়নটি ২০ কিলোমিটার দূরে অবস্থিত।</span>
          
      </div>
  </div>
  </div>
</div>
<div class="bg-white rounded-xl px-5 py-5 drop-shadow-lg my-10">
  <div class="flex gap-5">
    <div class="space-y-3">
      <p class="text-xl font-semibold">Notice</p>
      <img class="w-20 h-20 rounded-full flex-shrink-0" src="Assets/mogram.png" alt="mike">
    </div>
   <div class="flex flex-col gap-5">
    <p>পশ্চিমে তিতুদহ ইউনিয়ন দক্ষিনে আন্দুলবাড়ীয়া ইউনিয়ন এবং উত্তরে কুতুবপুর ইউনিয়ন পরিষদ। জেলা সদর থেকে এ ইউনিয়নটি ২০ কিলোমিটার দূরে অবস্থিত।</p>
    <p>নবগঠিত গড়াইটুপি ইউনিয়ন প্রায় ৩০ বর্গ কিলোমিটার আয়তন বিশিষ্ট। এ ইউনিয়ন পরিষদটি গড়াইটুপি মৌজার ৬৯৭ নং খতিয়ানের ১২৯০ ও ১২৯১ নং দাগে ০.৩৩০০ শতাংশ</p>
   </div>
  </div>
</div>
<!-- seba somuho -->
<div class="my-10 grid grid-cols-1 md:grid-cols-2 gap-10">
    <div class="flex flex-col gap-3 border-t-4 border-primary rounded-xl bg-white drop-shadow-xl px-5 py-5">
        <p class="text-2xl font-semibold text-center">সেবা পাওয়ার শর্ত সমূহ</p>
        <p class="text-gray-600 ">১ ট্রেডলাইসেন্স বাদে সকল সেবা গ্রহণের ক্ষেত্রে আবদেনকারীকে ইউনিয়নের স্থায়ী বাসিন্দ হতে হবে।</p>
        <p class="text-gray-600 ">২ হাল নাগাদ ট্যাক্স পরিশোধ থাকতে হবে।</p>
        <p class="text-gray-600 ">৩ ভোটার ও জন্মনিবন্ধন কার্ড সঙ্গে আনতে হবে।</p>
        <p class="text-gray-600 ">৪ ওয়ারেশ সনদপত্র গ্রহণের ক্ষেত্রে আবেদন পত্রে সংশ্লিষ্ঠ ওয়ার্ড সদ্যসের সুপারিশ থাকে হবে।</p>
    </div>
    <div class="flex flex-col gap-3 border-t-4 border-primary rounded-xl bg-white drop-shadow-xl px-5 py-5">
      <p class="text-2xl font-semibold text-center">সেবা মূল্য সমূহ</p>
      <p class="text-gray-600 ">১ ওয়ারিশ সনদ পত্র ১০০ টাকা</p>
      <p class="text-gray-600 ">২ উত্তরাধিকারী সনদ পত্র ১০০ টাকা</p>
      <p class="text-gray-600 ">৩ নাগরিক সনদ পত্র ২০ টাকা</p>
      <p class="text-gray-600 ">৪ চারিত্রিক সনদ পত্র ৩০ টাকা</p>
      <p class="text-gray-600 ">৫ ট্রেডলাইসেন্স ব্যবসার ধরন অনুযায়ীয়</p>
      <p class="text-gray-600 ">৬ জন্ম-মৃত্যু নিবন্ধন ফি সরকারী বিধি মোতাবেকা</p>
  </div>
</div>

<!-- table -->
<p class="text-3xl text-center font-semibold px-5 mx-auto w-full my-5">শিক্ষা প্রতিষ্ঠানের  তথ্য সমূহ</p>
<div class="table-wrapper">
  <table class="fl-table">
      <thead>
      <tr>
          <th>কলেজ</th>
          <th>মাধ্যমিক বিদ্যালয়</th>
          <th>নিম্ন মাধ্যমিক বিদ্যালয়</th>
          <th>প্রাথমিক বিদ্যালয়</th>
          <th>মাদ্রাসা</th>
          <th>কমিউনিটি সেন্টার</th>
          <th>শিক্ষার হার</th>
          
         
         
      </tr>
      </thead>
      <tbody>
      <tr>
          <td>০</td>
          <td>২</td>
          <td>০</td>
          <td>১৩</td>
          <td>৪</td>
          <td>৩</td>
          <td>৭০%</td>
         
      </tr>
     
     
      <tbody>
  </table>
</div>
<p class="text-3xl text-center font-semibold px-5 mx-auto w-full my-5">ইউনিয়ন এর বিভিন্ন তথ্য</p>
<div class="table-wrapper">
   
  <table class="fl-table">
      <thead>
      <tr>
          <th>ডাকঘর</th>
          <th>গ্রাম</th>
          <th>মৌজা</th>
          <th>হাট বাজার</th>
          <th>পুলিশ ক্যাম্প</th>
          <th>এনজিও সংস্থা</th>
          <th>ইউনিয়ন ভুমি অফিস</th>
          <th>মসজিদ</th>
          <th>কবরস্থান</th>
          <th>ঈদগাহ ময়দান</th>
          <th>মন্দির</th>
          <th>শ্মশান</th>
      </tr>
      </thead>
      <tbody>
      <tr>
          <td>১</td>
          <td>১৬</td>
          <td>১১</td>
          <td>৫</td>
          <td>০</td>
          <td>৭</td>
          <td>০</td>
          <td>৩৬</td>
          <td>১৯</td>
          <td>১৭</td>
          <td>৭</td>
          <td>৩</td>
          
      </tr>
     
     
      <tbody>
  </table>
</div>
<!-- google map -->

<div class="google-maps rounded-lg overflow-hidden">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.66510394799!2d88.90584107621955!3d23.54454469664642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fed049fab00e85%3A0x4ac7a83302b7ed70!2sTitudah%20Union%20Council!5e0!3m2!1sen!2sbd!4v1687576864406!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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