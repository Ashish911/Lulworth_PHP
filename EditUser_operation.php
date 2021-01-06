<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();


$ParentName = $_POST['ParentName'];
$ChildName = $_POST['ChildName'];
$ChildDOB = $_POST['ChildDOB'];
$ParentEmail = $_POST['ParentEmail'];
$PhoneNo = $_POST['PhoneNo'];
$Address = $_POST['Address'];
$Comment = $_POST['Comment'];

$id = $_POST['id'];

$query = "UPDATE registerusers SET `Parent_Name` = '$ParentName', `Child_Name` = '$ChildName', `Child_DOB` = '$ChildDOB', `Parent_Email` = '$ParentEmail', `Phone_No` = '$PhoneNo', `Address` = '$Address', `Comment` = '$Comment'  WHERE U_id = '$id' ";

$connection->query($query);
header("Location: index.php");
?>
