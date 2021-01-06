<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();

$BlogTitle = $_POST['BlogTitle'];
$BlogDescription = $_POST['BlogDescription'];

$id = $_POST['id'];

$query = "UPDATE tbl_blog SET `Blog_Title` = '$BlogTitle', `Blog_Description` = '$BlogDescription' WHERE Blog_Id = '$id' ";

$connection->query($query);
header("Location: BlogInfo.php");


?>
