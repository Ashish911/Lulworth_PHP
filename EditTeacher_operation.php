<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();

$Teacher_Name = $_POST['Teacher_Name'];
$Teacher_Job = $_POST['Teacher_Job'];
$Teacher_Class = $_POST['Teacher_Class'];

$id = $_POST['id'];

$query = "UPDATE tbl_events SET `Teacher_Name` = '$Teacher_Name', `Teacher_Job` = '$Teacher_Job', `Teacher_Class` = '$Teacher_Class' WHERE Teacher_Id = '$id' ";

$connection->query($query);
header("Location: TeacherInfo.php");


?>
