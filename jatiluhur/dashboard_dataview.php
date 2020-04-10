
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
    
<body style="background-image:url(images/mapdash_Images/mapdash_ImgID1.png);background-repeat: repeat;background-size: 100% 100vh;">  

<?php 
    include("menu.php");
    ?>
    
<div class="container-fluid">
<div class="row">


	  
<div class="panels-header1" align="center">  
<div class="container-fluid"> 
    <div class="col-md-10" style="font-size:1.1em; font-weight:bold;">Data View PLTA Ir. H. Juanda</div>                     
    <a href="dashboard.php"><div class="col-md-2 panels-blue2">Overview</div></a>      
</div>
</div> 
    

 <div class="col-md-3" >     
    <div class="panels-white1" style="font-size:1.2em; height : 470px;">      
        <div class="panels-blue1" align="center">GI JATILUHUR</div>
        <div class="panels-white" align="left">PEMBANGKIT</div>
<table width="100%">
<tr>
<td width="40%">Unit 1</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DAktif">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Unit 2</td>       
<td width="40%"><div align="right" class="textbox" id="Unit2_DAktif">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Unit 3</td>       
<td width="40%"><div align="right" class="textbox" id="Unit3_DAktif">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Unit 4</td>       
<td width="40%"><div align="right" class="textbox" id="Unit4_DAktif">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td>
</tr>
<tr>
<td width="40%">Unit 5</td>       
<td width="40%"><div align="right" class="textbox" id="Unit5_DAktif">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Unit 6</td>       
<td width="40%"><div align="right" class="textbox" id="Unit6_DAktif">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>  
<tr>
<td width="40%">Total Daya</td>       
<td width="40%"><div align="right" class="textbox" id="Total_DAktif">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>     
</table>  
        
        <div class="panels-white" align="left">PENYALURAN</div>
<table width="100%">
<tr>
<td width="40%">Tata Jabar 1</td>       
<td width="40%"><div align="right" class="textbox" id="TJB1MW">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Tata Jabar 2</td>       
<td width="40%"><div align="right" class="textbox" id="TJB2MW">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Padalarang 1</td>       
<td width="40%"><div align="right" class="textbox" id="PDL1MW">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Padalarang 2</td>       
<td width="40%"><div align="right" class="textbox" id="PDL2MW">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td>
</tr>
<tr>
<td width="40%">Trafo 40 MVA 1</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA1MW">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Trafo 40 MVA 2</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA2MW">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr> 
<tr>
<td width="40%">Trafo 40 MVA 3</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA3MW">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>     
<tr>
<td width="40%">Line Curug</td>       
<td width="40%"><div align="right" class="textbox" id="LCRG">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Line Ciganea</td>       
<td width="40%"><div align="right" class="textbox" id="LCGN">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr> 
</table>         
       
    </div>
 
    </div>
    
<div class="col-md-3">     
    <div class="panels-white1" style="font-size:1.2em; height : 470px;">      
        <div class="panels-blue1" align="center">GI CURUG</div>
        <div class="panels-white" align="left">PEMBANGKIT</div>
<table width="100%">
<tr>
<td width="40%">Mini Hydro Unit 1</td>       
<td width="40%"><div align="right" class="textbox" id="MHYD1MW">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Mini Hydro Unit 2</td>       
<td width="40%"><div align="right" class="textbox" id="MHYD2MW">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Total Daya</td>       
<td width="40%"><div align="right" class="textbox" id="MWJT2">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
</table>  
 <br>       
        <div class="panels-white" align="left">PENYALURAN</div>
<table width="100%">
<tr>
<td width="40%">Feeder PT. KTP</td>       
<td width="40%"><div align="right" class="textbox" id="MWJT1">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVA</td> 
</tr>
<tr>
<td width="40%">Feeder PT. BPS</td>       
<td width="40%"><div align="right" class="textbox" id="MWJT2">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVA</td> 
</tr>      
</table>         
       
    </div>
 
    </div>
    
<div class="col-md-3">     
    <div class="panels-white1" style="font-size:1.2em; height : 470px;">      
        <div class="panels-blue1" align="center">GI CIGANEA</div>
        <div class="panels-white" align="left">PENYALURAN</div>
<table width="100%">
<tr>
<td width="40%">Feeder Elegant 1</td>       
<td width="40%"><div align="right" class="textbox" id="FELG1MVA">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVA</td> 
</tr>
<tr>
<td width="40%">Feeder Elegant 2</td>       
<td width="40%"><div align="right" class="textbox" id="FELG2MVA">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVA</td> 
</tr>
<tr>
<td width="40%">Feeder Elegant 3</td>       
<td width="40%"><div align="right" class="textbox" id="FELG3MVA">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVA</td> 
</tr>
<tr>
<td width="40%">Feeder Elegant 4</td>       
<td width="40%"><div align="right" class="textbox" id="FELG4MVA">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVA</td> 
</tr>
<tr>
<td width="40%">Feeder Indorama</td>       
<td width="40%"><div align="right" class="textbox" id="FINDMVA">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVA</td> 
</tr>    
<tr>
<td width="40%">Feeder PS/K. Pusat</td>       
<td width="40%"><div align="right" class="textbox" id="FKPUSATMVA">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVA</td> 
</tr>
<tr>
<td width="40%">Feeder T. Kayat</td>       
<td width="40%"><div align="right" class="textbox" id="FTKAYATMVA">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVA</td> 
</tr>    

</table>  
                
       
    </div>
 
    </div>
    
<div class="col-md-3">     
    <div class="panels-white1" style="font-size:1.2em; height : 470px;">      
        <div class="panels-blue1" align="center">DATA HIDROLOGI</div>
<table width="100%">
<tr>
<td width="40%">TMA Waduk</td>       
<td width="40%"><div align="right" class="textbox" id="TMAWD">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;mdpl</td> 
</tr>
<tr>
<td width="40%">TMA Tail Race</td>       
<td width="40%"><div align="right" class="textbox" id="TMATR">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;mdpl</td> 
</tr>   
<tr>
<td width="40%">Air Masuk</td>       
<td width="40%"><div align="right" class="textbox" id="MWJT1">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;M3/dtk</td> 
</tr>
<tr>
<td width="40%">Air Keluar</td>       
<td width="40%"><div align="right" class="textbox" id="MWJT1">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;M3/dtk</td> 
</tr>     
<tr>
<td width="40%">Hollow Jet Kiri</td>       
<td width="40%"><div align="right" class="textbox" id="MWJT1">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;M3/dtk</td> 
</tr>  
<tr>
<td width="40%">Hollow Jet Kanan</td>       
<td width="40%"><div align="right" class="textbox" id="MWJT1">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;M3/dtk</td> 
</tr>  
<tr>
<td width="40%">Limpasan</td>       
<td width="40%"><div align="right" class="textbox" id="MWJT1">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;M3/dtk</td> 
</tr>      

</table>         
       
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
    <script src="&_server_&/&_connection/00_gijt_unit0.js"></script>
    <script src="&_server_&/&_connection/07_gijt_unit7.js"></script>
  </body>

  
  </html>
