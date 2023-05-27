<?php

include "_dbconnect.php";

if (isset($_POST['submit'])) {

    $title = $_POST['title'];

    $category = $_POST['category'];
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $bio = $_POST['bio'];
    echo 'fdfdf';

    $sql = "INSERT INTO `post` (`id`, `title`, `category`, `image`, `bio`) VALUES ('', '$title', '$category', '$check', '$bio')";
    echo 'fdfdf';
    $result = $con->query($sql);

    if ($result == TRUE) {

        echo "New record created successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $con->error;
    }

    $con->close();
}
