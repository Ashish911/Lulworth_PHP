<?php
function checkLogin(){
    if(!isset($_SESSION['login'])||$_SESSION['login']!='yes'){
        die('<h1>Unauthorize Access</h1>');
    }
}
function checkadmin(){
  if ($_SESSION['User_Type']!="Admin") {
    die('<h1>Unauthorize Access</h1>');
  }
}
function checkUser(){
  if ($_SESSION['User_Type']!="User") {
    die('<h1>Unauthorize Access</h1>');
  }
}
?>
