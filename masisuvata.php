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
    <div class="flex px-5 md:px-20 py-5 md:h-screen justify-between gap-5 items-center bg-slate-300 ">



        <div class="px-10 py-10 bg-slate-100 mx-auto w-full rounded-xl">
            <div class="flex flex-col md:flex-row gap-4 md:gap-0 justify-between items-center">
                <a href="./userhome.php"
                    class="text-center mb-3 font-semibold flex gap-3 items-center sticky top-0 left-0  ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H6M12 5l-7 7 7 7" />
                    </svg>
                    Back</a>
                <div class="flex flex-col md:flex-row items-center gap-3">
                    <a href="./userhome.php"
                        class="text-center mb-3 font-semibold flex gap-3 items-center px-4 py-2.5 rounded-full shadow-lg bg-green-600 text-white hover:bg-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21.2 15c.7-1.2 1-2.5.7-3.9-.6-2-2.4-3.5-4.4-3.5h-1.2c-.7-3-3.2-5.2-6.2-5.6-3-.3-5.9 1.3-7.3 4-1.2 2.5-1 6.5.5 8.8m8.7-1.6V21" />
                            <path d="M16 16l-4-4-4 4" />
                        </svg>
                        Import Exel</a>
                    <a href="./userhome.php"
                        class="text-center mb-3 font-semibold flex gap-3 items-center px-4 py-2.5 rounded-full shadow-lg bg-cyan-600 text-white hover:bg-cyan-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5" />
                        </svg>
                        Download Exel</a>
                </div>

            </div>
            <div class="font-semibold text-xl mb-4 text-center">মা ও শিশু ভাতা ডাটা এন্ট্রি ফরম</div>

            <form action="masisuvatareg.php" method="POST">
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-5">

                        <input
                            class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400'
                            type="text" name="slno" placeholder='ক্রমিক নম্বর' required>
                        <input
                            class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400'
                            type="text" name="name" placeholder='নাম' required>
                        <input
                            class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400'
                            type="text" name="fname" placeholder='পিতার নাম/স্বামীর নাম' required>
                        <input
                            class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400'
                            type="text" name="mname" placeholder='মাতার নাম' required>
                        <div class="w-full">

                            <select
                                class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400"
                                name="gram">
                                <option disabled selected value="গ্রাম"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">গ্রাম</option>
                                <option value="ছোটশলুয়া"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">ছোটশলুয়া
                                </option>
                                <option value="বলদিয়া"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full"> বলদিয়া</option>
                                <option value="হুলিয়ামারী"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full"> হুলিয়ামারী
                                </option>
                                <option value="বড়শলুয়া"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">বড়শলুয়া</option>
                                <option value="৬২ নং আড়িয়া"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৬২ নং আড়িয়া
                                </option>
                                <option value="৬৩ নং আড়িয়া"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৬৩ নং আড়িয়া
                                </option>
                                <option value="চাঁদপুর"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">চাঁদপুর</option>
                                <option value="আড়িয়ারচক"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">আড়িয়ারচক
                                </option>
                                <option value="নুরুল্লাপুর"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">নুরুল্লাপুর
                                </option>
                                <option value="গিরিশনগর"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full"> গিরিশনগর
                                </option>
                                <option value="তিতুদহ"
                                    class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">তিতুদহ</option>



                            </select>


                        </div>

                        <select class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full" name="ward">
                            <option disabled selected value="ওয়ার্ড"
                                class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">ওয়ার্ড</option>
                            <option value="১" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">১
                            </option>
                            <option value="২" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">২
                            </option>
                            <option value="৩" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৩
                            </option>
                            <option value="৪" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৪
                            </option>
                            <option value="৫" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৫
                            </option>
                            <option value="৬" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৬
                            </option>
                            <option value="৭" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৭
                            </option>
                            <option value="৮" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৮
                            </option>
                            <option value="৯" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৯
                            </option>

                        </select>
                        <input
                            class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400'
                            type="text" name="voterid" placeholder='ভোটার আইডি' required>
                        <input
                            class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400'
                            type="text" name="montobbo" placeholder='মন্তব্য'>


                    </div>



                </div>
                <div class="flex justify-center items-center w-full mt-5">
                    <input class='h-12 px-6 font-medium tracking-wide
text-white transition duration-200 rounded-xl shadow-md bg-purple-400
hover:bg-purple-700 focus:shadow-outline focus:outline-none cursor-pointer' type="submit" value="জমা দিন">
                </div>

            </form>

        </div>

    </div>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>