<?php
include '_dbconnect.php';
$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$id = $queries['id'];
echo $id;
$sql2 = "UPDATE `user` SET `block`= 'no' WHERE email='$id';";
$result2 = mysqli_query($con, $sql2);
header("Location:userlog.php");
?>