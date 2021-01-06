<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();

$UserId = $_SESSION['login_Id'];

$eventid = $_POST['event'];

$query = "INSERT INTO tbl_booking (`Event_Id`,`U_id`) VALUES ('$eventid','$UserId')";


if($connection->query($query) === true){
    header("Location: Index.php");
} else{
    echo "ERROR: Could not able to execute $query. " . $connection->error;
}
?>
