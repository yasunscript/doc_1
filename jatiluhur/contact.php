<?php
include "login_cek.php";
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
     <link rel="stylesheet" href="css/dashapp.css">  
       <link rel="stylesheet" href="css/loginstyle.css"> 
      
  </head>

  
<body> 
<?php 
    include("menu.php");
    ?>
    
<div class="container-fluid">
<div class="row">


	  
<div class="panels-header1" align="center">  
<div class="container-fluid"> 
    <div class="col-md-12" style="font-size:1.1em; font-weight:bold;">Contact Us</div> 
</div>
</div>          
        
<div class="col-md-12">    
<div class="panels-white2">

<iframe
  width="100%"
  height="100%"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDtaE52sbELw6cAJrFWNFUBMgeQTRiciBI&q=PLTAJATILUHUR">
</iframe>    


</div> 
    </div>
    
    
</div> 
</div> 

<div class="panels-header1" align="left">  
<div class="container-fluid"> 
    <div class="col-md-12" style="font-size:1.1em; font-weight:bold;">Contact Us :</div>
    <div class="col-md-12" style="font-size:1.1em; font-weight:bold;">Phone (0264 200565), </div>
    
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
    
  </body>
</html>
