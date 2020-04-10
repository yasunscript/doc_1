<?php
include "login_cek.php";
include "&_server_&/&_connection/server_connection.php";
$meteringname    =$_SESSION['meteringname'];
$link            =$_SESSION['link'];
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

<link rel="stylesheet" href="calx/jquery.ui.css">
<script src="calx/jquery-1.10.2.js"></script>
<script src="calx/jquery-ui.js"></script> 

 <script type="text/javascript">
$(function() {
$( "#datepickerstart" ).datepicker({
dateFormat: "dd-mm-yy",
    });
});
</script>
      
 <script type="text/javascript">
$(function() {
$( "#datepickerend" ).datepicker({
dateFormat: "dd-mm-yy",
    });
});
</script>      
   	
  </head>

  
<body> 
<?php 
    include("menu_report.php");
    ?>
    
<div class="container-fluid">
<div class="panels-header1" align="center">  
<div class="container-fluid"> 
    <form action="meteringreportGI.php" method="post">
                <div class="col-md-2">
                <label class="form-control"><?php echo $meteringname; ?></label>
                </div>  
                <div class="col-md-2" align="center"><input type="text" autocomplete="off" name="datepickerstart" id="datepickerstart" class="form-control" placeholder="Tanggal awal">
                </div>
                <div class="col-md-2" align="center"><input type="text" autocomplete="off" name="datepickerend" id="datepickerend" class="form-control" placeholder="Tanggal akhir">
                </div>                
                <div class="col-md-2"><input type="submit" name="Submit" id="Submit" value="Submit" class="submit-style"/></div>
    </form>
     <form name="excel" action="meteringexcel.php" method="post" onsubmit='$("#datatodisplay").val( $("<div>").append($("#ReportTable").eq(0).clone() ).html() )'> 
          <input type="hidden" id="datatodisplay" name="datatodisplay">  
          <input type="hidden" name="periode" value="<?php echo $tanggalawal = isset($_POST['datepickerstart']) ?$_POST['datepickerstart']:'';  echo ' to '; echo $tanggalakhir = isset($_POST['datepickerend']) ?$_POST['datepickerend']:''?>">  
          <input type="hidden" name="data" value="100"> 
              <div class="col-md-2"><input type="submit" name="Submit" id="Submit" value="Export to Excel" class="submit-style"/> </div> 
    </form> 
          <div class="col-md-2"><a href="<?php echo $link;?>"><button class="panels-blue2" style="width:100%; height:31px;">Data View</button></a></div>
</div>
</div>    

</div>          

<br>    
<table width="100%" cellpadding="0" cellspacing="0" class="style5">
<tr>
<td align="center" width="100%">PLTA Ir. H. Juanda Historical Metering Report</td>
</tr>
<tr>
<td align="center" width="100%"> 
            <?php
			$tanggalawal = isset($_POST['datepickerstart'])?$_POST['datepickerstart']:''; 
            $tanggalakhir = isset($_POST['datepickerend'])?$_POST['datepickerend']:'';     
			echo "$meteringname : $tanggalawal ~ $tanggalakhir";
            $_SESSION['tanggalawal']=$tanggalawal;
            $_SESSION['tanggalakhir']=$tanggalakhir;
			?></td>
</tr>
</table>

        		<div class="col-sm-12">
			<div class="tabbable" id="tabs-963561">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-chart" data-toggle="tab">Chart</a>
					</li >                    
					<li >
						<a href="#panel-table" data-toggle="tab">Table</a>
					</li>                   
				</ul>
                   
				<div class="tab-content">
<div class="tab-pane" id="panel-table">					
					
<div class="panels-white4" style="width: 100%; height: 420px;">                      

<table id="ReportTable" border="1" width="100%" cellpadding="0" cellspacing="0">

<thead class="style13">
<th width="10%" align="center"  class="style13">Tanggal</th>
<th width="10%" align="center"  class="style13">Jam</th>
<th width="10%" align="center"  class="style13">Tegangan Ph.A (kV)</th>
<th width="15%" align="center"  class="style13">Tegangan Ph.B (kV)</th>
<th width="10%" align="center"  class="style13">Tegangan Ph.C (kV)</th>
<th width="10%" align="center"  class="style13">Arus Ph.A (A)</th>
<th width="10%" align="center"  class="style13">Arus Ph.B (A)</th>
<th width="10%" align="center"  class="style13">Arus Ph.C (A)</th>
<th width="10%" align="center"  class="style13">Daya Aktif (MW)</th>
<th width="10%" align="center"  class="style13">Daya Reaktif (MVAr)</th>
<th width="10%" align="center"  class="style13">Power Factor ()</th>
<th width="10%" align="center"  class="style13">Frekuensi (Hz)</th>
<th width="10%" align="center"  class="style13">Energi (KWH)</th>
 
</thead> 

<tbody>    
<?php
//error_reporting(0);                

