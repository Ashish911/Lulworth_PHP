<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();

$TeacherName = $_POST['TeacherName'];
$TeacherJob = $_POST['TeacherJob'];
$TeacherClass = $_POST['TeacherClass'];

$query = "INSERT INTO tbl_teachers (`Teacher_Name`,`Teacher_Job`,`Teacher_Class`) VALUES ('$TeacherName','$TeacherJob', '$TeacherClass')";


if($connection->query($query) === true){
    header("Location: TeacherInfo.php");
} else{
    echo "ERROR: Could not able to execute $query. " . $connection->error;
}
?>
