<?php
include('includes/db.php');

$user_id=$_POST['id'];
$oldPassword = md5($_POST['OldPassword']);
$newPassword = md5($_POST['NewPassword']);
$confirmPassword = md5($_POST['ConfirmPassword']);

$findpasswordquery = "SELECT * FROM registerusers WHERE U_id = '$user_id' ";

$result = $connection->query($findpasswordquery);
while($row = $result->fetch_array()){
if ($oldPassword == $row['Password'] && $newPassword == $confirmPassword){

$updatepasswordquery = "UPDATE registerusers SET Password = '$confirmPassword' WHERE U_id = '$user_id' ";

$connection->query($updatepasswordquery);
header("Location: Index.php");
}
else{
header("Location: EditUserPassword.php?msg=error");
}
}
?>
