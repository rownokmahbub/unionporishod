<?php
  include '_dbconnect.php';



?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ট্রেডলাইসেন্স এন্ট্রি </title>
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
<div class="flex px-20 md:h-screen justify-between gap-5 items-center bg-slate-300 ">

<section class='px-5 flex py-10 mx-auto bg-slate-100 rounded-2xl w-52'>
<h3 class="">মোট লাইসেন্স:</h3>
<?php
$query = "SELECT COUNT(*), SUM(kor) FROM tadeentry";
$result = mysqli_fetch_array(mysqli_query($con, $query));
$count = $result['COUNT(*)'];
$tax = $result['SUM(kor)'];

echo $count;


?>
</section>

  <div class="px-10 py-10 bg-slate-100 mx-auto w-full rounded-xl">
    <div class="font-semibold text-xl mb-4">ট্রেডলাইসেন্স ডাটা এন্ট্রি ফরম</div>
    
      <form action="tadeentryreg.php" method="POST">
        <div class="space-y-4">
          <div class="flex justify-between items-center gap-5">
           
            <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="licence" placeholder='লাইসেন্স নম্বর' required>
            <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="name" placeholder='নাম' required>
          </div>

          <div class="flex justify-between items-center gap-5">
           
           <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="fname" placeholder='পিতার নাম/স্বামীর নাম' required>
           <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="mname" placeholder='মাতার নাম' required>
         
         </div>
         

          <div class="flex justify-between items-center gap-5">
            
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
              <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="vid" placeholder='ভোটার আইডি' required>
          </div>
         
          <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="kor" placeholder='কর' required>

          <div class="flex justify-between items-center gap-5">
           
           <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="mes" placeholder='মেসার্স' required>
           <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="bdhoron" placeholder='ব্যবসা ধরন' required>
         
         </div>
          

        </div>
            <div class="flex justify-center items-center w-full mt-5">
            <input class='h-12 px-6 font-medium tracking-wide
text-white transition duration-200 rounded-xl shadow-md bg-purple-400
hover:bg-purple-700 focus:shadow-outline focus:outline-none cursor-pointer' type="submit" value="জমা দিন">
            </div>
    
      </form>

  </div>
  <div class='px-5 flex py-10 mx-auto bg-slate-100 rounded-2xl w-52'>
  <h3 class="">মোট ট্যাক্স :</h3>
<?php
$query = "SELECT COUNT(*), SUM(kor) FROM tadeentry";
$result = mysqli_fetch_array(mysqli_query($con, $query));
$count = $result['COUNT(*)'];
$tax = $result['SUM(kor)'];


echo $tax;

?></div>
</div>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>