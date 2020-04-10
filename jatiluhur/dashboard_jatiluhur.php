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
    <div class="col-md-10" style="font-size:1.1em; font-weight:bold;">Single Line GI Jatiluhur</div>
    <a href="dashboard_jatiluhur_dataview.php"><div class="col-md-2 panels-blue2">Data View</div></a>  
</div>
</div> 

<div class="col-md-12">    
<div class="panels-white2">

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:ev="http://www.w3.org/2001/xml-events"
		xmlns:v="http://schemas.microsoft.com/visio/2003/SVGExtensions/" width="100%" height="100%"
		viewBox="0 0 692.354 595.572" xml:space="preserve" color-interpolation-filters="sRGB" class="st40">
	<v:documentProperties v:langID="1033" v:viewMarkup="false">
		<v:userDefs>
			<v:ud v:nameU="msvConvertTheme"/>
		</v:userDefs>
	</v:documentProperties>

	<style type="text/css">
	<![CDATA[
		.st1 {stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st2 {stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st3 {fill:none;stroke:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st4 {fill:#000000;font-family:Calibri;font-size:0.666664em}
		.st5 {font-size:1em}
		.st6 {fill:none;stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st7 {stroke:#ff0000;stroke-linecap:butt;stroke-width:0.511061}
		.st8 {marker-end:url(#mrkr10-139);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st9 {fill:#ff0000;fill-opacity:1;stroke:#ff0000;stroke-opacity:1;stroke-width:0.29411764705882}
		.st10 {marker-end:url(#mrkr5-150);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st11 {fill:#ff0000;fill-opacity:1;stroke:#ff0000;stroke-opacity:1;stroke-width:0.45454545454545}
		.st12 {fill:none;stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st13 {marker-end:url(#mrkr13-160);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.5}
		.st14 {fill:#ff0000;fill-opacity:1;stroke:#ff0000;stroke-opacity:1;stroke-width:0.21739130434783}
		.st15 {stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.5}
		.st16 {stroke:#ff0000;stroke-linecap:butt;stroke-width:0.555648}
		.st17 {fill:none;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st18 {stroke:#00b050;stroke-linecap:butt;stroke-width:0.511061}
		.st19 {fill:#ffffff;fill-opacity:0;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st20 {marker-end:url(#mrkr5-604);stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st21 {fill:#ffff00;fill-opacity:1;stroke:#ffff00;stroke-opacity:1;stroke-width:0.45454545454545}
		.st22 {fill:none;stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st23 {stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st24 {fill:#ffffff;fill-opacity:0;stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st25 {stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st26 {marker-end:url(#mrkr5-1121);stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st27 {fill:#00b050;fill-opacity:1;stroke:#00b050;stroke-opacity:1;stroke-width:0.45454545454545}
		.st28 {fill:#ffffff;fill-opacity:0;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st29 {fill:none;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st30 {marker-end:url(#mrkr13-1144);stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st31 {fill:#00b050;fill-opacity:1;stroke:#00b050;stroke-opacity:1;stroke-width:0.29411764705882}
		.st32 {stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st33 {stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st34 {fill:none;stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st35 {fill:#ffff00;font-family:Calibri;font-size:1.16666em}
		.st36 {fill:#ffff00;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st37 {fill:#000000;font-family:Calibri;font-size:1.00001em;font-weight:bold}
		.st38 {fill:#ff0000;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st39 {fill:#ffff00;font-family:Calibri;font-size:1.5em;font-weight:bold}
		.st40 {fill:none;fill-rule:evenodd;font-size:12px;overflow:visible;stroke-linecap:square;stroke-miterlimit:3}
	]]>
	</style>

	<defs id="Markers">
		<g id="lend10">
			<path
					d="M 0 0.75 C -0.414214 0.75 -0.75 0.414214 -0.75 0 -0.75 -0.414214 -0.414214 -0.75 0 -0.75 0.414214 -0.75 0.75 -0.414214 0.75 0 0.75 0.414214 0.414214 0.75 0 0.75 Z "
					style="stroke:none"/>
		</g>
		<marker id="mrkr10-139" class="st9" v:arrowType="10" v:arrowSize="1" v:setback="2.55" refX="-2.55" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend10" transform="scale(-3.4,-3.4) "/>
		</marker>
		<g id="lend5">
			<path d="M 2 1 L 0 0 L 1.98117 -0.993387 C 1.67173 -0.364515 1.67301 0.372641 1.98465 1.00043 " style="stroke:none"/>
		</g>
		<marker id="mrkr5-150" class="st11" v:arrowType="5" v:arrowSize="1" v:setback="3.85" refX="-3.85" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(-2.2,-2.2) "/>
		</marker>
		<g id="lend13">
			<path d="M 3 1 L 0 0 L 3 -1 L 3 1 " style="stroke:none"/>
		</g>
		<marker id="mrkr13-160" class="st14" v:arrowType="13" v:arrowSize="1" v:setback="13.8" refX="-13.8" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend13" transform="scale(-4.6,-4.6) "/>
		</marker>
		<marker id="mrkr5-604" class="st21" v:arrowType="5" v:arrowSize="1" v:setback="3.85" refX="-3.85" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(-2.2,-2.2) "/>
		</marker>
		<marker id="mrkr5-1121" class="st27" v:arrowType="5" v:arrowSize="1" v:setback="3.85" refX="-3.85" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(-2.2,-2.2) "/>
		</marker>
		<marker id="mrkr13-1144" class="st31" v:arrowType="13" v:arrowSize="1" v:setback="10.2" refX="-10.2" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend13" transform="scale(-3.4,-3.4) "/>
		</marker>
	</defs>
	<g v:mID="0" v:index="1" v:groupContext="foregroundPage">
		<v:userDefs>
			<v:ud v:nameU="MContactCount" v:prompt="" v:val="VT0(36):26"/>
		</v:userDefs>
		<title>Page-1</title>
		<v:pageProperties v:drawingScale="0.0393701" v:pageScale="0.0393701" v:drawingUnits="24" v:shadowOffsetX="8.50394"
				v:shadowOffsetY="-8.50394"/>
		<v:layer v:name="Electrical" v:index="0"/>
		<v:layer v:name="Connector" v:index="1"/>
		<g id="shape1-1" v:mID="1" v:groupContext="shape" transform="translate(20.7229,968.436) scale(1,-1)">
			<title>Sheet.1</title>
			<path d="M0 595.57 L644.84 595.57" class="st1"/>
		</g>
		<g id="shape2-4" v:mID="2" v:groupContext="shape" transform="translate(20.7229,974.722) scale(1,-1)">
			<title>Sheet.2</title>
			<path d="M0 595.57 L644.84 595.57" class="st1"/>
		</g>
		<g id="shape3-7" v:mID="3" v:groupContext="shape" transform="translate(134.518,788.715) scale(1,-1)">
			<title>Sheet.3</title>
			<path d="M0 595.57 L436.76 595.57" class="st2"/>
		</g>
		<g id="shape4-10" v:mID="4" v:groupContext="shape" transform="translate(240.351,874.176) scale(1,-1)">
			<title>Sheet.4</title>
			<desc>TRAFO 1 40 MVA 150/70KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="6.21" y="-596.35" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 1<v:newlineChar/><tspan
						x="7.1" dy="1.2em" class="st5">40 MVA<v:newlineChar/></tspan><tspan x="4.04" dy="1.2em" class="st5">150/70KV</tspan></text>		</g>
		<g id="shape5-15" v:mID="5" v:groupContext="shape" transform="translate(325.391,875.317) scale(1,-1)">
			<title>Sheet.5</title>
			<desc>TRAFO 2 40 MVA 150/70KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="6.21" y="-596.35" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 2<v:newlineChar/><tspan
						x="7.1" dy="1.2em" class="st5">40 MVA<v:newlineChar/></tspan><tspan x="4.04" dy="1.2em" class="st5">150/70KV</tspan></text>		</g>
		<g id="shape6-20" v:mID="6" v:groupContext="shape" transform="translate(19.4257,982.723) scale(1,-1)">
			<title>Sheet.6</title>
			<desc>REL 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.1961" cy="589.148" width="28.4" height="12.8486"/>
			<rect x="0" y="582.724" width="28.3923" height="12.8486" class="st3"/>
			<text x="5.46" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>REL 1</text>		</g>
		<g id="shape7-23" v:mID="7" v:groupContext="shape" transform="translate(643.094,954.377) scale(1,-1)">
			<title>Sheet.7</title>
			<desc>REL 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.1961" cy="589.148" width="28.4" height="12.8486"/>
			<rect x="0" y="582.724" width="28.3923" height="12.8486" class="st3"/>
			<text x="5.46" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>REL 2</text>		</g>
		<g id="shape8-26" v:mID="8" v:groupContext="shape" transform="translate(313.275,777.827) scale(1,-1)">
			<title>Sheet.8</title>
			<desc>LINE 70 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="24.4174" cy="589.148" width="48.84" height="12.8486"/>
			<rect x="0" y="582.724" width="48.8347" height="12.8486" class="st3"/>
			<text x="6.98" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 70 KV</text>		</g>
		<g id="shape9-29" v:mID="9" v:groupContext="shape" transform="translate(300.624,958.032) scale(1,-1)">
			<title>Sheet.9</title>
			<desc>LINE 150 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="34.7121" cy="589.148" width="69.43" height="12.8486"/>
			<rect x="0" y="582.724" width="69.4243" height="12.8486" class="st3"/>
			<text x="15.25" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 150 KV</text>		</g>
		<g id="shape10-32" v:mID="10" v:groupContext="shape" transform="translate(0.375,974.974) scale(1,-1)">
			<title>Sheet.10</title>
			<desc>LINE 150 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="34.7121" cy="589.148" width="69.43" height="12.8486"/>
			<rect x="0" y="582.724" width="69.4243" height="12.8486" class="st3"/>
			<text x="15.25" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 150 KV</text>		</g>
		<g id="shape11-35" v:mID="11" v:groupContext="shape" transform="translate(622.555,946.628) scale(1,-1)">
			<title>Sheet.11</title>
			<desc>LINE 150 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="34.7121" cy="589.148" width="69.43" height="12.8486"/>
			<rect x="0" y="582.724" width="69.4243" height="12.8486" class="st3"/>
			<text x="15.25" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 150 KV</text>		</g>
		<g id="shape12-38" v:mID="12" v:groupContext="shape" transform="translate(243.931,1059.61) scale(1,-1)">
			<title>Sheet.12</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="4.18" y="-596.35" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 35 <tspan
						x="12.06" dy="1.2em" class="st5">MVA<v:newlineChar/></tspan><tspan x="3.04" dy="1.2em" class="st5">6,3/150KV</tspan></text>		</g>
		<g id="shape13-43" v:mID="13" v:groupContext="shape" transform="translate(156.057,1059.61) scale(1,-1)">
			<title>Sheet.13</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="4.18" y="-596.35" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 35 <tspan
						x="12.06" dy="1.2em" class="st5">MVA<v:newlineChar/></tspan><tspan x="3.04" dy="1.2em" class="st5">6,3/150KV</tspan></text>		</g>
		<g id="shape14-48" v:mID="14" v:groupContext="shape" transform="translate(70.5722,1059.61) scale(1,-1)">
			<title>Sheet.14</title>
			<desc>TRAFO 40 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="4.18" y="-596.35" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 40 <tspan
						x="12.06" dy="1.2em" class="st5">MVA<v:newlineChar/></tspan><tspan x="3.04" dy="1.2em" class="st5">6,3/150KV</tspan></text>		</g>
		<g id="shape15-53" v:mID="15" v:groupContext="shape" transform="translate(331.582,1059.61) scale(1,-1)">
			<title>Sheet.15</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="4.18" y="-596.35" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 35 <tspan
						x="12.06" dy="1.2em" class="st5">MVA<v:newlineChar/></tspan><tspan x="3.04" dy="1.2em" class="st5">6,3/150KV</tspan></text>		</g>
		<g id="shape16-58" v:mID="16" v:groupContext="shape" transform="translate(507.108,1059.61) scale(1,-1)">
			<title>Sheet.16</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="4.18" y="-596.35" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 35 <tspan
						x="12.06" dy="1.2em" class="st5">MVA<v:newlineChar/></tspan><tspan x="3.04" dy="1.2em" class="st5">6,3/150KV</tspan></text>		</g>
		<g id="group17-63" transform="translate(565.794,-216.057)" v:mID="17" v:groupContext="group">
			<title>Sheet.17</title>
			<g id="shape18-64" v:mID="18" v:groupContext="shape" transform="translate(29.2673,1123.86) scale(1,-1)">
				<title>Sheet.18</title>
				<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
			</g>
			<g id="group19-66" transform="translate(20.7496,1087.55) scale(1,-1)" v:mID="19" v:groupContext="group">
				<title>Sheet.19</title>
				<g id="group20-67" transform="translate(620.423,595.572) rotate(90) scale(-1,1)" v:mID="20" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="Core" v:lbl="Core" v:type="1" v:format="Air;Magnetic;Magnetic with Gap" v:langID="1033"
								v:val="VT4(Air)"/>
						<v:cp v:nameU="Adjustability" v:lbl="Adjustability" v:type="1"
								v:format="Fixed;Adjustable;Continuously Adjustable" v:langID="1033" v:val="VT4(Fixed)"/>
						<v:cp v:nameU="Taps" v:lbl="Taps" v:type="1" v:format="0;1;2;3" v:langID="1033" v:val="VT4(0)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:type="0" v:format="" v:sortKey="" v:invis="false" v:ask="false"
								v:langID="1033" v:val="VT0(0):26"/>
						<v:cp v:nameU="Value" v:lbl="Value" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
								v:langID="1033" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Core" v:val="VT0(0):26"/>
						<v:ud v:nameU="Adjustability" v:val="VT0(0):26"/>
						<v:ud v:nameU="CH"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Inductor. Right-click to set inductor properties.)"/>
					</v:userDefs>
					<title>Inductor</title>
					<g id="shape21-68" v:mID="21" v:groupContext="shape" v:layerMember="0">
						<title>Sheet.21</title>
						<path d="M0 595.57 A2.97237 3.4054 0 1 1 5.94 595.57 A2.97237 3.4054 0 1 1 11.88 595.57 A2.97237 3.4054 0
									 1 1 17.82 595.57 A2.97237 3.4054 0 1 1 23.76 595.57" class="st1"/>
						<path d="M0 595.57 L0 602.66" class="st1"/>
						<path d="M23.76 595.57 L23.76 602.66" class="st1"/>
					</g>
					<g id="shape22-73" v:mID="22" v:groupContext="shape" v:layerMember="0" transform="translate(11.4531,3.98419)">
						<title>Sheet.22</title>
					</g>
					<g id="shape23-75" v:mID="23" v:groupContext="shape" v:layerMember="0"
							transform="translate(-417.135,181.487) rotate(-45)">
						<title>Sheet.23</title>
					</g>
				</g>
				<g id="group24-77" transform="translate(0,-2.42449)" v:mID="24" v:groupContext="group">
					<title>Sheet.24</title>
					<g id="group25-78" transform="translate(0,-10.3041)" v:mID="25" v:groupContext="group">
						<title>Sheet.25</title>
						<g id="shape26-79" v:mID="26" v:groupContext="shape" transform="translate(599.668,587.087) rotate(90)">
							<title>Sheet.26</title>
							<path d="M0 595.57 L8.49 595.57" class="st1"/>
						</g>
						<g id="shape27-82" v:mID="27" v:groupContext="shape">
							<title>Sheet.27</title>
							<path d="M0 595.57 L7.95 595.57" class="st1"/>
						</g>
					</g>
					<g id="group28-85" transform="translate(0,1182.66) scale(1,-1)" v:mID="28" v:groupContext="group">
						<title>Sheet.28</title>
						<g id="shape29-86" v:mID="29" v:groupContext="shape" transform="translate(599.668,587.087) rotate(90)">
							<title>Sheet.29</title>
							<path d="M0 595.57 L8.49 595.57" class="st1"/>
						</g>
						<g id="shape30-89" v:mID="30" v:groupContext="shape">
							<title>Sheet.30</title>
							<path d="M0 595.57 L7.95 595.57" class="st1"/>
						</g>
					</g>
				</g>
				<g id="shape31-92" v:mID="31" v:groupContext="shape" transform="translate(17.7678,1167.38) rotate(180)">
					<title>Sheet.31</title>
					<path d="M0 595.57 L13.67 595.57" class="st1"/>
				</g>
				<g id="shape32-95" v:mID="32" v:groupContext="shape" transform="translate(17.7678,1191.14) rotate(180)">
					<title>Sheet.32</title>
					<path d="M0 595.57 L13.67 595.57" class="st1"/>
				</g>
				<g id="shape33-98" v:mID="33" v:groupContext="shape" transform="translate(599.668,571.812) rotate(90)">
					<title>Sheet.33</title>
					<path d="M0 595.57 L2.67 595.57" class="st1"/>
				</g>
				<g id="shape34-101" v:mID="34" v:groupContext="shape" transform="translate(599.668,593.148) rotate(90)">
					<title>Sheet.34</title>
					<path d="M0 595.57 L2.42 595.57" class="st1"/>
				</g>
			</g>
			<g id="group35-104" transform="translate(17.9104,-8.71464)" v:mID="35" v:groupContext="group">
				<title>Sheet.35</title>
				<g id="group36-105" transform="translate(12.7765,-1.65489) scale(-1,1)" v:mID="36" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
					</v:userDefs>
					<title>Make contact.192</title>
					<g id="shape37-106" v:mID="37" v:groupContext="shape" v:layerMember="0"
							transform="translate(0.964372,-1.45689E-06)">
						<title>Sheet.37</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M5.41 586.04 L5.41 588.53" class="st7"/>
						<path d="M5.41 595.57 L5.41 593.08" class="st7"/>
						<path d="M1.47 588.91 L5.41 593.08 L5.41 595.57" class="st7"/>
					</g>
					<g id="shape38-111" v:mID="38" v:groupContext="shape" v:layerMember="0" transform="translate(5.09655,-1.53817)">
						<title>Sheet.38</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape39-113" v:mID="39" v:groupContext="shape" v:layerMember="0"
							transform="translate(-1.23842,0.925467)">
						<title>Sheet.39</title>
					</g>
				</g>
				<g id="group40-115" transform="translate(34.0707,-1.65489) scale(-1,1)" v:mID="40" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
					</v:userDefs>
					<title>Make contact.200</title>
					<g id="shape41-116" v:mID="41" v:groupContext="shape" v:layerMember="0"
							transform="translate(0.964372,-1.45689E-06)">
						<title>Sheet.41</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M5.41 586.04 L5.41 588.53" class="st7"/>
						<path d="M5.41 595.57 L5.41 593.08" class="st7"/>
						<path d="M1.47 588.91 L5.41 593.08 L5.41 595.57" class="st7"/>
					</g>
					<g id="shape42-121" v:mID="42" v:groupContext="shape" v:layerMember="0" transform="translate(5.09655,-1.53817)">
						<title>Sheet.42</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape43-123" v:mID="43" v:groupContext="shape" v:layerMember="0"
							transform="translate(-1.23842,0.925467)">
						<title>Sheet.43</title>
					</g>
				</g>
				<g id="shape44-125" v:mID="44" v:groupContext="shape" v:layerMember="1" transform="translate(6.38826,-4.11617)">
					<title>Dynamic connector.205</title>
					<path d="M0 588.49 L0 577.86 L21.29 577.86 L21.29 588.49" class="st1"/>
				</g>
			</g>
			<g id="shape45-128" v:mID="45" v:groupContext="shape" transform="translate(630.518,551.628) rotate(90)">
				<title>Sheet.45</title>
				<path d="M0 595.57 L12.94 595.57" class="st1"/>
			</g>
			<g id="shape46-131" v:mID="46" v:groupContext="shape" transform="translate(-560.627,528.141) rotate(-90)">
				<title>Sheet.46</title>
				<path d="M0 595.57 L12.41 595.57" class="st1"/>
			</g>
			<g id="shape47-134" v:mID="47" v:groupContext="shape" transform="translate(619.871,585.203) rotate(90)">
				<title>Sheet.47</title>
				<path d="M0 595.57 L2.17 595.57" class="st8"/>
			</g>
			<g id="shape48-140" v:mID="48" v:groupContext="shape" transform="translate(641.165,585.203) rotate(90)">
				<title>Sheet.48</title>
				<path d="M0 595.57 L8.46 595.57" class="st8"/>
			</g>
			<g id="shape49-145" v:mID="49" v:groupContext="shape" transform="translate(-560.627,491.854) rotate(-90)">
				<title>Sheet.49</title>
				<path d="M0 595.57 L21.94 595.57" class="st10"/>
			</g>
			<g id="shape50-151" v:mID="50" v:groupContext="shape" transform="translate(0,-136.231)">
				<title>Sheet.50</title>
				<desc>PADALARANG 1</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="34.7121" cy="589.148" width="69.43" height="12.8486"/>
				<rect x="0" y="582.724" width="69.4243" height="12.8486" class="st12"/>
				<text x="9.04" y="591.55" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PADALARANG 1</text>			</g>
			<g id="group51-154" transform="translate(2.43613,-110.877)" v:mID="51" v:groupContext="group">
				<title>Sheet.51</title>
				<g id="shape52-155" v:mID="52" v:groupContext="shape" transform="translate(31.1805,1187.52) rotate(180)">
					<title>Sheet.52</title>
					<path d="M0 595.57 L6.73 595.57" class="st13"/>
				</g>
				<g id="shape53-161" v:mID="53" v:groupContext="shape" transform="translate(2.95221,1187.57) scale(1,-1)">
					<title>Sheet.53</title>
					<path d="M0 595.57 L8.72 595.57" class="st13"/>
				</g>
				<g id="group54-166" transform="translate(595.572,588.429) rotate(90)" v:mID="54" v:groupContext="group">
					<title>Sheet.54</title>
					<g id="shape55-167" v:mID="55" v:groupContext="shape" transform="translate(3.2474E-14,-2.83923)">
						<title>Sheet.55</title>
						<path d="M0 595.57 L7.14 595.57" class="st15"/>
					</g>
					<g id="shape56-170" v:mID="56" v:groupContext="shape" transform="translate(1.42863,-1.41961)">
						<title>Sheet.56</title>
						<path d="M0 595.57 L4.29 595.57" class="st15"/>
					</g>
					<g id="shape57-173" v:mID="57" v:groupContext="shape" transform="translate(2.85726,0)">
						<title>Sheet.57</title>
						<path d="M0 595.57 L1.43 595.57" class="st15"/>
					</g>
				</g>
			</g>
		</g>
		<g id="group58-176" transform="translate(446.648,-216.057)" v:mID="58" v:groupContext="group">
			<title>Sheet.58</title>
			<g id="group59-177" transform="translate(2.61318,7.95808E-13)" v:mID="59" v:groupContext="group">
				<title>Sheet.59</title>
				<g id="shape60-178" v:mID="60" v:groupContext="shape" transform="translate(26.1209,1123.86) scale(1,-1)">
					<title>Sheet.60</title>
					<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
				</g>
				<g id="group61-180" transform="translate(17.6032,1087.55) scale(1,-1)" v:mID="61" v:groupContext="group">
					<title>Sheet.61</title>
					<g id="group62-181" transform="translate(620.423,595.572) rotate(90) scale(-1,1)" v:mID="62"
							v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="Core" v:lbl="Core" v:type="1" v:format="Air;Magnetic;Magnetic with Gap" v:langID="1033"
									v:val="VT4(Air)"/>
							<v:cp v:nameU="Adjustability" v:lbl="Adjustability" v:type="1"
									v:format="Fixed;Adjustable;Continuously Adjustable" v:langID="1033" v:val="VT4(Fixed)"/>
							<v:cp v:nameU="Taps" v:lbl="Taps" v:type="1" v:format="0;1;2;3" v:langID="1033" v:val="VT4(0)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:type="0" v:format="" v:sortKey="" v:invis="false" v:ask="false"
									v:langID="1033" v:val="VT0(0):26"/>
							<v:cp v:nameU="Value" v:lbl="Value" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
									v:langID="1033" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Core" v:val="VT0(0):26"/>
							<v:ud v:nameU="Adjustability" v:val="VT0(0):26"/>
							<v:ud v:nameU="CH"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Inductor. Right-click to set inductor properties.)"/>
						</v:userDefs>
						<title>Inductor</title>
						<g id="shape63-182" v:mID="63" v:groupContext="shape" v:layerMember="0">
							<title>Sheet.63</title>
							<path d="M0 595.57 A2.97237 3.4054 0 1 1 5.94 595.57 A2.97237 3.4054 0 1 1 11.88 595.57 A2.97237 3.4054
										 0 1 1 17.82 595.57 A2.97237 3.4054 0 1 1 23.76 595.57" class="st1"/>
							<path d="M0 595.57 L0 602.66" class="st1"/>
							<path d="M23.76 595.57 L23.76 602.66" class="st1"/>
						</g>
						<g id="shape64-187" v:mID="64" v:groupContext="shape" v:layerMember="0"
								transform="translate(11.4531,3.98419)">
							<title>Sheet.64</title>
						</g>
						<g id="shape65-189" v:mID="65" v:groupContext="shape" v:layerMember="0"
								transform="translate(-417.135,181.487) rotate(-45)">
							<title>Sheet.65</title>
						</g>
					</g>
					<g id="group66-191" transform="translate(0,-2.42449)" v:mID="66" v:groupContext="group">
						<title>Sheet.66</title>
						<g id="group67-192" transform="translate(0,-10.3041)" v:mID="67" v:groupContext="group">
							<title>Sheet.67</title>
							<g id="shape68-193" v:mID="68" v:groupContext="shape" transform="translate(599.668,587.087) rotate(90)">
								<title>Sheet.68</title>
								<path d="M0 595.57 L8.49 595.57" class="st1"/>
							</g>
							<g id="shape69-196" v:mID="69" v:groupContext="shape">
								<title>Sheet.69</title>
								<path d="M0 595.57 L7.95 595.57" class="st1"/>
							</g>
						</g>
						<g id="group70-199" transform="translate(0,1182.66) scale(1,-1)" v:mID="70" v:groupContext="group">
							<title>Sheet.70</title>
							<g id="shape71-200" v:mID="71" v:groupContext="shape" transform="translate(599.668,587.087) rotate(90)">
								<title>Sheet.71</title>
								<path d="M0 595.57 L8.49 595.57" class="st1"/>
							</g>
							<g id="shape72-203" v:mID="72" v:groupContext="shape">
								<title>Sheet.72</title>
								<path d="M0 595.57 L7.95 595.57" class="st1"/>
							</g>
						</g>
					</g>
					<g id="shape73-206" v:mID="73" v:groupContext="shape" transform="translate(17.7678,1167.38) rotate(180)">
						<title>Sheet.73</title>
						<path d="M0 595.57 L13.67 595.57" class="st1"/>
					</g>
					<g id="shape74-209" v:mID="74" v:groupContext="shape" transform="translate(17.7678,1191.14) rotate(180)">
						<title>Sheet.74</title>
						<path d="M0 595.57 L13.67 595.57" class="st1"/>
					</g>
					<g id="shape75-212" v:mID="75" v:groupContext="shape" transform="translate(599.668,571.812) rotate(90)">
						<title>Sheet.75</title>
						<path d="M0 595.57 L2.67 595.57" class="st1"/>
					</g>
					<g id="shape76-215" v:mID="76" v:groupContext="shape" transform="translate(599.668,593.148) rotate(90)">
						<title>Sheet.76</title>
						<path d="M0 595.57 L2.42 595.57" class="st1"/>
					</g>
				</g>
				<g id="group77-218" transform="translate(14.764,-8.71464)" v:mID="77" v:groupContext="group">
					<title>Sheet.77</title>
					<g id="group78-219" transform="translate(12.7765,-1.65489) scale(-1,1)" v:mID="78" v:groupContext="group"
							v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
									v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3"
									v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
									v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Type" v:val="VT0(0):26"/>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
							<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
						</v:userDefs>
						<title>Make contact.192</title>
						<g id="shape79-220" v:mID="79" v:groupContext="shape" v:layerMember="0"
								transform="translate(0.964372,-1.45689E-06)">
							<title>Sheet.79</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M5.41 586.04 L5.41 588.53" class="st7"/>
							<path d="M5.41 595.57 L5.41 593.08" class="st7"/>
							<path d="M1.47 588.91 L5.41 593.08 L5.41 595.57" class="st7"/>
						</g>
						<g id="shape80-225" v:mID="80" v:groupContext="shape" v:layerMember="0"
								transform="translate(5.09655,-1.53817)">
							<title>Sheet.80</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape81-227" v:mID="81" v:groupContext="shape" v:layerMember="0"
								transform="translate(-1.23842,0.925467)">
							<title>Sheet.81</title>
						</g>
					</g>
					<g id="group82-229" transform="translate(34.0707,-1.65489) scale(-1,1)" v:mID="82" v:groupContext="group"
							v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
									v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3"
									v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
									v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Type" v:val="VT0(0):26"/>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
							<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
						</v:userDefs>
						<title>Make contact.200</title>
						<g id="shape83-230" v:mID="83" v:groupContext="shape" v:layerMember="0"
								transform="translate(0.964372,-1.45689E-06)">
							<title>Sheet.83</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M5.41 586.04 L5.41 588.53" class="st7"/>
							<path d="M5.41 595.57 L5.41 593.08" class="st7"/>
							<path d="M1.47 588.91 L5.41 593.08 L5.41 595.57" class="st7"/>
						</g>
						<g id="shape84-235" v:mID="84" v:groupContext="shape" v:layerMember="0"
								transform="translate(5.09655,-1.53817)">
							<title>Sheet.84</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape85-237" v:mID="85" v:groupContext="shape" v:layerMember="0"
								transform="translate(-1.23842,0.925467)">
							<title>Sheet.85</title>
						</g>
					</g>
					<g id="shape86-239" v:mID="86" v:groupContext="shape" v:layerMember="1" transform="translate(6.38826,-4.11617)">
						<title>Dynamic connector.205</title>
						<path d="M0 588.49 L0 577.86 L21.29 577.86 L21.29 588.49" class="st1"/>
					</g>
				</g>
				<g id="shape87-242" v:mID="87" v:groupContext="shape" transform="translate(627.593,551.305) rotate(90)">
					<title>Sheet.87</title>
					<path d="M0 595.57 L13.26 595.57" class="st1"/>
				</g>
				<g id="shape88-245" v:mID="88" v:groupContext="shape" transform="translate(-563.773,528.141) rotate(-90)">
					<title>Sheet.88</title>
					<path d="M0 595.57 L12.41 595.57" class="st1"/>
				</g>
				<g id="shape89-248" v:mID="89" v:groupContext="shape" transform="translate(616.725,585.203) rotate(90)">
					<title>Sheet.89</title>
					<path d="M0 595.57 L2.17 595.57" class="st8"/>
				</g>
				<g id="shape90-253" v:mID="90" v:groupContext="shape" transform="translate(638.019,585.203) rotate(90)">
					<title>Sheet.90</title>
					<path d="M0 595.57 L8.46 595.57" class="st8"/>
				</g>
				<g id="shape91-258" v:mID="91" v:groupContext="shape" transform="translate(-563.773,491.854) rotate(-90)">
					<title>Sheet.91</title>
					<path d="M0 595.57 L21.94 595.57" class="st10"/>
				</g>
			</g>
			<g id="shape92-263" v:mID="92" v:groupContext="shape" transform="translate(0,-136.231)">
				<title>Sheet.92</title>
				<desc>PADALARANG 2</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="34.7121" cy="589.148" width="69.43" height="12.8486"/>
				<rect x="0" y="582.724" width="69.4243" height="12.8486" class="st12"/>
				<text x="9.04" y="591.55" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PADALARANG 2</text>			</g>
			<g id="group93-266" transform="translate(1.72762,-110.877)" v:mID="93" v:groupContext="group">
				<title>Sheet.93</title>
				<g id="shape94-267" v:mID="94" v:groupContext="shape" transform="translate(31.1805,1187.52) rotate(180)">
					<title>Sheet.94</title>
					<path d="M0 595.57 L6.73 595.57" class="st13"/>
				</g>
				<g id="shape95-272" v:mID="95" v:groupContext="shape" transform="translate(2.95221,1187.57) scale(1,-1)">
					<title>Sheet.95</title>
					<path d="M0 595.57 L8.72 595.57" class="st13"/>
				</g>
				<g id="group96-277" transform="translate(595.572,588.429) rotate(90)" v:mID="96" v:groupContext="group">
					<title>Sheet.96</title>
					<g id="shape97-278" v:mID="97" v:groupContext="shape" transform="translate(3.2474E-14,-2.83923)">
						<title>Sheet.97</title>
						<path d="M0 595.57 L7.14 595.57" class="st15"/>
					</g>
					<g id="shape98-281" v:mID="98" v:groupContext="shape" transform="translate(1.42863,-1.41961)">
						<title>Sheet.98</title>
						<path d="M0 595.57 L4.29 595.57" class="st15"/>
					</g>
					<g id="shape99-284" v:mID="99" v:groupContext="shape" transform="translate(2.85726,0)">
						<title>Sheet.99</title>
						<path d="M0 595.57 L1.43 595.57" class="st15"/>
					</g>
				</g>
			</g>
		</g>
		<g id="group100-287" transform="translate(38.5418,-215.914)" v:mID="100" v:groupContext="group">
			<title>Sheet.100</title>
			<g id="group101-288" transform="translate(2.34975,0)" v:mID="101" v:groupContext="group">
				<title>Sheet.101</title>
				<g id="shape102-289" v:mID="102" v:groupContext="shape" transform="translate(26.1209,1123.86) scale(1,-1)">
					<title>Sheet.102</title>
					<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
				</g>
				<g id="group103-291" transform="translate(17.6032,1087.55) scale(1,-1)" v:mID="103" v:groupContext="group">
					<title>Sheet.103</title>
					<g id="group104-292" transform="translate(620.423,595.572) rotate(90) scale(-1,1)" v:mID="104"
							v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="Core" v:lbl="Core" v:type="1" v:format="Air;Magnetic;Magnetic with Gap" v:langID="1033"
									v:val="VT4(Air)"/>
							<v:cp v:nameU="Adjustability" v:lbl="Adjustability" v:type="1"
									v:format="Fixed;Adjustable;Continuously Adjustable" v:langID="1033" v:val="VT4(Fixed)"/>
							<v:cp v:nameU="Taps" v:lbl="Taps" v:type="1" v:format="0;1;2;3" v:langID="1033" v:val="VT4(0)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:type="0" v:format="" v:sortKey="" v:invis="false" v:ask="false"
									v:langID="1033" v:val="VT0(0):26"/>
							<v:cp v:nameU="Value" v:lbl="Value" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
									v:langID="1033" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Core" v:val="VT0(0):26"/>
							<v:ud v:nameU="Adjustability" v:val="VT0(0):26"/>
							<v:ud v:nameU="CH"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Inductor. Right-click to set inductor properties.)"/>
						</v:userDefs>
						<title>Inductor</title>
						<g id="shape105-293" v:mID="105" v:groupContext="shape" v:layerMember="0">
							<title>Sheet.105</title>
							<path d="M0 595.57 A2.97237 3.4054 0 1 1 5.94 595.57 A2.97237 3.4054 0 1 1 11.88 595.57 A2.97237 3.4054
										 0 1 1 17.82 595.57 A2.97237 3.4054 0 1 1 23.76 595.57" class="st1"/>
							<path d="M0 595.57 L0 602.66" class="st1"/>
							<path d="M23.76 595.57 L23.76 602.66" class="st1"/>
						</g>
						<g id="shape106-298" v:mID="106" v:groupContext="shape" v:layerMember="0"
								transform="translate(11.4531,3.98419)">
							<title>Sheet.106</title>
						</g>
						<g id="shape107-300" v:mID="107" v:groupContext="shape" v:layerMember="0"
								transform="translate(-417.135,181.487) rotate(-45)">
							<title>Sheet.107</title>
						</g>
					</g>
					<g id="group108-302" transform="translate(0,-2.42449)" v:mID="108" v:groupContext="group">
						<title>Sheet.108</title>
						<g id="group109-303" transform="translate(0,-10.3041)" v:mID="109" v:groupContext="group">
							<title>Sheet.109</title>
							<g id="shape110-304" v:mID="110" v:groupContext="shape"
									transform="translate(599.668,587.087) rotate(90)">
								<title>Sheet.110</title>
								<path d="M0 595.57 L8.49 595.57" class="st1"/>
							</g>
							<g id="shape111-307" v:mID="111" v:groupContext="shape">
								<title>Sheet.111</title>
								<path d="M0 595.57 L7.95 595.57" class="st1"/>
							</g>
						</g>
						<g id="group112-310" transform="translate(0,1182.66) scale(1,-1)" v:mID="112" v:groupContext="group">
							<title>Sheet.112</title>
							<g id="shape113-311" v:mID="113" v:groupContext="shape"
									transform="translate(599.668,587.087) rotate(90)">
								<title>Sheet.113</title>
								<path d="M0 595.57 L8.49 595.57" class="st1"/>
							</g>
							<g id="shape114-314" v:mID="114" v:groupContext="shape">
								<title>Sheet.114</title>
								<path d="M0 595.57 L7.95 595.57" class="st1"/>
							</g>
						</g>
					</g>
					<g id="shape115-317" v:mID="115" v:groupContext="shape" transform="translate(17.7678,1167.38) rotate(180)">
						<title>Sheet.115</title>
						<path d="M0 595.57 L13.67 595.57" class="st1"/>
					</g>
					<g id="shape116-320" v:mID="116" v:groupContext="shape" transform="translate(17.7678,1191.14) rotate(180)">
						<title>Sheet.116</title>
						<path d="M0 595.57 L13.67 595.57" class="st1"/>
					</g>
					<g id="shape117-323" v:mID="117" v:groupContext="shape" transform="translate(599.668,571.812) rotate(90)">
						<title>Sheet.117</title>
						<path d="M0 595.57 L2.67 595.57" class="st1"/>
					</g>
					<g id="shape118-326" v:mID="118" v:groupContext="shape" transform="translate(599.668,593.148) rotate(90)">
						<title>Sheet.118</title>
						<path d="M0 595.57 L2.42 595.57" class="st1"/>
					</g>
				</g>
				<g id="group119-329" transform="translate(14.764,-8.71464)" v:mID="119" v:groupContext="group">
					<title>Sheet.119</title>
					<g id="group120-330" transform="translate(12.7765,-1.65489) scale(-1,1)" v:mID="120" v:groupContext="group"
							v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
									v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3"
									v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
									v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Type" v:val="VT0(0):26"/>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
							<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
						</v:userDefs>
						<title>Make contact.192</title>
						<g id="shape121-331" v:mID="121" v:groupContext="shape" v:layerMember="0"
								transform="translate(0.964372,-1.45689E-06)">
							<title>Sheet.121</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M5.41 586.04 L5.41 588.53" class="st7"/>
							<path d="M5.41 595.57 L5.41 593.08" class="st7"/>
							<path d="M1.47 588.91 L5.41 593.08 L5.41 595.57" class="st7"/>
						</g>
						<g id="shape122-336" v:mID="122" v:groupContext="shape" v:layerMember="0"
								transform="translate(5.09655,-1.53817)">
							<title>Sheet.122</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape123-338" v:mID="123" v:groupContext="shape" v:layerMember="0"
								transform="translate(-1.23842,0.925467)">
							<title>Sheet.123</title>
						</g>
					</g>
					<g id="group124-340" transform="translate(34.0707,-1.65489) scale(-1,1)" v:mID="124" v:groupContext="group"
							v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
									v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3"
									v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
									v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Type" v:val="VT0(0):26"/>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
							<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
						</v:userDefs>
						<title>Make contact.200</title>
						<g id="shape125-341" v:mID="125" v:groupContext="shape" v:layerMember="0"
								transform="translate(0.964372,-1.45689E-06)">
							<title>Sheet.125</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M5.41 586.04 L5.41 588.53" class="st7"/>
							<path d="M5.41 595.57 L5.41 593.08" class="st7"/>
							<path d="M1.47 588.91 L5.41 593.08 L5.41 595.57" class="st7"/>
						</g>
						<g id="shape126-346" v:mID="126" v:groupContext="shape" v:layerMember="0"
								transform="translate(5.09655,-1.53817)">
							<title>Sheet.126</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape127-348" v:mID="127" v:groupContext="shape" v:layerMember="0"
								transform="translate(-1.23842,0.925467)">
							<title>Sheet.127</title>
						</g>
					</g>
					<g id="shape128-350" v:mID="128" v:groupContext="shape" v:layerMember="1"
							transform="translate(6.38826,-4.11617)">
						<title>Dynamic connector.205</title>
						<path d="M0 588.49 L0 577.86 L21.29 577.86 L21.29 588.49" class="st1"/>
					</g>
				</g>
				<g id="shape129-353" v:mID="129" v:groupContext="shape" transform="translate(627.372,551.51) rotate(90)">
					<title>Sheet.129</title>
					<path d="M0 595.57 L9.75 595.57" class="st1"/>
				</g>
				<g id="shape130-356" v:mID="130" v:groupContext="shape" transform="translate(-563.773,528.141) rotate(-90)">
					<title>Sheet.130</title>
					<path d="M0 595.57 L12.41 595.57" class="st1"/>
				</g>
				<g id="shape131-359" v:mID="131" v:groupContext="shape" transform="translate(616.725,585.203) rotate(90)">
					<title>Sheet.131</title>
					<path d="M0 595.57 L2.17 595.57" class="st8"/>
				</g>
				<g id="shape132-364" v:mID="132" v:groupContext="shape" transform="translate(638.019,585.203) rotate(90)">
					<title>Sheet.132</title>
					<path d="M0 595.57 L8.46 595.57" class="st8"/>
				</g>
				<g id="shape133-369" v:mID="133" v:groupContext="shape" transform="translate(-563.773,491.854) rotate(-90)">
					<title>Sheet.133</title>
					<path d="M0 595.57 L21.94 595.57" class="st10"/>
				</g>
			</g>
			<g id="shape134-374" v:mID="134" v:groupContext="shape" transform="translate(0,-136.516)">
				<title>Sheet.134</title>
				<desc>TATA JABAR 2</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="34.7121" cy="589.148" width="69.43" height="12.8486"/>
				<rect x="0" y="582.724" width="69.4243" height="12.8486" class="st12"/>
				<text x="12.1" y="591.55" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TATA JABAR 2</text>			</g>
			<g id="group135-377" transform="translate(1.68632,-111.163)" v:mID="135" v:groupContext="group">
				<title>Sheet.135</title>
				<g id="shape136-378" v:mID="136" v:groupContext="shape" transform="translate(31.1805,1187.52) rotate(180)">
					<title>Sheet.136</title>
					<path d="M0 595.57 L6.73 595.57" class="st13"/>
				</g>
				<g id="shape137-383" v:mID="137" v:groupContext="shape" transform="translate(2.95221,1187.57) scale(1,-1)">
					<title>Sheet.137</title>
					<path d="M0 595.57 L8.72 595.57" class="st13"/>
				</g>
				<g id="group138-388" transform="translate(595.572,588.429) rotate(90)" v:mID="138" v:groupContext="group">
					<title>Sheet.138</title>
					<g id="shape139-389" v:mID="139" v:groupContext="shape" transform="translate(3.14748E-14,-2.83923)">
						<title>Sheet.139</title>
						<path d="M0 595.57 L7.14 595.57" class="st15"/>
					</g>
					<g id="shape140-392" v:mID="140" v:groupContext="shape" transform="translate(1.42863,-1.41961)">
						<title>Sheet.140</title>
						<path d="M0 595.57 L4.29 595.57" class="st15"/>
					</g>
					<g id="shape141-395" v:mID="141" v:groupContext="shape" transform="translate(2.85726,0)">
						<title>Sheet.141</title>
						<path d="M0 595.57 L1.43 595.57" class="st15"/>
					</g>
				</g>
			</g>
		</g>
		<g id="group142-398" transform="translate(157.688,-215.914)" v:mID="142" v:groupContext="group">
			<title>Sheet.142</title>
			<g id="group143-399" transform="translate(4.17361,0)" v:mID="143" v:groupContext="group">
				<title>Sheet.143</title>
				<g id="shape144-400" v:mID="144" v:groupContext="shape" transform="translate(26.1209,1123.86) scale(1,-1)">
					<title>Sheet.144</title>
					<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
				</g>
				<g id="group145-402" transform="translate(17.6032,1087.55) scale(1,-1)" v:mID="145" v:groupContext="group">
					<title>Sheet.145</title>
					<g id="group146-403" transform="translate(620.423,595.572) rotate(90) scale(-1,1)" v:mID="146"
							v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="Core" v:lbl="Core" v:type="1" v:format="Air;Magnetic;Magnetic with Gap" v:langID="1033"
									v:val="VT4(Air)"/>
							<v:cp v:nameU="Adjustability" v:lbl="Adjustability" v:type="1"
									v:format="Fixed;Adjustable;Continuously Adjustable" v:langID="1033" v:val="VT4(Fixed)"/>
							<v:cp v:nameU="Taps" v:lbl="Taps" v:type="1" v:format="0;1;2;3" v:langID="1033" v:val="VT4(0)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:type="0" v:format="" v:sortKey="" v:invis="false" v:ask="false"
									v:langID="1033" v:val="VT0(0):26"/>
							<v:cp v:nameU="Value" v:lbl="Value" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
									v:langID="1033" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Core" v:val="VT0(0):26"/>
							<v:ud v:nameU="Adjustability" v:val="VT0(0):26"/>
							<v:ud v:nameU="CH"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Inductor. Right-click to set inductor properties.)"/>
						</v:userDefs>
						<title>Inductor</title>
						<g id="shape147-404" v:mID="147" v:groupContext="shape" v:layerMember="0">
							<title>Sheet.147</title>
							<path d="M0 595.57 A2.97237 3.4054 0 1 1 5.94 595.57 A2.97237 3.4054 0 1 1 11.88 595.57 A2.97237 3.4054
										 0 1 1 17.82 595.57 A2.97237 3.4054 0 1 1 23.76 595.57" class="st1"/>
							<path d="M0 595.57 L0 602.66" class="st1"/>
							<path d="M23.76 595.57 L23.76 602.66" class="st1"/>
						</g>
						<g id="shape148-409" v:mID="148" v:groupContext="shape" v:layerMember="0"
								transform="translate(11.4531,3.98419)">
							<title>Sheet.148</title>
						</g>
						<g id="shape149-411" v:mID="149" v:groupContext="shape" v:layerMember="0"
								transform="translate(-417.135,181.487) rotate(-45)">
							<title>Sheet.149</title>
						</g>
					</g>
					<g id="group150-413" transform="translate(0,-2.42449)" v:mID="150" v:groupContext="group">
						<title>Sheet.150</title>
						<g id="group151-414" transform="translate(0,-10.3041)" v:mID="151" v:groupContext="group">
							<title>Sheet.151</title>
							<g id="shape152-415" v:mID="152" v:groupContext="shape"
									transform="translate(599.668,587.087) rotate(90)">
								<title>Sheet.152</title>
								<path d="M0 595.57 L8.49 595.57" class="st1"/>
							</g>
							<g id="shape153-418" v:mID="153" v:groupContext="shape">
								<title>Sheet.153</title>
								<path d="M0 595.57 L7.95 595.57" class="st1"/>
							</g>
						</g>
						<g id="group154-421" transform="translate(0,1182.66) scale(1,-1)" v:mID="154" v:groupContext="group">
							<title>Sheet.154</title>
							<g id="shape155-422" v:mID="155" v:groupContext="shape"
									transform="translate(599.668,587.087) rotate(90)">
								<title>Sheet.155</title>
								<path d="M0 595.57 L8.49 595.57" class="st1"/>
							</g>
							<g id="shape156-425" v:mID="156" v:groupContext="shape">
								<title>Sheet.156</title>
								<path d="M0 595.57 L7.95 595.57" class="st1"/>
							</g>
						</g>
					</g>
					<g id="shape157-428" v:mID="157" v:groupContext="shape" transform="translate(17.7678,1167.38) rotate(180)">
						<title>Sheet.157</title>
						<path d="M0 595.57 L13.67 595.57" class="st1"/>
					</g>
					<g id="shape158-431" v:mID="158" v:groupContext="shape" transform="translate(17.7678,1191.14) rotate(180)">
						<title>Sheet.158</title>
						<path d="M0 595.57 L13.67 595.57" class="st1"/>
					</g>
					<g id="shape159-434" v:mID="159" v:groupContext="shape" transform="translate(599.668,571.812) rotate(90)">
						<title>Sheet.159</title>
						<path d="M0 595.57 L2.67 595.57" class="st1"/>
					</g>
					<g id="shape160-437" v:mID="160" v:groupContext="shape" transform="translate(599.668,593.148) rotate(90)">
						<title>Sheet.160</title>
						<path d="M0 595.57 L2.42 595.57" class="st1"/>
					</g>
				</g>
				<g id="group161-440" transform="translate(14.764,-8.71464)" v:mID="161" v:groupContext="group">
					<title>Sheet.161</title>
					<g id="group162-441" transform="translate(12.7765,-1.65489) scale(-1,1)" v:mID="162" v:groupContext="group"
							v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
									v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3"
									v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
									v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Type" v:val="VT0(0):26"/>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
							<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
						</v:userDefs>
						<title>Make contact.192</title>
						<g id="shape163-442" v:mID="163" v:groupContext="shape" v:layerMember="0"
								transform="translate(0.964372,-1.45689E-06)">
							<title>Sheet.163</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M5.41 586.04 L5.41 588.53" class="st7"/>
							<path d="M5.41 595.57 L5.41 593.08" class="st7"/>
							<path d="M1.47 588.91 L5.41 593.08 L5.41 595.57" class="st7"/>
						</g>
						<g id="shape164-447" v:mID="164" v:groupContext="shape" v:layerMember="0"
								transform="translate(5.09655,-1.53817)">
							<title>Sheet.164</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape165-449" v:mID="165" v:groupContext="shape" v:layerMember="0"
								transform="translate(-1.23842,0.925467)">
							<title>Sheet.165</title>
						</g>
					</g>
					<g id="group166-451" transform="translate(34.0707,-1.65489) scale(-1,1)" v:mID="166" v:groupContext="group"
							v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
									v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3"
									v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
									v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Type" v:val="VT0(0):26"/>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
							<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
						</v:userDefs>
						<title>Make contact.200</title>
						<g id="shape167-452" v:mID="167" v:groupContext="shape" v:layerMember="0"
								transform="translate(0.964372,-1.45689E-06)">
							<title>Sheet.167</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M5.41 586.04 L5.41 588.53" class="st7"/>
							<path d="M5.41 595.57 L5.41 593.08" class="st7"/>
							<path d="M1.47 588.91 L5.41 593.08 L5.41 595.57" class="st7"/>
						</g>
						<g id="shape168-457" v:mID="168" v:groupContext="shape" v:layerMember="0"
								transform="translate(5.09655,-1.53817)">
							<title>Sheet.168</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape169-459" v:mID="169" v:groupContext="shape" v:layerMember="0"
								transform="translate(-1.23842,0.925467)">
							<title>Sheet.169</title>
						</g>
					</g>
					<g id="shape170-461" v:mID="170" v:groupContext="shape" v:layerMember="1"
							transform="translate(6.38826,-4.11617)">
						<title>Dynamic connector.205</title>
						<path d="M0 588.49 L0 577.86 L21.29 577.86 L21.29 588.49" class="st1"/>
					</g>
				</g>
				<g id="shape171-464" v:mID="171" v:groupContext="shape" transform="translate(627.372,551.51) rotate(90)">
					<title>Sheet.171</title>
					<path d="M0 595.57 L13.48 595.57" class="st1"/>
				</g>
				<g id="shape172-467" v:mID="172" v:groupContext="shape" transform="translate(-563.773,528.141) rotate(-90)">
					<title>Sheet.172</title>
					<path d="M0 595.57 L12.41 595.57" class="st1"/>
				</g>
				<g id="shape173-470" v:mID="173" v:groupContext="shape" transform="translate(616.725,585.203) rotate(90)">
					<title>Sheet.173</title>
					<path d="M0 595.57 L2.17 595.57" class="st8"/>
				</g>
				<g id="shape174-475" v:mID="174" v:groupContext="shape" transform="translate(638.019,585.203) rotate(90)">
					<title>Sheet.174</title>
					<path d="M0 595.57 L8.46 595.57" class="st8"/>
				</g>
				<g id="shape175-480" v:mID="175" v:groupContext="shape" transform="translate(-563.773,491.854) rotate(-90)">
					<title>Sheet.175</title>
					<path d="M0 595.57 L21.94 595.57" class="st10"/>
				</g>
			</g>
			<g id="shape176-485" v:mID="176" v:groupContext="shape" transform="translate(0,-136.516)">
				<title>Sheet.176</title>
				<desc>TATA JABAR 1</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="34.7121" cy="589.148" width="69.43" height="12.8486"/>
				<rect x="0" y="582.724" width="69.4243" height="12.8486" class="st12"/>
				<text x="12.1" y="591.55" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TATA JABAR 1</text>			</g>
			<g id="group177-488" transform="translate(3.45295,-111.163)" v:mID="177" v:groupContext="group">
				<title>Sheet.177</title>
				<g id="shape178-489" v:mID="178" v:groupContext="shape" transform="translate(31.1805,1187.52) rotate(180)">
					<title>Sheet.178</title>
					<path d="M0 595.57 L6.73 595.57" class="st13"/>
				</g>
				<g id="shape179-494" v:mID="179" v:groupContext="shape" transform="translate(2.95221,1187.57) scale(1,-1)">
					<title>Sheet.179</title>
					<path d="M0 595.57 L8.72 595.57" class="st13"/>
				</g>
				<g id="group180-499" transform="translate(595.572,588.429) rotate(90)" v:mID="180" v:groupContext="group">
					<title>Sheet.180</title>
					<g id="shape181-500" v:mID="181" v:groupContext="shape" transform="translate(3.19744E-14,-2.83923)">
						<title>Sheet.181</title>
						<path d="M0 595.57 L7.14 595.57" class="st15"/>
					</g>
					<g id="shape182-503" v:mID="182" v:groupContext="shape" transform="translate(1.42863,-1.41961)">
						<title>Sheet.182</title>
						<path d="M0 595.57 L4.29 595.57" class="st15"/>
					</g>
					<g id="shape183-506" v:mID="183" v:groupContext="shape" transform="translate(2.85726,0)">
						<title>Sheet.183</title>
						<path d="M0 595.57 L1.43 595.57" class="st15"/>
					</g>
				</g>
			</g>
		</g>
		<g id="shape184-509" v:mID="184" v:groupContext="shape" transform="translate(419.234,1059.61) scale(1,-1)">
			<title>Sheet.184</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="4.18" y="-596.35" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 35 <tspan
						x="12.06" dy="1.2em" class="st5">MVA<v:newlineChar/></tspan><tspan x="3.04" dy="1.2em" class="st5">6,3/150KV</tspan></text>		</g>
		<g id="group186-514" transform="translate(276.834,789.059) scale(1,-1)" v:mID="186" v:groupContext="group">
			<title>Sheet.186</title>
			<g id="group187-515" transform="translate(13.8912,1022.59) rotate(180)" v:mID="187" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
				</v:userDefs>
				<title>Make contact.215</title>
				<g id="shape188-516" v:mID="188" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.584E-06)">
					<title>Sheet.188</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M5.88 585.2 L5.88 587.91" class="st16"/>
					<path d="M5.88 595.57 L5.88 592.86" class="st16"/>
					<path d="M1.6 588.33 L5.88 592.86 L5.88 595.57" class="st16"/>
				</g>
				<g id="shape189-521" v:mID="189" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-1.67237)">
					<title>Sheet.189</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape190-523" v:mID="190" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.00621)">
					<title>Sheet.190</title>
				</g>
			</g>
			<g id="group191-525" transform="translate(35.1854,1022.59) rotate(180)" v:mID="191" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
				</v:userDefs>
				<title>Make contact.223</title>
				<g id="shape192-526" v:mID="192" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.584E-06)">
					<title>Sheet.192</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M5.88 585.2 L5.88 587.91" class="st16"/>
					<path d="M5.88 595.57 L5.88 592.86" class="st16"/>
					<path d="M1.6 588.33 L5.88 592.86 L5.88 595.57" class="st16"/>
				</g>
				<g id="shape193-531" v:mID="193" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-1.67237)">
					<title>Sheet.193</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape194-533" v:mID="194" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.00621)">
					<title>Sheet.194</title>
				</g>
			</g>
			<g id="shape195-535" v:mID="195" v:groupContext="shape" v:layerMember="1" transform="translate(6.94561,-151.087)">
				<title>Dynamic connector.228</title>
				<path d="M0 588.49 L0 593.8 L21.29 593.8 L21.29 588.49" class="st1"/>
			</g>
			<g id="shape196-538" v:mID="196" v:groupContext="shape" transform="translate(11.9143,-118.076)">
				<title>Sheet.196</title>
				<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
			</g>
			<g id="shape197-540" v:mID="197" v:groupContext="shape" transform="translate(-577.98,454.638) rotate(-90)">
				<title>Sheet.197</title>
				<path d="M0 595.57 L11.82 595.57" class="st1"/>
			</g>
			<g id="shape198-543" v:mID="198" v:groupContext="shape" transform="translate(-577.98,484.639) rotate(-90)">
				<title>Sheet.198</title>
				<path d="M0 595.57 L7.14 595.57" class="st1"/>
			</g>
			<g id="shape199-546" v:mID="199" v:groupContext="shape" transform="translate(-588.627,427.018) rotate(-90)">
				<title>Sheet.199</title>
				<path d="M0 595.57 L14.9 595.57" class="st8"/>
			</g>
			<g id="shape200-551" v:mID="200" v:groupContext="shape" transform="translate(-567.333,427.018) rotate(-90)">
				<title>Sheet.200</title>
				<path d="M0 595.57 L8.98 595.57" class="st8"/>
			</g>
			<g id="group201-556" transform="translate(11.2044,-9.09495E-13)" v:mID="201" v:groupContext="group">
				<title>Sheet.201</title>
				<g id="shape202-557" v:mID="202" v:groupContext="shape" transform="translate(0.709807,-25.3582)">
					<title>Sheet.202</title>
					<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st17"/>
				</g>
				<g id="shape203-559" v:mID="203" v:groupContext="shape" transform="translate(601.961,543.356) rotate(90)">
					<title>Sheet.203</title>
					<path d="M0 595.57 L4 595.57" class="st2"/>
				</g>
				<g id="group204-562" transform="translate(12.7765,1172.71) rotate(180)" v:mID="204" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
					</v:userDefs>
					<title>Make contact.459</title>
					<g id="shape205-563" v:mID="205" v:groupContext="shape" v:layerMember="0"
							transform="translate(0.964372,-1.81042E-06)">
						<title>Sheet.205</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M5.41 583.72 L5.41 586.82" class="st18"/>
						<path d="M5.41 595.57 L5.41 592.47" class="st18"/>
						<path d="M1.47 587.29 L5.41 592.47 L5.41 595.57" class="st18"/>
					</g>
					<g id="shape206-568" v:mID="206" v:groupContext="shape" v:layerMember="0"
							transform="translate(5.09655,-1.91142)">
						<title>Sheet.206</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape207-570" v:mID="207" v:groupContext="shape" v:layerMember="0"
							transform="translate(-1.23842,1.15004)">
						<title>Sheet.207</title>
					</g>
				</g>
				<g id="shape208-572" v:mID="208" v:groupContext="shape" transform="translate(-589.184,577.14) rotate(-90)">
					<title>Sheet.208</title>
					<path d="M0 595.57 L6.93 595.57" class="st2"/>
				</g>
				<g id="shape209-575" v:mID="209" v:groupContext="shape" transform="translate(601.961,589.004) rotate(90)">
					<title>Sheet.209</title>
					<path d="M0 595.57 L6.24 595.57" class="st2"/>
				</g>
			</g>
			<g id="shape210-578" v:mID="210" v:groupContext="shape" transform="translate(-577.98,543.356) rotate(-90)">
				<title>Sheet.210</title>
				<path d="M0 595.57 L15.79 595.57" class="st2"/>
			</g>
			<g id="group211-581" transform="translate(3.39657,-68.0742)" v:mID="211" v:groupContext="group">
				<title>Sheet.211</title>
				<g id="shape212-582" v:mID="212" v:groupContext="shape" transform="translate(0,-14.2863)">
					<title>Sheet.212</title>
					<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st6"/>
				</g>
				<g id="shape213-584" v:mID="213" v:groupContext="shape">
					<title>Sheet.213</title>
					<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st19"/>
				</g>
			</g>
		</g>
		<g id="shape214-586" v:mID="214" v:groupContext="shape" transform="translate(356.658,697.866) scale(1,-1)">
			<title>Sheet.214</title>
			<desc>7 MVA I 70/6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="24.4174" cy="577.767" width="48.84" height="35.6118"/>
			<rect x="0" y="559.961" width="48.8347" height="35.6118" class="st3"/>
			<text x="11.57" y="-580.17" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>7 MVA I<v:newlineChar/><tspan
						x="9.42" dy="1.2em" class="st5">70/6,3KV</tspan></text>		</g>
		<g id="shape215-590" v:mID="215" v:groupContext="shape" transform="translate(461.209,697.879) scale(1,-1)">
			<title>Sheet.215</title>
			<desc>7 MVA II 70/6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="24.4174" cy="577.767" width="48.84" height="35.6118"/>
			<rect x="0" y="559.961" width="48.8347" height="35.6118" class="st3"/>
			<text x="10.56" y="-580.17" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>7 MVA II<v:newlineChar/><tspan
						x="9.42" dy="1.2em" class="st5">70/6,3KV</tspan></text>		</g>
		<g id="shape216-594" v:mID="216" v:groupContext="shape" transform="translate(466.967,629.437) scale(1,-1)">
			<title>Sheet.216</title>
			<desc>LINE 6,3 KV TO SENTRAL DIESEL</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="55.677" cy="589.148" width="111.36" height="12.8486"/>
			<rect x="0" y="582.724" width="111.354" height="12.8486" class="st3"/>
			<text x="31.74" y="-591.55" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3 KV TO<v:newlineChar/><tspan
						x="29.39" dy="1.2em" class="st5">SENTRAL DIESEL</tspan></text>		</g>
		<g id="group217-598" transform="translate(429.179,-403.455) scale(-1,1)" v:mID="217" v:groupContext="group">
			<title>Sheet.217</title>
			<g id="shape218-599" v:mID="218" v:groupContext="shape" transform="translate(-581.376,493.562) rotate(-90)">
				<title>Sheet.218</title>
				<path d="M0 595.57 L35.48 595.57" class="st20"/>
			</g>
			<g id="group219-605" transform="translate(7.80788,0)" v:mID="219" v:groupContext="group">
				<title>Sheet.219</title>
				<g id="shape220-606" v:mID="220" v:groupContext="shape" transform="translate(0.709807,-23.2811)">
					<title>Sheet.220</title>
					<rect x="0" y="574.587" width="11.3569" height="20.9857" class="st17"/>
				</g>
				<g id="shape221-608" v:mID="221" v:groupContext="shape" transform="translate(601.961,547.633) rotate(90)">
					<title>Sheet.221</title>
					<path d="M0 595.57 L3.67 595.57" class="st2"/>
				</g>
				<g id="group222-611" transform="translate(6.39488E-14,-6.70263)" v:mID="222" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
					</v:userDefs>
					<title>Make contact.459</title>
					<g id="shape223-612" v:mID="223" v:groupContext="shape" v:layerMember="0"
							transform="translate(0.964372,-1.45689E-06)">
						<title>Sheet.223</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M5.41 586.04 L5.41 588.53" class="st18"/>
						<path d="M5.41 595.57 L5.41 593.08" class="st18"/>
						<path d="M1.47 588.91 L5.41 593.08 L5.41 595.57" class="st18"/>
					</g>
					<g id="shape224-617" v:mID="224" v:groupContext="shape" v:layerMember="0"
							transform="translate(5.09655,-1.53817)">
						<title>Sheet.224</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape225-619" v:mID="225" v:groupContext="shape" v:layerMember="0"
							transform="translate(-1.23842,0.925467)">
						<title>Sheet.225</title>
					</g>
				</g>
				<g id="shape226-621" v:mID="226" v:groupContext="shape" transform="translate(-589.184,579.322) rotate(-90)">
					<title>Sheet.226</title>
					<path d="M0 595.57 L7.03 595.57" class="st2"/>
				</g>
				<g id="shape227-624" v:mID="227" v:groupContext="shape" transform="translate(601.961,588.87) rotate(90)">
					<title>Sheet.227</title>
					<path d="M0 595.57 L6.7 595.57" class="st2"/>
				</g>
			</g>
			<g id="shape228-627" v:mID="228" v:groupContext="shape" transform="translate(0,-75.7782)">
				<title>Sheet.228</title>
				<ellipse cx="14.1961" cy="582.456" rx="14.1961" ry="13.1161" class="st22"/>
			</g>
			<g id="shape229-629" v:mID="229" v:groupContext="shape" transform="translate(0,-62.6621)">
				<title>Sheet.229</title>
				<ellipse cx="14.1961" cy="582.456" rx="14.1961" ry="13.1161" class="st19"/>
			</g>
			<g id="shape230-631" v:mID="230" v:groupContext="shape" transform="translate(-581.363,547.863) rotate(-90)">
				<title>Sheet.230</title>
				<path d="M0 595.57 L14.95 595.57" class="st2"/>
			</g>
		</g>
		<g id="group231-634" transform="translate(361.741,788.97) scale(1,-1)" v:mID="231" v:groupContext="group">
			<title>Sheet.231</title>
			<g id="group232-635" v:mID="232" v:groupContext="group">
				<title>Sheet.232</title>
				<g id="group233-636" transform="translate(13.8912,1022.41) rotate(180)" v:mID="233" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)20)"/>
					</v:userDefs>
					<title>Make contact.304</title>
					<g id="shape234-637" v:mID="234" v:groupContext="shape" v:layerMember="0"
							transform="translate(1.04851,-1.584E-06)">
						<title>Sheet.234</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M5.88 585.2 L5.88 587.91" class="st16"/>
						<path d="M5.88 595.57 L5.88 592.86" class="st16"/>
						<path d="M1.6 588.33 L5.88 592.86 L5.88 595.57" class="st16"/>
					</g>
					<g id="shape235-642" v:mID="235" v:groupContext="shape" v:layerMember="0"
							transform="translate(5.5412,-1.67237)">
						<title>Sheet.235</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape236-644" v:mID="236" v:groupContext="shape" v:layerMember="0"
							transform="translate(-1.34646,1.00621)">
						<title>Sheet.236</title>
					</g>
				</g>
				<g id="group237-646" transform="translate(35.1854,1022.41) rotate(180)" v:mID="237" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
					</v:userDefs>
					<title>Make contact.308</title>
					<g id="shape238-647" v:mID="238" v:groupContext="shape" v:layerMember="0"
							transform="translate(1.04851,-1.584E-06)">
						<title>Sheet.238</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M5.88 585.2 L5.88 587.91" class="st16"/>
						<path d="M5.88 595.57 L5.88 592.86" class="st16"/>
						<path d="M1.6 588.33 L5.88 592.86 L5.88 595.57" class="st16"/>
					</g>
					<g id="shape239-652" v:mID="239" v:groupContext="shape" v:layerMember="0"
							transform="translate(5.5412,-1.67237)">
						<title>Sheet.239</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape240-654" v:mID="240" v:groupContext="shape" v:layerMember="0"
							transform="translate(-1.34646,1.00621)">
						<title>Sheet.240</title>
					</g>
				</g>
				<g id="shape241-656" v:mID="241" v:groupContext="shape" v:layerMember="1" transform="translate(6.94561,-151.265)">
					<title>Dynamic connector.312</title>
					<path d="M0 588.49 L0 593.8 L21.29 593.8 L21.29 588.49" class="st1"/>
				</g>
				<g id="shape242-659" v:mID="242" v:groupContext="shape" transform="translate(11.9143,-118.255)">
					<title>Sheet.242</title>
					<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
				</g>
				<g id="shape243-661" v:mID="243" v:groupContext="shape" transform="translate(-577.98,454.46) rotate(-90)">
					<title>Sheet.243</title>
					<path d="M0 595.57 L11.73 595.57" class="st1"/>
				</g>
				<g id="shape244-664" v:mID="244" v:groupContext="shape" transform="translate(-577.98,484.461) rotate(-90)">
					<title>Sheet.244</title>
					<path d="M0 595.57 L7.14 595.57" class="st1"/>
				</g>
				<g id="shape245-667" v:mID="245" v:groupContext="shape" transform="translate(-588.627,426.84) rotate(-90)">
					<title>Sheet.245</title>
					<path d="M0 595.57 L14.9 595.57" class="st8"/>
				</g>
				<g id="group246-672" transform="translate(11.2044,-9.09495E-13)" v:mID="246" v:groupContext="group">
					<title>Sheet.246</title>
					<g id="shape247-673" v:mID="247" v:groupContext="shape" transform="translate(0.709807,-25.3582)">
						<title>Sheet.247</title>
						<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st17"/>
					</g>
					<g id="shape248-675" v:mID="248" v:groupContext="shape" transform="translate(601.961,543.356) rotate(90)">
						<title>Sheet.248</title>
						<path d="M0 595.57 L4 595.57" class="st2"/>
					</g>
					<g id="group249-678" transform="translate(12.7765,1173.87) rotate(180)" v:mID="249" v:groupContext="group"
							v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
									v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3"
									v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
									v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Type" v:val="VT0(0):26"/>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
							<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
							<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
						</v:userDefs>
						<title>Make contact.459</title>
						<g id="shape250-679" v:mID="250" v:groupContext="shape" v:layerMember="0"
								transform="translate(0.964372,-1.45689E-06)">
							<title>Sheet.250</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M5.41 586.04 L5.41 588.53" class="st18"/>
							<path d="M5.41 595.57 L5.41 593.08" class="st18"/>
							<path d="M1.47 588.91 L5.41 593.08 L5.41 595.57" class="st18"/>
						</g>
						<g id="shape251-684" v:mID="251" v:groupContext="shape" v:layerMember="0"
								transform="translate(5.09655,-1.53817)">
							<title>Sheet.251</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape252-686" v:mID="252" v:groupContext="shape" v:layerMember="0"
								transform="translate(-1.23842,0.925467)">
							<title>Sheet.252</title>
						</g>
					</g>
					<g id="shape253-688" v:mID="253" v:groupContext="shape" transform="translate(-589.184,578.298) rotate(-90)">
						<title>Sheet.253</title>
						<path d="M0 595.57 L8.08 595.57" class="st2"/>
					</g>
					<g id="shape254-691" v:mID="254" v:groupContext="shape" transform="translate(601.961,587.846) rotate(90)">
						<title>Sheet.254</title>
						<path d="M0 595.57 L7.69 595.57" class="st2"/>
					</g>
				</g>
				<g id="group255-694" transform="translate(3.39657,-68.2528)" v:mID="255" v:groupContext="group">
					<title>Sheet.255</title>
					<g id="shape256-695" v:mID="256" v:groupContext="shape" transform="translate(0,-14.2863)">
						<title>Sheet.256</title>
						<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st6"/>
					</g>
					<g id="shape257-697" v:mID="257" v:groupContext="shape">
						<title>Sheet.257</title>
						<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st19"/>
					</g>
				</g>
				<g id="shape258-699" v:mID="258" v:groupContext="shape" transform="translate(-577.967,543.606) rotate(-90)">
					<title>Sheet.258</title>
					<path d="M0 595.57 L16.29 595.57" class="st2"/>
				</g>
			</g>
			<g id="shape259-702" v:mID="259" v:groupContext="shape" transform="translate(-567.333,426.84) rotate(-90)">
				<title>Sheet.259</title>
				<path d="M0 595.57 L8.68 595.57" class="st8"/>
			</g>
		</g>
		<g id="shape260-707" v:mID="260" v:groupContext="shape" transform="translate(106.867,1133.71) scale(1,-1)">
			<title>Sheet.260</title>
			<desc>UNIT 6</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="9.03" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 6</text>		</g>
		<g id="group261-710" transform="translate(107.31,-60.1522)" v:mID="261" v:groupContext="group">
			<title>Sheet.261</title>
			<g id="shape262-711" v:mID="262" v:groupContext="shape" transform="translate(11.9143,1073.34) scale(1,-1)">
				<title>Sheet.262</title>
				<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
			</g>
			<g id="group263-713" transform="translate(4.996E-15,1037.61) scale(1,-1)" v:mID="263" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)8)"/>
				</v:userDefs>
				<title>Make contact</title>
				<g id="shape264-714" v:mID="264" v:groupContext="shape" v:layerMember="0"
						transform="translate(1.04851,-1.96838E-06)">
					<title>Sheet.264</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
					<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
					<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
				</g>
				<g id="shape265-719" v:mID="265" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
					<title>Sheet.265</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape266-721" v:mID="266" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
					<title>Sheet.266</title>
				</g>
			</g>
			<g id="group267-723" transform="translate(21.2942,1037.61) scale(1,-1)" v:mID="267" v:groupContext="group"
					v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
							v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
							v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
							v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
				</v:custProps>
				<v:userDefs>
					<v:ud v:nameU="Type" v:val="VT0(0):26"/>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
					<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
					<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)13)"/>
				</v:userDefs>
				<title>Make contact.117</title>
				<g id="shape268-724" v:mID="268" v:groupContext="shape" v:layerMember="0"
						transform="translate(1.04851,-1.96838E-06)">
					<title>Sheet.268</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
					<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
					<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
				</g>
				<g id="shape269-729" v:mID="269" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
					<title>Sheet.269</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape270-731" v:mID="270" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
					<title>Sheet.270</title>
				</g>
			</g>
			<g id="shape271-733" v:mID="271" v:groupContext="shape" v:layerMember="1" transform="translate(6.94561,-133.552)">
				<title>Dynamic connector.132</title>
				<path d="M0 588.49 L0 599.12 L21.29 599.12 L21.29 588.49" class="st1"/>
			</g>
			<g id="shape272-736" v:mID="272" v:groupContext="shape" transform="translate(602.518,442.034) rotate(90) scale(-1,1)">
				<title>Sheet.272</title>
				<path d="M0 595.57 L0.64 595.57" class="st8"/>
			</g>
			<g id="shape273-741" v:mID="273" v:groupContext="shape" transform="translate(623.812,442.034) rotate(90) scale(-1,1)">
				<title>Sheet.273</title>
				<path d="M0 595.57 L6.92 595.57" class="st8"/>
			</g>
			<g id="shape274-746" v:mID="274" v:groupContext="shape" transform="translate(613.165,477.771) rotate(90) scale(-1,1)">
				<title>Sheet.274</title>
				<path d="M0 595.57 L11.85 595.57" class="st1"/>
			</g>
			<g id="group275-749" transform="translate(12.0347,1191.14) scale(1,-1)" v:mID="275" v:groupContext="group">
				<title>Sheet.275</title>
				<g id="shape276-750" v:mID="276" v:groupContext="shape" transform="translate(5.64798,0)">
					<title>Sheet.276</title>
					<path d="M0 595.57 L5.67 595.57" class="st23"/>
				</g>
				<g id="shape277-753" v:mID="277" v:groupContext="shape">
					<title>Sheet.277</title>
					<path d="M0 595.57 L5.65 595.57" class="st23"/>
				</g>
			</g>
			<g id="group278-756" transform="translate(3.4957,1108.98) scale(1,-1)" v:mID="278" v:groupContext="group">
				<title>Sheet.278</title>
				<g id="shape279-757" v:mID="279" v:groupContext="shape" transform="translate(0,-14.2863)">
					<title>Sheet.279</title>
					<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st22"/>
				</g>
				<g id="shape280-759" v:mID="280" v:groupContext="shape">
					<title>Sheet.280</title>
					<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st24"/>
				</g>
			</g>
			<g id="shape281-761" v:mID="281" v:groupContext="shape" transform="translate(613.133,513.667) rotate(90) scale(-1,1)">
				<title>Sheet.281</title>
				<path d="M0 595.57 L13.01 595.57" class="st25"/>
			</g>
		</g>
		<g id="shape282-764" v:mID="282" v:groupContext="shape" transform="translate(543.083,1133.71) scale(1,-1)">
			<title>Sheet.282</title>
			<desc>UNIT 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="9.03" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 1</text>		</g>
		<g id="shape283-767" v:mID="283" v:groupContext="shape" transform="translate(555.44,1013.19) scale(1,-1)">
			<title>Sheet.283</title>
			<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
		</g>
		<g id="group284-769" transform="translate(543.526,977.454) scale(1,-1)" v:mID="284" v:groupContext="group"
				v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)8)"/>
			</v:userDefs>
			<title>Make contact.785</title>
			<g id="shape285-770" v:mID="285" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.96838E-06)">
				<title>Sheet.285</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
				<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
				<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
			</g>
			<g id="shape286-775" v:mID="286" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
				<title>Sheet.286</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape287-777" v:mID="287" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
				<title>Sheet.287</title>
			</g>
		</g>
		<g id="group288-779" transform="translate(564.82,977.454) scale(1,-1)" v:mID="288" v:groupContext="group" v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)13)"/>
			</v:userDefs>
			<title>Make contact.789</title>
			<g id="shape289-780" v:mID="289" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.96838E-06)">
				<title>Sheet.289</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
				<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
				<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
			</g>
			<g id="shape290-785" v:mID="290" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
				<title>Sheet.290</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape291-787" v:mID="291" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
				<title>Sheet.291</title>
			</g>
		</g>
		<g id="shape292-789" v:mID="292" v:groupContext="shape" v:layerMember="1" transform="translate(550.471,-193.704)">
			<title>Dynamic connector.793</title>
			<path d="M0 588.49 L0 599.12 L21.29 599.12 L21.29 588.49" class="st1"/>
		</g>
		<g id="shape293-792" v:mID="293" v:groupContext="shape" transform="translate(1146.04,381.882) rotate(90) scale(-1,1)">
			<title>Sheet.293</title>
			<path d="M0 595.57 L0.64 595.57" class="st8"/>
		</g>
		<g id="shape294-797" v:mID="294" v:groupContext="shape" transform="translate(1167.34,381.882) rotate(90) scale(-1,1)">
			<title>Sheet.294</title>
			<path d="M0 595.57 L6.92 595.57" class="st8"/>
		</g>
		<g id="shape295-802" v:mID="295" v:groupContext="shape" transform="translate(1156.69,417.618) rotate(90) scale(-1,1)">
			<title>Sheet.295</title>
			<path d="M0 595.57 L11.59 595.57" class="st1"/>
		</g>
		<g id="group296-805" transform="translate(555.56,1130.99) scale(1,-1)" v:mID="296" v:groupContext="group">
			<title>Sheet.296</title>
			<g id="shape297-806" v:mID="297" v:groupContext="shape" transform="translate(5.64798,0)">
				<title>Sheet.297</title>
				<path d="M0 595.57 L5.67 595.57" class="st23"/>
			</g>
			<g id="shape298-809" v:mID="298" v:groupContext="shape">
				<title>Sheet.298</title>
				<path d="M0 595.57 L5.65 595.57" class="st23"/>
			</g>
		</g>
		<g id="group299-812" transform="translate(547.021,1048.82) scale(1,-1)" v:mID="299" v:groupContext="group">
			<title>Sheet.299</title>
			<g id="shape300-813" v:mID="300" v:groupContext="shape" transform="translate(0,-14.2863)">
				<title>Sheet.300</title>
				<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st22"/>
			</g>
			<g id="shape301-815" v:mID="301" v:groupContext="shape">
				<title>Sheet.301</title>
				<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st24"/>
			</g>
		</g>
		<g id="shape302-817" v:mID="302" v:groupContext="shape" transform="translate(1156.66,453.515) rotate(90) scale(-1,1)">
			<title>Sheet.302</title>
			<path d="M0 595.57 L13.01 595.57" class="st25"/>
		</g>
		<g id="shape303-820" v:mID="303" v:groupContext="shape" transform="translate(455.84,1133.71) scale(1,-1)">
			<title>Sheet.303</title>
			<desc>UNIT 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="9.03" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 2</text>		</g>
		<g id="shape304-823" v:mID="304" v:groupContext="shape" transform="translate(468.197,1013.19) scale(1,-1)">
			<title>Sheet.304</title>
			<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
		</g>
		<g id="group305-825" transform="translate(456.282,977.454) scale(1,-1)" v:mID="305" v:groupContext="group"
				v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)8)"/>
			</v:userDefs>
			<title>Make contact.813</title>
			<g id="shape306-826" v:mID="306" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.96838E-06)">
				<title>Sheet.306</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
				<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
				<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
			</g>
			<g id="shape307-831" v:mID="307" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
				<title>Sheet.307</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape308-833" v:mID="308" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
				<title>Sheet.308</title>
			</g>
		</g>
		<g id="group309-835" transform="translate(477.577,977.454) scale(1,-1)" v:mID="309" v:groupContext="group"
				v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)13)"/>
			</v:userDefs>
			<title>Make contact.817</title>
			<g id="shape310-836" v:mID="310" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.96838E-06)">
				<title>Sheet.310</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
				<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
				<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
			</g>
			<g id="shape311-841" v:mID="311" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
				<title>Sheet.311</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape312-843" v:mID="312" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
				<title>Sheet.312</title>
			</g>
		</g>
		<g id="shape313-845" v:mID="313" v:groupContext="shape" v:layerMember="1" transform="translate(463.228,-193.704)">
			<title>Dynamic connector.821</title>
			<path d="M0 588.49 L0 599.12 L21.29 599.12 L21.29 588.49" class="st1"/>
		</g>
		<g id="shape314-848" v:mID="314" v:groupContext="shape" transform="translate(1058.8,381.882) rotate(90) scale(-1,1)">
			<title>Sheet.314</title>
			<path d="M0 595.57 L0.64 595.57" class="st8"/>
		</g>
		<g id="shape315-853" v:mID="315" v:groupContext="shape" transform="translate(1080.09,381.882) rotate(90) scale(-1,1)">
			<title>Sheet.315</title>
			<path d="M0 595.57 L6.92 595.57" class="st8"/>
		</g>
		<g id="shape316-858" v:mID="316" v:groupContext="shape" transform="translate(1069.45,417.618) rotate(90) scale(-1,1)">
			<title>Sheet.316</title>
			<path d="M0 595.57 L11.74 595.57" class="st1"/>
		</g>
		<g id="group317-861" transform="translate(468.317,1130.99) scale(1,-1)" v:mID="317" v:groupContext="group">
			<title>Sheet.317</title>
			<g id="shape318-862" v:mID="318" v:groupContext="shape" transform="translate(5.64798,0)">
				<title>Sheet.318</title>
				<path d="M0 595.57 L5.67 595.57" class="st23"/>
			</g>
			<g id="shape319-865" v:mID="319" v:groupContext="shape">
				<title>Sheet.319</title>
				<path d="M0 595.57 L5.65 595.57" class="st23"/>
			</g>
		</g>
		<g id="group320-868" transform="translate(459.778,1048.82) scale(1,-1)" v:mID="320" v:groupContext="group">
			<title>Sheet.320</title>
			<g id="shape321-869" v:mID="321" v:groupContext="shape" transform="translate(0,-14.2863)">
				<title>Sheet.321</title>
				<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st22"/>
			</g>
			<g id="shape322-871" v:mID="322" v:groupContext="shape">
				<title>Sheet.322</title>
				<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st24"/>
			</g>
		</g>
		<g id="shape323-873" v:mID="323" v:groupContext="shape" transform="translate(1069.42,453.515) rotate(90) scale(-1,1)">
			<title>Sheet.323</title>
			<path d="M0 595.57 L13.01 595.57" class="st25"/>
		</g>
		<g id="shape324-876" v:mID="324" v:groupContext="shape" transform="translate(368.596,1133.71) scale(1,-1)">
			<title>Sheet.324</title>
			<desc>UNIT 3</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="9.03" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 3</text>		</g>
		<g id="shape325-879" v:mID="325" v:groupContext="shape" transform="translate(380.954,1013.19) scale(1,-1)">
			<title>Sheet.325</title>
			<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
		</g>
		<g id="group326-881" transform="translate(369.039,977.454) scale(1,-1)" v:mID="326" v:groupContext="group"
				v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)8)"/>
			</v:userDefs>
			<title>Make contact.841</title>
			<g id="shape327-882" v:mID="327" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.96838E-06)">
				<title>Sheet.327</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
				<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
				<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
			</g>
			<g id="shape328-887" v:mID="328" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
				<title>Sheet.328</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape329-889" v:mID="329" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
				<title>Sheet.329</title>
			</g>
		</g>
		<g id="group330-891" transform="translate(390.334,977.454) scale(1,-1)" v:mID="330" v:groupContext="group"
				v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)13)"/>
			</v:userDefs>
			<title>Make contact.845</title>
			<g id="shape331-892" v:mID="331" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.96838E-06)">
				<title>Sheet.331</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
				<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
				<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
			</g>
			<g id="shape332-897" v:mID="332" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
				<title>Sheet.332</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape333-899" v:mID="333" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
				<title>Sheet.333</title>
			</g>
		</g>
		<g id="shape334-901" v:mID="334" v:groupContext="shape" v:layerMember="1" transform="translate(375.985,-193.704)">
			<title>Dynamic connector.849</title>
			<path d="M0 588.49 L0 599.12 L21.29 599.12 L21.29 588.49" class="st1"/>
		</g>
		<g id="shape335-904" v:mID="335" v:groupContext="shape" transform="translate(971.557,381.882) rotate(90) scale(-1,1)">
			<title>Sheet.335</title>
			<path d="M0 595.57 L0.64 595.57" class="st8"/>
		</g>
		<g id="shape336-909" v:mID="336" v:groupContext="shape" transform="translate(992.852,381.882) rotate(90) scale(-1,1)">
			<title>Sheet.336</title>
			<path d="M0 595.57 L6.92 595.57" class="st8"/>
		</g>
		<g id="shape337-914" v:mID="337" v:groupContext="shape" transform="translate(982.204,417.618) rotate(90) scale(-1,1)">
			<title>Sheet.337</title>
			<path d="M0 595.57 L11.89 595.57" class="st1"/>
		</g>
		<g id="group338-917" transform="translate(381.074,1130.99) scale(1,-1)" v:mID="338" v:groupContext="group">
			<title>Sheet.338</title>
			<g id="shape339-918" v:mID="339" v:groupContext="shape" transform="translate(5.64798,0)">
				<title>Sheet.339</title>
				<path d="M0 595.57 L5.67 595.57" class="st23"/>
			</g>
			<g id="shape340-921" v:mID="340" v:groupContext="shape">
				<title>Sheet.340</title>
				<path d="M0 595.57 L5.65 595.57" class="st23"/>
			</g>
		</g>
		<g id="group341-924" transform="translate(372.535,1048.82) scale(1,-1)" v:mID="341" v:groupContext="group">
			<title>Sheet.341</title>
			<g id="shape342-925" v:mID="342" v:groupContext="shape" transform="translate(0,-14.2863)">
				<title>Sheet.342</title>
				<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st22"/>
			</g>
			<g id="shape343-927" v:mID="343" v:groupContext="shape">
				<title>Sheet.343</title>
				<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st24"/>
			</g>
		</g>
		<g id="shape344-929" v:mID="344" v:groupContext="shape" transform="translate(982.172,453.515) rotate(90) scale(-1,1)">
			<title>Sheet.344</title>
			<path d="M0 595.57 L13.01 595.57" class="st25"/>
		</g>
		<g id="shape345-932" v:mID="345" v:groupContext="shape" transform="translate(281.353,1133.71) scale(1,-1)">
			<title>Sheet.345</title>
			<desc>UNIT 4</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="9.03" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 4</text>		</g>
		<g id="shape346-935" v:mID="346" v:groupContext="shape" transform="translate(293.71,1013.19) scale(1,-1)">
			<title>Sheet.346</title>
			<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
		</g>
		<g id="group347-937" transform="translate(281.796,977.454) scale(1,-1)" v:mID="347" v:groupContext="group"
				v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)8)"/>
			</v:userDefs>
			<title>Make contact.400</title>
			<g id="shape348-938" v:mID="348" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.96838E-06)">
				<title>Sheet.348</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
				<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
				<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
			</g>
			<g id="shape349-943" v:mID="349" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
				<title>Sheet.349</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape350-945" v:mID="350" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
				<title>Sheet.350</title>
			</g>
		</g>
		<g id="group351-947" transform="translate(303.09,977.454) scale(1,-1)" v:mID="351" v:groupContext="group" v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)13)"/>
			</v:userDefs>
			<title>Make contact.404</title>
			<g id="shape352-948" v:mID="352" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.96838E-06)">
				<title>Sheet.352</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
				<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
				<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
			</g>
			<g id="shape353-953" v:mID="353" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
				<title>Sheet.353</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape354-955" v:mID="354" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
				<title>Sheet.354</title>
			</g>
		</g>
		<g id="shape355-957" v:mID="355" v:groupContext="shape" v:layerMember="1" transform="translate(288.742,-193.704)">
			<title>Dynamic connector.408</title>
			<path d="M0 588.49 L0 599.12 L21.29 599.12 L21.29 588.49" class="st1"/>
		</g>
		<g id="shape356-960" v:mID="356" v:groupContext="shape" transform="translate(884.314,381.882) rotate(90) scale(-1,1)">
			<title>Sheet.356</title>
			<path d="M0 595.57 L0.64 595.57" class="st8"/>
		</g>
		<g id="shape357-965" v:mID="357" v:groupContext="shape" transform="translate(905.608,381.882) rotate(90) scale(-1,1)">
			<title>Sheet.357</title>
			<path d="M0 595.57 L6.92 595.57" class="st8"/>
		</g>
		<g id="shape358-970" v:mID="358" v:groupContext="shape" transform="translate(894.961,417.618) rotate(90) scale(-1,1)">
			<title>Sheet.358</title>
			<path d="M0 595.57 L11.67 595.57" class="st1"/>
		</g>
		<g id="group359-973" transform="translate(293.831,1130.99) scale(1,-1)" v:mID="359" v:groupContext="group">
			<title>Sheet.359</title>
			<g id="shape360-974" v:mID="360" v:groupContext="shape" transform="translate(5.64798,0)">
				<title>Sheet.360</title>
				<path d="M0 595.57 L5.67 595.57" class="st23"/>
			</g>
			<g id="shape361-977" v:mID="361" v:groupContext="shape">
				<title>Sheet.361</title>
				<path d="M0 595.57 L5.65 595.57" class="st23"/>
			</g>
		</g>
		<g id="group362-980" transform="translate(285.292,1048.82) scale(1,-1)" v:mID="362" v:groupContext="group">
			<title>Sheet.362</title>
			<g id="shape363-981" v:mID="363" v:groupContext="shape" transform="translate(0,-14.2863)">
				<title>Sheet.363</title>
				<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st22"/>
			</g>
			<g id="shape364-983" v:mID="364" v:groupContext="shape">
				<title>Sheet.364</title>
				<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st24"/>
			</g>
		</g>
		<g id="shape365-985" v:mID="365" v:groupContext="shape" transform="translate(894.929,453.515) rotate(90) scale(-1,1)">
			<title>Sheet.365</title>
			<path d="M0 595.57 L13.01 595.57" class="st25"/>
		</g>
		<g id="shape366-988" v:mID="366" v:groupContext="shape" transform="translate(194.11,1133.71) scale(1,-1)">
			<title>Sheet.366</title>
			<desc>UNIT 5</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.0651" cy="589.148" width="40.14" height="12.8486"/>
			<rect x="0" y="582.724" width="40.1302" height="12.8486" class="st3"/>
			<text x="9.03" y="-586.75" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 5</text>		</g>
		<g id="shape367-991" v:mID="367" v:groupContext="shape" transform="translate(206.467,1013.19) scale(1,-1)">
			<title>Sheet.367</title>
			<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st6"/>
		</g>
		<g id="group368-993" transform="translate(194.553,977.454) scale(1,-1)" v:mID="368" v:groupContext="group"
				v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)8)"/>
			</v:userDefs>
			<title>Make contact</title>
			<g id="shape369-994" v:mID="369" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.96838E-06)">
				<title>Sheet.369</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
				<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
				<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
			</g>
			<g id="shape370-999" v:mID="370" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
				<title>Sheet.370</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape371-1001" v:mID="371" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
				<title>Sheet.371</title>
			</g>
		</g>
		<g id="group372-1003" transform="translate(215.847,977.454) scale(1,-1)" v:mID="372" v:groupContext="group"
				v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
						v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
						v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false"
						v:langID="1033" v:cal="0" v:val="VT4()"/>
			</v:custProps>
			<v:userDefs>
				<v:ud v:nameU="Type" v:val="VT0(0):26"/>
				<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
				<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
				<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)13)"/>
			</v:userDefs>
			<title>Make contact.117</title>
			<g id="shape373-1004" v:mID="373" v:groupContext="shape" v:layerMember="0" transform="translate(1.04851,-1.96838E-06)">
				<title>Sheet.373</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M5.88 582.69 L5.88 586.05" class="st16"/>
				<path d="M5.88 595.57 L5.88 592.2" class="st16"/>
				<path d="M1.6 586.57 L5.88 592.2 L5.88 595.57" class="st16"/>
			</g>
			<g id="shape374-1009" v:mID="374" v:groupContext="shape" v:layerMember="0" transform="translate(5.5412,-2.07819)">
				<title>Sheet.374</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape375-1011" v:mID="375" v:groupContext="shape" v:layerMember="0" transform="translate(-1.34646,1.25038)">
				<title>Sheet.375</title>
			</g>
		</g>
		<g id="shape376-1013" v:mID="376" v:groupContext="shape" v:layerMember="1" transform="translate(201.499,-193.704)">
			<title>Dynamic connector.132</title>
			<path d="M0 588.49 L0 599.12 L21.29 599.12 L21.29 588.49" class="st1"/>
		</g>
		<g id="shape377-1016" v:mID="377" v:groupContext="shape" transform="translate(797.071,381.882) rotate(90) scale(-1,1)">
			<title>Sheet.377</title>
			<path d="M0 595.57 L0.64 595.57" class="st8"/>
		</g>
		<g id="shape378-1021" v:mID="378" v:groupContext="shape" transform="translate(818.365,381.882) rotate(90) scale(-1,1)">
			<title>Sheet.378</title>
			<path d="M0 595.57 L6.92 595.57" class="st8"/>
		</g>
		<g id="shape379-1026" v:mID="379" v:groupContext="shape" transform="translate(807.718,417.618) rotate(90) scale(-1,1)">
			<title>Sheet.379</title>
			<path d="M0 595.57 L11.56 595.57" class="st1"/>
		</g>
		<g id="group380-1029" transform="translate(206.588,1130.99) scale(1,-1)" v:mID="380" v:groupContext="group">
			<title>Sheet.380</title>
			<g id="shape381-1030" v:mID="381" v:groupContext="shape" transform="translate(5.64798,0)">
				<title>Sheet.381</title>
				<path d="M0 595.57 L5.67 595.57" class="st23"/>
			</g>
			<g id="shape382-1033" v:mID="382" v:groupContext="shape">
				<title>Sheet.382</title>
				<path d="M0 595.57 L5.65 595.57" class="st23"/>
			</g>
		</g>
		<g id="group383-1036" transform="translate(198.049,1048.82) scale(1,-1)" v:mID="383" v:groupContext="group">
			<title>Sheet.383</title>
			<g id="shape384-1037" v:mID="384" v:groupContext="shape" transform="translate(0,-14.2863)">
				<title>Sheet.384</title>
				<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st22"/>
			</g>
			<g id="shape385-1039" v:mID="385" v:groupContext="shape">
				<title>Sheet.385</title>
				<ellipse cx="14.1961" cy="581.286" rx="14.1961" ry="14.2863" class="st24"/>
			</g>
		</g>
		<g id="shape386-1041" v:mID="386" v:groupContext="shape" transform="translate(807.686,453.515) rotate(90) scale(-1,1)">
			<title>Sheet.386</title>
			<path d="M0 595.57 L13.01 595.57" class="st25"/>
		</g>
		<g id="group387-1044" transform="translate(536.107,-403.455) scale(-1,1)" v:mID="387" v:groupContext="group">
			<title>Sheet.387</title>
			<g id="shape388-1045" v:mID="388" v:groupContext="shape" transform="translate(-581.376,493.562) rotate(-90)">
				<title>Sheet.388</title>
				<path d="M0 595.57 L35.48 595.57" class="st20"/>
			</g>
			<g id="group389-1050" transform="translate(7.80788,0)" v:mID="389" v:groupContext="group">
				<title>Sheet.389</title>
				<g id="shape390-1051" v:mID="390" v:groupContext="shape" transform="translate(0.709807,-23.2811)">
					<title>Sheet.390</title>
					<rect x="0" y="574.587" width="11.3569" height="20.9857" class="st17"/>
				</g>
				<g id="shape391-1053" v:mID="391" v:groupContext="shape" transform="translate(601.961,547.633) rotate(90)">
					<title>Sheet.391</title>
					<path d="M0 595.57 L3.67 595.57" class="st2"/>
				</g>
				<g id="group392-1056" transform="translate(6.39488E-14,-5.54418)" v:mID="392" v:groupContext="group"
						v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close"
								v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033"
								v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false"
								v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Type" v:val="VT0(0):26"/>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
						<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
						<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
					</v:userDefs>
					<title>Make contact.459</title>
					<g id="shape393-1057" v:mID="393" v:groupContext="shape" v:layerMember="0"
							transform="translate(0.964372,-1.81042E-06)">
						<title>Sheet.393</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M5.41 583.72 L5.41 586.82" class="st18"/>
						<path d="M5.41 595.57 L5.41 592.47" class="st18"/>
						<path d="M1.47 587.29 L5.41 592.47 L5.41 595.57" class="st18"/>
					</g>
					<g id="shape394-1062" v:mID="394" v:groupContext="shape" v:layerMember="0"
							transform="translate(5.09655,-1.91142)">
						<title>Sheet.394</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape395-1064" v:mID="395" v:groupContext="shape" v:layerMember="0"
							transform="translate(-1.23842,1.15004)">
						<title>Sheet.395</title>
					</g>
				</g>
				<g id="shape396-1066" v:mID="396" v:groupContext="shape" transform="translate(-589.184,578.163) rotate(-90)">
					<title>Sheet.396</title>
					<path d="M0 595.57 L5.87 595.57" class="st2"/>
				</g>
				<g id="shape397-1069" v:mID="397" v:groupContext="shape" transform="translate(601.961,590.028) rotate(90)">
					<title>Sheet.397</title>
					<path d="M0 595.57 L5.54 595.57" class="st2"/>
				</g>
			</g>
			<g id="shape398-1072" v:mID="398" v:groupContext="shape" transform="translate(0,-75.7782)">
				<title>Sheet.398</title>
				<ellipse cx="14.1961" cy="582.456" rx="14.1961" ry="13.1161" class="st22"/>
			</g>
			<g id="shape399-1074" v:mID="399" v:groupContext="shape" transform="translate(0,-62.6621)">
				<title>Sheet.399</title>
				<ellipse cx="14.1961" cy="582.456" rx="14.1961" ry="13.1161" class="st19"/>
			</g>
			<g id="shape400-1076" v:mID="400" v:groupContext="shape" transform="translate(-581.363,547.863) rotate(-90)">
				<title>Sheet.400</title>
				<path d="M0 595.57 L14.95 595.57" class="st2"/>
			</g>
		</g>
		<g id="shape401-1079" v:mID="401" v:groupContext="shape" transform="translate(126.932,629.437) scale(1,-1)">
			<title>Sheet.401</title>
			<desc>LINE 6,3 KV TO GI CURUG</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="55.677" cy="589.148" width="111.36" height="12.8486"/>
			<rect x="0" y="582.724" width="111.354" height="12.8486" class="st3"/>
			<text x="31.74" y="-591.55" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3 KV TO<v:newlineChar/><tspan
						x="39.28" dy="1.2em" class="st5">GI CURUG</tspan></text>		</g>
		<g id="shape402-1083" v:mID="402" v:groupContext="shape" transform="translate(259.693,629.437) scale(1,-1)">
			<title>Sheet.402</title>
			<desc>LINE 6,3 KV TO GI CIGANEA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="55.677" cy="589.148" width="111.36" height="12.8486"/>
			<rect x="0" y="582.724" width="111.354" height="12.8486" class="st3"/>
			<text x="31.74" y="-591.55" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3 KV TO<v:newlineChar/><tspan
						x="35.51" dy="1.2em" class="st5"> </tspan>GI CIGANEA</text>		</g>
		<g id="shape403-1087" v:mID="403" v:groupContext="shape" transform="translate(359.306,629.437) scale(1,-1)">
			<title>Sheet.403</title>
			<desc>LINE 6,3 KV TO SENTRAL DIESEL</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="55.677" cy="589.148" width="111.36" height="12.8486"/>
			<rect x="0" y="582.724" width="111.354" height="12.8486" class="st3"/>
			<text x="31.74" y="-591.55" transform="scale(1,-1)" class="st4" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3 KV TO<v:newlineChar/><tspan
						x="29.39" dy="1.2em" class="st5">SENTRAL DIESEL</tspan></text>		</g>
		<g id="group404-1091" transform="translate(132.98,-403.068)" v:mID="404" v:groupContext="group">
			<title>Sheet.404</title>
			<g id="group405-1092" transform="translate(0.542477,0)" v:mID="405" v:groupContext="group">
				<title>Sheet.405</title>
				<g id="group406-1093" v:mID="406" v:groupContext="group">
					<title>Sheet.406</title>
					<g id="group407-1094" transform="translate(55.0969,0) scale(-1,1)" v:mID="407" v:groupContext="group">
						<title>Sheet.407</title>
						<g id="shape408-1095" v:mID="408" v:groupContext="shape" transform="translate(0.709807,-25.3582)">
							<title>Sheet.408</title>
							<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st17"/>
						</g>
						<g id="shape409-1097" v:mID="409" v:groupContext="shape" transform="translate(601.961,543.356) rotate(90)">
							<title>Sheet.409</title>
							<path d="M0 595.57 L4 595.57" class="st2"/>
						</g>
						<g id="group410-1100" transform="translate(6.39488E-14,-6.56811)" v:mID="410" v:groupContext="group"
								v:layerMember="0">
							<v:custProps>
								<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1"
										v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
								<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3"
										v:langID="1033" v:val="VT4(Symbol 1)"/>
								<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey=""
										v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
							</v:custProps>
							<v:userDefs>
								<v:ud v:nameU="Type" v:val="VT0(0):26"/>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
								<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
								<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
								<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
								<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
								<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
							</v:userDefs>
							<title>Make contact.459</title>
							<g id="shape411-1101" v:mID="411" v:groupContext="shape" v:layerMember="0"
									transform="translate(0.964372,-1.81042E-06)">
								<title>Sheet.411</title>
								<v:userDefs>
									<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
								</v:userDefs>
								<path d="M5.41 583.72 L5.41 586.82" class="st18"/>
								<path d="M5.41 595.57 L5.41 592.47" class="st18"/>
								<path d="M1.47 587.29 L5.41 592.47 L5.41 595.57" class="st18"/>
							</g>
							<g id="shape412-1106" v:mID="412" v:groupContext="shape" v:layerMember="0"
									transform="translate(5.09655,-1.91142)">
								<title>Sheet.412</title>
								<v:userDefs>
									<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
								</v:userDefs>
							</g>
							<g id="shape413-1108" v:mID="413" v:groupContext="shape" v:layerMember="0"
									transform="translate(-1.23842,1.15004)">
								<title>Sheet.413</title>
							</g>
						</g>
						<g id="shape414-1110" v:mID="414" v:groupContext="shape" transform="translate(-589.184,577.14) rotate(-90)">
							<title>Sheet.414</title>
							<path d="M0 595.57 L6.93 595.57" class="st2"/>
						</g>
						<g id="shape415-1113" v:mID="415" v:groupContext="shape" transform="translate(601.961,589.004) rotate(90)">
							<title>Sheet.415</title>
							<path d="M0 595.57 L6.57 595.57" class="st2"/>
						</g>
					</g>
					<g id="shape416-1116" v:mID="416" v:groupContext="shape"
							transform="translate(644.268,543.606) rotate(90) scale(-1,1)">
						<title>Sheet.416</title>
						<path d="M0 595.57 L87.07 595.57" class="st26"/>
					</g>
					<g id="shape417-1122" v:mID="417" v:groupContext="shape" transform="translate(19.5648,-93.4547) scale(-1,1)">
						<title>Sheet.417</title>
						<path d="M0 595.57 L15.01 595.57" class="st2"/>
					</g>
					<g id="shape418-1125" v:mID="418" v:groupContext="shape" transform="translate(47.4573,-93.4489) scale(-1,1)">
						<title>Sheet.418</title>
						<path d="M0 595.57 L7.37 595.57" class="st2"/>
					</g>
					<g id="shape419-1128" v:mID="419" v:groupContext="shape"
							transform="translate(-540.476,519.525) rotate(-90) scale(-1,1)">
						<title>Sheet.419</title>
						<ellipse cx="6.42429" cy="589.109" rx="6.42429" ry="6.4636" class="st28"/>
					</g>
					<g id="shape420-1130" v:mID="420" v:groupContext="shape" transform="translate(41.725,-68.7972) scale(-1,1)">
						<title>Sheet.420</title>
						<path d="M0 595.57 L7.85 595.57" class="st2"/>
					</g>
				</g>
				<g id="group421-1133" transform="translate(20.1039,-87.0304)" v:mID="421" v:groupContext="group">
					<title>Sheet.421</title>
					<g id="shape422-1134" v:mID="422" v:groupContext="shape"
							transform="translate(-582.645,582.724) rotate(-90) scale(-1,1)">
						<title>Sheet.422</title>
						<ellipse cx="6.42429" cy="589.109" rx="6.42429" ry="6.4636" class="st29"/>
					</g>
					<g id="shape423-1136" v:mID="423" v:groupContext="shape"
							transform="translate(-576.182,582.724) rotate(-90) scale(-1,1)">
						<title>Sheet.423</title>
						<ellipse cx="6.42429" cy="589.109" rx="6.42429" ry="6.4636" class="st28"/>
					</g>
				</g>
			</g>
			<g id="group424-1138" transform="translate(7.22841,-120.699)" v:mID="424" v:groupContext="group">
				<title>Sheet.424</title>
				<g id="shape425-1139" v:mID="425" v:groupContext="shape" transform="translate(41.725,1186.42) rotate(180)">
					<title>Sheet.425</title>
					<path d="M0 595.57 L10.59 595.57" class="st30"/>
				</g>
				<g id="shape426-1145" v:mID="426" v:groupContext="shape" transform="translate(3.95058,1186.49) scale(1,-1)">
					<title>Sheet.426</title>
					<path d="M0 595.57 L13.25 595.57" class="st30"/>
				</g>
				<g id="group427-1150" transform="translate(595.572,586.257) rotate(90)" v:mID="427" v:groupContext="group">
					<title>Sheet.427</title>
					<g id="shape428-1151" v:mID="428" v:groupContext="shape" transform="translate(4.19664E-14,-3.79939)">
						<title>Sheet.428</title>
						<path d="M0 595.57 L9.32 595.57" class="st32"/>
					</g>
					<g id="shape429-1154" v:mID="429" v:groupContext="shape" transform="translate(1.86312,-1.8997)">
						<title>Sheet.429</title>
						<path d="M0 595.57 L5.59 595.57" class="st32"/>
					</g>
					<g id="shape430-1157" v:mID="430" v:groupContext="shape" transform="translate(3.72624,0)">
						<title>Sheet.430</title>
						<path d="M0 595.57 L1.86 595.57" class="st32"/>
					</g>
				</g>
			</g>
			<g id="group431-1160" transform="translate(4.996E-15,-82.3083)" v:mID="431" v:groupContext="group">
				<title>Sheet.431</title>
				<g id="shape432-1161" v:mID="432" v:groupContext="shape" transform="translate(4.59632E-14,-3.52827)">
					<title>Sheet.432</title>
					<path d="M0 595.57 L10.03 595.57" class="st32"/>
				</g>
				<g id="shape433-1164" v:mID="433" v:groupContext="shape" transform="translate(2.00629,-1.76414)">
					<title>Sheet.433</title>
					<path d="M0 595.57 L6.02 595.57" class="st32"/>
				</g>
				<g id="shape434-1167" v:mID="434" v:groupContext="shape" transform="translate(4.01258,0)">
					<title>Sheet.434</title>
					<path d="M0 595.57 L2.01 595.57" class="st32"/>
				</g>
			</g>
			<g id="shape435-1170" v:mID="435" v:groupContext="shape" transform="translate(600.588,509.222) rotate(90) scale(-1,1)">
				<title>Sheet.435</title>
				<path d="M0 595.57 L7.05 595.57" class="st2"/>
			</g>
		</g>
		<g id="group436-1173" transform="translate(267.07,-403.068)" v:mID="436" v:groupContext="group">
			<title>Sheet.436</title>
			<g id="group437-1174" transform="translate(0.542477,0)" v:mID="437" v:groupContext="group">
				<title>Sheet.437</title>
				<g id="group438-1175" v:mID="438" v:groupContext="group">
					<title>Sheet.438</title>
					<g id="group439-1176" transform="translate(55.0969,0) scale(-1,1)" v:mID="439" v:groupContext="group">
						<title>Sheet.439</title>
						<g id="shape440-1177" v:mID="440" v:groupContext="shape" transform="translate(0.709807,-25.3582)">
							<title>Sheet.440</title>
							<rect x="0" y="572.714" width="11.3569" height="22.8581" class="st17"/>
						</g>
						<g id="shape441-1179" v:mID="441" v:groupContext="shape" transform="translate(601.961,543.356) rotate(90)">
							<title>Sheet.441</title>
							<path d="M0 595.57 L4 595.57" class="st2"/>
						</g>
						<g id="group442-1182" transform="translate(6.39488E-14,-6.56811)" v:mID="442" v:groupContext="group"
								v:layerMember="0">
							<v:custProps>
								<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1"
										v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
								<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3"
										v:langID="1033" v:val="VT4(Symbol 1)"/>
								<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey=""
										v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
							</v:custProps>
							<v:userDefs>
								<v:ud v:nameU="Type" v:val="VT0(0):26"/>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
								<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
								<v:ud v:nameU="visDescription" v:val="VT4(Make contact)"/>
								<v:ud v:nameU="Label" v:prompt="" v:val="VT4()"/>
								<v:ud v:nameU="SolSH" v:prompt="" v:val="VT4({2EE3C7D2-E26E-4B72-9E9C-5170DDBF261A})"/>
								<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
							</v:userDefs>
							<title>Make contact.459</title>
							<g id="shape443-1183" v:mID="443" v:groupContext="shape" v:layerMember="0"
									transform="translate(0.964372,-1.81042E-06)">
								<title>Sheet.443</title>
								<v:userDefs>
									<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
								</v:userDefs>
								<path d="M5.41 583.72 L5.41 586.82" class="st18"/>
								<path d="M5.41 595.57 L5.41 592.47" class="st18"/>
								<path d="M1.47 587.29 L5.41 592.47 L5.41 595.57" class="st18"/>
							</g>
							<g id="shape444-1188" v:mID="444" v:groupContext="shape" v:layerMember="0"
									transform="translate(5.09655,-1.91142)">
								<title>Sheet.444</title>
								<v:userDefs>
									<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
								</v:userDefs>
							</g>
							<g id="shape445-1190" v:mID="445" v:groupContext="shape" v:layerMember="0"
									transform="translate(-1.23842,1.15004)">
								<title>Sheet.445</title>
							</g>
						</g>
						<g id="shape446-1192" v:mID="446" v:groupContext="shape" transform="translate(-589.184,577.14) rotate(-90)">
							<title>Sheet.446</title>
							<path d="M0 595.57 L6.93 595.57" class="st2"/>
						</g>
						<g id="shape447-1195" v:mID="447" v:groupContext="shape" transform="translate(601.961,589.004) rotate(90)">
							<title>Sheet.447</title>
							<path d="M0 595.57 L6.57 595.57" class="st2"/>
						</g>
					</g>
					<g id="shape448-1198" v:mID="448" v:groupContext="shape"
							transform="translate(644.268,543.606) rotate(90) scale(-1,1)">
						<title>Sheet.448</title>
						<path d="M0 595.57 L87.07 595.57" class="st26"/>
					</g>
					<g id="shape449-1203" v:mID="449" v:groupContext="shape" transform="translate(19.5648,-93.4547) scale(-1,1)">
						<title>Sheet.449</title>
						<path d="M0 595.57 L15.01 595.57" class="st2"/>
					</g>
					<g id="shape450-1206" v:mID="450" v:groupContext="shape" transform="translate(47.4573,-93.4489) scale(-1,1)">
						<title>Sheet.450</title>
						<path d="M0 595.57 L7.37 595.57" class="st2"/>
					</g>
					<g id="shape451-1209" v:mID="451" v:groupContext="shape"
							transform="translate(-540.476,519.525) rotate(-90) scale(-1,1)">
						<title>Sheet.451</title>
						<ellipse cx="6.42429" cy="589.109" rx="6.42429" ry="6.4636" class="st28"/>
					</g>
					<g id="shape452-1211" v:mID="452" v:groupContext="shape" transform="translate(41.725,-68.7972) scale(-1,1)">
						<title>Sheet.452</title>
						<path d="M0 595.57 L8.06 595.57" class="st2"/>
					</g>
				</g>
				<g id="group453-1214" transform="translate(20.1039,-87.0304)" v:mID="453" v:groupContext="group">
					<title>Sheet.453</title>
					<g id="shape454-1215" v:mID="454" v:groupContext="shape"
							transform="translate(-582.645,582.724) rotate(-90) scale(-1,1)">
						<title>Sheet.454</title>
						<ellipse cx="6.42429" cy="589.109" rx="6.42429" ry="6.4636" class="st29"/>
					</g>
					<g id="shape455-1217" v:mID="455" v:groupContext="shape"
							transform="translate(-576.182,582.724) rotate(-90) scale(-1,1)">
						<title>Sheet.455</title>
						<ellipse cx="6.42429" cy="589.109" rx="6.42429" ry="6.4636" class="st28"/>
					</g>
				</g>
			</g>
			<g id="group456-1219" transform="translate(7.22841,-120.699)" v:mID="456" v:groupContext="group">
				<title>Sheet.456</title>
				<g id="shape457-1220" v:mID="457" v:groupContext="shape" transform="translate(41.725,1186.42) rotate(180)">
					<title>Sheet.457</title>
					<path d="M0 595.57 L10.59 595.57" class="st30"/>
				</g>
				<g id="shape458-1225" v:mID="458" v:groupContext="shape" transform="translate(3.95058,1186.49) scale(1,-1)">
					<title>Sheet.458</title>
					<path d="M0 595.57 L13.25 595.57" class="st30"/>
				</g>
				<g id="group459-1230" transform="translate(595.572,586.257) rotate(90)" v:mID="459" v:groupContext="group">
					<title>Sheet.459</title>
					<g id="shape460-1231" v:mID="460" v:groupContext="shape" transform="translate(4.19664E-14,-3.79939)">
						<title>Sheet.460</title>
						<path d="M0 595.57 L9.32 595.57" class="st32"/>
					</g>
					<g id="shape461-1234" v:mID="461" v:groupContext="shape" transform="translate(1.86312,-1.8997)">
						<title>Sheet.461</title>
						<path d="M0 595.57 L5.59 595.57" class="st32"/>
					</g>
					<g id="shape462-1237" v:mID="462" v:groupContext="shape" transform="translate(3.72624,0)">
						<title>Sheet.462</title>
						<path d="M0 595.57 L1.86 595.57" class="st32"/>
					</g>
				</g>
			</g>
			<g id="group463-1240" transform="translate(4.996E-15,-82.3083)" v:mID="463" v:groupContext="group">
				<title>Sheet.463</title>
				<g id="shape464-1241" v:mID="464" v:groupContext="shape" transform="translate(4.59632E-14,-3.52827)">
					<title>Sheet.464</title>
					<path d="M0 595.57 L10.03 595.57" class="st32"/>
				</g>
				<g id="shape465-1244" v:mID="465" v:groupContext="shape" transform="translate(2.00629,-1.76414)">
					<title>Sheet.465</title>
					<path d="M0 595.57 L6.02 595.57" class="st32"/>
				</g>
				<g id="shape466-1247" v:mID="466" v:groupContext="shape" transform="translate(4.01258,0)">
					<title>Sheet.466</title>
					<path d="M0 595.57 L2.01 595.57" class="st32"/>
				</g>
			</g>
			<g id="shape467-1250" v:mID="467" v:groupContext="shape" transform="translate(600.588,509.222) rotate(90) scale(-1,1)">
				<title>Sheet.467</title>
				<path d="M0 595.57 L7.05 595.57" class="st2"/>
			</g>
		</g>
		<g id="group468-1253" transform="translate(114.372,-60.4559)" v:mID="468" v:groupContext="group">
			<title>Sheet.468</title>
			<g id="shape469-1254" v:mID="469" v:groupContext="shape" transform="translate(606.103,566.289) rotate(90) scale(-1,1)">
				<title>Sheet.469</title>
				<path d="M0 595.57 L9.79 595.57" class="st33"/>
			</g>
			<g id="shape470-1257" v:mID="470" v:groupContext="shape" transform="translate(606.076,595.572) rotate(90) scale(-1,1)">
				<title>Sheet.470</title>
				<path d="M0 595.57 L7.76 595.57" class="st33"/>
			</g>
			<g id="shape471-1260" v:mID="471" v:groupContext="shape" transform="translate(0,-8.02355)">
				<title>Sheet.471</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="10.6299" cy="584.943" width="21.26" height="21.2598"/>
				<ellipse cx="10.6299" cy="584.943" rx="10.6299" ry="10.6299" class="st34"/>
				<text x="6.21" y="589.14" class="st35" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
		</g>
		<g id="group472-1263" transform="translate(201.615,-60.4559)" v:mID="472" v:groupContext="group">
			<title>Sheet.472</title>
			<g id="shape473-1264" v:mID="473" v:groupContext="shape" transform="translate(606.103,566.289) rotate(90) scale(-1,1)">
				<title>Sheet.473</title>
				<path d="M0 595.57 L9.79 595.57" class="st33"/>
			</g>
			<g id="shape474-1267" v:mID="474" v:groupContext="shape" transform="translate(606.076,595.572) rotate(90) scale(-1,1)">
				<title>Sheet.474</title>
				<path d="M0 595.57 L7.76 595.57" class="st33"/>
			</g>
			<g id="shape475-1270" v:mID="475" v:groupContext="shape" transform="translate(0,-8.02355)">
				<title>Sheet.475</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="10.6299" cy="584.943" width="21.26" height="21.2598"/>
				<ellipse cx="10.6299" cy="584.943" rx="10.6299" ry="10.6299" class="st34"/>
				<text x="6.21" y="589.14" class="st35" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
		</g>
		<g id="group476-1273" transform="translate(288.858,-60.4559)" v:mID="476" v:groupContext="group">
			<title>Sheet.476</title>
			<g id="shape477-1274" v:mID="477" v:groupContext="shape" transform="translate(606.103,566.289) rotate(90) scale(-1,1)">
				<title>Sheet.477</title>
				<path d="M0 595.57 L9.79 595.57" class="st33"/>
			</g>
			<g id="shape478-1277" v:mID="478" v:groupContext="shape" transform="translate(606.076,595.572) rotate(90) scale(-1,1)">
				<title>Sheet.478</title>
				<path d="M0 595.57 L7.76 595.57" class="st33"/>
			</g>
			<g id="shape479-1280" v:mID="479" v:groupContext="shape" transform="translate(0,-8.02355)">
				<title>Sheet.479</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="10.6299" cy="584.943" width="21.26" height="21.2598"/>
				<ellipse cx="10.6299" cy="584.943" rx="10.6299" ry="10.6299" class="st34"/>
				<text x="6.21" y="589.14" class="st35" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
		</g>
		<g id="group480-1283" transform="translate(376.101,-60.4559)" v:mID="480" v:groupContext="group">
			<title>Sheet.480</title>
			<g id="shape481-1284" v:mID="481" v:groupContext="shape" transform="translate(606.103,566.289) rotate(90) scale(-1,1)">
				<title>Sheet.481</title>
				<path d="M0 595.57 L9.79 595.57" class="st33"/>
			</g>
			<g id="shape482-1287" v:mID="482" v:groupContext="shape" transform="translate(606.076,595.572) rotate(90) scale(-1,1)">
				<title>Sheet.482</title>
				<path d="M0 595.57 L7.76 595.57" class="st33"/>
			</g>
			<g id="shape483-1290" v:mID="483" v:groupContext="shape" transform="translate(0,-8.02355)">
				<title>Sheet.483</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="10.6299" cy="584.943" width="21.26" height="21.2598"/>
				<ellipse cx="10.6299" cy="584.943" rx="10.6299" ry="10.6299" class="st34"/>
				<text x="6.21" y="589.14" class="st35" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
		</g>
		<g id="group484-1293" transform="translate(463.344,-60.4559)" v:mID="484" v:groupContext="group">
			<title>Sheet.484</title>
			<g id="shape485-1294" v:mID="485" v:groupContext="shape" transform="translate(606.103,566.289) rotate(90) scale(-1,1)">
				<title>Sheet.485</title>
				<path d="M0 595.57 L9.79 595.57" class="st33"/>
			</g>
			<g id="shape486-1297" v:mID="486" v:groupContext="shape" transform="translate(606.076,595.572) rotate(90) scale(-1,1)">
				<title>Sheet.486</title>
				<path d="M0 595.57 L7.76 595.57" class="st33"/>
			</g>
			<g id="shape487-1300" v:mID="487" v:groupContext="shape" transform="translate(0,-8.02355)">
				<title>Sheet.487</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="10.6299" cy="584.943" width="21.26" height="21.2598"/>
				<ellipse cx="10.6299" cy="584.943" rx="10.6299" ry="10.6299" class="st34"/>
				<text x="6.21" y="589.14" class="st35" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
		</g>
		<g id="group488-1303" transform="translate(550.588,-60.4559)" v:mID="488" v:groupContext="group">
			<title>Sheet.488</title>
			<g id="shape489-1304" v:mID="489" v:groupContext="shape" transform="translate(606.103,566.289) rotate(90) scale(-1,1)">
				<title>Sheet.489</title>
				<path d="M0 595.57 L9.79 595.57" class="st33"/>
			</g>
			<g id="shape490-1307" v:mID="490" v:groupContext="shape" transform="translate(606.076,595.572) rotate(90) scale(-1,1)">
				<title>Sheet.490</title>
				<path d="M0 595.57 L7.76 595.57" class="st33"/>
			</g>
			<g id="shape491-1310" v:mID="491" v:groupContext="shape" transform="translate(0,-8.02355)">
				<title>Sheet.491</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="10.6299" cy="584.943" width="21.26" height="21.2598"/>
				<ellipse cx="10.6299" cy="584.943" rx="10.6299" ry="10.6299" class="st34"/>
				<text x="6.21" y="589.14" class="st35" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
		</g>
        <a href="dashboard_curug.php">
		<g id="shape492-1313" v:mID="492" v:groupContext="shape" transform="translate(110.502,-574.505)">
			<title>Sheet.492</title>
			<desc>GI CURUG</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="64.8752" cy="585.314" width="129.76" height="20.5161"/>
			<rect x="0" y="575.056" width="129.75" height="20.5161" class="st36"/>
			<text x="39.88" y="588.91" class="st37" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>GI <tspan
            class="st5" v:langID="1033">CURUG</tspan></text>		</g></a>
        
        <a href="dashboard_ciganea.php">
		<g id="shape493-1317" v:mID="493" v:groupContext="shape" transform="translate(252.234,-574.556)">
			<title>Sheet.493</title>
			<desc>GI CIGANEA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="64.8752" cy="585.314" width="129.76" height="20.5161"/>
			<rect x="0" y="575.056" width="129.75" height="20.5161" class="st36"/>
			<text x="35.35" y="588.91" class="st37" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>GI <tspan
            class="st5" v:langID="1033">CIGANEA</tspan></text>		</g></a>
		<g id="shape495-1321" v:mID="495" v:groupContext="shape" transform="translate(126.89,1173.4) scale(1,-1)">
			<title>Sheet.495</title>
			<path d="M0 595.57 L439.37 595.57" class="st1"/>
		</g>
		<g id="shape494-1324" v:mID="494" v:groupContext="shape" transform="translate(203.724,-0.5)">
			<title>Sheet.494</title>
			<rect x="0" y="564.339" width="283.465" height="31.2334" class="st38"/>
		</g>
		<g id="shape496-1326" v:mID="496" v:groupContext="shape" transform="translate(-29.0143,549.48) rotate(-90) scale(-1,1)">
			<title>Sheet.496</title>
			<path d="M0 595.57 L28.35 595.57" class="st1"/>
		</g>
		<g id="shape497-1329" v:mID="497" v:groupContext="shape" transform="translate(-469.429,549.48) rotate(-90) scale(-1,1)">
			<title>Sheet.497</title>
			<path d="M0 595.57 L28.35 595.57" class="st1"/>
		</g>
		<g id="shape499-1332" v:mID="499" v:groupContext="shape" transform="translate(215.062,-0.922981)">
			<title>Sheet.499</title>
			<desc>Total Daya =</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197" v:verticalAlign="0"/>
			<v:textRect cx="48.189" cy="581.492" width="96.38" height="28.1611"/>
			<rect x="0" y="567.411" width="96.378" height="28.1611" class="st3"/>
			<text x="1.75" y="584.61" class="st39" v:langID="1033"><v:paragraph v:horizAlign="1"/><v:tabList/>Total Daya =</text>		</g>
		<g id="shape500-1335" v:mID="500" v:groupContext="shape" transform="translate(385.141,-0.5)">
			<title>Sheet.500</title>
			<desc>MW</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197" v:verticalAlign="0"/>
			<v:textRect cx="48.189" cy="581.492" width="96.38" height="28.1611"/>
			<rect x="0" y="567.411" width="96.378" height="28.1611" class="st3"/>
			<text x="32.17" y="584.61" class="st39" v:langID="1033" ><v:paragraph v:horizAlign="1"/><v:tabList/>MW</text>		</g>
		<g id="shape501-1338" v:mID="501" v:groupContext="shape" transform="translate(314.275,-0.922981)">
			<title>Sheet.501</title>
			<desc>8888888</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197" v:verticalAlign="0"/>
			<v:textRect cx="48.189" cy="581.492" width="96.38" height="28.1611"/>
			<rect x="0" y="567.411" width="96.378" height="28.1611" class="st3"/>
			<text x="16.26" y="584.61" class="st39" v:langID="1033" id="Total_DAktif"><v:paragraph v:horizAlign="1"/><v:tabList/>8888888</text>		</g>
	</g>
</svg>
    
    
    
</div> 
    </div>
    
   
    </div>
    </div>

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

  </body>

  
  </html>
