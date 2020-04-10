<?php
include ("../../&_server_&/&_connection/server_connection.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$id             = $_POST['id'];



$query="DELETE from realisasi_operasi where id=$id ";

mysql_query($query);

if (mysql_num_rows($query) > 1) {
	header('location:../realisasi_operasi.php');
} else {
	header('location:../realisasi_operasi.php');
}




?>