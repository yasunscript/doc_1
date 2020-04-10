<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="charts/charts.js" type="text/javascript"></script>
        <script src="charts/serial.js" type="text/javascript"></script>

 <script type="text/javascript"> 
 
AmCharts.loadJSON = function(url) {
  // create the request
  if (window.XMLHttpRequest) {
    // IE7+, Firefox, Chrome, Opera, Safari
    var request = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    var request = new ActiveXObject('Microsoft.XMLHTTP');
  }

  // load it
  // the last "false" parameter ensures that our code will wait before the
  // data is loaded
  request.open('GET', url, false);
  request.send();

  // parse adn return the output
  return eval(request.responseText);
};
         
 var chart;
 
 // create chart
 AmCharts.ready(function() {
 
   // load the data
   var chartData = AmCharts.loadJSON('suhuchartxd.php');
 
   // SERIAL CHART    
   chart = new AmCharts.AmSerialChart();
   chart.pathToImages = "charts/images/";
   chart.dataProvider = chartData;
   chart.categoryField = "Hour";
   chart.categoryAxis = "Hour";   
   chart.zoomOutButton = {
                     backgroundColor: "#000000",
                     backgroundAlpha: 0.5 
                 };					 
 
   // GRAPHS
  
   var graph1 = new AmCharts.AmGraph();
   graph1.title = "Cold";  
   graph1.valueField = "Cold";
   graph1.bullet = "round";
   graph1.bulletBorderThickness = 1;     
   graph1.lineThickness = 2;
   graph1.lineColor = "blue";
   graph1.balloonText = "[[Cold]] &degC" ;
   graph1.dashLength = 1;    
   chart.addGraph(graph1); 

   var graph2 = new AmCharts.AmGraph();
   graph2.title = "Hot";  
   graph2.valueField = "Hot";
   graph2.bullet = "round";
   graph2.bulletBorderThickness = 1;      
   graph2.lineThickness = 2;
   graph2.lineColor = "red";
   graph2.balloonText = "[[Hot]] &degC" ;
   graph2.dashLength = 1;    
   chart.addGraph(graph2);   
       
   var graph3 = new AmCharts.AmGraph();
   graph3.title = "Inlet";  
   graph3.valueField = "Inlet";
   graph3.bullet = "round";
   graph3.bulletBorderThickness = 1;      
   graph3.lineThickness = 2;
   graph3.lineColor = "#43DC00";
   graph3.balloonText = "[[Inlet]] &degC" ;
   graph3.dashLength = 1;    
   chart.addGraph(graph3);  
   
   var graph4 = new AmCharts.AmGraph();
   graph4.title = "Outlet";  
   graph4.valueField = "Outlet";
   graph4.bullet = "round";
   graph4.bulletBorderThickness = 1;      
   graph4.lineThickness = 2;
   graph4.lineColor = "#FCAC00";
   graph4.balloonText = "[[Outlet]] &degC" ;
   graph4.dashLength = 1;    
   chart.addGraph(graph4);  
        
 
   				// CATEGORY AXIS 
                 var categoryAxis = chart.categoryAxis;
                 categoryAxis.dashLength = 2;
                 categoryAxis.gridAlpha = 0.15;
                 categoryAxis.axisColor = "#000000";
  				chart.categoryAxis.parseDates = true;				
 				
                 // CURSOR
                 var chartCursor = new AmCharts.ChartCursor();
                 chartCursor.cursorPosition = "mouse";
                 chart.addChartCursor(chartCursor);
                 
 				// SCROLLBAR
 				var chartScrollbar = new AmCharts.ChartScrollbar();
 				chart.addChartScrollbar(chartScrollbar);;				
 				
                 // LEGEND
                 var legend = new AmCharts.AmLegend();
                 legend.marginLeft = 4;
                 chart.addLegend(legend);								  
 
   // WRITE
   chart.write("chartdiv");
 });
         </script> 
    </head>

    <body>
        <div id="chartdiv" style="width: 100%; height: 420px;"></div>
    </body>

</html>