<?php
include('includes/db.php');
$id = $_GET['id'];

$query = "DELETE FROM tbl_blog WHERE Blog_Id = '$id'";
$connection->query($query);

header("Location: BlogInfo.php");


?>
