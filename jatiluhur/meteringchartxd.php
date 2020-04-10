
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
  echo '  "Hour": "' . date('H:i:s', $row['time@timestamp']-3600*7) . '",' . "\n";
  echo '  "MW"  : ' . number_format($row['data_format_0'], 4, '.', '') . ',' . "\n";
  echo '  "MVAR": ' . number_format($row['data_format_1'], 4, '.', '') . ',' . "\n";  
  echo '  "KV"  : ' . number_format($row['data_format_2'], 4, '.', '') . ',' . "\n";  
  echo '  "KA"  : ' . number_format($row['data_format_3'], 4, '.', '') . ',' . "\n"; 
  echo '  "FREQ": ' . number_format($row['data_format_4'], 4, '.', '') . ',' . "\n"; 
  echo '  "PF"  : ' . number_format($row['data_format_5'], 4, '.', '') . "\n"; 
  echo " }";
  $prefix = ",\n";
}
echo "\n]";

?>