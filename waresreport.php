<?php
  include '_dbconnect.php';
  if (isset($_REQUEST['id'])) {
    $rid=$_REQUEST['id'];
    
    $query="SELECT * FROM `wares` WHERE sarok=$rid";
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
<?php
                   $rid= $result['sarok'];
                   $name= $result['name'];
                   $fathername= $result['fathername'];
                   $mothername= $result['mothername'];
                   $gram= $result['gram'];
                   $word= $result['word'];
                   $birthno= $result['deathno'];
                   $voterid= $result['voterid'];
                   $mobileno= $result['mobileno'];
                   $w1= $result['w1'];
                   $w2= $result['w2'];
                   $w3= $result['w3'];
                   $w4= $result['w4'];
                   $w5= $result['w5'];
                   $w6= $result['w6'];
                   $w7= $result['w7'];
                   $w8= $result['w8'];
                   $w9= $result['w9'];
                   $w10= $result['w10'];
                   $w11= $result['w11'];
                   $w12= $result['w12'];
                   $w13= $result['w13'];
                   $w14= $result['w14'];
                   $w15= $result['w15'];
                   $r1= $result['r1'];
                   $r2= $result['r2'];
                   $r3= $result['r3'];
                   $r4= $result['r4'];
                   $r5= $result['r5'];
                   $r6= $result['r6'];
                   $r7= $result['r7'];
                   $r8= $result['r8'];
                   $r9= $result['r9'];
                   $r10= $result['r10'];
                   $r11= $result['r11'];
                   $r12= $result['r12'];
                   $r13= $result['r13'];
                   $r14= $result['r14'];
                   $r15= $result['r15'];
                   
                    ?>
              <input type="hidden" name="hid" value="<?php echo $rid;?>">
    <p class="text-2xl text-center font-semibold">৬ নং তিতুদহ ইউনিয়ন পরিষদ </p>
    <p class="text-lg text-center font-semibold mb-5">চুয়াডাঙ্গা সদর, চুয়াডাঙ্গা</p>
<p class='text-center font-medium text-2xl'>ওয়ারেশ সনদ যাচাই </p>
<p class='text-center font-medium text-lg'>পরিচিতি / স্মারক নম্বরঃ <span><?= $rid ?></span></p>

    <p>বরাবর, </p>
    <p>চেয়ারম্যান,  </p>
    <p>৬নং তিতুদহ ইউনিয়ন পরিষদ,   </p>
    <p> চুয়াডাঙ্গা সদর, চুয়াডাঙ্গা |</p>
<div class='flex justify-between items-center my-5'>
        <div class="space-y-1">

        <p class=''> নাম : <span><?= $name ?></span> </p>
            <p class=''>পিতার নাম : <span><?= $fathername ?></span> </p>
            <p class=''>মাতর নাম : <span><?= $mothername ?></span> </p>
            <p class=''>গ্রাম : <span><?= $gram ?></span> </p>
           
        </div>
        <div class="space-y-1">
        <p class=''>ওয়ার্ড নম্বর :<span><?= $word ?></span>  </p>
            <p class=''>জন্ম নিবন্ধন নাম্বার : <span><?= $birthno ?></span>  </p>
            <p class=''>ভোটার আইডি : <span><?= $voterid ?></span> </p>
        </div>
</div>
<p>এই মর্মে প্রত্যয়ন করা যাচ্ছে যে</p>

<p class="ml-10 my-2">মারা যাওয়ার কালে নিম্ন-লিখিত ওয়ারেশগণ রেখে যান।</p>
<p class="text-center text-lg font-medium">ওয়ারেশ গণের নাম</p>

<table class='w-full table border border-black rounded-lg'>
        <thead>
            <tr>
                <th class='border border-black'>ক্রমিক</th>
                <th class='border border-black'>নাম</th>
                <th class='border border-black'>সম্পর্ক</th>
                <th class='border border-black'>মন্তব্য</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class='border border-black text-center'>০১</td>
                <td class='border border-black text-center'><?= $w1 ?></td>
                <td class='border border-black text-center'><?= $r1 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>০২</td>
                <td class='border border-black text-center'><?= $w2 ?></td>
                <td class='border border-black text-center'><?= $r2 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>০৩</td>
                <td class='border border-black text-center'><?= $w3 ?></td>
                <td class='border border-black text-center'><?= $r3 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>০৪</td>
                <td class='border border-black text-center'><?= $w4 ?></td>
                <td class='border border-black text-center'><?= $r4 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>০৫</td>
                <td class='border border-black text-center'><?= $w5 ?></td>
                <td class='border border-black text-center'><?= $r5 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>০৬</td>
                <td class='border border-black text-center'><?= $w6 ?></td>
                <td class='border border-black text-center'><?= $r6 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>০৭</td>
                <td class='border border-black text-center'><?= $w7 ?></td>
                <td class='border border-black text-center'><?= $r7 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>০৮</td>
                <td class='border border-black text-center'><?= $w8 ?></td>
                <td class='border border-black text-center'><?= $r8 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>০৯</td>
                <td class='border border-black text-center'><?= $w9 ?></td>
                <td class='border border-black text-center'><?= $r9 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>১০</td>
                <td class='border border-black text-center'><?= $w10 ?></td>
                <td class='border border-black text-center'><?= $r10 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>১১</td>
                <td class='border border-black text-center'><?= $w11 ?></td>
                <td class='border border-black text-center'><?= $r11 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>১২</td>
                <td class='border border-black text-center'><?= $w12 ?></td>
                <td class='border border-black text-center'><?= $r12 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>১৩</td>
                <td class='border border-black text-center'><?= $w13 ?></td>
                <td class='border border-black text-center'><?= $r13 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>১৪</td>
                <td class='border border-black text-center'><?= $w14 ?></td>
                <td class='border border-black text-center'><?= $r14 ?></td>
                
            
            </tr>
            <tr>
                <td class='border border-black text-center'>১৫</td>
                <td class='border border-black text-center'><?= $w15 ?></td>
                <td class='border border-black text-center'><?= $r15 ?></td>
                
            
            </tr>
        </tbody>
</table>

            <?php
                    


            ?>
</div>

</body>

</html>