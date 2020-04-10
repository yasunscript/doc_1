<?php
include "login_cek.php";
include "../&_server_&/&_connection/server_connection.php";
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
    <link rel="shortcut icon" href="../images/logo.ico">

    <title>REAL TIME DATA MONITORING</title>
	<link rel="stylesheet" href="../css/bootstrap.css"> 
     <link rel="stylesheet" href="../css/dashapp.css">  
       <link rel="stylesheet" href="../css/tablestyle.css"> 
      <link rel="stylesheet" href="../css/loginstyle.css">
      
  </head>

  
<body> 
<?php 
    include("menu.php");
    ?>
    
<div class="container-fluid">
<div class="row">


	  
<div class="panels-header1" align="center">  
<div class="container-fluid"> 
    <div class="col-md-12" style="font-size:1.1em; font-weight:bold;">Unit Usaha Perum Jasatirta II - Rencana Kerja Operasi</div> 
</div>
</div> 
    
<div class="col-md-3">    
<div class="panels-white1" style="font-weight:bold; color:#ffffff; background:#0B48DC;" align="center">Form Input Data </div>    
<div class="panels-white4" style="width: 100%; height: 75vh; overflow:hidden; padding:10px;">  
   <form method="post" action="rencana_operasi/insert.php" name="form"> 
    <label class="style1">Tahun :</label>   
       <select type="text" name="tahun" class="form-control">
           <option>2017</option>
           <option>2018</option>
           <option>2019</option>
           <option>2020</option>           
       </select>       
    <label class="style1">Bulan :</label>
       <select type="text" name="bulan" class="form-control">
           <option>Januari</option>
           <option>Februari</option>
           <option>Maret</option>
           <option>April</option>
           <option>Mei</option>
           <option>Juni</option>
           <option>Juli</option>
           <option>Agustus</option>
           <option>September</option>
           <option>Oktober</option>
           <option>November</option>
           <option>Desember</option>                
       </select>
    <label class="style1">PLTA Juanda (KWH) :</label>   
    <input type="text" name="plta_juanda_kwh" class="form-control" placeholder="0000" style="text-align:right;">
    <label class="style1">IPP Curug (KWH) :</label>   
    <input type="text" name="ipp_curug_kwh" class="form-control" placeholder="0000" style="text-align:right";> 
       <br>
    <input type="submit" value="Save" class="login-submit"> 
  </form>

</div> 
    </div>    
        
<div class="col-md-9">  
<div class="panels-white1" style="font-weight:bold; color:#ffffff; background:#0B48DC;" align="center">Data Tabel </div>    
<div class="panels-white4" style="width: 100%; height: 75vh;">
   
<table  width="100%" cellpadding="10" cellspacing="0">

<thead class="style13">
<th width="5%" align="center"  class="style13">ID</th>    
<th width="5%" align="center"  class="style13">RKT</th>
<th width="5%" align="center"  class="style13">Semester</th>    
<th width="10%" align="center"  class="style13">Tahun</th>
<th width="20%" align="center"  class="style13">Bulan</th>    
<th width="15%" align="center"  class="style13">PLTA Juanda<br>(KWH)</th>
<th width="15%" align="center"  class="style13">IPP Curug<br>(KWH)</th>
<th width="15%" align="center"  class="style13">Total Pembangkit<br>(KWH)</th> 
<th width="10%" align="center"  class="style13" >Aksi</th>     
</thead>


<tbody>    
<?php
   
$result = mysql_query("select * from rencana_operasi order by id asc");
  
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="center" class="style4"><?php echo ($rows['id']); ?></td>    
<td align="center" class="style3"><?php echo ($rows['rkt']); ?></td>
<td align="center" class="style3"><?php echo ($rows['semester']); ?></td> 
<td align="center" class="style3"><?php echo ($rows['tahun']); ?></td>    
<td align="left" class="style3"><?php echo ($rows['bulan']); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['plta_juanda_kwh'],"2",".",","); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['ipp_curug_kwh'],"2",".",","); ?></td>
<td align="right" class="style3"><?php echo number_format($rows['total_kwh'],"2",".",","); ?></td>  
<td align="center" class="style3">
    <form method="post" action="rencana_operasi/delete.php" name="form">
    <input type="hidden" name="id" value="<?php echo ($rows['id']); ?>" class="form-control">
    <input type="submit" value="Hapus" class="btn-red" style="width:100%"></form></td>    
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
    

    <script src="../js/datetime.js"></script>
    <script src="../js/jquery-1.7.1.min.js"></script>
    
  </body>
</html>
