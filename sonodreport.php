<?php
  include '_dbconnect.php';
  if (isset($_REQUEST['id'])) {
    $rid=$_REQUEST['id'];
    
    $query="SELECT * FROM `nagorik` WHERE sarok=$rid";
    $poriciti=mysqli_query($con,$query);
    $result=mysqli_fetch_array($poriciti);
   
}
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



<body class='bg-white mb-10'>
<div class='px-20 py-20 relative'>
    <p class="text-2xl text-center font-semibold">৬ নং তিতুদহ ইউনিয়ন পরিষদ </p>
    <p class="text-lg text-center font-semibold mb-5">চুয়াডাঙ্গা সদর, চুয়াডাঙ্গা</p>
    <p class="text-2xl text-center font-semibold">নাগরিক ও অনন্য সনদপত্র যাচাই</p>
<?php
                   $rid= $result['sarok'];
                   $name= $result['name'];
                   $fathername= $result['fathername'];
                   $mothername= $result['mothername'];
                   $gram= $result['gram'];
                   $word= $result['word'];
                   $birthno= $result['birthno'];
                   $gender= $result['gender'];
                   $dakghor= $result['dakghor'];
                   $voterid= $result['voterid'];
                   $mobileno= $result['mobileno'];
                   
                    ?>
              <input type="hidden" name="hid" value="<?php echo $rid;?>">

              <div class="flex justify-between items-center">
<p class=''>স্মারক নম্বর : <span><?= $rid ?></span></p>

<p class=''>তারিখ : ১২/০৩/২৩</p>
</div>
<div class="flex justify-between items-start">
<p>লিঙ্গ : <span><?= $gender ?></span> </p>
<p class=''>ওয়ার্ড নম্বর : <span><?= $word ?></span></p>
</div>
<div class="flex justify-between items-start">
<p>জন্ম নিবন্ধন নাম্বার : <span><?= $birthno ?></span> </p>
<p>ভোটার আইডি : <span><?= $voterid ?></span> </p>
</div>

<p class="my-2">এই মর্মে নাগরিক সনদ পত্র প্রদান করা যাচ্ছে যে ,</p>
<div class="flex justify-between items-start">
<p>নাম : <span><?= $name ?></span> </p>
<p>জাতীয়তা  : বাংলাদেশী </p>
</div>
<div class="flex justify-between items-start">
<p>পিতার নাম : <span><?= $fathername ?></span> </p>
<p>জাতীয়তা  : বাংলাদেশী </p>
</div>
<div class="flex justify-between items-start">
<p>মাতার নাম : <span><?= $mothername ?></span> </p>
<p>জাতীয়তা  : বাংলাদেশী </p>
</div>
<div class="flex justify-between items-start">
<p>গ্রাম : <span><?= $gram ?></span> </p>
<p>ডাকঘর : <span><?= $dakghor ?></span></p>
</div>

<p class="text-justify my-2">উপজেলা-চুয়াডাঙ্গা সদর, জেলা-চুয়াডাঙ্গা  কে আমি ব্যাক্তিগত  ভাবে চিনি ও জানি। সে
একজন  বাংলাদেশের  নাগরিক এবং  উত্তম চরিত্রের অধিকারী / অধিকারীণী । আমার
জানামতে সে কোন রাষ্ট্র বিরোধী কাজে জড়িত নহে।

</p>
<p class="my-3">আমি তাঁর উজ্জল ভবিষৎ ও কর্মময় জীবন কামনা করছি।</p>
           
        </div>

            <?php
                    


            ?>
</div>

</body>

</html>