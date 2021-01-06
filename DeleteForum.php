<?php
include('includes/db.php');
$id = $_GET['id'];

$Comment = "DELETE FROM tbl_comments WHERE post_id = '$id'";
$connection->query($Comment);
$query = "DELETE FROM tbl_forums WHERE post_id = '$id'";
$connection->query($query);

header("Location: ForumInfo.php");


?>
