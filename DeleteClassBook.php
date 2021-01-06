<?php
include('includes/db.php');
$id = $_GET['id'];

$query = "DELETE FROM tbl_classbookings WHERE ID = '$id'";
$connection->query($query);

header("Location: ClassBookingInfo.php");


?>
