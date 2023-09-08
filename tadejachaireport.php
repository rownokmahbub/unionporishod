<?php
  include '_dbconnect.php';
  if (isset($_REQUEST['id'])) {
    $rid=$_REQUEST['id'];
    
    $query="SELECT * FROM `tadeentry` WHERE licence_no=$rid";
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
    <p class="text-2xl text-center font-semibold">ট্রেডলাইসেন্স সনদ যাচাই</p>
<?php
                   $rid= $result['licence_no'];
                   $name= $result['name'];
                   $fathername= $result['father_husband'];
                   $mothername= $result['mother_name'];
                   $bplace= $result['bplace'];
                   $word= $result['word'];
                   $tradename= $result['tradename'];
                   $babsardhoron= $result['babsardhoron'];
                   $upozela= $result['upozela'];
                   $zela= $result['zela'];
                   $voterid= $result['voterid'];
                   $mobileno= $result['mobileno'];
                   
                    ?>
              <input type="hidden" name="hid" value="<?php echo $rid;?>">

              <div class="flex justify-between items-center">
<p class=''>লাইসেন্স নম্বর : <span><?= $rid ?></span></p>
<p>ভোটার আইডি : <span><?= $voterid ?></span> </p>

</div>
<div class="flex justify-between items-start">
<p>প্রতিষ্ঠানের নাম: <span><?= $tradename ?></span> </p>
<p class=''>ওয়ার্ড নম্বর : <span><?= $word ?></span></p>
</div>


<div class="flex justify-between items-start">
<p>প্রোপাইটার : <span><?= $name ?></span> </p>
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
<p>উপজেলা  : <span><?= $upozela ?></span> </p>
<p>জেলা  : <span><?= $zela ?></span></p>
</div>

<p class="text-justify my-2">এর অনুকুলে
ব্যাবসাকার্য পরিচালানার উদ্দেশ্যে অত্র ইউনিয়ন পরিষদের লাইসেন্স মন্জর করা হইল।ইহা ইউনিয়ন সীমানার মধ্যে সীমাবদ্ধ থাকিবে।এই লাইসেন্স আগমী ৩০ জুন ২০২৪ পর্যন্ত বলবৎ থাকিবে,যদি না উহা সত্বর বাতিল করা হয়।

</p>

           
        </div>

            <?php
                    


            ?>
</div>

</body>

</html>