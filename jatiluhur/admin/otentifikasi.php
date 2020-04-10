<?php
include ("../&_server_&/&_connection/server_connection.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:login.php?error=1');
	break;
} else if (empty($username)) {
	header('location:login.php?error=2');
	break;
} else if (empty($password)) {
	header('location:login.php?error=3');
	break;
}

$q = mysql_query("select * from user where BINARY username='$username' and BINARY password='$password'"); //BINARY untuk case sensitive
$row = mysql_fetch_array ($q);

if (mysql_num_rows($q) == 1) {
	$_SESSION['username']   = $username;
	$_SESSION['realname']   = $row['fullname'];
    $_SESSION['id']         = $row['id'];
    $_SESSION['level']      = $row['level'];

	header('location:index.php');
} else {
	header('location:login.php?error=4');
}

$realname = $_SESSION['realname'];
$id = $_SESSION['id'];
$level = $_SESSION['level'];





?>