<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
$date = date('y:m:d');
$post_id = $_POST['post_id'];
$post_comment = $_POST['post_comment'];

$query = "INSERT INTO tbl_comments (`comment`,`post_id`,`U_id`,`comment_date`) VALUES ('$post_comment','$post_id','".$_SESSION['login_Id']."','$date')";


if($connection->query($query) === true){
    header("Location: Blog.php");
} else{
    echo "ERROR: Could not able to execute $query. " . $connection->error;
}
?>
