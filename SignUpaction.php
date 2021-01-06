<?php
include('includes/db.php');

$ParentName = $_POST['ParentName'];
$ChildName = $_POST['ChildName'];
$ChildDOB = $_POST['ChildDOB'];
$ParentEmail = $_POST['ParentEmail'];
$PhoneNo = $_POST['PhoneNo'];
$address = $_POST['Address'];
$password = md5($_POST['password']);
$class = $_POST['Class'];
$comment = $_POST['Comment'];

$select = "SELECT * FROM registerusers where User_Type = 'User'";

$result=$connection->query($select);
$i=1;
while ($row=$result->fetch_array()) {

if ($ParentEmail == $row['Parent_Email']) {
  header("Location:SignUp.php?msg=errorParentEmail");
  die();
}
$i++;
}


$query = "INSERT INTO registerusers (`Parent_Name`,`Child_Name`,`Child_DOB`,`Parent_Email`, `Phone_No`, `Address`,`Password`,`Class`,`Comment`,`User_Type`) VALUES ('$ParentName','$ChildName', '$ChildDOB', '$ParentEmail','$PhoneNo','$address','$password','$class','$comment','User')";


if($connection->query($query) === true){
    header("Location: Index.php");
} else{
    echo "ERROR: Could not able to execute $query. " . $connection->error;
}

?>
