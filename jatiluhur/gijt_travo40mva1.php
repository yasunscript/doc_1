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
        $meteringname = "Travo 40 MVA 1";
        $link = $_SERVER['REQUEST_URI'];
        $_SESSION['meteringname'] = $meteringname; 
        $_SESSION['link'] = $link;
        echo $meteringname;
        ?>
    </div>
    <a href="meteringreportGI.php"><div class="col-md-2 panels-blue2">Metering Report</div></a>  
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
<td width="40%"><div align="right" class="textbox" id="TF40MVA1IA">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;A</td> 
</tr>
<tr>
<td width="40%">I-B</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA1IB">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;A</td> 
</tr>
<tr>
<td width="40%">I-C</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA1IC">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;A</td> 
</tr>      
</table> 
        
<div class="panels-white">Tegangan</div>               
<table width="100%">
<tr>
<td width="40%">V-AB</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA1VR">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kV</td> 
</tr>
<tr>
<td width="40%">V-BC</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA1VS">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kV</td> 
</tr>
<tr>
<td width="40%">V-CA</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA1VT">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kV</td> 
</tr>    
</table> 
        
<div class="panels-white">Power Factor</div>               
<table width="100%">
<tr>
<td width="40%">Cos Phi</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA1PHI">0000</div></td>       
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
<td width="40%"><div align="right" class="textbox" id="TF40MVA1MW">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MW</td> 
</tr>
<tr>
<td width="40%">Reaktif</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA1MVAR">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;MVAR</td> 
</tr>
<tr>
<td width="40%">Aktif Kirim</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA1KWH">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;kWh</td> 
</tr> 
</table> 
<div class="panels-white3">PanelSpace</div>  
<div class="panels-white">Frequency</div>        
<table width="100%"> 
<tr>
<td width="40%">Freq</td>       
<td width="40%"><div align="right" class="textbox" id="TF40MVA1HZ">0000</div></td>       
<td width="20%" align="Left">&nbsp;&nbsp;Hz</td> 
</tr>      
</table>   
       
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
    <script src="&_server_&/&_connection/07_gijt_unit7.js"></script>

  </body>
</html>
