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
	<link rel="stylesheet" href="css/bootstrap.css">     
  </head>

<body> 

<?php 
    include("menu.php");
    ?>
<div class="container-fluid">    
<div class="panels-header1" align="center">  
<div class="container-fluid">    
    <div class="col-md-8" style="font-size:1.1em; font-weight:bold;">
    <?php 
        $meteringname = "GI Jatiluhur Unit-1";
        $link = $_SERVER['REQUEST_URI'];
        $_SESSION['meteringname'] = $meteringname; 
        $_SESSION['link'] = $link;
        echo $meteringname;
        ?>
    </div>
    <a href="meteringreport.php"><div class="col-md-2 panels-blue2">Metering Report</div></a>  
    <a href="suhureport.php"><div class="col-md-2 panels-blue2">Suhu Report</div></a> 
</div>
</div>
<div class="row">          
<div class="col-md-6">
    <div class="panels-white1" >
	  <div class="panels-blue1" align="center" style=" color:#FFFFFF; font-weight:bold;">Power</div> 
<div class="panels-white">Arus</div>               
<table width="100%">
<tr>
<td width="40%">I-A</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_IA">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kA</td> 
</tr>
<tr>
<td width="40%">I-B</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_IB">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kA</td> 
</tr>
<tr>
<td width="40%">I-C</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_IC">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kA</td> 
</tr>      
</table> 
        
<div class="panels-white">Tegangan</div>               
<table width="100%">
<tr>
<td width="40%">V-AB</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_VAB">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kV</td> 
</tr>
<tr>
<td width="40%">V-BC</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_VBC">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kV</td> 
</tr>
<tr>
<td width="40%">V-CA</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_VCD">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kV</td> 
</tr>    
</table> 
        
<div class="panels-white">Power Factor</div>               
<table width="100%">
<tr>
<td width="40%">Cos Phi</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_PowerFactor">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;</td> 
</tr>
</table>      
    </div>
</div>
    
<div class="col-md-6">
    <div class="panels-white1" >
	  <div class="panels-blue1" align="center" style=" color:#FFFFFF; font-weight:bold;">Energi</div>  
<div class="panels-white">Daya</div>        
<table width="100%">
<tr>
<td width="40%">Aktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DAktif">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Reaktif</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DReaktif">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVAR</td> 
</tr>
<tr>
<td width="40%">Apparent</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DApparent">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVA</td> 
</tr>  
<tr>
<td width="40%">Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DAktifKirim">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kWh</td> 
</tr> 
<tr>
<td width="40%">Reaktif Terima</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DReaktifTerima">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kVARh</td> 
</tr> 
<tr>
<td width="40%">Reaktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_DReaktifKirim">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kVARh</td> 
</tr>     
</table> 
<div class="panels-white3">PanelSpace</div>  
<div class="panels-white">Frequency</div>        
<table width="100%"> 
<tr>
<td width="40%">Freq</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_Freq">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;Hz</td> 
</tr>      
</table>   
       
    </div>
</div> 
    
    </div>    
      
<div class="col-md-12">
<div class="panels-white1" >
<div class="panels-blue1" align="center" style=" color:#FFFFFF; font-weight:bold;">Generator Data</div> 

 <div class="row">     
<div class="col-md-6">       
<table width="100%">
<tr>
<td width="40%">Stator Winding #1</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_Wind01">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td> 
</tr>
<tr>
<td width="40%">Stator Winding #2</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_Wind02">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td> 
</tr>
<tr>
<td width="40%">Stator Winding #3</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_Wind03">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td> 
</tr>
<tr>
<td width="40%">Stator Winding #4</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_Wind04">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td> 
</tr>
<tr>
<td width="40%">Stator Winding #5</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_Wind05">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td> 
</tr>
<tr>
<td width="40%">Stator Winding #6</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_Wind06">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td> 
</tr>
<tr>
<td width="40%">Stator Winding #7</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_Wind07">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td> 
</tr>
<tr>
<td width="40%">Stator Winding #8</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_Wind08">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td> 
</tr>   
<tr>
<td width="40%">Cold Air</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_ColdAir">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td> 
</tr>   
<tr>
<td width="40%">Hot Air</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_HotAir">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td> 
</tr>       
</table>

    </div>   
<div class="col-md-6">       
<table width="100%">
<tr>
<td width="40%">Inlet Main Cooler Water</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_InMainCool">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td>
</tr>
<tr>
<td width="40%">Outlet Main Cooler Water</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_OutMainCool">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td>
</tr>  
<tr>
<td width="40%">Turbine Guide Bearing Shell</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_TurbineBearing">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td>
</tr>
<tr>
<td width="40%">Thrust Bearing Shell</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_ThrustBearingShell">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td>
</tr>    
<tr>
<td width="40%">Thrust Bearing Pad</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_ThrustBearingPad">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td>
</tr>
<tr>
<td width="40%">Hot Oil Thrust Bearing Equipment</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_HotOil">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td>
</tr> 
<tr>
<td width="40%">Stator Core #1</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_StatorCore01">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td>
</tr> 
<tr>
<td width="40%">Stator Core #2</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_StatorCore02">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;&degC</td>
</tr> 
<tr>
<td width="40%">Turbine Speed</td>       
<td width="40%"><div align="right" class="textbox" id="Unit1_TurbineSpeed">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;RPM</td>
</tr>     
</table>
   
  </div>    
  </div>   
    </div>         
            </div>         
 
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
    <script src="&_server_&/&_connection/01_gijt_unit1.js"></script>

  </body>
</html>
