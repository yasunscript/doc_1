<?php
include ("../../&_server_&/&_connection/server_connection.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username   = $_POST['username'];
$password   = $_POST['password'];
$fullname   = $_POST['fullname'];
$no_hp      = $_POST['no_hp'];
$level      = $_POST['level'];

 

$query="INSERT INTO user SET user_id='', username='$username', password='$password', fullname='$fullname', no_hp='$no_hp', level='$level'";

mysql_query($query);

if (mysql_num_rows($query) > 1) {
	header('location:../home.php');
} else {
	header('location:../home.php');
}




?>