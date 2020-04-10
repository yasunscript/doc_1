<?php
include "login_cek.php";
include "&_server_&/&_connection/server_connection.php";
date_default_timezone_set('Asia/Jakarta');
$Tahun = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo.ico">

    <title>REAL TIME DATA MONITORING</title>
	<link rel="stylesheet" href="css/bootstrap.css"> 
     <link rel="stylesheet" href="css/dashapp.css">  
       <link rel="stylesheet" href="css/tablestyle.css"> 
      
  </head>

  
<body> 
<?php 
    include("menu.php");
    ?>
    
<div class="container-fluid">
<div class="row">


	  
<div class="panels-header1" align="center">  
<div class="container-fluid"> 
    <div class="col-md-12" style="font-size:1.1em; font-weight:bold;">Unit Usaha PLTA Perum Jasatirta II</div> 
</div>
</div>          
        
<div class="col-md-12">  
<div class="panels-white1" style="font-weight:bold; color:#ffffff; background:#0B48DC;" align="center">Rencana Kerja Operasi Tahun <?php echo $Tahun?></div>    
<div class="panels-white4" style="width: 100%; height: 75vh;">
   
<table  width="100%" cellpadding="10" cellspacing="0">

<thead class="style13">
<th width="10%" align="center"  class="style13">RKT</th>
<th width="40%" align="center"  class="style13">Bulan</th>
<th width="15%" align="center"  class="style13">PLTA Juanda (KWH)</th>
<th width="15%" align="center"  class="style13">PLTMH Curug (KWH)</th>
<th width="20%" align="center"  class="style13">Total Pembangkit (KWH)</th>    
</thead>


<tbody>    
<?php
   
$result = mysql_query("select * from rencana_operasi where rkt='I' and tahun = $Tahun order by id asc");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style4"><?php echo ($rows['rkt']); ?></td>
<td align="left" class="style4"><?php echo ($rows['bulan']); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['plta_juanda_kwh'],"2",".",","); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['ipp_curug_kwh'],"2",".",","); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['total_kwh'],"2",".",","); ?></td>
</tr>
</tbody>        
    
    
    
<?php
}
?>
<tbody>  
    
<?php
   
$result = mysql_query("select sum(plta_juanda_kwh) as sumplta, sum(ipp_curug_kwh) as sumcurug, sum(total_kwh) as sumtotal from rencana_operasi where rkt='I' and tahun = $Tahun");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style6"></td>
<td align="left"   class="style6">Kumulatif RKT 1</td>
<td align="right"  class="style6"><?php echo number_format($rows['sumplta'],"2",".",","); ?></td>
<td align="right"  class="style6"><?php echo number_format($rows['sumcurug'],"2",".",","); ?></td>
<td align="right"  class="style6"><?php echo number_format($rows['sumtotal'],"2",".",","); ?></td>
</tr>
</tbody>        

<?php
}
?>    
    

<tbody>    
<?php
   
$result = mysql_query("select * from rencana_operasi where rkt='II' and tahun = $Tahun order by id asc");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style7"><?php echo ($rows['rkt']); ?></td>
<td align="left" class="style7"><?php echo ($rows['bulan']); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['plta_juanda_kwh'],"2",".",","); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['ipp_curug_kwh'],"2",".",","); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['total_kwh'],"2",".",","); ?></td>
</tr>
</tbody>        

<?php
}
?>
<tbody>  
    
<?php
   
$result = mysql_query("select sum(plta_juanda_kwh) as sumplta, sum(ipp_curug_kwh) as sumcurug, sum(total_kwh) as sumtotal from rencana_operasi where rkt='II' and tahun = $Tahun");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style8"></td>
<td align="left" class="style8">Kumulatif RKT 2</td>
<td align="right" class="style8"><?php echo number_format($rows['sumplta'],"2",".",","); ?></td>
<td align="right" class="style8"><?php echo number_format($rows['sumcurug'],"2",".",","); ?></td>
<td align="right" class="style8"><?php echo number_format($rows['sumtotal'],"2",".",","); ?></td>
</tr>
</tbody>        

<tbody>     
<?php
}
?> 
    
<?php
   
$result = mysql_query("select sum(plta_juanda_kwh) as sumplta, sum(ipp_curug_kwh) as sumcurug, sum(total_kwh) as sumtotal from rencana_operasi where semester='1' and tahun = $Tahun");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style9"></td>
<td align="left" class="style9">Semester 1</td>
<td align="right" class="style9"><?php echo number_format($rows['sumplta'],"2",".",","); ?></td>
<td align="right" class="style9"><?php echo number_format($rows['sumcurug'],"2",".",","); ?></td>
<td align="right" class="style9"><?php echo number_format($rows['sumtotal'],"2",".",","); ?></td>
</tr>
</tbody>        

<?php
}
?>     

    

<tbody>    
<?php
   
