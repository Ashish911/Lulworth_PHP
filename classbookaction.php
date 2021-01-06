<?php
include('includes/db.php');

$user_id=$_SESSION['login_Id'];
$class_type=$_POST['classtype'];
$schedule_type=$_POST['scheduletype'];

echo $bookclassquery = "INSERT INTO tbl_classbookings (ID, class_type, schedule_type, U_id) VALUES (NULL,'$class_type','$schedule_type','$user_id')";

if($connection->query($bookclassquery) === true){
		header("Location:AboutUS.php");
	}else{
		echo "ERROR: Could not be able to execute $bookclassquery. " . $connection->error;
}
?>
