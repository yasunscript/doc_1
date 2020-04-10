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
   var chartData = AmCharts.loadJSON('meteringchartxd.php');
 
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
   graph1.title = "MW";  
   graph1.valueField = "MW";
   graph1.bullet = "round";
   graph1.bulletBorderColor = "#FFFFFF";
   graph1.bulletBorderThickness = 2;
   graph1.lineThickness = 2;
   graph1.lineAlpha = 0.5;
   graph1.lineColor = "blue";
   graph1.balloonText = "[[MW]] MW" ;
   graph1.dashLength = 2;    
   chart.addGraph(graph1); 

   var graph2 = new AmCharts.AmGraph();
   graph2.title = "MVAR";  
   graph2.valueField = "MVAR";
   graph2.bullet = "round";
   graph2.bulletBorderColor = "#FFFFFF";
   graph2.bulletBorderThickness = 2;
   graph2.lineThickness = 2;
   graph2.lineAlpha = 0.5;
   graph2.lineColor = "#1FD501";
   graph2.balloonText = "[[MVAR]] MVAR" ;
   graph2.dashLength = 2;    
   chart.addGraph(graph2);   
       
   var graph3 = new AmCharts.AmGraph();
   graph3.title = "KV";  
   graph3.valueField = "KV";
   graph3.bullet = "round";
   graph3.bulletBorderColor = "#FFFFFF";
   graph3.bulletBorderThickness = 2;
   graph3.lineThickness = 2;
   graph3.lineAlpha = 0.5;
   graph3.lineColor = "red";
   graph3.balloonText = "[[KV]] KV" ;
   graph3.dashLength = 2;    
   chart.addGraph(graph3);  
   
   var graph4 = new AmCharts.AmGraph();
   graph4.title = "KA";  
   graph4.valueField = "KA";
   graph4.bullet = "round";
   graph4.bulletBorderColor = "#FFFFFF";
   graph4.bulletBorderThickness = 2;
   graph4.lineThickness = 2;
   graph4.lineAlpha = 0.5;
   graph4.lineColor = "#FCAC00";
   graph4.balloonText = "[[KA]] KA" ;
   graph4.dashLength = 2;    
   chart.addGraph(graph4);  
     
   var graph5 = new AmCharts.AmGraph();
   graph5.title = "FREQ";  
   graph5.valueField = "FREQ";
   graph5.bullet = "round";
   graph5.bulletBorderColor = "#FFFFFF";
   graph5.bulletBorderThickness = 2;
   graph5.lineThickness = 2;
   graph5.lineAlpha = 0.5;
   graph5.lineColor = "#00FFE4";
   graph5.balloonText = "[[FREQ]] HZ" ;
   graph5.dashLength = 2;    
   chart.addGraph(graph5);      
 
   var graph6 = new AmCharts.AmGraph();
   graph6.title = "PF";  
   graph6.valueField = "PF";
   graph6.bullet = "round";
   graph6.bulletBorderColor = "#FFFFFF";
   graph6.bulletBorderThickness = 2;
   graph6.lineThickness = 2;
   graph6.lineAlpha = 0.5;
   graph6.lineColor = "#FCFF00";
   graph6.balloonText = "[[PF]] COSPHI" ;
   graph6.dashLength = 2;    
   chart.addGraph(graph6);      
 
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