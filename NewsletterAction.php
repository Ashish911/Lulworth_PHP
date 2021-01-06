<?php
include('includes/db.php');

$Email = $_POST['Email'];

$query = "INSERT INTO tbl_newsletter (`Email`) VALUES ('$Email')";

if($connection->query($query) === true){
    header("Location: Index.php");
} else{
    echo "ERROR: Could not able to execute $query. " . $connection->error;
}

?>
