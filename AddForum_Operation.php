<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();

$Title = $_POST['Title'];
$Content = $_POST['Content'];
$Date = $_POST['Date'];

$query = "INSERT INTO tbl_forums (`Title`,`content`,`posted_date`,`U_id`) VALUES ('$Title','$Content', '$Date','".$_SESSION['login_Id']."')";


if($connection->query($query) === true){
    header("Location: ForumInfo.php");
} else{
    echo "ERROR: Could not able to execute $query. " . $connection->error;
}
?>
