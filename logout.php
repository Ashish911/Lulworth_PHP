<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['login_username']);
header("Location: index.php");
?>
