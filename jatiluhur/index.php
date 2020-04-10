<?php
include ("login_cek.php");
$level = $_SESSION['level'];

if ($level=='User') {
    header('location:login.php');   
} else {
    header('location:dashboard.php');
}

?>