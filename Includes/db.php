<?php
session_start();
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'lcdc';

$connection = new mysqli($host,$username,$password,$database);
?>
