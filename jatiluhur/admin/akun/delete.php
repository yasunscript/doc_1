<?php
include ("../../&_server_&/&_connection/server_connection.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$id             = $_POST['id'];



$query="DELETE from user where user_id=$id ";

mysql_query($query);

if (mysql_num_rows($query) > 1) {
	header('location:../home.php');
} else {
	header('location:../home.php');
}




?>