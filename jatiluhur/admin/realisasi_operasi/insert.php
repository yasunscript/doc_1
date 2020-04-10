<?php
include ("../../&_server_&/&_connection/server_connection.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$tahun              = $_POST['tahun'];
$bulan              = $_POST['bulan'];
$plta_juanda_kwh    = $_POST['plta_juanda_kwh'];
$ipp_curug_kwh      = $_POST['ipp_curug_kwh'];
$total_kwh          = $plta_juanda_kwh + $ipp_curug_kwh;

  if ($bulan =='Januari') {
    $id         = $tahun.'01';
    $rkt        = 'I';
    $semester   = '1';
} else if ($bulan =='Februari') {
    $id = $tahun.'02';
    $rkt        = 'I';
    $semester   = '1';      
} else if ($bulan =='Maret') {
    $id = $tahun.'03';
    $rkt        = 'I';
    $semester   = '1';      
} else if ($bulan =='April') {
    $id = $tahun.'04';
    $rkt        = 'II';
    $semester   = '1';      
} else if ($bulan =='Mei') {
    $id = $tahun.'05';
    $rkt        = 'II';
    $semester   = '1';      
} else if ($bulan =='Juni') {
    $id = $tahun.'06';
    $rkt        = 'II';
    $semester   = '1';      
} else if ($bulan =='Juli') {
    $id = $tahun.'07';
    $rkt        = 'III';
    $semester   = '2';      
} else if ($bulan =='Agustus') {
    $id = $tahun.'08';
    $rkt        = 'III';
    $semester   = '2';      
} else if ($bulan =='September') {
    $id = $tahun.'09';
    $rkt        = 'III';
    $semester   = '2';      
} else if ($bulan =='Oktober') {
    $id = $tahun.'10';
    $rkt        = 'IV';
    $semester   = '2';      
} else if ($bulan =='November') {
    $id = $tahun.'11';
    $rkt        = 'IV';
    $semester   = '2';      
} else {
    $id = $tahun.'12'; 
    $rkt        = 'IV';
    $semester   = '2';      
}


$query="INSERT INTO realisasi_operasi SET id='$id', rkt='$rkt', semester='$semester', tahun='$tahun', bulan='$bulan', plta_juanda_kwh='$plta_juanda_kwh', ipp_curug_kwh='$ipp_curug_kwh', total_kwh='$total_kwh' ";

mysql_query($query);

if (mysql_num_rows($query) > 1) {
	header('location:../realisasi_operasi.php');
} else {
	header('location:../realisasi_operasi.php');
}




?>