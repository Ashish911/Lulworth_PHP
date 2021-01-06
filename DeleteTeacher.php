<?php
include('includes/db.php');
$id = $_GET['id'];

$query = "DELETE FROM tbl_teachers WHERE Teacher_Id = '$id'";
$connection->query($query);

header("Location: TeacherInfo.php");


?>
