<?php
include('includes/db.php');

$username = $_POST['username'];
$Email = $_POST['Email'];
$Comment = $_POST['Comment'];

$query = "INSERT INTO tbl_contactus (`Username`,`Email`,`Comment`) VALUES ('$username','$Email', '$Comment')";

if($connection->query($query) === true){
    header("Location: ContactUs.php");
} else{
    echo "ERROR: Could not able to execute $query. " . $connection->error;
}

?>
