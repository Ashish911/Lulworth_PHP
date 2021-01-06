<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();

$BlogTitle = $_POST['BlogTitle'];
$BlogDescription = $_POST['BlogDescription'];

$query = "INSERT INTO tbl_blog (`Blog_Title`,`Blog_Description`) VALUES ('$BlogTitle','$BlogDescription')";


if($connection->query($query) === true){
    header("Location: BlogInfo.php");
} else{
    echo "ERROR: Could not able to execute $query. " . $connection->error;
}
?>