$result = mysql_query("select * from rencana_operasi where rkt='III' and tahun = $Tahun order by id asc");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style4"><?php echo ($rows['rkt']); ?></td>
<td align="left" class="style4"><?php echo ($rows['bulan']); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['plta_juanda_kwh'],"2",".",","); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['ipp_curug_kwh'],"2",".",","); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['total_kwh'],"2",".",","); ?></td>
</tr>
</tbody>        
    
    
    
<?php
}
?>
<tbody>  
    
<?php
   
$result = mysql_query("select sum(plta_juanda_kwh) as sumplta, sum(ipp_curug_kwh) as sumcurug, sum(total_kwh) as sumtotal from rencana_operasi where rkt='III' and tahun = $Tahun");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style6"></td>
<td align="left" class="style6">Kumulatif RKT 3</td>
<td align="right" class="style6"><?php echo number_format($rows['sumplta'],"2",".",","); ?></td>
<td align="right" class="style6"><?php echo number_format($rows['sumcurug'],"2",".",","); ?></td>
<td align="right" class="style6"><?php echo number_format($rows['sumtotal'],"2",".",","); ?></td>
</tr>
</tbody>        

<?php
}
?>    
    

<tbody>    
<?php
   
$result = mysql_query("select * from rencana_operasi where rkt='IV' and tahun = $Tahun order by id asc");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style7"><?php echo ($rows['rkt']); ?></td>
<td align="left" class="style7"><?php echo ($rows['bulan']); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['plta_juanda_kwh'],"2",".",","); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['ipp_curug_kwh'],"2",".",","); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['total_kwh'],"2",".",","); ?></td>
</tr>
</tbody>        

<?php
}
?>
<tbody>  
    
<?php
   
$result = mysql_query("select sum(plta_juanda_kwh) as sumplta, sum(ipp_curug_kwh) as sumcurug, sum(total_kwh) as sumtotal from rencana_operasi where rkt='IV' and tahun = $Tahun");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style8"></td>
<td align="left" class="style8">Kumulatif RKT 4</td>
<td align="right" class="style8"><?php echo number_format($rows['sumplta'],"2",".",","); ?></td>
<td align="right" class="style8"><?php echo number_format($rows['sumcurug'],"2",".",","); ?></td>
<td align="right" class="style8"><?php echo number_format($rows['sumtotal'],"2",".",","); ?></td>
</tr>
</tbody>        

<?php
}
?>
    
    
<tbody>     
<?php
   
$result = mysql_query("select sum(plta_juanda_kwh) as sumplta, sum(ipp_curug_kwh) as sumcurug, sum(total_kwh) as sumtotal from rencana_operasi where semester='2' and tahun = $Tahun");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style9"></td>
<td align="left" class="style9">Semester 2</td>
<td align="right" class="style9"><?php echo number_format($rows['sumplta'],"2",".",","); ?></td>
<td align="right" class="style9"><?php echo number_format($rows['sumcurug'],"2",".",","); ?></td>
<td align="right" class="style9"><?php echo number_format($rows['sumtotal'],"2",".",","); ?></td>
</tr>
</tbody>        

<?php
}
?> 
    

<tbody>     

<?php
   
$result = mysql_query("select sum(plta_juanda_kwh) as sumplta, sum(ipp_curug_kwh) as sumcurug, sum(total_kwh) as sumtotal from rencana_operasi where tahun = $Tahun");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style10"></td>
<td align="left" class="style10">Total Kumulatif RKT 1 s.d RKT 4</td>
<td align="right" class="style10"><?php echo number_format($rows['sumplta'],"2",".",","); ?></td>
<td align="right" class="style10"><?php echo number_format($rows['sumcurug'],"2",".",","); ?></td>
<td align="right" class="style10"><?php echo number_format($rows['sumtotal'],"2",".",","); ?></td>
</tr>
</tbody>        

<?php
}
?> 

<tbody>     

<?php
   
$result = mysql_query("select sum(plta_juanda_kwh) as sumplta, sum(ipp_curug_kwh) as sumcurug, sum(total_kwh) as sumtotal from rencana_operasi where tahun = $Tahun");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style10"></td>
<td align="left" class="style10">Target RKO 2017</td>
<td align="right" class="style10"><?php echo number_format($rows['sumplta'],"2",".",","); ?></td>
<td align="right" class="style10"><?php echo number_format($rows['sumcurug'],"2",".",","); ?></td>
<td align="right" class="style10"><?php echo number_format($rows['sumtotal'],"2",".",","); ?></td>
</tr>
</tbody>        

<?php
}
?>    
</table>



</div> 
    </div>



      <footer>
  <table width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
<tr>
       <td width="100%" align="center"><div id="clock"></div></td>
      </tr>
  </table>
 </footer>
    

    <script src="js/datetime.js"></script>
    <script src="js/jquery-1.7.1.min.js"></script>
    
  </body>
</html>
