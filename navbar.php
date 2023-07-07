<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="sticky top-0 left-0 w-full bg-white z-40 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="index.php" class="flex items-center">
          <img src="Assets/logo.png" class="h-8 mr-3" alt="logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap ">UP</span>
      </a>
      <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto " id="navbar-dropdown">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-4 space-y-8 md:space-y-0 md:mt-0 md:border-0 items-center">
          <li>
            <a href="index.php" class="block py-2 pl-3 pr-4   rounded  md:p-0 " aria-current="page">মুল পাতা</a>
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
                    <a href="porishodborgo.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">পরিষদ বর্গ</a>
                  </li>
                  <li>
                    <a href="kormokortaborgo.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">কর্মকর্তা বর্গ</a>
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
                    <a href="shikkhaprotisthan.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">শিক্ষা প্রতিষ্ঠান</a>
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
  
</body>
</html>