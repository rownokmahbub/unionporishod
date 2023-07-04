<?php

  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('Location:../../login2.php'); 
  }
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 py-20">
    <a href="../home.php" class="text-center font-semibold flex gap-3 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H6M12 5l-7 7 7 7" />
        </svg>
        Back</a>
    <p class="text-center font-semibold text-2xl md:text-4xl">ইউনিয়ন এর পরিচিতি এডিট করুণ </p>
    <div class="container mt-5">
    <table id="example" class="display rounded-xl overflow-hidden" style="width:100%">
        <thead>
            <tr  class="bg-sky-900 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0 text-white">
                <th>ক্রমিক নং</th>
                <th>ইউনিয়ন পরিচিতি</th>
                <th>অ্যাকশন</th>
                
            </tr>
        </thead>
        <tbody>
          
        <?php
                    include '../../_dbconnect.php';
                    $query = "SELECT * FROM `unionporiciti`";
                    $poriciti = mysqli_query($con, $query);
                    
                    while ($row = mysqli_fetch_assoc($poriciti)) {
                        $id=$row['id'];
                    ?>
                <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                    
                    <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['id'] ?></td>
                    <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['poriciti'] ?></td>
                    
                    <td class="border-grey-light border  p-3  cursor-pointer flex  gap-3 items-center">
                <a class="flex items-center text-teal-900 hover:font-medium" href="upporicitiedit.php?id=<?php echo $id; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115e59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                        <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                    </svg>
                    Edit
                </a>
                <a class="flex items-center text-teal-900 hover:font-medium" href="../delete/poricitidelete.php?id=<?php echo $id; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#991b1b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>
                    Delete
                </a>
            </td>





                </tr>
            <?php
                    }


            ?>
        </tbody></table>
       
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $('#example').DataTable({
    order: [[3, 'desc']],
});
</script>
<style>
    html,
    body {
        height: 100%;
    }

    @media (min-width: 640px) {
        table {
            display: inline-table !important;
        }

        thead tr:not(:first-child) {
            display: none;
        }
    }

    td:not(:last-child) {
        border-bottom: 0;
    }

    th:not(:last-child) {
        border-bottom: 2px solid rgba(0, 0, 0, .1);
    }
</style>

</html>