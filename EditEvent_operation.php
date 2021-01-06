<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();

$Event_Name = $_POST['Event_Name'];
$Event_Description = $_POST['Event_Description'];
$Event_Date = $_POST['Event_Date'];

$id = $_POST['id'];

$query = "UPDATE tbl_events SET `Event_Name` = '$Event_Name', `Event_Description` = '$Event_Description', `Event_Date` = '$Event_Date' WHERE Event_Id = '$id' ";

$connection->query($query);
header("Location: EventInfo.php");


?>
