<?php
  include '_dbconnect.php';



?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
<div class='px-20 py-20 relative text-lg'>
<?php
                    include '../../_dbconnect.php';
                    $query = "SELECT * FROM `nagorik`";
                    $poriciti = mysqli_query($con, $query);
                    
                    while ($row = mysqli_fetch_assoc($poriciti)) {
                        $id=$row['id'];
                    ?>
             

<div class="flex justify-between items-center">
<p class=''>স্মারক নম্বর : <span><?= $row['sarok'] ?></span></p>

<p class=''>তারিখ : ১২/০৩/২৩</p>
</div>
<div class="flex justify-between items-start">
<p>লিঙ্গ : <span><?= $row['gender'] ?></span> </p>
<p class=''>ওয়ার্ড নম্বর : <span><?= $row['word'] ?></span></p>
</div>
<div class="flex justify-between items-start">
<p>জন্ম নিবন্ধন নাম্বার : <span><?= $row['birthno'] ?></span> </p>
<p>ভোটার আইডি : <span><?= $row['voterid'] ?></span> </p>
</div>

<p class="my-2">এই মর্মে নাগরিক সনদ পত্র প্রদান করা যাচ্ছে যে ,</p>
<div class="flex justify-between items-start">
<p>নাম : <span><?= $row['name'] ?></span> </p>
<p>জাতীয়তা  : বাংলাদেশী </p>
</div>
<div class="flex justify-between items-start">
<p>পিতার নাম : <span><?= $row['fathername'] ?></span> </p>
<p>জাতীয়তা  : বাংলাদেশী </p>
</div>
<div class="flex justify-between items-start">
<p>মাতার নাম : <span><?= $row['mothername'] ?></span> </p>
<p>জাতীয়তা  : বাংলাদেশী </p>
</div>
<div class="flex justify-between items-start">
<p>গ্রাম : <span><?= $row['gram'] ?></span> </p>
<p>ডাকঘর : <span><?= $row['dakghor'] ?></span></p>
</div>

<p class="text-justify my-2">উপজেলা-চুয়াডাঙ্গা সদর, জেলা-চুয়াডাঙ্গা  কে আমি ব্যাক্তিগত  ভাবে চিনি ও জানি। সে
একজন  বাংলাদেশের  নাগরিক এবং  উত্তম চরিত্রের অধিকারী / অধিকারীণী । আমার
জানামতে সে কোন রাষ্ট্র বিরোধী কাজে জড়িত নহে।

</p>
<p class="my-3">আমি তাঁর উজ্জল ভবিষৎ ও কর্মময় জীবন কামনা করছি।</p>
           
        </div>



            <?php
                    }


            ?>
</div>

</body>

</html>