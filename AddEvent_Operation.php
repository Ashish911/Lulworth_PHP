<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();

$EventName = $_POST['EventName'];
$EventDescription = $_POST['EventDescription'];
$EventDate = $_POST['EventDate'];

$query = "INSERT INTO tbl_events (`Event_Name`,`Event_Description`,`Event_Date`) VALUES ('$EventName','$EventDescription', '$EventDate')";


if($connection->query($query) === true){
    header("Location: EventInfo.php");
} else{
    echo "ERROR: Could not able to execute $query. " . $connection->error;
}
?>
