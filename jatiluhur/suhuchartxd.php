
<?php
include "&_server_&/&_connection/server_connection.php";
date_default_timezone_set('Asia/Jakarta');
session_start();

$tanggalawal  =$_SESSION['tanggalawal'];
$tanggalakhir =$_SESSION['tanggalakhir'];
$tablename    =$_SESSION['tablename'];

if (empty ($tanggalakhir)) {
$tanggalakhir = "????????";
} else {
$tanggalakhir = $tanggalakhir;
}

$datestart = strtotime($tanggalawal)+3600*7;
$datestop = strtotime($tanggalakhir)+3600*7;

// Fetch the data
$result = mysql_query("select * from $tablename where `time@timestamp` between $datestart and $datestop order by data_index asc");

// Print out rows
$prefix = '';
echo "[\n";
while ( $row = mysql_fetch_assoc( $result ) ) {

  echo $prefix . " {\n";
  echo '  "Hour"    : "' . date('H:i:s', $row['time@timestamp']-3600*7) . '",' . "\n";
  echo '  "Cold"    : ' . number_format($row['data_format_8'], 4, '.', '') . ',' . "\n";
  echo '  "Hot"     : ' . number_format($row['data_format_9'], 4, '.', '') . ',' . "\n";  
  echo '  "Inlet"   : ' . number_format($row['data_format_10'], 4, '.', '') . ',' . "\n";  
  echo '  "Outlet"  : ' . number_format($row['data_format_11'], 4, '.', '') . "\n"; 
  echo " }";
  $prefix = ",\n";
}
echo "\n]";

?>