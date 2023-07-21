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

<section class='px-5 hidden md:flex py-5 mx-auto bg-slate-100 rounded-2xl w-52'>
<h3 class="">মোট হোল্ডার:</h3>
<?php
$query = "SELECT COUNT(*), SUM(totaltax) FROM taxentry";
$result = mysqli_fetch_array(mysqli_query($con, $query));
$count = $result['COUNT(*)'];
$tax = $result['SUM(totaltax)'];

echo $count;


?>
</section>

  <div class="px-10 py-10 bg-slate-100 mx-auto w-full rounded-xl">
  <a href="./userhome.php" class="text-center mb-3 font-semibold flex gap-3 items-center sticky top-0 left-0 w-full ">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H6M12 5l-7 7 7 7" />
        </svg>
        Back</a>
    <div class="font-semibold text-xl mb-4 text-center">ট্যাক্স ডাটা এন্ট্রি ফরম</div>
    
      <form action="taxentryreg.php" method="POST">
        <div class="space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-5">
           
            <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="holdingno" placeholder='হোল্ডিং নম্বর' required>
            <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="name" placeholder='নাম' required>
            <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="fname" placeholder='পিতার নাম/স্বামীর নাম' required>
           <div class="w-full">
            
              <select class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400" name="gram">
                <option value="জেহালা" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">জেহালা</option>
                <option value="মাদাহুদা" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full"> মাদাহুদা</option>
                <option value="রোয়াকুলি" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">রোয়াকুলি</option>
                <option value="জেহালা বাজার" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">জেহালা বাজার</option>
                <option value="সোনাতনপুর" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">সোনাতনপুর</option>
                <option value="হৈদেরপুর" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">হৈদেরপুর</option>
                <option value="গড়গড়ী" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">গড়গড়ী</option>
                <option value="দক্ষিণ গোবিন্দপুর" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">দক্ষিণ গোবিন্দপুর</option>
                <option value="খুদিয়াখালী" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full"> খুদিয়াখালী</option>
                <option value="পূর্ব কমলাপুর" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">পূর্ব কমলাপুর</option>
                <option value="বেতবাড়িয়া" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">বেতবাড়িয়া</option>
               

              </select>
         

          </div>

          <select class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full" name="ward">
                <option value="১" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">১</option>
                <option value="২" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">২</option>
                <option value="৩" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৩</option>
                <option value="৪" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৪</option>
                <option value="৫" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৫</option>
                <option value="৬" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৬</option>
                <option value="৭" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৭</option>
                <option value="৮" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৮</option>
                <option value="৯" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৯</option>

              </select>
              <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="housetype" placeholder='বাড়ির ধরন ' required>
              <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="roomno" placeholder='রুম সংখ্যা' required>
              <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="tax" placeholder='ট্যাক্স' required>
         
   

          </div>

          <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="mnum" placeholder='ভোটার আইডি' required>


        </div>
            <div class="flex justify-center items-center w-full mt-5">
            <input class='h-12 px-6 font-medium tracking-wide
text-white transition duration-200 rounded-xl shadow-md bg-purple-400
hover:bg-purple-700 focus:shadow-outline focus:outline-none cursor-pointer' type="submit" value="জমা দিন">
            </div>
    
      </form>

  </div>
  <div class='px-5 hidden py-10 mx-auto bg-slate-100 rounded-2xl w-52 md:flex'>
  <h3 class="">মোট ট্যাক্স :</h3>
<?php
$query = "SELECT COUNT(*), SUM(totaltax) FROM taxentry";
$result = mysqli_fetch_array(mysqli_query($con, $query));
$count = $result['COUNT(*)'];
$tax = $result['SUM(totaltax)'];


echo $tax;

?></div>
</div>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>