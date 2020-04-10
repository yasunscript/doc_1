<?php
include ("login_cek.php");
include "&_server_&/&_connection/server_connection.php";

//tangkap data dari form
$id = $_POST['userid'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];

//update data di database sesuai user_id
$query = mysql_query("update userme set username='$username', password='$password', name='$fullname' where id='$id'") or die(mysql_error());

if ($query) {
	header('location:user_info.php?message=password_update_success');
}
?>