<?php
include '_dbconnect.php';



?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ট্যাক্স ডাটা এন্ট্রি </title>
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
    <div class="flex flex-col px-5 md:px-20  md:h-screen justify-center  gap-5 items-center bg-slate-300 ">



        <div class="px-10 py-10 bg-slate-100 mx-auto w-full rounded-xl">
            <div class="flex flex-col md:flex-row gap-4 md:gap-0 justify-between items-center">
                <a href="./adminhome.php"
                    class="text-center mb-3 font-semibold flex gap-3 items-center sticky top-0 left-0  ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H6M12 5l-7 7 7 7" />
                    </svg>
                    Back</a>


            </div>
            <div class="flex flex-col md:flex-row items-center justify-start gap-4">
                <select class="px-2 py-3 bg-white border border-gray-300 rounded-xl " name="ward">
                    <option disabled selected value="ওয়ার্ড"
                        class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">Export Items</option>
                    <option value="taxentry" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        ট্যাক্স এন্ট্রি
                    </option>
                    <option value="tadeentry" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">টেড
                        এন্ট্রি
                    </option>
                    <option value="nagorik" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        নাগরিক এন্ট্রি
                    </option>
                    <option value="wares" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        ওয়ারেশ এন্ট্রি
                    </option>
                    <option value="boyoskovata" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        বয়স্ক ভাতা এন্ট্রি
                    </option>
                    <option value="bidhobavata" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        বিধবা
                        ভাতা এন্ট্রি
                    </option>
                    <option value="protibondhivata" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        প্রতিবন্ধী ভাতা এন্ট্রি
                    </option>
                    <option value="masisuvata" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">মা ও
                        শিশু
                        ভাতা
                        এন্ট্রি
                    </option>


                </select>
                <a href="./userhome.php"
                    class="text-center  font-semibold flex gap-3 items-center px-4 py-2.5 rounded-full shadow-lg bg-cyan-600 text-white hover:bg-cyan-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5" />
                    </svg>
                    Download Exel</a>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-start gap-4 mt-10">
                <select class="px-2 py-3 bg-white border border-gray-300 rounded-xl " name="ward">
                    <option disabled selected value="ওয়ার্ড"
                        class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">Import Items</option>
                    <option value="taxentry" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        ট্যাক্স এন্ট্রি
                    </option>
                    <option value="tadeentry" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">টেড
                        এন্ট্রি
                    </option>
                    <option value="nagorik" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        নাগরিক এন্ট্রি
                    </option>
                    <option value="wares" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        ওয়ারেশ এন্ট্রি
                    </option>
                    <option value="boyoskovata" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        বয়স্ক ভাতা এন্ট্রি
                    </option>
                    <option value="bidhobavata" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        বিধবা
                        ভাতা এন্ট্রি
                    </option>
                    <option value="protibondhivata" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">
                        প্রতিবন্ধী ভাতা এন্ট্রি
                    </option>
                    <option value="masisuvata" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">মা ও
                        শিশু
                        ভাতা
                        এন্ট্রি
                    </option>


                </select>
                <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl focus:outline-blue-400' type="file"
                    name="holdingno" placeholder='হোল্ডিং নম্বর' required>
                <a href="./userhome.php"
                    class="text-center font-semibold flex gap-3 items-center px-4 py-2.5 rounded-full shadow-lg bg-green-600 text-white hover:bg-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M21.2 15c.7-1.2 1-2.5.7-3.9-.6-2-2.4-3.5-4.4-3.5h-1.2c-.7-3-3.2-5.2-6.2-5.6-3-.3-5.9 1.3-7.3 4-1.2 2.5-1 6.5.5 8.8m8.7-1.6V21" />
                        <path d="M16 16l-4-4-4 4" />
                    </svg>
                    Import Exel</a>
            </div>




        </div>



    </div>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>