<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();

$Title = $_POST['Title'];
$Content = $_POST['Content'];
$posted_date = $_POST['Date'];

$id = $_POST['id'];

$query = "UPDATE tbl_forums SET `Title` = '$Title', `Content` = '$Content', `posted_date` = '$posted_date' WHERE post_id = '$id' ";

$connection->query($query);
header("Location: ForumInfo.php");


?>
