<?php
  include('includes/db.php');
  session_start();

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = "SELECT * FROM registerusers WHERE Parent_Email = '$username' AND	Password = '$password' ";

  $result = $connection->query($query);

  $num = $result->num_rows;

  if ($num>0) {
  $_SESSION['login'] ='yes';
  $row = $result->fetch_array();

  $_SESSION['login_username'] = $row['Parent_Name'];
  $_SESSION['login_Id'] = $row['U_id'];
  $_SESSION['User_Type'] = $row['User_Type'];
  if ($row['User_Type'] =="Admin") {
      header("Location: adminpanel.php?id");
  }else {
    header("Location: Index.php");
  }
}
else{
if(!isset($_SESSION['attempt']))  $_SESSION['attempt'] = 1;
else $_SESSION['attempt'] = $_SESSION['attempt']+1;
$_SESSION['Login_last_attempt'] = date("Y-m-d H:i:s");
header("Location: Login.php?msg=error");
}
?>