$tanggalawal = isset($_POST['datepickerstart']) ?$_POST['datepickerstart']:'';
$tanggalakhir = isset($_POST['datepickerend']) ?$_POST['datepickerend']:'';
if (empty ($tanggalawal)) {
$tanggalawal = "????????";
} else {
$tanggalawal = $tanggalawal;
}

If        ($meteringname =="GI Jatiluhur Unit-1") {
$tablename = "jtlh_unit_1_2_metering_unit1_data";
} else if ($meteringname =="GI Jatiluhur Unit-2") {
$tablename = "jtlh_unit_1_2_metering_unit2_data"; 
} else if ($meteringname =="GI Jatiluhur Unit-3") {
$tablename = "jtlh_unit_3_4_metering_unit3_data";
} else if ($meteringname =="GI Jatiluhur Unit-4") {
$tablename = "jtlh_unit_3_4_metering_unit4_data";
} else if ($meteringname =="GI Jatiluhur Unit-5") {
$tablename = "jtlh_unit_5_6_metering_unit51_data"; 
} else if ($meteringname =="GI Jatiluhur Unit-6") {
$tablename = "jtlh_unit_5_6_metering_unit61_data";    
} else if ($meteringname =="Tata Jabar 1") {
$tablename = "jtlh_monitoring_gi_met_ksb1_data";  
} else if ($meteringname =="Tata Jabar 2") {
$tablename = "jtlh_monitoring_gi_met_ksb2_data";     
} else if ($meteringname =="Padalarang 1") {
$tablename = "jtlh_monitoring_gi_met_pdl1_data";     
} else if ($meteringname =="Padalarang 2") {
$tablename = "jtlh_monitoring_gi_met_pdl2_data";     
} else if ($meteringname =="Travo 40 MVA 1") {
$tablename = "jtlh_monitoring_gi_met_trf1_gi_jtl_data";   
} else if ($meteringname =="Travo 40 MVA 2") {
$tablename = "jtlh_monitoring_gi_met_trf2_gi_jtl_data";     
} else if ($meteringname =="Travo 40 MVA 3") {
$tablename = "jtlh_monitoring_gi_met_trf3_gi_jtl_data";   
    
} else {
$tablename = ""    ;
}

$_SESSION['tablename']=$tablename;
    
$datestart = strtotime($tanggalawal)+3600*7;
$datestop = strtotime($tanggalakhir)+3600*7;
    

    
$result = mysql_query("select * from $tablename where `time@timestamp` between $datestart and $datestop order by data_index asc limit 100000");
         
while($rows=mysql_fetch_array($result)){

?>
<tr>
<td align="Center" class="style12"><?php $php_timestamp_date = date("d-m-Y", $rows['time@timestamp']-3600*7); 
                                        echo "".$php_timestamp_date.""; ?></td>
<td align="Center" class="style12"><?php $php_timestamp_date = date("H:i:s", $rows['time@timestamp']-3600*7); 
                                        echo "".$php_timestamp_date.""; ?> </td> 
<td align="right" class="style12"><?php echo number_format($rows['data_format_0'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows['data_format_1'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows['data_format_2'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows['data_format_3'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows['data_format_4'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows['data_format_5'],"4",".",","); ?></td>    
<td align="right" class="style12"><?php echo number_format($rows['data_format_6'],"4",".",","); ?></td> 
<td align="right" class="style12"><?php echo number_format($rows['data_format_7'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows['data_format_8'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows['data_format_9'],"4",".",","); ?></td>    
<td align="right" class="style12"><?php echo number_format($rows['data_format_10'],"4",".",","); ?></td>
</tr>
</tbody>        

<?php
}    
?>
<?php    
$result1 = mysql_query("select avg(data_format_0) as avg0, avg(data_format_1) as avg1, avg(data_format_2) as avg2, avg(data_format_3) as avg3, avg(data_format_4) as avg4, avg(data_format_5) as avg5, min(data_format_6) as valfirst, max(data_format_6) as vallast from $tablename where `time@timestamp` between $datestart and $datestop");
         
while($rows1=mysql_fetch_array($result1)){

?>
<tfoot>    
<tr style="font-weight: bold;">
<td align="Center" class="style12" colspan="2">Summary</td>
<td align="right" class="style12"><?php echo number_format($rows1['avg0'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows1['avg1'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows1['avg2'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows1['avg3'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows1['avg4'],"4",".",","); ?></td>
<td align="right" class="style12"><?php echo number_format($rows1['avg5'],"4",".",","); ?></td>    
<td align="right" class="style12"><?php echo number_format($rows1['vallast']-$rows1['valfirst'],"4",".",","); ?></td> 
</tr>
</tfoot>        

<?php
}    
?>     
</table>

						
						</p>
</div>    
						
 </div>
                    
                 

<div class="tab-pane active" id="panel-chart">
						<p>
<?php
include("meteringchartx.php");
?>
						</p>
</div>
                                
                    
				</div>
			</div>
		</div>   
<br>
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
    
  </body>
</html>
