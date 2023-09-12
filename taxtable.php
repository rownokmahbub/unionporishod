<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />






    <script>
        tailwind.config = {
            theme: {
                colors: {
                    primary: '#075985',
                    secondary: '#0284c7',
                },
                extend: {
                    animation: {
                        marquee: 'marquee 35s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': {
                                transform: 'translateY(0%)'
                            },
                            '100%': {
                                transform: 'translateY(-100%)'
                            },
                        }
                    },
                }
            }
        }
    </script>

</head>

<body class="md:px-10 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40">
    <!-- Navbar goes here -->
    <?php
    include './navbar.php'
    ?>
    <p class='text-center text-2xl mt-5 font-semibold'>ট্যাক্স হোল্ডার তালিকা</p>
    <!--hero section-->
    <div class="my-10">

        <table id="myTable" class="cell-border display responsive wrap" style="width:100%">
            <thead>
                <tr>
                    <th data-priority="1">হোল্ডিং নম্বর</th>
                    <th data-priority="1">নাম</th>
                    <th data-priority="2">পিতার নাম/স্বামীর নাম</th>

                    <th data-priority="2">গ্রাম</th>
                    <th data-priority="2">ওয়ার্ড</th>
                    <th data-priority="2">বাসার ধরন </th>
                    <th data-priority="2">রুম সংখ্য</th>
                    <th data-priority="2">কর</th>
                    <th data-priority="2">ভোটার আইডি</th>


                </tr>
            </thead>
            <tbody>

                <?php
                include './_dbconnect.php';
                $query = "SELECT * FROM `taxentry`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

                        <td class=''><?= $row['holdingno'] ?></td>
                        <td class=''><?= $row['name'] ?></td>
                        <td class=''><?= $row['fatherhusband'] ?></td>
                        <td class=''><?= $row['gram'] ?></td>
                        <td class=''><?= $row['ward'] ?></td>
                        <td class=''><?= $row['housetype'] ?></td>
                        <td class=''><?= $row['roomno'] ?></td>
                        <td class=''><?= $row['totaltax'] ?></td>
                        <td class=''><?= $row['voterid'] ?></td>



                    </tr>
                <?php
                }


                ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        $('#myTable').DataTable({
            responsive: true,
            columnDefs: [{
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 2,
                    targets: -1
                }
            ]
        });
    </script>
    <script src="style.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
</body>

</html>