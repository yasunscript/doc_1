<?php 
session_start();
$periode = $_POST['periode'];
$sumvolume = $_POST['sumvolume'];
$meteringname  =$_SESSION['meteringname'];
header('Content-Type: application/force-download');  
header('Content-disposition: attachment; filename=HisSuhu_'.$meteringname.'_'.$periode.'.xls');  
header ("Content-Type: application/vnd.ms-excel"); 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<h3 align="center">PLTA Ir. H. Juanda<br>Historical Data Suhu Report<br/></h3>

<table>
<tr>
<td><b>Meter Name</b></td><td><b>:&nbsp;<?php echo $meteringname ?></b></td>
</tr>
<tr>
<td><b>Periode</b></td><td><b>:&nbsp;<?php echo $periode ?></b></td>
</tr>      
</table>
     
<?php
echo $_REQUEST['datatodisplay'];  
?> 


</body>
</html>