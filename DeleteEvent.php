<?php
include('includes/db.php');
$id = $_GET['id'];

$Book = "DELETE FROM tbl_booking WHERE Event_Id = '$id'";
$connection->query($Book);
$query = "DELETE FROM tbl_events WHERE Event_Id = '$id'";
$connection->query($query);


header("Location: EventInfo.php");


?>
