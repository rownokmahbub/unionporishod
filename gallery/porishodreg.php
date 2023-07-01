
<?php
if (isset($_POST['upload'])) {
    include '../_dbconnect.php';
    $borgotype = $_POST['borgotype'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../Assets/image/" . $filename;
 
 
    print_r(error_get_last());
    
    $sql = "INSERT INTO `porishodborgo`(`borgotype`, `image`) VALUES ('$borgotype','$filename')";
    print_r(error_get_last());
    // Execute query
    mysqli_query($con, $sql);
    print_r(error_get_last());
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        print_r(error_get_last());
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
    print_r(error_get_last());
  
    if(mysqli_query($con, $sql)){
 
    
     header("Location:home.php");
           
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }
}

 

?>