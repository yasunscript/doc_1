
<?php
include ("login_cek.php");
include "&_server_&/&_connection/server_connection.php";
date_default_timezone_set('Asia/Jakarta');
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
     
  </head>
    
<body>     

<?php 
    include("menu.php");
    ?>
    
<div class="container-fluid">
<div class="row">


	  
<div class="panels-header1" align="center">  
<div class="container-fluid"> 
    <div class="col-md-10" style="font-size:1.1em; font-weight:bold;">Data View GI Jatiluhur</div>                     
    <a href="dashboard_jatiluhur.php"><div class="col-md-2 panels-blue2">Overview</div></a>      
</div>
</div> 
    

<div class="col-md-6" >     
<div class="panels-white1" style="font-size:1.2em; height : 81vh;">      
<div class="panels-blue1" align="center">PEMBANGKIT</div>

<div class="col-md-6" >
<div class="panels-white" align="left">UNIT-1</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>
    
<div class="panels-white" align="left">UNIT-2</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit2_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit2_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit2_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit2_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>  
        
<div class="panels-white" align="left">UNIT-3</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>
    
</div>    

<div class="col-md-6" >
<div class="panels-white" align="left">UNIT-4</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit4_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit4_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit4_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit4_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>  
        
<div class="panels-white" align="left">UNIT-5</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit5_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit5_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit5_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit5_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>
        
<div class="panels-white" align="left">UNIT-6</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>
</div>   
       
    </div>
 
    </div>
    

<div class="col-md-6" >     
<div class="panels-white1" style="font-size:1.2em; height : 81vh;">      
<div class="panels-blue1" align="center">PENYALURAN</div>

<div class="col-md-6" >
<div class="panels-white" align="left">Tata Jabar 1</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>
    
<div class="panels-white" align="left">Tata Jabar 2</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit2_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit2_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit2_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit2_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>  
        
<div class="panels-white" align="left">Padalarang 1</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>
    
<div class="panels-white" align="left">Padalarang 2</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>    
    
</div>    

<div class="col-md-6" >
<div class="panels-white" align="left">Line GI Ciganea</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit4_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit4_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit4_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit4_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>  
        
<div class="panels-white" align="left">Line GI Curug</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit5_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit5_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit5_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit5_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>
        
<div class="panels-white" align="left">Trafo 40 MVA 1</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>
    
<div class="panels-white" align="left">Trafo 40 MVA 2</div>
<table width="100%">
<tr>
<td width="50%">Daya Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DAktif">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="50%">Daya Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DAktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KWH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DReaktifKirim">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td> 
</tr>
<tr>
<td width="50%">Daya Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DReaktifTerima">0000</div></td>       
<td width="10%" align="Left">&nbsp;&nbsp;KVARH</td>
</tr>    
</table>
    
</div>   
       
    </div>
 
    </div>
    
    
    </div>
    </div>    
    
<br>    
    <!-- END MAIN CONTENT -->

      <footer>
  <table width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
<tr>
       <td width="100%" align="center"><div id="clock"></div></td>
      </tr>
  </table>
 </footer>
    
    <script src="js/datetime.js"></script>
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="&_server_&/&_connection/01_gijt_unit1.js"></script>
    <script src="&_server_&/&_connection/02_gijt_unit2.js"></script>
    <script src="&_server_&/&_connection/03_gijt_unit3.js"></script>
    <script src="&_server_&/&_connection/04_gijt_unit4.js"></script>
    <script src="&_server_&/&_connection/05_gijt_unit5.js"></script>
    <script src="&_server_&/&_connection/06_gijt_unit6.js"></script>
    
  </body>

  
  </html>
