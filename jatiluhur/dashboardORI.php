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
    <div class="col-md-10" style="font-size:1.1em; font-weight:bold;">Single Line Diagram PLTA Ir. H. Juanda</div>
    <a href="dashboard_dataview.php"><div class="col-md-2 panels-blue2">Data View</div></a>  
</div>
</div>          
        
<div class="col-md-12">    
<div class="panels-white2">


<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:ev="http://www.w3.org/2001/xml-events"
		xmlns:v="http://schemas.microsoft.com/visio/2003/SVGExtensions/" width="100%" height="100%"
		viewBox="0 0 1006.81 542.801" xml:space="preserve" color-interpolation-filters="sRGB" class="st53">
	<v:documentProperties v:langID="1033" v:viewMarkup="false">
		<v:userDefs>
			<v:ud v:nameU="msvConvertTheme"/>
		</v:userDefs>
	</v:documentProperties>

	<style type="text/css">
	<![CDATA[
		.st1 {stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st2 {stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st3 {stroke:#00b050;stroke-linecap:butt;stroke-width:0.301168}
		.st4 {fill:none;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st5 {fill:#ffffff;fill-opacity:0;stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st6 {fill:none;stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st7 {stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st8 {fill:#ffffff;fill-opacity:0;stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st9 {fill:none;stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st10 {stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st11 {stroke:#ffff00;stroke-linecap:butt;stroke-width:0.301168}
		.st12 {stroke:#c00000;stroke-linecap:butt;stroke-width:0.327443}
		.st13 {marker-start:url(#mrkr5-300);stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st14 {fill:#923931;fill-opacity:1;stroke:#923931;stroke-opacity:1;stroke-width:0.45454545454545}
		.st15 {fill:#000000;font-family:Calibri;font-size:0.833336em}
		.st16 {fill:#ffffff;fill-opacity:0;stroke:#7030a0;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st17 {marker-end:url(#mrkr5-491);stroke:#7030a0;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st18 {fill:#7030a0;fill-opacity:1;stroke:#7030a0;stroke-opacity:1;stroke-width:0.45454545454545}
		.st19 {marker-start:url(#mrkr5-518);stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st20 {fill:#ffff00;fill-opacity:1;stroke:#ffff00;stroke-opacity:1;stroke-width:0.45454545454545}
		.st21 {stroke:#ffff00;stroke-linecap:butt;stroke-width:0.210818}
		.st22 {stroke:#ff0000;stroke-dasharray:1.5,3;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st23 {fill:#ffff00;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st24 {fill:#000000;font-family:Calibri;font-size:1.00001em;font-weight:bold}
		.st25 {fill:none;stroke:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st26 {fill:#000000;font-family:Calibri;font-size:0.666664em}
		.st27 {fill:#000000;font-family:Calibri;font-size:0.499992em}
		.st28 {font-size:1em}
		.st29 {fill:none;stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st30 {stroke:#ff0000;stroke-linecap:butt;stroke-width:0.301168}
		.st31 {marker-end:url(#mrkr10-1155);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st32 {fill:#ff0000;fill-opacity:1;stroke:#ff0000;stroke-opacity:1;stroke-width:0.29411764705882}
		.st33 {marker-end:url(#mrkr10-1161);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st34 {marker-end:url(#mrkr5-1167);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st35 {fill:#ff0000;fill-opacity:1;stroke:#ff0000;stroke-opacity:1;stroke-width:0.45454545454545}
		.st36 {fill:none;stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st37 {marker-end:url(#mrkr13-1176);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.5}
		.st38 {fill:#ff0000;fill-opacity:1;stroke:#ff0000;stroke-opacity:1;stroke-width:0.21739130434783}
		.st39 {stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.5}
		.st40 {stroke:#ff0000;stroke-linecap:butt;stroke-width:0.327443}
		.st41 {fill:#ffffff;fill-opacity:0;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st42 {marker-start:url(#mrkr1-1599);stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st43 {stroke:#17355d;stroke-dasharray:1.5,3;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st44 {stroke:#923931;stroke-dasharray:1.5,3;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st45 {fill:#ffffff;fill-opacity:0;stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st46 {stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st47 {marker-start:url(#mrkr5-1969);stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st48 {fill:#00b050;fill-opacity:1;stroke:#00b050;stroke-opacity:1;stroke-width:0.45454545454545}
		.st49 {fill:#ffffff;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st50 {stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st51 {fill:none;stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st52 {fill:#ffff00;font-family:Calibri;font-size:0.75em}
		.st53 {fill:none;fill-rule:evenodd;font-size:12px;overflow:visible;stroke-linecap:square;stroke-miterlimit:3}
	]]>
	</style>

	<defs id="Markers">
		<g id="lend5">
			<path d="M 2 1 L 0 0 L 1.98117 -0.993387 C 1.67173 -0.364515 1.67301 0.372641 1.98465 1.00043 " style="stroke:none"/>
		</g>
		<marker id="mrkr5-300" class="st14" v:arrowType="5" v:arrowSize="1" v:setback="3.61" refX="3.61" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(2.2) "/>
		</marker>
		<marker id="mrkr5-491" class="st18" v:arrowType="5" v:arrowSize="1" v:setback="3.85" refX="-3.85" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(-2.2,-2.2) "/>
		</marker>
		<marker id="mrkr5-518" class="st20" v:arrowType="5" v:arrowSize="1" v:setback="3.61" refX="3.61" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(2.2) "/>
		</marker>
		<g id="lend10">
			<path
					d="M 0 0.75 C -0.414214 0.75 -0.75 0.414214 -0.75 0 -0.75 -0.414214 -0.414214 -0.75 0 -0.75 0.414214 -0.75 0.75 -0.414214 0.75 0 0.75 0.414214 0.414214 0.75 0 0.75 Z "
					style="stroke:none"/>
		</g>
		<marker id="mrkr10-1155" class="st32" v:arrowType="10" v:arrowSize="1" v:setback="0" refX="-0" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend10" transform="scale(-3.4,-3.4) "/>
		</marker>
		<marker id="mrkr10-1161" class="st32" v:arrowType="10" v:arrowSize="1" v:setback="2.55" refX="-2.55" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend10" transform="scale(-3.4,-3.4) "/>
		</marker>
		<marker id="mrkr5-1167" class="st35" v:arrowType="5" v:arrowSize="1" v:setback="3.85" refX="-3.85" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(-2.2,-2.2) "/>
		</marker>
		<g id="lend13">
			<path d="M 3 1 L 0 0 L 3 -1 L 3 1 " style="stroke:none"/>
		</g>
		<marker id="mrkr13-1176" class="st38" v:arrowType="13" v:arrowSize="1" v:setback="13.8" refX="-13.8" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend13" transform="scale(-4.6,-4.6) "/>
		</marker>
		<g id="lend1">
			<path d="M 1 -1 L 0 0 L 1 1 " style="stroke-linecap:round;stroke-linejoin:round;fill:none"/>
		</g>
		<marker id="mrkr1-1599" class="st20" v:arrowType="1" v:arrowSize="1" orient="auto" markerUnits="strokeWidth"
				overflow="visible">
			<use xlink:href="#lend1" transform="scale(2.2) "/>
		</marker>
		<marker id="mrkr5-1969" class="st48" v:arrowType="5" v:arrowSize="1" v:setback="3.61" refX="3.61" orient="auto"
				markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(2.2) "/>
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
		<g id="shape1-1" v:mID="1" v:groupContext="shape" transform="translate(195.88,-405.234)">
			<title>Sheet.1</title>
			<path d="M0 542.8 L624.51 542.8" class="st1"/>
		</g>
		<g id="shape2-4" v:mID="2" v:groupContext="shape" transform="translate(184.095,-411.068) rotate(0.172655)">
			<title>Sheet.2</title>
			<path d="M0 542.8 L637.93 542.8" class="st1"/>
		</g>
		<g id="shape3-7" v:mID="3" v:groupContext="shape" transform="translate(140.298,-293.333)">
			<title>Sheet.3</title>
			<path d="M0 542.8 L756.63 542.8" class="st2"/>
		</g>
		<g id="group6-10" transform="translate(759.268,-278.977) scale(-1,1)" v:mID="6" v:groupContext="group" v:layerMember="0">
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.6</title>
			<g id="shape7-11" v:mID="7" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.7</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st3"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st3"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st3"/>
			</g>
			<g id="shape8-16" v:mID="8" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.8</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape9-18" v:mID="9" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.9</title>
			</g>
		</g>
		<g id="shape10-20" v:mID="10" v:groupContext="shape" transform="translate(752.157,-257.841)">
			<title>Sheet.10</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
		</g>
		<g id="shape11-22" v:mID="11" v:groupContext="shape" transform="translate(212.702,270.728) rotate(-90)">
			<title>Sheet.11</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="shape12-25" v:mID="12" v:groupContext="shape" transform="translate(747.137,-235.603)">
			<title>Sheet.12</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st4"/>
		</g>
		<g id="shape13-27" v:mID="13" v:groupContext="shape" transform="translate(747.137,-226.708)">
			<title>Sheet.13</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st5"/>
		</g>
		<g id="shape14-29" v:mID="14" v:groupContext="shape" transform="translate(1298.3,284.961) rotate(90)">
			<title>Sheet.14</title>
			<path d="M0 542.8 L4.45 542.8" class="st2"/>
		</g>
		<g id="shape15-32" v:mID="15" v:groupContext="shape" transform="translate(752.157,-203.402)">
			<title>Sheet.15</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape16-34" v:mID="16" v:groupContext="shape" transform="translate(212.797,325.167) rotate(-90)">
			<title>Sheet.16</title>
			<path d="M0 542.8 L9.05 542.8" class="st7"/>
		</g>
		<g id="shape17-37" v:mID="17" v:groupContext="shape" transform="translate(1298.4,339.399) rotate(90)">
			<title>Sheet.17</title>
			<path d="M0 542.8 L21.35 542.8" class="st7"/>
		</g>
		<g id="shape18-40" v:mID="18" v:groupContext="shape" transform="translate(212.702,256.461) rotate(-90)">
			<title>Sheet.18</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="group21-43" transform="translate(899.813,-278.977) scale(-1,1)" v:mID="21" v:groupContext="group" v:layerMember="0">
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.21</title>
			<g id="shape22-44" v:mID="22" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.22</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st3"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st3"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st3"/>
			</g>
			<g id="shape23-49" v:mID="23" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.23</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape24-51" v:mID="24" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.24</title>
			</g>
		</g>
		<g id="shape25-53" v:mID="25" v:groupContext="shape" transform="translate(892.702,-257.841)">
			<title>Sheet.25</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
		</g>
		<g id="shape26-55" v:mID="26" v:groupContext="shape" transform="translate(353.247,270.728) rotate(-90)">
			<title>Sheet.26</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="shape27-58" v:mID="27" v:groupContext="shape" transform="translate(887.682,-235.603)">
			<title>Sheet.27</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st4"/>
		</g>
		<g id="shape28-60" v:mID="28" v:groupContext="shape" transform="translate(887.682,-226.708)">
			<title>Sheet.28</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st5"/>
		</g>
		<g id="shape29-62" v:mID="29" v:groupContext="shape" transform="translate(1438.85,284.961) rotate(90)">
			<title>Sheet.29</title>
			<path d="M0 542.8 L4.45 542.8" class="st2"/>
		</g>
		<g id="shape30-65" v:mID="30" v:groupContext="shape" transform="translate(892.702,-203.402)">
			<title>Sheet.30</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape31-67" v:mID="31" v:groupContext="shape" transform="translate(353.342,325.167) rotate(-90)">
			<title>Sheet.31</title>
			<path d="M0 542.8 L9.05 542.8" class="st7"/>
		</g>
		<g id="shape32-70" v:mID="32" v:groupContext="shape" transform="translate(1438.85,339.399) rotate(90)">
			<title>Sheet.32</title>
			<path d="M0 542.8 L21.35 542.8" class="st7"/>
		</g>
		<g id="shape33-73" v:mID="33" v:groupContext="shape" transform="translate(353.247,256.461) rotate(-90)">
			<title>Sheet.33</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="group36-76" transform="translate(260.29,-278.977) scale(-1,1)" v:mID="36" v:groupContext="group" v:layerMember="0">
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.36</title>
			<g id="shape37-77" v:mID="37" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.37</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st3"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st3"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st3"/>
			</g>
			<g id="shape38-82" v:mID="38" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.38</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape39-84" v:mID="39" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.39</title>
			</g>
		</g>
		<g id="shape40-86" v:mID="40" v:groupContext="shape" transform="translate(253.179,-257.841)">
			<title>Sheet.40</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
		</g>
		<g id="shape41-88" v:mID="41" v:groupContext="shape" transform="translate(-286.276,270.728) rotate(-90)">
			<title>Sheet.41</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="shape42-91" v:mID="42" v:groupContext="shape" transform="translate(248.16,-235.603)">
			<title>Sheet.42</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st4"/>
		</g>
		<g id="shape43-93" v:mID="43" v:groupContext="shape" transform="translate(248.16,-226.708)">
			<title>Sheet.43</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st5"/>
		</g>
		<g id="shape44-95" v:mID="44" v:groupContext="shape" transform="translate(799.327,284.961) rotate(90)">
			<title>Sheet.44</title>
			<path d="M0 542.8 L4.45 542.8" class="st2"/>
		</g>
		<g id="shape45-98" v:mID="45" v:groupContext="shape" transform="translate(253.179,-203.402)">
			<title>Sheet.45</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape46-100" v:mID="46" v:groupContext="shape" transform="translate(-286.18,325.167) rotate(-90)">
			<title>Sheet.46</title>
			<path d="M0 542.8 L9.05 542.8" class="st7"/>
		</g>
		<g id="shape47-103" v:mID="47" v:groupContext="shape" transform="translate(799.423,339.399) rotate(90)">
			<title>Sheet.47</title>
			<path d="M0 542.8 L21.35 542.8" class="st7"/>
		</g>
		<g id="shape48-106" v:mID="48" v:groupContext="shape" transform="translate(-286.276,256.461) rotate(-90)">
			<title>Sheet.48</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="group51-109" transform="translate(317.617,-278.977) scale(-1,1)" v:mID="51" v:groupContext="group" v:layerMember="0">
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.51</title>
			<g id="shape52-110" v:mID="52" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.52</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st3"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st3"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st3"/>
			</g>
			<g id="shape53-115" v:mID="53" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.53</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape54-117" v:mID="54" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.54</title>
			</g>
		</g>
		<g id="shape55-119" v:mID="55" v:groupContext="shape" transform="translate(310.506,-257.841)">
			<title>Sheet.55</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
		</g>
		<g id="shape56-121" v:mID="56" v:groupContext="shape" transform="translate(-228.949,270.728) rotate(-90)">
			<title>Sheet.56</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="shape57-124" v:mID="57" v:groupContext="shape" transform="translate(305.487,-235.603)">
			<title>Sheet.57</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st4"/>
		</g>
		<g id="shape58-126" v:mID="58" v:groupContext="shape" transform="translate(305.487,-226.708)">
			<title>Sheet.58</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st5"/>
		</g>
		<g id="shape59-128" v:mID="59" v:groupContext="shape" transform="translate(856.654,284.961) rotate(90)">
			<title>Sheet.59</title>
			<path d="M0 542.8 L4.45 542.8" class="st2"/>
		</g>
		<g id="shape60-131" v:mID="60" v:groupContext="shape" transform="translate(310.506,-203.402)">
			<title>Sheet.60</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape61-133" v:mID="61" v:groupContext="shape" transform="translate(-228.853,325.167) rotate(-90)">
			<title>Sheet.61</title>
			<path d="M0 542.8 L9.05 542.8" class="st7"/>
		</g>
		<g id="shape62-136" v:mID="62" v:groupContext="shape" transform="translate(856.749,339.399) rotate(90)">
			<title>Sheet.62</title>
			<path d="M0 542.8 L21.35 542.8" class="st7"/>
		</g>
		<g id="shape63-139" v:mID="63" v:groupContext="shape" transform="translate(-228.949,256.461) rotate(-90)">
			<title>Sheet.63</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="group65-142" transform="translate(187.011,-278.977) scale(-1,1)" v:mID="65" v:groupContext="group" v:layerMember="0">
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.65</title>
			<g id="shape66-143" v:mID="66" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.66</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st3"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st3"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st3"/>
			</g>
			<g id="shape67-148" v:mID="67" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.67</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape68-150" v:mID="68" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.68</title>
			</g>
		</g>
		<g id="shape69-152" v:mID="69" v:groupContext="shape" transform="translate(179.9,-257.841)">
			<title>Sheet.69</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
		</g>
		<g id="shape70-154" v:mID="70" v:groupContext="shape" transform="translate(-359.555,270.728) rotate(-90)">
			<title>Sheet.70</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="shape71-157" v:mID="71" v:groupContext="shape" transform="translate(174.88,-235.603)">
			<title>Sheet.71</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st4"/>
		</g>
		<g id="shape72-159" v:mID="72" v:groupContext="shape" transform="translate(174.88,-226.708)">
			<title>Sheet.72</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st8"/>
		</g>
		<g id="shape73-161" v:mID="73" v:groupContext="shape" transform="translate(726.047,284.961) rotate(90)">
			<title>Sheet.73</title>
			<path d="M0 542.8 L4.45 542.8" class="st2"/>
		</g>
		<g id="shape74-164" v:mID="74" v:groupContext="shape" transform="translate(179.9,-203.402)">
			<title>Sheet.74</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st9"/>
		</g>
		<g id="shape75-166" v:mID="75" v:groupContext="shape" transform="translate(-359.46,325.167) rotate(-90)">
			<title>Sheet.75</title>
			<path d="M0 542.8 L9.05 542.8" class="st10"/>
		</g>
		<g id="shape76-169" v:mID="76" v:groupContext="shape" transform="translate(726.143,339.399) rotate(90)">
			<title>Sheet.76</title>
			<path d="M0 542.8 L21.35 542.8" class="st10"/>
		</g>
		<g id="shape77-172" v:mID="77" v:groupContext="shape" transform="translate(-359.555,256.461) rotate(-90)">
			<title>Sheet.77</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="group79-175" transform="translate(143.987,-278.977) scale(-1,1)" v:mID="79" v:groupContext="group" v:layerMember="0">
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.79</title>
			<g id="shape80-176" v:mID="80" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.80</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st3"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st3"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st3"/>
			</g>
			<g id="shape81-181" v:mID="81" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.81</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape82-183" v:mID="82" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.82</title>
			</g>
		</g>
		<g id="shape83-185" v:mID="83" v:groupContext="shape" transform="translate(136.876,-257.841)">
			<title>Sheet.83</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
		</g>
		<g id="shape84-187" v:mID="84" v:groupContext="shape" transform="translate(-402.579,270.728) rotate(-90)">
			<title>Sheet.84</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="shape85-190" v:mID="85" v:groupContext="shape" transform="translate(131.856,-235.603)">
			<title>Sheet.85</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st4"/>
		</g>
		<g id="shape86-192" v:mID="86" v:groupContext="shape" transform="translate(131.856,-226.708)">
			<title>Sheet.86</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st8"/>
		</g>
		<g id="shape87-194" v:mID="87" v:groupContext="shape" transform="translate(683.023,284.961) rotate(90)">
			<title>Sheet.87</title>
			<path d="M0 542.8 L4.45 542.8" class="st2"/>
		</g>
		<g id="shape88-197" v:mID="88" v:groupContext="shape" transform="translate(136.876,-203.402)">
			<title>Sheet.88</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st9"/>
		</g>
		<g id="shape89-199" v:mID="89" v:groupContext="shape" transform="translate(-402.484,325.167) rotate(-90)">
			<title>Sheet.89</title>
			<path d="M0 542.8 L9.05 542.8" class="st10"/>
		</g>
		<g id="shape90-202" v:mID="90" v:groupContext="shape" transform="translate(683.119,339.399) rotate(90)">
			<title>Sheet.90</title>
			<path d="M0 542.8 L21.35 542.8" class="st10"/>
		</g>
		<g id="shape91-205" v:mID="91" v:groupContext="shape" transform="translate(-402.579,256.461) rotate(-90)">
			<title>Sheet.91</title>
			<path d="M0 542.8 L6.9 542.8" class="st2"/>
		</g>
		<g id="shape92-208" v:mID="92" v:groupContext="shape" transform="translate(24.1767,-182.054)">
			<title>Sheet.92</title>
			<path d="M0 542.8 L115.85 542.8" class="st10"/>
		</g>
		<g id="group94-211" transform="translate(27.8218,-261.364) scale(-1,1)" v:mID="94" v:groupContext="group" v:layerMember="0">
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)22)"/>
			</v:userDefs>
			<title>Make contact.94</title>
			<g id="shape95-212" v:mID="95" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.95</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st11"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st11"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st11"/>
			</g>
			<g id="shape96-217" v:mID="96" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.96</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape97-219" v:mID="97" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.97</title>
			</g>
		</g>
		<g id="shape98-221" v:mID="98" v:groupContext="shape" transform="translate(-518.744,289.408) rotate(-90)">
			<title>Sheet.98</title>
			<path d="M0 542.8 L7.97 542.8" class="st7"/>
		</g>
		<g id="shape99-224" v:mID="99" v:groupContext="shape" transform="translate(15.6914,-235.603)">
			<title>Sheet.99</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape100-226" v:mID="100" v:groupContext="shape" transform="translate(15.6914,-226.708)">
			<title>Sheet.100</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st8"/>
		</g>
		<g id="shape101-228" v:mID="101" v:groupContext="shape" transform="translate(20.7109,-203.402)">
			<title>Sheet.101</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st9"/>
		</g>
		<g id="shape102-230" v:mID="102" v:groupContext="shape" transform="translate(-518.649,325.167) rotate(-90)">
			<title>Sheet.102</title>
			<path d="M0 542.8 L9.05 542.8" class="st10"/>
		</g>
		<g id="shape103-233" v:mID="103" v:groupContext="shape" transform="translate(566.954,339.399) rotate(90)">
			<title>Sheet.103</title>
			<path d="M0 542.8 L21.35 542.8" class="st10"/>
		</g>
		<g id="group105-236" transform="translate(78.0164,-261.364) scale(-1,1)" v:mID="105" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)22)"/>
			</v:userDefs>
			<title>Make contact.741</title>
			<g id="shape106-237" v:mID="106" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.106</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st11"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st11"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st11"/>
			</g>
			<g id="shape107-242" v:mID="107" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.107</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape108-244" v:mID="108" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.108</title>
			</g>
		</g>
		<g id="shape109-246" v:mID="109" v:groupContext="shape" transform="translate(-468.55,289.408) rotate(-90)">
			<title>Sheet.109</title>
			<path d="M0 542.8 L7.97 542.8" class="st7"/>
		</g>
		<g id="shape110-249" v:mID="110" v:groupContext="shape" transform="translate(65.8861,-235.603)">
			<title>Sheet.110</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape111-251" v:mID="111" v:groupContext="shape" transform="translate(65.8861,-226.708)">
			<title>Sheet.111</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st8"/>
		</g>
		<g id="shape112-253" v:mID="112" v:groupContext="shape" transform="translate(70.9055,-203.402)">
			<title>Sheet.112</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st9"/>
		</g>
		<g id="shape113-255" v:mID="113" v:groupContext="shape" transform="translate(-468.454,325.167) rotate(-90)">
			<title>Sheet.113</title>
			<path d="M0 542.8 L9.05 542.8" class="st10"/>
		</g>
		<g id="shape114-258" v:mID="114" v:groupContext="shape" transform="translate(617.149,339.399) rotate(90)">
			<title>Sheet.114</title>
			<path d="M0 542.8 L21.35 542.8" class="st10"/>
		</g>
		<g id="group115-261" transform="translate(690.463,356.635) rotate(90)" v:mID="115" v:groupContext="group" v:layerMember="0">
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)23)"/>
			</v:userDefs>
			<title>Make contact.121</title>
			<g id="shape116-262" v:mID="116" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.116</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st12"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st12"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st12"/>
			</g>
			<g id="shape117-267" v:mID="117" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.117</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape118-269" v:mID="118" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.118</title>
			</g>
		</g>
		<g id="shape119-271" v:mID="119" v:groupContext="shape" transform="translate(705.013,360.748) rotate(90)">
			<title>Sheet.119</title>
			<path d="M0 542.8 L25.8 542.8" class="st10"/>
		</g>
		<g id="shape120-274" v:mID="120" v:groupContext="shape" transform="translate(125.403,-159.816)">
			<title>Sheet.120</title>
			<path d="M0 542.8 L73.62 542.8" class="st10"/>
		</g>
		<g id="shape121-277" v:mID="121" v:groupContext="shape" transform="translate(122.056,-129.572)">
			<title>Sheet.121</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st9"/>
		</g>
		<g id="shape122-279" v:mID="122" v:groupContext="shape" transform="translate(158.866,-129.572)">
			<title>Sheet.122</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st9"/>
		</g>
		<g id="shape123-281" v:mID="123" v:groupContext="shape" transform="translate(195.675,-129.572)">
			<title>Sheet.123</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st9"/>
		</g>
		<g id="shape124-283" v:mID="124" v:groupContext="shape" transform="translate(-417.399,398.997) rotate(-90)">
			<title>Sheet.124</title>
			<path d="M0 542.8 L16.01 542.8" class="st10"/>
		</g>
		<g id="shape125-286" v:mID="125" v:groupContext="shape" transform="translate(-380.589,398.997) rotate(-90)">
			<title>Sheet.125</title>
			<path d="M0 542.8 L16.01 542.8" class="st10"/>
		</g>
		<g id="shape126-289" v:mID="126" v:groupContext="shape" transform="translate(-343.78,398.997) rotate(-90)">
			<title>Sheet.126</title>
			<path d="M0 542.8 L16.01 542.8" class="st10"/>
		</g>
		<g id="shape127-292" v:mID="127" v:groupContext="shape" transform="translate(223.472,-182.117)">
			<title>Sheet.127</title>
			<path d="M0 542.8 L150.24 542.8" class="st7"/>
		</g>
		<g id="shape128-295" v:mID="128" v:groupContext="shape" transform="translate(-417.399,429.24) rotate(-90)">
			<title>Sheet.128</title>
			<path d="M5.41 542.8 L5.77 542.8 L16.01 542.8" class="st13"/>
		</g>
		<g id="shape129-301" v:mID="129" v:groupContext="shape" transform="translate(-380.589,429.24) rotate(-90)">
			<title>Sheet.129</title>
			<path d="M5.41 542.8 L5.77 542.8 L16.01 542.8" class="st13"/>
		</g>
		<g id="shape130-306" v:mID="130" v:groupContext="shape" transform="translate(-343.78,429.24) rotate(-90)">
			<title>Sheet.130</title>
			<path d="M5.41 542.8 L5.77 542.8 L16.01 542.8" class="st13"/>
		</g>
		<g id="shape131-311" v:mID="131" v:groupContext="shape" transform="translate(829.122,-182.054)">
			<title>Sheet.131</title>
			<path d="M0 542.8 L98.57 542.8" class="st7"/>
		</g>
		<g id="shape132-314" v:mID="132" v:groupContext="shape" transform="translate(822.365,-179.233)">
			<title>Sheet.132</title>
			<rect x="0" y="536.352" width="6.82174" height="6.44964" class="st6"/>
		</g>
		<g id="shape133-316" v:mID="133" v:groupContext="shape" transform="translate(692.262,-182.054)">
			<title>Sheet.133</title>
			<path d="M0 542.8 L130.17 542.8" class="st7"/>
		</g>
		<g id="group134-319" transform="translate(710.541,356.635) rotate(90)" v:mID="134" v:groupContext="group" v:layerMember="0">
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)33)"/>
			</v:userDefs>
			<title>Make contact.1058</title>
			<g id="shape135-320" v:mID="135" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.135</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st12"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st12"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st12"/>
			</g>
			<g id="shape136-325" v:mID="136" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.136</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape137-327" v:mID="137" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.137</title>
			</g>
		</g>
		<g id="shape138-329" v:mID="138" v:groupContext="shape" transform="translate(147.662,903.53) rotate(180)">
			<title>Sheet.138</title>
			<path d="M0 542.8 L7.2 542.8" class="st10"/>
		</g>
		<g id="shape139-332" v:mID="139" v:groupContext="shape" transform="translate(175.926,-182.073)">
			<title>Sheet.139</title>
			<path d="M0 542.8 L7.2 542.8" class="st10"/>
		</g>
		<g id="shape140-335" v:mID="140" v:groupContext="shape" transform="translate(155.848,-182.073)">
			<title>Sheet.140</title>
			<path d="M0 542.8 L11.89 542.8" class="st10"/>
		</g>
		<g id="group142-338" transform="translate(226.827,-160.137) scale(-1,1)" v:mID="142" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
			</v:userDefs>
			<title>Make contact.142</title>
			<g id="shape143-339" v:mID="143" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.143</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st11"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st11"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st11"/>
			</g>
			<g id="shape144-344" v:mID="144" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.144</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape145-346" v:mID="145" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.145</title>
			</g>
		</g>
		<g id="shape146-348" v:mID="146" v:groupContext="shape" transform="translate(219.786,-129.572)">
			<title>Sheet.146</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape147-350" v:mID="147" v:groupContext="shape" transform="translate(765.864,413.051) rotate(90)">
			<title>Sheet.147</title>
			<path d="M0 542.8 L16.01 542.8" class="st7"/>
		</g>
		<g id="shape148-353" v:mID="148" v:groupContext="shape" transform="translate(223.062,-163.596)">
			<title>Sheet.148</title>
			<path d="M0 542.8 L0 540.19 L0 524.34" class="st7"/>
		</g>
		<g id="shape149-356" v:mID="149" v:groupContext="shape" transform="translate(765.864,382.664) rotate(90)">
			<title>Sheet.149</title>
			<path d="M0 542.8 L16.33 542.8" class="st7"/>
		</g>
		<g id="shape150-359" v:mID="150" v:groupContext="shape" transform="translate(214.767,-95.7706)">
			<title>Sheet.150</title>
			<desc>M</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="8.36578" cy="533.906" width="16.74" height="17.7904"/>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
			<text x="4.09" y="536.91" class="st15" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>		</g>
		<g id="group152-362" transform="translate(246.834,-160.137) scale(-1,1)" v:mID="152" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
			</v:userDefs>
			<title>Make contact.152</title>
			<g id="shape153-363" v:mID="153" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.153</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st11"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st11"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st11"/>
			</g>
			<g id="shape154-368" v:mID="154" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.154</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape155-370" v:mID="155" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.155</title>
			</g>
		</g>
		<g id="shape156-372" v:mID="156" v:groupContext="shape" transform="translate(239.794,-129.572)">
			<title>Sheet.156</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape157-374" v:mID="157" v:groupContext="shape" transform="translate(785.871,413.051) rotate(90)">
			<title>Sheet.157</title>
			<path d="M0 542.8 L16.01 542.8" class="st7"/>
		</g>
		<g id="shape158-377" v:mID="158" v:groupContext="shape" transform="translate(243.07,-163.596)">
			<title>Sheet.158</title>
			<path d="M0 542.8 L0 540.19 L0 524.34" class="st7"/>
		</g>
		<g id="shape159-380" v:mID="159" v:groupContext="shape" transform="translate(785.871,382.664) rotate(90)">
			<title>Sheet.159</title>
			<path d="M0 542.8 L16.33 542.8" class="st7"/>
		</g>
		<g id="shape160-383" v:mID="160" v:groupContext="shape" transform="translate(234.774,-95.7706)">
			<title>Sheet.160</title>
			<desc>M</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="8.36578" cy="533.906" width="16.74" height="17.7904"/>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
			<text x="4.09" y="536.91" class="st15" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>		</g>
		<g id="group162-386" transform="translate(266.841,-160.137) scale(-1,1)" v:mID="162" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
			</v:userDefs>
			<title>Make contact.162</title>
			<g id="shape163-387" v:mID="163" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.163</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st11"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st11"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st11"/>
			</g>
			<g id="shape164-392" v:mID="164" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.164</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape165-394" v:mID="165" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.165</title>
			</g>
		</g>
		<g id="shape166-396" v:mID="166" v:groupContext="shape" transform="translate(259.801,-129.572)">
			<title>Sheet.166</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape167-398" v:mID="167" v:groupContext="shape" transform="translate(805.878,413.051) rotate(90)">
			<title>Sheet.167</title>
			<path d="M0 542.8 L16.01 542.8" class="st7"/>
		</g>
		<g id="shape168-401" v:mID="168" v:groupContext="shape" transform="translate(263.077,-163.596)">
			<title>Sheet.168</title>
			<path d="M0 542.8 L0 540.19 L0 524.34" class="st7"/>
		</g>
		<g id="shape169-404" v:mID="169" v:groupContext="shape" transform="translate(805.878,382.664) rotate(90)">
			<title>Sheet.169</title>
			<path d="M0 542.8 L16.33 542.8" class="st7"/>
		</g>
		<g id="shape170-407" v:mID="170" v:groupContext="shape" transform="translate(254.781,-95.7706)">
			<title>Sheet.170</title>
			<desc>M</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="8.36578" cy="533.906" width="16.74" height="17.7904"/>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
			<text x="4.09" y="536.91" class="st15" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>		</g>
		<g id="group172-410" transform="translate(286.848,-160.137) scale(-1,1)" v:mID="172" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
			</v:userDefs>
			<title>Make contact.172</title>
			<g id="shape173-411" v:mID="173" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.173</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st11"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st11"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st11"/>
			</g>
			<g id="shape174-416" v:mID="174" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.174</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape175-418" v:mID="175" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.175</title>
			</g>
		</g>
		<g id="shape176-420" v:mID="176" v:groupContext="shape" transform="translate(279.808,-129.572)">
			<title>Sheet.176</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape177-422" v:mID="177" v:groupContext="shape" transform="translate(825.885,413.051) rotate(90)">
			<title>Sheet.177</title>
			<path d="M0 542.8 L16.01 542.8" class="st7"/>
		</g>
		<g id="shape178-425" v:mID="178" v:groupContext="shape" transform="translate(283.084,-163.596)">
			<title>Sheet.178</title>
			<path d="M0 542.8 L0 540.19 L0 524.34" class="st7"/>
		</g>
		<g id="shape179-428" v:mID="179" v:groupContext="shape" transform="translate(825.885,382.664) rotate(90)">
			<title>Sheet.179</title>
			<path d="M0 542.8 L16.33 542.8" class="st7"/>
		</g>
		<g id="shape180-431" v:mID="180" v:groupContext="shape" transform="translate(274.788,-95.7706)">
			<title>Sheet.180</title>
			<desc>M</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="8.36578" cy="533.906" width="16.74" height="17.7904"/>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
			<text x="4.09" y="536.91" class="st15" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>		</g>
		<g id="group182-434" transform="translate(306.855,-160.137) scale(-1,1)" v:mID="182" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
			</v:userDefs>
			<title>Make contact.182</title>
			<g id="shape183-435" v:mID="183" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.183</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st11"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st11"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st11"/>
			</g>
			<g id="shape184-440" v:mID="184" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.184</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape185-442" v:mID="185" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.185</title>
			</g>
		</g>
		<g id="shape186-444" v:mID="186" v:groupContext="shape" transform="translate(299.815,-129.572)">
			<title>Sheet.186</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape187-446" v:mID="187" v:groupContext="shape" transform="translate(845.892,413.051) rotate(90)">
			<title>Sheet.187</title>
			<path d="M0 542.8 L16.01 542.8" class="st7"/>
		</g>
		<g id="shape188-449" v:mID="188" v:groupContext="shape" transform="translate(303.091,-163.596)">
			<title>Sheet.188</title>
			<path d="M0 542.8 L0 540.19 L0 524.34" class="st7"/>
		</g>
		<g id="shape189-452" v:mID="189" v:groupContext="shape" transform="translate(845.892,382.664) rotate(90)">
			<title>Sheet.189</title>
			<path d="M0 542.8 L16.33 542.8" class="st7"/>
		</g>
		<g id="shape190-455" v:mID="190" v:groupContext="shape" transform="translate(294.795,-95.7706)">
			<title>Sheet.190</title>
			<desc>M</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="8.36578" cy="533.906" width="16.74" height="17.7904"/>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
			<text x="4.09" y="536.91" class="st15" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>		</g>
		<g id="shape191-458" v:mID="191" v:groupContext="shape" transform="translate(319.822,-129.572)">
			<title>Sheet.191</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape192-460" v:mID="192" v:groupContext="shape" transform="translate(865.899,413.051) rotate(90)">
			<title>Sheet.192</title>
			<path d="M0 542.8 L16.01 542.8" class="st7"/>
		</g>
		<g id="shape193-463" v:mID="193" v:groupContext="shape" transform="translate(314.073,-95.5702)">
			<title>Sheet.193</title>
			<desc>M</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="9.09565" cy="533.706" width="18.2" height="18.1913"/>
			<ellipse cx="9.09565" cy="533.706" rx="9.09565" ry="9.09565" class="st6"/>
			<text x="4.82" y="536.71" class="st15" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>		</g>
		<g id="group195-466" transform="translate(326.863,-160.137) scale(-1,1)" v:mID="195" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)25)"/>
			</v:userDefs>
			<title>Make contact.808</title>
			<g id="shape196-467" v:mID="196" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.196</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st11"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st11"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st11"/>
			</g>
			<g id="shape197-472" v:mID="197" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.197</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape198-474" v:mID="198" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.198</title>
			</g>
		</g>
		<g id="shape199-476" v:mID="199" v:groupContext="shape" transform="translate(323.098,-163.596)">
			<title>Sheet.199</title>
			<path d="M0 542.8 L0 540.19 L0 524.34" class="st7"/>
		</g>
		<g id="shape200-479" v:mID="200" v:groupContext="shape" transform="translate(865.899,382.664) rotate(90)">
			<title>Sheet.200</title>
			<path d="M0 542.8 L16.33 542.8" class="st7"/>
		</g>
		<g id="shape203-482" v:mID="203" v:groupContext="shape" transform="translate(339.567,-126.014)">
			<title>Sheet.203</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape204-484" v:mID="204" v:groupContext="shape" transform="translate(339.567,-117.119)">
			<title>Sheet.204</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st16"/>
		</g>
		<g id="shape205-486" v:mID="205" v:groupContext="shape" transform="translate(890.734,425.619) rotate(90)">
			<title>Sheet.205</title>
			<path d="M0 542.8 L24.47 542.8" class="st17"/>
		</g>
		<g id="group207-492" transform="translate(351.697,-160.804) scale(-1,1)" v:mID="207" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
			</v:userDefs>
			<title>Make contact.207</title>
			<g id="shape208-493" v:mID="208" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.208</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st11"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st11"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st11"/>
			</g>
			<g id="shape209-498" v:mID="209" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.209</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape210-500" v:mID="210" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.210</title>
			</g>
		</g>
		<g id="shape211-502" v:mID="211" v:groupContext="shape" transform="translate(347.932,-164.264)">
			<title>Sheet.211</title>
			<path d="M0 542.8 L0 540.19 L0 524.34" class="st7"/>
		</g>
		<g id="shape212-505" v:mID="212" v:groupContext="shape" transform="translate(890.734,381.997) rotate(90)">
			<title>Sheet.212</title>
			<path d="M0 542.8 L16.33 542.8" class="st7"/>
		</g>
		<g id="shape214-508" v:mID="214" v:groupContext="shape" transform="translate(688.577,-129.572)">
			<title>Sheet.214</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape215-510" v:mID="215" v:groupContext="shape" transform="translate(149.122,398.898) rotate(-90)">
			<title>Sheet.215</title>
			<path d="M0 542.8 L38.16 542.8" class="st7"/>
		</g>
		<g id="shape216-513" v:mID="216" v:groupContext="shape" transform="translate(149.122,455.895) rotate(-90)">
			<title>Sheet.216</title>
			<path d="M5.41 542.8 L5.77 542.8 L42.63 542.8" class="st19"/>
		</g>
		<g id="shape218-519" v:mID="218" v:groupContext="shape" transform="translate(710.328,-128.938)">
			<title>Sheet.218</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape219-521" v:mID="219" v:groupContext="shape" transform="translate(170.873,399.533) rotate(-90)">
			<title>Sheet.219</title>
			<path d="M0 542.8 L38.16 542.8" class="st7"/>
		</g>
		<g id="shape220-524" v:mID="220" v:groupContext="shape" transform="translate(170.873,456.53) rotate(-90)">
			<title>Sheet.220</title>
			<path d="M5.41 542.8 L5.77 542.8 L42.63 542.8" class="st19"/>
		</g>
		<g id="shape222-529" v:mID="222" v:groupContext="shape" transform="translate(732.079,-128.938)">
			<title>Sheet.222</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape223-531" v:mID="223" v:groupContext="shape" transform="translate(192.624,399.533) rotate(-90)">
			<title>Sheet.223</title>
			<path d="M0 542.8 L38.16 542.8" class="st7"/>
		</g>
		<g id="shape224-534" v:mID="224" v:groupContext="shape" transform="translate(192.624,456.53) rotate(-90)">
			<title>Sheet.224</title>
			<path d="M5.41 542.8 L5.77 542.8 L42.63 542.8" class="st19"/>
		</g>
		<g id="shape226-539" v:mID="226" v:groupContext="shape" transform="translate(844.18,-128.938)">
			<title>Sheet.226</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape227-541" v:mID="227" v:groupContext="shape" transform="translate(304.725,399.533) rotate(-90)">
			<title>Sheet.227</title>
			<path d="M0 542.8 L38.16 542.8" class="st7"/>
		</g>
		<g id="shape228-544" v:mID="228" v:groupContext="shape" transform="translate(304.725,456.53) rotate(-90)">
			<title>Sheet.228</title>
			<path d="M5.41 542.8 L5.77 542.8 L42.63 542.8" class="st19"/>
		</g>
		<g id="shape230-549" v:mID="230" v:groupContext="shape" transform="translate(866.14,-128.938)">
			<title>Sheet.230</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st6"/>
		</g>
		<g id="shape231-551" v:mID="231" v:groupContext="shape" transform="translate(326.685,399.533) rotate(-90)">
			<title>Sheet.231</title>
			<path d="M0 542.8 L38.16 542.8" class="st7"/>
		</g>
		<g id="shape232-554" v:mID="232" v:groupContext="shape" transform="translate(326.685,456.53) rotate(-90)">
			<title>Sheet.232</title>
			<path d="M5.41 542.8 L5.77 542.8 L42.63 542.8" class="st19"/>
		</g>
		<g id="group235-559" transform="translate(751.32,-107.398)" v:mID="235" v:groupContext="group">
			<title>Sheet.235</title>
			<g id="shape236-560" v:mID="236" v:groupContext="shape" transform="translate(0,-6.22663)">
				<title>Sheet.236</title>
				<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
			</g>
			<g id="shape237-562" v:mID="237" v:groupContext="shape">
				<title>Sheet.237</title>
				<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
			</g>
		</g>
		<g id="shape238-564" v:mID="238" v:groupContext="shape" transform="translate(1299.98,435.359) rotate(90)">
			<title>Sheet.238</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group239-569" transform="translate(754.541,-126.545)" v:mID="239" v:groupContext="group">
			<title>Sheet.239</title>
			<g id="group240-570" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="240" v:groupContext="group"
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
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
				</v:userDefs>
				<title>Make contact.1120</title>
				<g id="shape241-571" v:mID="241" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.397813,-7.8648E-07)">
					<title>Sheet.241</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M2.23 537.65 L2.23 539" class="st21"/>
					<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
					<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
				</g>
				<g id="shape242-576" v:mID="242" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
					<title>Sheet.242</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape243-578" v:mID="243" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
					<title>Sheet.243</title>
				</g>
			</g>
			<g id="shape244-580" v:mID="244" v:groupContext="shape" transform="translate(545.437,537.153) rotate(90)">
				<title>Sheet.244</title>
				<path d="M0 542.8 L5.65 542.8" class="st7"/>
			</g>
		</g>
		<g id="shape245-583" v:mID="245" v:groupContext="shape" transform="translate(244.492,388.58) rotate(-90)">
			<title>Sheet.245</title>
			<path d="M0 542.8 L27.58 542.8" class="st7"/>
		</g>
		<g id="group247-586" transform="translate(766.378,-107.398)" v:mID="247" v:groupContext="group">
			<title>Sheet.247</title>
			<g id="shape248-587" v:mID="248" v:groupContext="shape" transform="translate(0,-6.22663)">
				<title>Sheet.248</title>
				<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
			</g>
			<g id="shape249-589" v:mID="249" v:groupContext="shape">
				<title>Sheet.249</title>
				<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
			</g>
		</g>
		<g id="shape250-591" v:mID="250" v:groupContext="shape" transform="translate(1315.04,435.359) rotate(90)">
			<title>Sheet.250</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group251-596" transform="translate(769.599,-126.545)" v:mID="251" v:groupContext="group">
			<title>Sheet.251</title>
			<g id="group252-597" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="252" v:groupContext="group"
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
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
				</v:userDefs>
				<title>Make contact.1120</title>
				<g id="shape253-598" v:mID="253" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.397813,-7.8648E-07)">
					<title>Sheet.253</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M2.23 537.65 L2.23 539" class="st21"/>
					<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
					<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
				</g>
				<g id="shape254-603" v:mID="254" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
					<title>Sheet.254</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape255-605" v:mID="255" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
					<title>Sheet.255</title>
				</g>
			</g>
			<g id="shape256-607" v:mID="256" v:groupContext="shape" transform="translate(545.437,537.153) rotate(90)">
				<title>Sheet.256</title>
				<path d="M0 542.8 L5.65 542.8" class="st7"/>
			</g>
		</g>
		<g id="group258-610" transform="translate(781.437,-107.398)" v:mID="258" v:groupContext="group">
			<title>Sheet.258</title>
			<g id="shape259-611" v:mID="259" v:groupContext="shape" transform="translate(0,-6.22663)">
				<title>Sheet.259</title>
				<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
			</g>
			<g id="shape260-613" v:mID="260" v:groupContext="shape">
				<title>Sheet.260</title>
				<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
			</g>
		</g>
		<g id="shape261-615" v:mID="261" v:groupContext="shape" transform="translate(1330.09,435.359) rotate(90)">
			<title>Sheet.261</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group262-620" transform="translate(784.658,-126.545)" v:mID="262" v:groupContext="group">
			<title>Sheet.262</title>
			<g id="group263-621" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="263" v:groupContext="group"
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
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
				</v:userDefs>
				<title>Make contact.1120</title>
				<g id="shape264-622" v:mID="264" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.397813,-7.8648E-07)">
					<title>Sheet.264</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M2.23 537.65 L2.23 539" class="st21"/>
					<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
					<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
				</g>
				<g id="shape265-627" v:mID="265" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
					<title>Sheet.265</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape266-629" v:mID="266" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
					<title>Sheet.266</title>
				</g>
			</g>
			<g id="shape267-631" v:mID="267" v:groupContext="shape" transform="translate(545.437,537.153) rotate(90)">
				<title>Sheet.267</title>
				<path d="M0 542.8 L5.65 542.8" class="st7"/>
			</g>
		</g>
		<g id="group269-634" transform="translate(796.495,-107.398)" v:mID="269" v:groupContext="group">
			<title>Sheet.269</title>
			<g id="shape270-635" v:mID="270" v:groupContext="shape" transform="translate(0,-6.22663)">
				<title>Sheet.270</title>
				<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
			</g>
			<g id="shape271-637" v:mID="271" v:groupContext="shape">
				<title>Sheet.271</title>
				<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
			</g>
		</g>
		<g id="shape272-639" v:mID="272" v:groupContext="shape" transform="translate(1345.15,435.359) rotate(90)">
			<title>Sheet.272</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group273-644" transform="translate(799.716,-126.545)" v:mID="273" v:groupContext="group">
			<title>Sheet.273</title>
			<g id="group274-645" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="274" v:groupContext="group"
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
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
				</v:userDefs>
				<title>Make contact.1120</title>
				<g id="shape275-646" v:mID="275" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.397813,-7.8648E-07)">
					<title>Sheet.275</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M2.23 537.65 L2.23 539" class="st21"/>
					<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
					<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
				</g>
				<g id="shape276-651" v:mID="276" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
					<title>Sheet.276</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape277-653" v:mID="277" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
					<title>Sheet.277</title>
				</g>
			</g>
			<g id="shape278-655" v:mID="278" v:groupContext="shape" transform="translate(545.437,537.153) rotate(90)">
				<title>Sheet.278</title>
				<path d="M0 542.8 L5.65 542.8" class="st7"/>
			</g>
		</g>
		<g id="group280-658" transform="translate(811.554,-107.398)" v:mID="280" v:groupContext="group">
			<title>Sheet.280</title>
			<g id="shape281-659" v:mID="281" v:groupContext="shape" transform="translate(0,-6.22663)">
				<title>Sheet.281</title>
				<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
			</g>
			<g id="shape282-661" v:mID="282" v:groupContext="shape">
				<title>Sheet.282</title>
				<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
			</g>
		</g>
		<g id="shape283-663" v:mID="283" v:groupContext="shape" transform="translate(1360.21,435.359) rotate(90)">
			<title>Sheet.283</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group284-668" transform="translate(814.775,-126.545)" v:mID="284" v:groupContext="group">
			<title>Sheet.284</title>
			<g id="group285-669" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="285" v:groupContext="group"
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
					<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
				</v:userDefs>
				<title>Make contact.1120</title>
				<g id="shape286-670" v:mID="286" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.397813,-7.8648E-07)">
					<title>Sheet.286</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M2.23 537.65 L2.23 539" class="st21"/>
					<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
					<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
				</g>
				<g id="shape287-675" v:mID="287" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
					<title>Sheet.287</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape288-677" v:mID="288" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
					<title>Sheet.288</title>
				</g>
			</g>
			<g id="shape289-679" v:mID="289" v:groupContext="shape" transform="translate(545.437,537.153) rotate(90)">
				<title>Sheet.289</title>
				<path d="M0 542.8 L5.65 542.8" class="st7"/>
			</g>
		</g>
		<g id="shape290-682" v:mID="290" v:groupContext="shape" transform="translate(757.176,-137.573)">
			<title>Sheet.290</title>
			<path d="M0 542.8 L0 526.47 L60.23 526.47" class="st7"/>
		</g>
		<g id="shape291-685" v:mID="291" v:groupContext="shape" transform="translate(274.608,405.454) rotate(-90)">
			<title>Sheet.291</title>
			<path d="M0 542.8 L16.55 542.8" class="st7"/>
		</g>
		<g id="shape292-688" v:mID="292" v:groupContext="shape" transform="translate(229.433,405.454) rotate(-90)">
			<title>Sheet.292</title>
			<path d="M0 542.8 L16.52 542.8" class="st7"/>
		</g>
		<g id="shape293-691" v:mID="293" v:groupContext="shape" transform="translate(244.492,405.454) rotate(-90)">
			<title>Sheet.293</title>
			<path d="M0 542.8 L16.52 542.8" class="st7"/>
		</g>
		<g id="shape294-694" v:mID="294" v:groupContext="shape" transform="translate(259.55,405.454) rotate(-90)">
			<title>Sheet.294</title>
			<path d="M0 542.8 L16.52 542.8" class="st7"/>
		</g>
		<g id="shape297-697" v:mID="297" v:groupContext="shape" transform="translate(884.336,-113.254)">
			<title>Sheet.297</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
		</g>
		<g id="shape298-699" v:mID="298" v:groupContext="shape" transform="translate(884.336,-107.028)">
			<title>Sheet.298</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
		</g>
		<g id="shape299-701" v:mID="299" v:groupContext="shape" transform="translate(1432.99,435.729) rotate(90)">
			<title>Sheet.299</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group301-706" transform="translate(892.827,-131.823) scale(-1,1)" v:mID="301" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
			</v:userDefs>
			<title>Make contact.301</title>
			<g id="shape302-707" v:mID="302" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.8648E-07)">
				<title>Sheet.302</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M2.23 537.65 L2.23 539" class="st21"/>
				<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
				<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
			</g>
			<g id="shape303-712" v:mID="303" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
				<title>Sheet.303</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape304-714" v:mID="304" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
				<title>Sheet.304</title>
			</g>
		</g>
		<g id="shape305-716" v:mID="305" v:groupContext="shape" transform="translate(1432.99,410.978) rotate(90)">
			<title>Sheet.305</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape306-719" v:mID="306" v:groupContext="shape" transform="translate(385.037,389.114) rotate(-90)">
			<title>Sheet.306</title>
			<path d="M0 542.8 L28.29 542.8" class="st7"/>
		</g>
		<g id="shape309-722" v:mID="309" v:groupContext="shape" transform="translate(899.394,-113.254)">
			<title>Sheet.309</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
		</g>
		<g id="shape310-724" v:mID="310" v:groupContext="shape" transform="translate(899.394,-107.028)">
			<title>Sheet.310</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
		</g>
		<g id="shape311-726" v:mID="311" v:groupContext="shape" transform="translate(1448.05,435.729) rotate(90)">
			<title>Sheet.311</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group313-731" transform="translate(907.886,-131.823) scale(-1,1)" v:mID="313" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
			</v:userDefs>
			<title>Make contact.313</title>
			<g id="shape314-732" v:mID="314" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.8648E-07)">
				<title>Sheet.314</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M2.23 537.65 L2.23 539" class="st21"/>
				<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
				<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
			</g>
			<g id="shape315-737" v:mID="315" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
				<title>Sheet.315</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape316-739" v:mID="316" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
				<title>Sheet.316</title>
			</g>
		</g>
		<g id="shape317-741" v:mID="317" v:groupContext="shape" transform="translate(1448.05,410.978) rotate(90)">
			<title>Sheet.317</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape320-744" v:mID="320" v:groupContext="shape" transform="translate(914.453,-113.254)">
			<title>Sheet.320</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
		</g>
		<g id="shape321-746" v:mID="321" v:groupContext="shape" transform="translate(914.453,-107.028)">
			<title>Sheet.321</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
		</g>
		<g id="shape322-748" v:mID="322" v:groupContext="shape" transform="translate(1463.11,435.729) rotate(90)">
			<title>Sheet.322</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group324-753" transform="translate(922.944,-131.823) scale(-1,1)" v:mID="324" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
			</v:userDefs>
			<title>Make contact.324</title>
			<g id="shape325-754" v:mID="325" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.8648E-07)">
				<title>Sheet.325</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M2.23 537.65 L2.23 539" class="st21"/>
				<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
				<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
			</g>
			<g id="shape326-759" v:mID="326" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
				<title>Sheet.326</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape327-761" v:mID="327" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
				<title>Sheet.327</title>
			</g>
		</g>
		<g id="shape328-763" v:mID="328" v:groupContext="shape" transform="translate(1463.11,410.978) rotate(90)">
			<title>Sheet.328</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape331-766" v:mID="331" v:groupContext="shape" transform="translate(929.511,-113.254)">
			<title>Sheet.331</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
		</g>
		<g id="shape332-768" v:mID="332" v:groupContext="shape" transform="translate(929.511,-107.028)">
			<title>Sheet.332</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
		</g>
		<g id="shape333-770" v:mID="333" v:groupContext="shape" transform="translate(1478.17,435.729) rotate(90)">
			<title>Sheet.333</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group335-775" transform="translate(938.002,-131.823) scale(-1,1)" v:mID="335" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
			</v:userDefs>
			<title>Make contact.335</title>
			<g id="shape336-776" v:mID="336" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.8648E-07)">
				<title>Sheet.336</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M2.23 537.65 L2.23 539" class="st21"/>
				<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
				<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
			</g>
			<g id="shape337-781" v:mID="337" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
				<title>Sheet.337</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape338-783" v:mID="338" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
				<title>Sheet.338</title>
			</g>
		</g>
		<g id="shape339-785" v:mID="339" v:groupContext="shape" transform="translate(1478.17,410.978) rotate(90)">
			<title>Sheet.339</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape342-788" v:mID="342" v:groupContext="shape" transform="translate(944.57,-113.254)">
			<title>Sheet.342</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
		</g>
		<g id="shape343-790" v:mID="343" v:groupContext="shape" transform="translate(944.57,-107.028)">
			<title>Sheet.343</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
		</g>
		<g id="shape344-792" v:mID="344" v:groupContext="shape" transform="translate(1493.23,435.729) rotate(90)">
			<title>Sheet.344</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group346-797" transform="translate(953.061,-131.823) scale(-1,1)" v:mID="346" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
			</v:userDefs>
			<title>Make contact.346</title>
			<g id="shape347-798" v:mID="347" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.8648E-07)">
				<title>Sheet.347</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M2.23 537.65 L2.23 539" class="st21"/>
				<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
				<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
			</g>
			<g id="shape348-803" v:mID="348" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
				<title>Sheet.348</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape349-805" v:mID="349" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
				<title>Sheet.349</title>
			</g>
		</g>
		<g id="shape350-807" v:mID="350" v:groupContext="shape" transform="translate(1493.23,410.978) rotate(90)">
			<title>Sheet.350</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape351-810" v:mID="351" v:groupContext="shape" transform="translate(890.192,-137.202)">
			<title>Sheet.351</title>
			<path d="M0 542.8 L0 526.47 L75.29 526.47" class="st7"/>
		</g>
		<g id="shape352-813" v:mID="352" v:groupContext="shape" transform="translate(407.624,405.824) rotate(-90)">
			<title>Sheet.352</title>
			<path d="M0 542.8 L16.55 542.8" class="st7"/>
		</g>
		<g id="shape353-816" v:mID="353" v:groupContext="shape" transform="translate(362.449,405.824) rotate(-90)">
			<title>Sheet.353</title>
			<path d="M0 542.8 L16.52 542.8" class="st7"/>
		</g>
		<g id="shape354-819" v:mID="354" v:groupContext="shape" transform="translate(377.507,405.824) rotate(-90)">
			<title>Sheet.354</title>
			<path d="M0 542.8 L16.52 542.8" class="st7"/>
		</g>
		<g id="shape355-822" v:mID="355" v:groupContext="shape" transform="translate(392.566,405.824) rotate(-90)">
			<title>Sheet.355</title>
			<path d="M0 542.8 L16.52 542.8" class="st7"/>
		</g>
		<g id="shape358-825" v:mID="358" v:groupContext="shape" transform="translate(959.628,-113.254)">
			<title>Sheet.358</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st6"/>
		</g>
		<g id="shape359-827" v:mID="359" v:groupContext="shape" transform="translate(959.628,-107.028)">
			<title>Sheet.359</title>
			<ellipse cx="5.85604" cy="536.575" rx="5.85604" ry="6.22663" class="st16"/>
		</g>
		<g id="shape360-829" v:mID="360" v:groupContext="shape" transform="translate(1508.29,435.729) rotate(90)">
			<title>Sheet.360</title>
			<path d="M0 542.8 L15.4 542.8" class="st17"/>
		</g>
		<g id="group362-834" transform="translate(968.119,-131.823) scale(-1,1)" v:mID="362" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
			</v:userDefs>
			<title>Make contact.362</title>
			<g id="shape363-835" v:mID="363" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.8648E-07)">
				<title>Sheet.363</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M2.23 537.65 L2.23 539" class="st21"/>
				<path d="M2.23 542.8 L2.23 541.46" class="st21"/>
				<path d="M0.61 539.2 L2.23 541.46 L2.23 542.8" class="st21"/>
			</g>
			<g id="shape364-840" v:mID="364" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
				<title>Sheet.364</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape365-842" v:mID="365" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
				<title>Sheet.365</title>
			</g>
		</g>
		<g id="shape366-844" v:mID="366" v:groupContext="shape" transform="translate(1508.29,410.978) rotate(90)">
			<title>Sheet.366</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape367-847" v:mID="367" v:groupContext="shape" transform="translate(422.683,405.824) rotate(-90)">
			<title>Sheet.367</title>
			<path d="M0 542.8 L16.55 542.8" class="st7"/>
		</g>
		<g id="shape368-850" v:mID="368" v:groupContext="shape" transform="translate(91.5638,-542.051)">
			<title>Sheet.368</title>
			<path d="M0 542.8 L784.1 542.8" class="st22"/>
		</g>
		<g id="shape369-853" v:mID="369" v:groupContext="shape" transform="translate(1418.46,0.75) rotate(90)">
			<title>Sheet.369</title>
			<path d="M0 542.8 L197.43 542.8" class="st22"/>
		</g>
		<g id="shape370-856" v:mID="370" v:groupContext="shape" transform="translate(633.268,0.75) rotate(90)">
			<title>Sheet.370</title>
			<path d="M0 542.8 L197.71 542.8" class="st22"/>
		</g>
		<g id="shape371-859" v:mID="371" v:groupContext="shape" transform="translate(89.0492,-347.696)">
			<title>Sheet.371</title>
			<path d="M0 542.8 L290.55 542.8" class="st22"/>
		</g>
		<g id="shape372-862" v:mID="372" v:groupContext="shape" transform="translate(705.585,-344.339)">
			<title>Sheet.372</title>
			<path d="M0 542.8 L170.08 542.8" class="st22"/>
		</g>
		<g id="shape373-865" v:mID="373" v:groupContext="shape" transform="translate(922.402,197.94) rotate(90)">
			<title>Sheet.373</title>
			<path d="M0 542.8 L61.68 542.8" class="st22"/>
		</g>
		<g id="shape374-868" v:mID="374" v:groupContext="shape" transform="translate(1248.39,198.179) rotate(90)">
			<title>Sheet.374</title>
			<path d="M0 542.8 L62.31 542.8" class="st22"/>
		</g>
		<g id="shape375-871" v:mID="375" v:groupContext="shape" transform="translate(379.6,-282.312)">
			<title>Sheet.375</title>
			<path d="M0 542.8 L325.98 542.8" class="st22"/>
		</g>
		<a href="dashboard_jatiluhur.php">
        <g id="shape376-874" v:mID="376" v:groupContext="shape" transform="translate(101.031,-358.698)">
			<title>Sheet.376</title>
			<desc>GI JATILUHUR</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="64.8752" cy="532.543" width="129.76" height="20.5161"/>
			<rect x="0" y="522.285" width="129.75" height="20.5161" class="st23"/>
			<text x="30.37" y="536.14" class="st24" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>GI JATILUHUR</text>		
        </g>
        </a>
        
		<g id="shape381-877" v:mID="381" v:groupContext="shape" transform="translate(365.204,-126.014)">
        
			<title>Sheet.381</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape382-879" v:mID="382" v:groupContext="shape" transform="translate(365.204,-117.119)">
			<title>Sheet.382</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st16"/>
		</g>
		<g id="shape383-881" v:mID="383" v:groupContext="shape" transform="translate(916.372,425.619) rotate(90)">
			<title>Sheet.383</title>
			<path d="M0 542.8 L24.47 542.8" class="st17"/>
		</g>
		<g id="group385-886" transform="translate(377.335,-160.804) scale(-1,1)" v:mID="385" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)35)"/>
			</v:userDefs>
			<title>Make contact.1120</title>
			<g id="shape386-887" v:mID="386" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.386</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st11"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st11"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st11"/>
			</g>
			<g id="shape387-892" v:mID="387" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.387</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape388-894" v:mID="388" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.388</title>
			</g>
		</g>
		<g id="shape389-896" v:mID="389" v:groupContext="shape" transform="translate(373.57,-164.264)">
			<title>Sheet.389</title>
			<path d="M0 542.8 L0 540.39 L0 525.72" class="st7"/>
		</g>
		<g id="shape390-899" v:mID="390" v:groupContext="shape" transform="translate(916.372,381.997) rotate(90)">
			<title>Sheet.390</title>
			<path d="M0 542.8 L16.33 542.8" class="st7"/>
		</g>
		<g id="shape391-902" v:mID="391" v:groupContext="shape" transform="translate(496.586,-517.504)">
			<title>Sheet.391</title>
			<desc>UNIT 4</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="12.3736" cy="538.801" width="24.75" height="8"/>
			<rect x="0" y="534.801" width="24.7472" height="8" class="st25"/>
			<text x="1.34" y="541.2" class="st26" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 4</text>		</g>
		<g id="shape392-905" v:mID="392" v:groupContext="shape" transform="translate(548.694,-361.554)">
			<title>Sheet.392</title>
			<desc>TRAFO 1 40 MVA 150/70KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="538.801" width="23.65" height="8"/>
			<rect x="0" y="534.801" width="23.6487" height="8" class="st25"/>
			<text x="1.43" y="529.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 1<v:newlineChar/><tspan
						x="2.1" dy="1.2em" class="st28">40 MVA<v:newlineChar/></tspan><tspan x="6.1" dy="1.2em" class="st28">150/</tspan><tspan
						x="5.52" dy="1.2em" class="st28">70KV</tspan></text>		</g>
		<g id="shape393-911" v:mID="393" v:groupContext="shape" transform="translate(595.033,-361.554)">
			<title>Sheet.393</title>
			<desc>TRAFO 2 40 MVA 150/70KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="538.801" width="23.65" height="8"/>
			<rect x="0" y="534.801" width="23.6487" height="8" class="st25"/>
			<text x="1.43" y="529.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 2<v:newlineChar/><tspan
						x="2.1" dy="1.2em" class="st28">40 MVA<v:newlineChar/></tspan><tspan x="6.1" dy="1.2em" class="st28">150/</tspan><tspan
						x="5.52" dy="1.2em" class="st28">70KV</tspan></text>		</g>
		<g id="shape394-917" v:mID="394" v:groupContext="shape" transform="translate(827.116,-78.1342)">
			<title>Sheet.394</title>
			<desc>ELEGANT 4</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="7.04" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>ELEGANT 4</text>		</g>
		<g id="shape395-920" v:mID="395" v:groupContext="shape" transform="translate(849.291,-71.0476)">
			<title>Sheet.395</title>
			<desc>INDORAMA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="6.27" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>INDORAMA</text>		</g>
		<g id="shape396-923" v:mID="396" v:groupContext="shape" transform="translate(671.211,-78.1342)">
			<title>Sheet.396</title>
			<desc>ELEGANT 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="7.04" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>ELEGANT 1</text>		</g>
		<g id="shape397-926" v:mID="397" v:groupContext="shape" transform="translate(692.92,-71.0476)">
			<title>Sheet.397</title>
			<desc>ELEGANT 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="7.04" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>ELEGANT 2</text>		</g>
		<g id="shape398-929" v:mID="398" v:groupContext="shape" transform="translate(715.094,-78.1342)">
			<title>Sheet.398</title>
			<desc>ELEGANT 3</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="7.04" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>ELEGANT 3</text>		</g>
		<g id="shape399-932" v:mID="399" v:groupContext="shape" transform="translate(870.195,-78.1342)">
			<title>Sheet.399</title>
			<desc>PT.URASE</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="8.55" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PT.URASE</text>		</g>
		<g id="shape400-935" v:mID="400" v:groupContext="shape" transform="translate(885.253,-71.0476)">
			<title>Sheet.400</title>
			<desc>PT.KURNIA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="7.15" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PT.KURNIA</text>		</g>
		<g id="shape401-938" v:mID="401" v:groupContext="shape" transform="translate(888.101,-163.174)">
			<title>Sheet.401</title>
			<desc>T.KAYAT</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="10.28" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>T.KAYAT</text>		</g>
		<g id="shape402-941" v:mID="402" v:groupContext="shape" transform="translate(915.348,-75.0476)">
			<title>Sheet.402</title>
			<desc>PERUMAHAN</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="4.05" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PERUMAHAN</text>		</g>
		<g id="shape403-944" v:mID="403" v:groupContext="shape" transform="translate(716.923,-226.562)">
			<title>Sheet.403</title>
			<desc>TRAFO 1 15 MVA 70/6,3 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="13.3692" cy="531.715" width="26.74" height="22.1732"/>
			<rect x="0" y="520.628" width="26.7385" height="22.1732" class="st25"/>
			<text x="2.98" y="526.31" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 1<v:newlineChar/><tspan
						x="3.65" dy="1.2em" class="st28">15 MVA<v:newlineChar/></tspan><tspan x="1.44" dy="1.2em" class="st28">70/6,3 KV</tspan></text>		</g>
		<g id="shape404-949" v:mID="404" v:groupContext="shape" transform="translate(858.656,-226.562)">
			<title>Sheet.404</title>
			<desc>TRAFO 2 15 MVA 70/6,3 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="13.3692" cy="531.715" width="26.74" height="22.1732"/>
			<rect x="0" y="520.628" width="26.7385" height="22.1732" class="st25"/>
			<text x="2.98" y="526.31" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 2<v:newlineChar/><tspan
						x="3.65" dy="1.2em" class="st28">15 MVA<v:newlineChar/></tspan><tspan x="1.44" dy="1.2em" class="st28">70/6,3 KV</tspan></text>		</g>
		<g id="shape405-954" v:mID="405" v:groupContext="shape" transform="translate(746.878,-163.174)">
			<title>Sheet.405</title>
			<desc>PS / K.PUSAT</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="4.65" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PS / K.PUSAT</text>		</g>
		<g id="shape406-957" v:mID="406" v:groupContext="shape" transform="translate(25.2697,-312.263)">
			<title>Sheet.406</title>
			<desc>MINIHYDRO</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="24.1105" cy="538.801" width="48.23" height="8"/>
			<rect x="0" y="534.801" width="48.221" height="8" class="st25"/>
			<text x="4.37" y="541.2" class="st26" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>MINIHYDRO</text>		</g>
		<g id="shape407-960" v:mID="407" v:groupContext="shape" transform="translate(3.41414,-301.819)">
			<title>Sheet.407</title>
			<desc>UNIT 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="9.42" y="541.2" class="st26" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 1</text>		</g>
		<g id="shape408-963" v:mID="408" v:groupContext="shape" transform="translate(53.423,-301.819)">
			<title>Sheet.408</title>
			<desc>UNIT 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="9.42" y="541.2" class="st26" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 2</text>		</g>
		<g id="shape409-966" v:mID="409" v:groupContext="shape" transform="translate(32.1336,-229.93)">
			<title>Sheet.409</title>
			<desc>TRAFO 4 MVA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="10.8755" cy="535.685" width="21.76" height="14.2323"/>
			<rect x="0" y="528.569" width="21.751" height="14.2323" class="st25"/>
			<text x="2.68" y="533.89" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO<v:newlineChar/><tspan
						x="2" dy="1.2em" class="st28"> </tspan>4 MVA</text>		</g>
		<g id="shape410-970" v:mID="410" v:groupContext="shape" transform="translate(81.7399,-228.966)">
			<title>Sheet.410</title>
			<desc>TRAFO 4 MVA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="10.8755" cy="534.721" width="21.76" height="16.1601"/>
			<rect x="0" y="526.641" width="21.751" height="16.1601" class="st25"/>
			<text x="2.68" y="532.92" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <v:newlineChar/><tspan
						x="2.67" dy="1.2em" class="st28">4 MVA</tspan></text>		</g>
		<g id="shape411-974" v:mID="411" v:groupContext="shape" transform="translate(105.743,-228.966)">
			<title>Sheet.411</title>
			<desc>TRAFO 1 10 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.1732" cy="534.721" width="28.35" height="16.1601"/>
			<rect x="0" y="526.641" width="28.3465" height="16.1601" class="st25"/>
			<text x="3.78" y="529.32" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 1 <v:newlineChar/><tspan
						x="4.45" dy="1.2em" class="st28">10 MVA<v:newlineChar/></tspan><tspan x="3.67" dy="1.2em" class="st28">70/20KV</tspan></text>		</g>
		<g id="shape412-979" v:mID="412" v:groupContext="shape" transform="translate(189.411,-228.966)">
			<title>Sheet.412</title>
			<desc>TRAFO 4 15 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.1732" cy="534.721" width="28.35" height="16.1601"/>
			<rect x="0" y="526.641" width="28.3465" height="16.1601" class="st25"/>
			<text x="3.78" y="529.32" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 4 <v:newlineChar/><tspan
						x="4.45" dy="1.2em" class="st28">15 MVA<v:newlineChar/></tspan><tspan x="3.67" dy="1.2em" class="st28">70/20KV</tspan></text>		</g>
		<g id="shape413-984" v:mID="413" v:groupContext="shape" transform="translate(263.008,-228.966)">
			<title>Sheet.413</title>
			<desc>TRAFO 2 5 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.1732" cy="534.721" width="28.35" height="16.1601"/>
			<rect x="0" y="526.641" width="28.3465" height="16.1601" class="st25"/>
			<text x="3.78" y="529.32" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 2 <v:newlineChar/><tspan
						x="5.97" dy="1.2em" class="st28">5 MVA<v:newlineChar/></tspan><tspan x="3.67" dy="1.2em" class="st28">70/20KV</tspan></text>		</g>
		<g id="shape414-989" v:mID="414" v:groupContext="shape" transform="translate(329.771,-228.966)">
			<title>Sheet.414</title>
			<desc>TRAFO 3 5 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.1732" cy="534.721" width="28.35" height="16.1601"/>
			<rect x="0" y="526.641" width="28.3465" height="16.1601" class="st25"/>
			<text x="3.78" y="529.32" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 3<v:newlineChar/><tspan
						x="5.97" dy="1.2em" class="st28">5 MVA<v:newlineChar/></tspan><tspan x="3.67" dy="1.2em" class="st28">70/20KV</tspan></text>		</g>
		<g id="shape415-994" v:mID="415" v:groupContext="shape" transform="translate(103.804,-106.481)">
			<title>Sheet.415</title>
			<desc>PT.BPS</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="12.13" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PT.BPS</text>		</g>
		<g id="shape416-997" v:mID="416" v:groupContext="shape" transform="translate(140.041,-106.481)">
			<title>Sheet.416</title>
			<desc>PT.KTP</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="12.12" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PT.KTP</text>		</g>
		<g id="shape417-1000" v:mID="417" v:groupContext="shape" transform="translate(176.862,-106.481)">
			<title>Sheet.417</title>
			<desc>AUXILIARY</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="7.64" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>AUXILIARY</text>		</g>
		<g id="shape418-1003" v:mID="418" v:groupContext="shape" transform="translate(202.212,-86.939)">
			<title>Sheet.418</title>
			<desc>POMPA 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="8.87" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 1</text>		</g>
		<g id="shape419-1006" v:mID="419" v:groupContext="shape" transform="translate(223.472,-81.2208)">
			<title>Sheet.419</title>
			<desc>POMPA 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="8.87" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 2</text>		</g>
		<g id="shape420-1009" v:mID="420" v:groupContext="shape" transform="translate(243.298,-86.939)">
			<title>Sheet.420</title>
			<desc>POMPA 3</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="8.87" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 3</text>		</g>
		<g id="shape421-1012" v:mID="421" v:groupContext="shape" transform="translate(281.773,-86.939)">
			<title>Sheet.421</title>
			<desc>POMPA 5</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="8.87" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 5</text>		</g>
		<g id="shape422-1015" v:mID="422" v:groupContext="shape" transform="translate(263.754,-81.2208)">
			<title>Sheet.422</title>
			<desc>POMPA 4</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="8.87" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 4</text>		</g>
		<g id="shape423-1018" v:mID="423" v:groupContext="shape" transform="translate(303.033,-81.2208)">
			<title>Sheet.423</title>
			<desc>POMPA 6</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="8.87" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 6</text>		</g>
		<g id="shape424-1021" v:mID="424" v:groupContext="shape" transform="translate(15.9238,-367.963)">
			<title>Sheet.424</title>
			<desc>LINE 70 KV FROM KOSAMBI</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="38.1724" cy="538.801" width="76.35" height="8"/>
			<rect x="0" y="534.801" width="76.3448" height="8" class="st25"/>
			<text x="25.1" y="537" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 70 KV <v:newlineChar/><tspan
						x="18.32" dy="1.2em" class="st28">FROM KOSAMBI</tspan></text>		</g>
		<g id="shape425-1025" v:mID="425" v:groupContext="shape" transform="translate(132.649,-415.457)">
			<title>Sheet.425</title>
			<desc>REL 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="8.36578" cy="538.801" width="16.74" height="8"/>
			<rect x="0" y="534.801" width="16.7316" height="8" class="st25"/>
			<text x="1.81" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>REL 1</text>		</g>
		<g id="shape426-1028" v:mID="426" v:groupContext="shape" transform="translate(806.353,-396.78)">
			<title>Sheet.426</title>
			<desc>REL 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="8.36578" cy="538.801" width="16.74" height="8"/>
			<rect x="0" y="534.801" width="16.7316" height="8" class="st25"/>
			<text x="1.81" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>REL 2</text>		</g>
		<g id="shape427-1031" v:mID="427" v:groupContext="shape" transform="translate(524.167,-283.003)">
			<title>Sheet.427</title>
			<desc>LINE 70 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="25.6198" cy="538.801" width="51.24" height="8"/>
			<rect x="0" y="534.801" width="51.2395" height="8" class="st25"/>
			<text x="3.83" y="541.8" class="st15" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 70 KV</text>		</g>
		<g id="shape428-1034" v:mID="428" v:groupContext="shape" transform="translate(778.593,-183.016)">
			<title>Sheet.428</title>
			<desc>LINE 6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="538.801" width="28.78" height="8"/>
			<rect x="0" y="534.801" width="28.7783" height="8" class="st25"/>
			<text x="1.24" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3KV</text>		</g>
		<g id="shape429-1037" v:mID="429" v:groupContext="shape" transform="translate(271.661,-183.016)">
			<title>Sheet.429</title>
			<desc>LINE 6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="538.801" width="28.78" height="8"/>
			<rect x="0" y="534.801" width="28.7783" height="8" class="st25"/>
			<text x="1.24" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3KV</text>		</g>
		<g id="shape430-1040" v:mID="430" v:groupContext="shape" transform="translate(102.152,-183.016)">
			<title>Sheet.430</title>
			<desc>LINE 20 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="538.801" width="28.78" height="8"/>
			<rect x="0" y="534.801" width="28.7783" height="8" class="st25"/>
			<text x="1.31" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 20 KV</text>		</g>
		<g id="shape431-1043" v:mID="431" v:groupContext="shape" transform="translate(542.837,-396.389)">
			<title>Sheet.431</title>
			<desc>LINE 150 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="5.86" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 150 KV</text>		</g>
		<g id="shape432-1046" v:mID="432" v:groupContext="shape" transform="translate(128.312,-409.788)">
			<title>Sheet.432</title>
			<desc>LINE 150 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="5.86" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 150 KV</text>		</g>
		<g id="shape433-1049" v:mID="433" v:groupContext="shape" transform="translate(786.372,-391.614)">
			<title>Sheet.433</title>
			<desc>LINE 150 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st25"/>
			<text x="5.86" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 150 KV</text>		</g>
		<g id="shape434-1052" v:mID="434" v:groupContext="shape" transform="translate(411.037,-461.76)">
			<title>Sheet.434</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="538.801" width="23.65" height="8"/>
			<rect x="0" y="534.801" width="23.6487" height="8" class="st25"/>
			<text x="3.63" y="529.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1"
						dy="1.2em" class="st28">35 MVA<v:newlineChar/></tspan><tspan x="6.88" dy="1.2em" class="st28">6,3/</tspan><tspan
						x="4" dy="1.2em" class="st28">150KV</tspan></text>		</g>
		<g id="shape435-1058" v:mID="435" v:groupContext="shape" transform="translate(346.326,-461.52)">
			<title>Sheet.435</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="538.801" width="23.65" height="8"/>
			<rect x="0" y="534.801" width="23.6487" height="8" class="st25"/>
			<text x="3.63" y="529.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1"
						dy="1.2em" class="st28">35 MVA<v:newlineChar/></tspan><tspan x="6.88" dy="1.2em" class="st28">6,3/</tspan><tspan
						x="4" dy="1.2em" class="st28">150KV</tspan></text>		</g>
		<g id="shape436-1064" v:mID="436" v:groupContext="shape" transform="translate(281.614,-462)">
			<title>Sheet.436</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="538.801" width="23.65" height="8"/>
			<rect x="0" y="534.801" width="23.6487" height="8" class="st25"/>
			<text x="3.63" y="529.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1"
						dy="1.2em" class="st28">35 MVA<v:newlineChar/></tspan><tspan x="6.88" dy="1.2em" class="st28">6,3/</tspan><tspan
						x="4" dy="1.2em" class="st28">150KV</tspan></text>		</g>
		<g id="shape437-1070" v:mID="437" v:groupContext="shape" transform="translate(459.711,-461.28)">
			<title>Sheet.437</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="538.801" width="23.65" height="8"/>
			<rect x="0" y="534.801" width="23.6487" height="8" class="st25"/>
			<text x="3.63" y="529.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1"
						dy="1.2em" class="st28">35 MVA<v:newlineChar/></tspan><tspan x="6.88" dy="1.2em" class="st28">6,3/</tspan><tspan
						x="4" dy="1.2em" class="st28">150KV</tspan></text>		</g>
		<g id="shape438-1076" v:mID="438" v:groupContext="shape" transform="translate(600.958,-461.369)">
			<title>Sheet.438</title>
			<desc>TRAFO 40 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="538.801" width="23.65" height="8"/>
			<rect x="0" y="534.801" width="23.6487" height="8" class="st25"/>
			<text x="3.63" y="529.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1"
						dy="1.2em" class="st28">40 MVA<v:newlineChar/></tspan><tspan x="6.88" dy="1.2em" class="st28">6,3/</tspan><tspan
						x="4" dy="1.2em" class="st28">150KV</tspan></text>		</g>
		<g id="shape440-1082" v:mID="440" v:groupContext="shape" transform="translate(761.1,638.206) scale(1,-1)">
			<title>Sheet.440</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="group442-1084" transform="translate(1313.53,72.7966) rotate(90)" v:mID="442" v:groupContext="group"
				v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="Core" v:lbl="Core" v:type="1" v:format="Air;Magnetic;Magnetic with Gap" v:langID="1033"
						v:val="VT4(Air)"/>
				<v:cp v:nameU="Adjustability" v:lbl="Adjustability" v:type="1" v:format="Fixed;Adjustable;Continuously Adjustable"
						v:langID="1033" v:val="VT4(Fixed)"/>
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
			<g id="shape443-1085" v:mID="443" v:groupContext="shape" v:layerMember="0">
				<title>Sheet.443</title>
				<path d="M0 542.8 A1.85071 2.0068 0 1 1 3.7 542.8 A1.85071 2.0068 0 1 1 7.4 542.8 A1.85071 2.0068 0 1 1 11.1 542.8
							 A1.85071 2.0068 0 1 1 14.79 542.8" class="st1"/>
				<path d="M0 542.8 L0 546.98" class="st1"/>
				<path d="M14.79 542.8 L14.79 546.98" class="st1"/>
			</g>
			<g id="shape444-1090" v:mID="444" v:groupContext="shape" v:layerMember="0" transform="translate(7.1311,2.34788)">
				<title>Sheet.444</title>
			</g>
			<g id="shape445-1092" v:mID="445" v:groupContext="shape" v:layerMember="0"
					transform="translate(-381.222,163.238) rotate(-45)">
				<title>Sheet.445</title>
			</g>
		</g>
		<g id="group446-1094" transform="translate(756.08,617.108) scale(1,-1)" v:mID="446" v:groupContext="group">
			<title>Sheet.446</title>
			<g id="group447-1095" transform="translate(0,-6.4157)" v:mID="447" v:groupContext="group">
				<title>Sheet.447</title>
				<g id="shape448-1096" v:mID="448" v:groupContext="shape" transform="translate(545.215,537.518) rotate(90)">
					<title>Sheet.448</title>
					<path d="M0 542.8 L5.28 542.8" class="st1"/>
				</g>
				<g id="shape449-1099" v:mID="449" v:groupContext="shape">
					<title>Sheet.449</title>
					<path d="M0 542.8 L4.69 542.8" class="st1"/>
				</g>
			</g>
			<g id="group450-1102" transform="translate(0,1080.32) scale(1,-1)" v:mID="450" v:groupContext="group">
				<title>Sheet.450</title>
				<g id="shape451-1103" v:mID="451" v:groupContext="shape" transform="translate(545.215,537.518) rotate(90)">
					<title>Sheet.451</title>
					<path d="M0 542.8 L5.28 542.8" class="st1"/>
				</g>
				<g id="shape452-1106" v:mID="452" v:groupContext="shape">
					<title>Sheet.452</title>
					<path d="M0 542.8 L4.69 542.8" class="st1"/>
				</g>
			</g>
		</g>
		<g id="shape453-1109" v:mID="453" v:groupContext="shape" transform="translate(766.551,-455.211) scale(-1,1)">
			<title>Sheet.453</title>
			<path d="M0 542.8 L8.06 542.8" class="st1"/>
		</g>
		<g id="shape454-1112" v:mID="454" v:groupContext="shape" transform="translate(766.551,-470.005) scale(-1,1)">
			<title>Sheet.454</title>
			<path d="M0 542.8 L8.06 542.8" class="st1"/>
		</g>
		<g id="shape455-1115" v:mID="455" v:groupContext="shape" transform="translate(1301.3,87.5904) rotate(90) scale(-1,1)">
			<title>Sheet.455</title>
			<path d="M0 542.8 L1.66 542.8" class="st1"/>
		</g>
		<g id="shape456-1118" v:mID="456" v:groupContext="shape" transform="translate(1301.3,74.3062) rotate(90) scale(-1,1)">
			<title>Sheet.456</title>
			<path d="M0 542.8 L1.51 542.8" class="st1"/>
		</g>
		<g id="group458-1121" transform="translate(761.936,-411.248) scale(-1,1)" v:mID="458" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.192</title>
			<g id="shape459-1122" v:mID="459" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.459</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st30"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st30"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st30"/>
			</g>
			<g id="shape460-1127" v:mID="460" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.460</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape461-1129" v:mID="461" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.461</title>
			</g>
		</g>
		<g id="group462-1131" transform="translate(774.485,-411.248) scale(-1,1)" v:mID="462" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.200</title>
			<g id="shape463-1132" v:mID="463" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.463</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st30"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st30"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st30"/>
			</g>
			<g id="shape464-1137" v:mID="464" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.464</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape465-1139" v:mID="465" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.465</title>
			</g>
		</g>
		<g id="shape466-1141" v:mID="466" v:groupContext="shape" v:layerMember="1" transform="translate(757.359,-411.525)">
			<title>Dynamic connector.205</title>
			<path d="M0.81 535.71 L0.81 530.4 L13.36 530.4 L13.36 535.71" class="st1"/>
		</g>
		<g id="shape467-1144" v:mID="467" v:groupContext="shape" transform="translate(1307.25,109.939) rotate(90)">
			<title>Sheet.467</title>
			<path d="M0 542.8 L8.74 542.8" class="st1"/>
		</g>
		<g id="shape468-1147" v:mID="468" v:groupContext="shape" transform="translate(221.644,95.3153) rotate(-90)">
			<title>Sheet.468</title>
			<path d="M0 542.8 L7.72 542.8" class="st1"/>
		</g>
		<g id="shape469-1150" v:mID="469" v:groupContext="shape" transform="translate(1300.97,131.553) rotate(90)">
			<title>Sheet.469</title>
			<path d="M0 542.8 L1.83 542.8" class="st31"/>
		</g>
		<g id="shape470-1156" v:mID="470" v:groupContext="shape" transform="translate(1313.52,131.553) rotate(90)">
			<title>Sheet.470</title>
			<path d="M0 542.8 L3.83 542.8" class="st33"/>
		</g>
		<g id="shape471-1162" v:mID="471" v:groupContext="shape" transform="translate(221.644,72.7215) rotate(-90)">
			<title>Sheet.471</title>
			<path d="M0 542.8 L11.48 542.8" class="st34"/>
		</g>
		<g id="shape472-1168" v:mID="472" v:groupContext="shape" transform="translate(743.852,-490.323)">
			<title>Sheet.472</title>
			<desc>PADALARANG 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st36"/>
			<text x="1.2" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PADALARANG 2</text>		</g>
		<g id="shape474-1171" v:mID="474" v:groupContext="shape" transform="translate(763.663,608.81) rotate(180)">
			<title>Sheet.474</title>
			<path d="M0 542.8 L1.13 542.8" class="st37"/>
		</g>
		<g id="shape475-1177" v:mID="475" v:groupContext="shape" transform="translate(747.028,608.842) scale(1,-1)">
			<title>Sheet.475</title>
			<path d="M0 542.8 L2.3 542.8" class="st37"/>
		</g>
		<g id="group476-1182" transform="translate(1288.09,63.8169) rotate(90)" v:mID="476" v:groupContext="group">
			<title>Sheet.476</title>
			<g id="shape477-1183" v:mID="477" v:groupContext="shape" transform="translate(1.94844E-14,-1.67316)">
				<title>Sheet.477</title>
				<path d="M0 542.8 L4.45 542.8" class="st39"/>
			</g>
			<g id="shape478-1186" v:mID="478" v:groupContext="shape" transform="translate(0.889518,-0.836578)">
				<title>Sheet.478</title>
				<path d="M0 542.8 L2.67 542.8" class="st39"/>
			</g>
			<g id="shape479-1189" v:mID="479" v:groupContext="shape" transform="translate(1.77904,0)">
				<title>Sheet.479</title>
				<path d="M0 542.8 L0.89 542.8" class="st39"/>
			</g>
		</g>
		<g id="shape482-1192" v:mID="482" v:groupContext="shape" transform="translate(695.779,638.206) scale(1,-1)">
			<title>Sheet.482</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="group483-1194" transform="translate(690.76,615.598) scale(1,-1)" v:mID="483" v:groupContext="group">
			<title>Sheet.483</title>
			<g id="group484-1195" transform="translate(557.446,542.801) rotate(90) scale(-1,1)" v:mID="484" v:groupContext="group"
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
				<g id="shape485-1196" v:mID="485" v:groupContext="shape" v:layerMember="0">
					<title>Sheet.485</title>
					<path d="M0 542.8 A1.85071 2.0068 0 1 1 3.7 542.8 A1.85071 2.0068 0 1 1 7.4 542.8 A1.85071 2.0068 0 1 1 11.1
								 542.8 A1.85071 2.0068 0 1 1 14.79 542.8" class="st1"/>
					<path d="M0 542.8 L0 546.98" class="st1"/>
					<path d="M14.79 542.8 L14.79 546.98" class="st1"/>
				</g>
				<g id="shape486-1201" v:mID="486" v:groupContext="shape" v:layerMember="0" transform="translate(7.1311,2.34788)">
					<title>Sheet.486</title>
				</g>
				<g id="shape487-1203" v:mID="487" v:groupContext="shape" v:layerMember="0"
						transform="translate(-381.222,163.238) rotate(-45)">
					<title>Sheet.487</title>
				</g>
			</g>
			<g id="group488-1205" transform="translate(0,-1.50958)" v:mID="488" v:groupContext="group">
				<title>Sheet.488</title>
				<g id="group489-1206" transform="translate(0,-6.4157)" v:mID="489" v:groupContext="group">
					<title>Sheet.489</title>
					<g id="shape490-1207" v:mID="490" v:groupContext="shape" transform="translate(545.215,537.518) rotate(90)">
						<title>Sheet.490</title>
						<path d="M0 542.8 L5.28 542.8" class="st1"/>
					</g>
					<g id="shape491-1210" v:mID="491" v:groupContext="shape">
						<title>Sheet.491</title>
						<path d="M0 542.8 L4.69 542.8" class="st1"/>
					</g>
				</g>
				<g id="group492-1213" transform="translate(0,1080.32) scale(1,-1)" v:mID="492" v:groupContext="group">
					<title>Sheet.492</title>
					<g id="shape493-1214" v:mID="493" v:groupContext="shape" transform="translate(545.215,537.518) rotate(90)">
						<title>Sheet.493</title>
						<path d="M0 542.8 L5.28 542.8" class="st1"/>
					</g>
					<g id="shape494-1217" v:mID="494" v:groupContext="shape">
						<title>Sheet.494</title>
						<path d="M0 542.8 L4.69 542.8" class="st1"/>
					</g>
				</g>
			</g>
			<g id="shape495-1220" v:mID="495" v:groupContext="shape" transform="translate(10.4705,1070.81) rotate(180)">
				<title>Sheet.495</title>
				<path d="M0 542.8 L8.06 542.8" class="st1"/>
			</g>
			<g id="shape496-1223" v:mID="496" v:groupContext="shape" transform="translate(10.4705,1085.6) rotate(180)">
				<title>Sheet.496</title>
				<path d="M0 542.8 L8.06 542.8" class="st1"/>
			</g>
			<g id="shape497-1226" v:mID="497" v:groupContext="shape" transform="translate(545.215,528.008) rotate(90)">
				<title>Sheet.497</title>
				<path d="M0 542.8 L1.66 542.8" class="st1"/>
			</g>
			<g id="shape498-1229" v:mID="498" v:groupContext="shape" transform="translate(545.215,541.292) rotate(90)">
				<title>Sheet.498</title>
				<path d="M0 542.8 L1.51 542.8" class="st1"/>
			</g>
		</g>
		<g id="group499-1232" transform="translate(689.087,-410.927)" v:mID="499" v:groupContext="group">
			<title>Sheet.499</title>
			<g id="group500-1233" transform="translate(7.5292,-0.321204) scale(-1,1)" v:mID="500" v:groupContext="group"
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
				<g id="shape501-1234" v:mID="501" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.501</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 535.45 L3.19 537.37" class="st30"/>
					<path d="M3.19 542.8 L3.19 540.88" class="st30"/>
					<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st30"/>
				</g>
				<g id="shape502-1239" v:mID="502" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.502</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape503-1241" v:mID="503" v:groupContext="shape" v:layerMember="0"
						transform="translate(-0.729798,0.713712)">
					<title>Sheet.503</title>
				</g>
			</g>
			<g id="group504-1243" transform="translate(20.0779,-0.321204) scale(-1,1)" v:mID="504" v:groupContext="group"
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
				<g id="shape505-1244" v:mID="505" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.505</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 535.45 L3.19 537.37" class="st30"/>
					<path d="M3.19 542.8 L3.19 540.88" class="st30"/>
					<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st30"/>
				</g>
				<g id="shape506-1249" v:mID="506" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.506</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape507-1251" v:mID="507" v:groupContext="shape" v:layerMember="0"
						transform="translate(-0.729798,0.713712)">
					<title>Sheet.507</title>
				</g>
			</g>
			<g id="shape508-1253" v:mID="508" v:groupContext="shape" v:layerMember="1" transform="translate(2.95232,-0.597845)">
				<title>Dynamic connector.205</title>
				<path d="M0.81 535.71 L0.81 530.4 L13.36 530.4 L13.36 535.71" class="st1"/>
			</g>
		</g>
		<g id="shape509-1256" v:mID="509" v:groupContext="shape" transform="translate(1242.06,109.738) rotate(90)">
			<title>Sheet.509</title>
			<path d="M0 542.8 L8.9 542.8" class="st1"/>
		</g>
		<g id="shape510-1259" v:mID="510" v:groupContext="shape" transform="translate(156.324,95.3153) rotate(-90)">
			<title>Sheet.510</title>
			<path d="M0 542.8 L7.72 542.8" class="st1"/>
		</g>
		<g id="shape511-1262" v:mID="511" v:groupContext="shape" transform="translate(1235.65,131.553) rotate(90)">
			<title>Sheet.511</title>
			<path d="M0 542.8 L1.83 542.8" class="st31"/>
		</g>
		<g id="shape512-1267" v:mID="512" v:groupContext="shape" transform="translate(1248.2,131.553) rotate(90)">
			<title>Sheet.512</title>
			<path d="M0 542.8 L3.83 542.8" class="st33"/>
		</g>
		<g id="shape513-1272" v:mID="513" v:groupContext="shape" transform="translate(156.324,72.7215) rotate(-90)">
			<title>Sheet.513</title>
			<path d="M0 542.8 L11.48 542.8" class="st34"/>
		</g>
		<g id="shape514-1277" v:mID="514" v:groupContext="shape" transform="translate(678.846,-490.323)">
			<title>Sheet.514</title>
			<desc>PADALARANG 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st36"/>
			<text x="1.2" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PADALARANG 1</text>		</g>
		<g id="shape516-1280" v:mID="516" v:groupContext="shape" transform="translate(698.239,608.81) rotate(180)">
			<title>Sheet.516</title>
			<path d="M0 542.8 L1.13 542.8" class="st37"/>
		</g>
		<g id="shape517-1285" v:mID="517" v:groupContext="shape" transform="translate(681.604,608.842) scale(1,-1)">
			<title>Sheet.517</title>
			<path d="M0 542.8 L2.3 542.8" class="st37"/>
		</g>
		<g id="group518-1290" transform="translate(1222.67,63.8169) rotate(90)" v:mID="518" v:groupContext="group">
			<title>Sheet.518</title>
			<g id="shape519-1291" v:mID="519" v:groupContext="shape" transform="translate(1.94844E-14,-1.67316)">
				<title>Sheet.519</title>
				<path d="M0 542.8 L4.45 542.8" class="st39"/>
			</g>
			<g id="shape520-1294" v:mID="520" v:groupContext="shape" transform="translate(0.889518,-0.836578)">
				<title>Sheet.520</title>
				<path d="M0 542.8 L2.67 542.8" class="st39"/>
			</g>
			<g id="shape521-1297" v:mID="521" v:groupContext="shape" transform="translate(1.77904,0)">
				<title>Sheet.521</title>
				<path d="M0 542.8 L0.89 542.8" class="st39"/>
			</g>
		</g>
		<g id="shape524-1300" v:mID="524" v:groupContext="shape" transform="translate(185.388,638.384) scale(1,-1)">
			<title>Sheet.524</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="group525-1302" transform="translate(180.368,615.776) scale(1,-1)" v:mID="525" v:groupContext="group">
			<title>Sheet.525</title>
			<g id="group526-1303" transform="translate(557.446,542.801) rotate(90) scale(-1,1)" v:mID="526" v:groupContext="group"
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
				<g id="shape527-1304" v:mID="527" v:groupContext="shape" v:layerMember="0">
					<title>Sheet.527</title>
					<path d="M0 542.8 A1.85071 2.0068 0 1 1 3.7 542.8 A1.85071 2.0068 0 1 1 7.4 542.8 A1.85071 2.0068 0 1 1 11.1
								 542.8 A1.85071 2.0068 0 1 1 14.79 542.8" class="st1"/>
					<path d="M0 542.8 L0 546.98" class="st1"/>
					<path d="M14.79 542.8 L14.79 546.98" class="st1"/>
				</g>
				<g id="shape528-1309" v:mID="528" v:groupContext="shape" v:layerMember="0" transform="translate(7.1311,2.34788)">
					<title>Sheet.528</title>
				</g>
				<g id="shape529-1311" v:mID="529" v:groupContext="shape" v:layerMember="0"
						transform="translate(-381.222,163.238) rotate(-45)">
					<title>Sheet.529</title>
				</g>
			</g>
			<g id="group530-1313" transform="translate(0,-1.50958)" v:mID="530" v:groupContext="group">
				<title>Sheet.530</title>
				<g id="group531-1314" transform="translate(0,-6.4157)" v:mID="531" v:groupContext="group">
					<title>Sheet.531</title>
					<g id="shape532-1315" v:mID="532" v:groupContext="shape" transform="translate(545.215,537.518) rotate(90)">
						<title>Sheet.532</title>
						<path d="M0 542.8 L5.28 542.8" class="st1"/>
					</g>
					<g id="shape533-1318" v:mID="533" v:groupContext="shape">
						<title>Sheet.533</title>
						<path d="M0 542.8 L4.69 542.8" class="st1"/>
					</g>
				</g>
				<g id="group534-1321" transform="translate(0,1080.32) scale(1,-1)" v:mID="534" v:groupContext="group">
					<title>Sheet.534</title>
					<g id="shape535-1322" v:mID="535" v:groupContext="shape" transform="translate(545.215,537.518) rotate(90)">
						<title>Sheet.535</title>
						<path d="M0 542.8 L5.28 542.8" class="st1"/>
					</g>
					<g id="shape536-1325" v:mID="536" v:groupContext="shape">
						<title>Sheet.536</title>
						<path d="M0 542.8 L4.69 542.8" class="st1"/>
					</g>
				</g>
			</g>
			<g id="shape537-1328" v:mID="537" v:groupContext="shape" transform="translate(10.4705,1070.81) rotate(180)">
				<title>Sheet.537</title>
				<path d="M0 542.8 L8.06 542.8" class="st1"/>
			</g>
			<g id="shape538-1331" v:mID="538" v:groupContext="shape" transform="translate(10.4705,1085.6) rotate(180)">
				<title>Sheet.538</title>
				<path d="M0 542.8 L8.06 542.8" class="st1"/>
			</g>
			<g id="shape539-1334" v:mID="539" v:groupContext="shape" transform="translate(545.215,528.008) rotate(90)">
				<title>Sheet.539</title>
				<path d="M0 542.8 L1.66 542.8" class="st1"/>
			</g>
			<g id="shape540-1337" v:mID="540" v:groupContext="shape" transform="translate(545.215,541.292) rotate(90)">
				<title>Sheet.540</title>
				<path d="M0 542.8 L1.51 542.8" class="st1"/>
			</g>
		</g>
		<g id="group541-1340" transform="translate(178.695,-410.749)" v:mID="541" v:groupContext="group">
			<title>Sheet.541</title>
			<g id="group542-1341" transform="translate(7.5292,-0.321204) scale(-1,1)" v:mID="542" v:groupContext="group"
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
				<g id="shape543-1342" v:mID="543" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.543</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 535.45 L3.19 537.37" class="st30"/>
					<path d="M3.19 542.8 L3.19 540.88" class="st30"/>
					<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st30"/>
				</g>
				<g id="shape544-1347" v:mID="544" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.544</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape545-1349" v:mID="545" v:groupContext="shape" v:layerMember="0"
						transform="translate(-0.729798,0.713712)">
					<title>Sheet.545</title>
				</g>
			</g>
			<g id="group546-1351" transform="translate(20.0779,-0.321204) scale(-1,1)" v:mID="546" v:groupContext="group"
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
				<g id="shape547-1352" v:mID="547" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.547</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 535.45 L3.19 537.37" class="st30"/>
					<path d="M3.19 542.8 L3.19 540.88" class="st30"/>
					<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st30"/>
				</g>
				<g id="shape548-1357" v:mID="548" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.548</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape549-1359" v:mID="549" v:groupContext="shape" v:layerMember="0"
						transform="translate(-0.729798,0.713712)">
					<title>Sheet.549</title>
				</g>
			</g>
			<g id="shape550-1361" v:mID="550" v:groupContext="shape" v:layerMember="1" transform="translate(2.95232,-0.597845)">
				<title>Dynamic connector.205</title>
				<path d="M0.81 535.71 L0.81 530.4 L13.36 530.4 L13.36 535.71" class="st1"/>
			</g>
		</g>
		<g id="shape551-1364" v:mID="551" v:groupContext="shape" transform="translate(731.535,110.043) rotate(90)">
			<title>Sheet.551</title>
			<path d="M0 542.8 L8.77 542.8" class="st1"/>
		</g>
		<g id="shape552-1367" v:mID="552" v:groupContext="shape" transform="translate(-354.067,95.4932) rotate(-90)">
			<title>Sheet.552</title>
			<path d="M0 542.8 L7.72 542.8" class="st1"/>
		</g>
		<g id="shape553-1370" v:mID="553" v:groupContext="shape" transform="translate(725.261,131.731) rotate(90)">
			<title>Sheet.553</title>
			<path d="M0 542.8 L1.83 542.8" class="st31"/>
		</g>
		<g id="shape554-1375" v:mID="554" v:groupContext="shape" transform="translate(737.81,131.731) rotate(90)">
			<title>Sheet.554</title>
			<path d="M0 542.8 L3.83 542.8" class="st33"/>
		</g>
		<g id="shape555-1380" v:mID="555" v:groupContext="shape" transform="translate(-354.067,72.8995) rotate(-90)">
			<title>Sheet.555</title>
			<path d="M0 542.8 L11.48 542.8" class="st34"/>
		</g>
		<g id="shape556-1385" v:mID="556" v:groupContext="shape" transform="translate(168.61,-490.323)">
			<title>Sheet.556</title>
			<desc>TATA JABAR 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st36"/>
			<text x="3.49" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TATA JABAR 1</text>		</g>
		<g id="shape558-1388" v:mID="558" v:groupContext="shape" transform="translate(187.978,608.81) rotate(180)">
			<title>Sheet.558</title>
			<path d="M0 542.8 L1.13 542.8" class="st37"/>
		</g>
		<g id="shape559-1393" v:mID="559" v:groupContext="shape" transform="translate(171.343,608.842) scale(1,-1)">
			<title>Sheet.559</title>
			<path d="M0 542.8 L2.3 542.8" class="st37"/>
		</g>
		<g id="group560-1398" transform="translate(712.405,63.8169) rotate(90)" v:mID="560" v:groupContext="group">
			<title>Sheet.560</title>
			<g id="shape561-1399" v:mID="561" v:groupContext="shape" transform="translate(1.94844E-14,-1.67316)">
				<title>Sheet.561</title>
				<path d="M0 542.8 L4.45 542.8" class="st39"/>
			</g>
			<g id="shape562-1402" v:mID="562" v:groupContext="shape" transform="translate(0.889518,-0.836578)">
				<title>Sheet.562</title>
				<path d="M0 542.8 L2.67 542.8" class="st39"/>
			</g>
			<g id="shape563-1405" v:mID="563" v:groupContext="shape" transform="translate(1.77904,0)">
				<title>Sheet.563</title>
				<path d="M0 542.8 L0.89 542.8" class="st39"/>
			</g>
		</g>
		<g id="shape566-1408" v:mID="566" v:groupContext="shape" transform="translate(252.273,638.384) scale(1,-1)">
			<title>Sheet.566</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="group567-1410" transform="translate(247.253,615.776) scale(1,-1)" v:mID="567" v:groupContext="group">
			<title>Sheet.567</title>
			<g id="group568-1411" transform="translate(557.446,542.801) rotate(90) scale(-1,1)" v:mID="568" v:groupContext="group"
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
				<g id="shape569-1412" v:mID="569" v:groupContext="shape" v:layerMember="0">
					<title>Sheet.569</title>
					<path d="M0 542.8 A1.85071 2.0068 0 1 1 3.7 542.8 A1.85071 2.0068 0 1 1 7.4 542.8 A1.85071 2.0068 0 1 1 11.1
								 542.8 A1.85071 2.0068 0 1 1 14.79 542.8" class="st1"/>
					<path d="M0 542.8 L0 546.98" class="st1"/>
					<path d="M14.79 542.8 L14.79 546.98" class="st1"/>
				</g>
				<g id="shape570-1417" v:mID="570" v:groupContext="shape" v:layerMember="0" transform="translate(7.1311,2.34788)">
					<title>Sheet.570</title>
				</g>
				<g id="shape571-1419" v:mID="571" v:groupContext="shape" v:layerMember="0"
						transform="translate(-381.222,163.238) rotate(-45)">
					<title>Sheet.571</title>
				</g>
			</g>
			<g id="group572-1421" transform="translate(0,-1.50958)" v:mID="572" v:groupContext="group">
				<title>Sheet.572</title>
				<g id="group573-1422" transform="translate(0,-6.4157)" v:mID="573" v:groupContext="group">
					<title>Sheet.573</title>
					<g id="shape574-1423" v:mID="574" v:groupContext="shape" transform="translate(545.215,537.518) rotate(90)">
						<title>Sheet.574</title>
						<path d="M0 542.8 L5.28 542.8" class="st1"/>
					</g>
					<g id="shape575-1426" v:mID="575" v:groupContext="shape">
						<title>Sheet.575</title>
						<path d="M0 542.8 L4.69 542.8" class="st1"/>
					</g>
				</g>
				<g id="group576-1429" transform="translate(0,1080.32) scale(1,-1)" v:mID="576" v:groupContext="group">
					<title>Sheet.576</title>
					<g id="shape577-1430" v:mID="577" v:groupContext="shape" transform="translate(545.215,537.518) rotate(90)">
						<title>Sheet.577</title>
						<path d="M0 542.8 L5.28 542.8" class="st1"/>
					</g>
					<g id="shape578-1433" v:mID="578" v:groupContext="shape">
						<title>Sheet.578</title>
						<path d="M0 542.8 L4.69 542.8" class="st1"/>
					</g>
				</g>
			</g>
			<g id="shape579-1436" v:mID="579" v:groupContext="shape" transform="translate(10.4705,1070.81) rotate(180)">
				<title>Sheet.579</title>
				<path d="M0 542.8 L8.06 542.8" class="st1"/>
			</g>
			<g id="shape580-1439" v:mID="580" v:groupContext="shape" transform="translate(10.4705,1085.6) rotate(180)">
				<title>Sheet.580</title>
				<path d="M0 542.8 L8.06 542.8" class="st1"/>
			</g>
			<g id="shape581-1442" v:mID="581" v:groupContext="shape" transform="translate(545.215,528.008) rotate(90)">
				<title>Sheet.581</title>
				<path d="M0 542.8 L1.66 542.8" class="st1"/>
			</g>
			<g id="shape582-1445" v:mID="582" v:groupContext="shape" transform="translate(545.215,541.292) rotate(90)">
				<title>Sheet.582</title>
				<path d="M0 542.8 L1.51 542.8" class="st1"/>
			</g>
		</g>
		<g id="group583-1448" transform="translate(245.58,-410.749)" v:mID="583" v:groupContext="group">
			<title>Sheet.583</title>
			<g id="group584-1449" transform="translate(7.5292,-0.321204) scale(-1,1)" v:mID="584" v:groupContext="group"
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
				<g id="shape585-1450" v:mID="585" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.585</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 535.45 L3.19 537.37" class="st30"/>
					<path d="M3.19 542.8 L3.19 540.88" class="st30"/>
					<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st30"/>
				</g>
				<g id="shape586-1455" v:mID="586" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.586</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape587-1457" v:mID="587" v:groupContext="shape" v:layerMember="0"
						transform="translate(-0.729798,0.713712)">
					<title>Sheet.587</title>
				</g>
			</g>
			<g id="group588-1459" transform="translate(20.0779,-0.321204) scale(-1,1)" v:mID="588" v:groupContext="group"
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
				<g id="shape589-1460" v:mID="589" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.589</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 535.45 L3.19 537.37" class="st30"/>
					<path d="M3.19 542.8 L3.19 540.88" class="st30"/>
					<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st30"/>
				</g>
				<g id="shape590-1465" v:mID="590" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.590</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape591-1467" v:mID="591" v:groupContext="shape" v:layerMember="0"
						transform="translate(-0.729798,0.713712)">
					<title>Sheet.591</title>
				</g>
			</g>
			<g id="shape592-1469" v:mID="592" v:groupContext="shape" v:layerMember="1" transform="translate(2.95232,-0.597845)">
				<title>Dynamic connector.205</title>
				<path d="M0.81 535.71 L0.81 530.4 L13.36 530.4 L13.36 535.71" class="st1"/>
			</g>
		</g>
		<g id="shape593-1472" v:mID="593" v:groupContext="shape" transform="translate(798.42,110.043) rotate(90)">
			<title>Sheet.593</title>
			<path d="M0 542.8 L8.77 542.8" class="st1"/>
		</g>
		<g id="shape594-1475" v:mID="594" v:groupContext="shape" transform="translate(-287.182,95.4932) rotate(-90)">
			<title>Sheet.594</title>
			<path d="M0 542.8 L7.72 542.8" class="st1"/>
		</g>
		<g id="shape595-1478" v:mID="595" v:groupContext="shape" transform="translate(792.146,131.731) rotate(90)">
			<title>Sheet.595</title>
			<path d="M0 542.8 L1.83 542.8" class="st31"/>
		</g>
		<g id="shape596-1483" v:mID="596" v:groupContext="shape" transform="translate(804.695,131.731) rotate(90)">
			<title>Sheet.596</title>
			<path d="M0 542.8 L3.83 542.8" class="st33"/>
		</g>
		<g id="shape597-1488" v:mID="597" v:groupContext="shape" transform="translate(-287.182,72.8995) rotate(-90)">
			<title>Sheet.597</title>
			<path d="M0 542.8 L11.48 542.8" class="st34"/>
		</g>
		<g id="shape598-1493" v:mID="598" v:groupContext="shape" transform="translate(234.42,-490.323)">
			<title>Sheet.598</title>
			<desc>TATA JABAR 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="538.801" width="40.92" height="8"/>
			<rect x="0" y="534.801" width="40.9117" height="8" class="st36"/>
			<text x="3.49" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TATA JABAR 2</text>		</g>
		<g id="shape600-1496" v:mID="600" v:groupContext="shape" transform="translate(254.83,608.81) rotate(180)">
			<title>Sheet.600</title>
			<path d="M0 542.8 L1.13 542.8" class="st37"/>
		</g>
		<g id="shape601-1501" v:mID="601" v:groupContext="shape" transform="translate(238.195,608.842) scale(1,-1)">
			<title>Sheet.601</title>
			<path d="M0 542.8 L2.3 542.8" class="st37"/>
		</g>
		<g id="group602-1506" transform="translate(779.256,63.8169) rotate(90)" v:mID="602" v:groupContext="group">
			<title>Sheet.602</title>
			<g id="shape603-1507" v:mID="603" v:groupContext="shape" transform="translate(1.94844E-14,-1.67316)">
				<title>Sheet.603</title>
				<path d="M0 542.8 L4.45 542.8" class="st39"/>
			</g>
			<g id="shape604-1510" v:mID="604" v:groupContext="shape" transform="translate(0.889518,-0.836578)">
				<title>Sheet.604</title>
				<path d="M0 542.8 L2.67 542.8" class="st39"/>
			</g>
			<g id="shape605-1513" v:mID="605" v:groupContext="shape" transform="translate(1.77904,0)">
				<title>Sheet.605</title>
				<path d="M0 542.8 L0.89 542.8" class="st39"/>
			</g>
		</g>
		<g id="shape606-1516" v:mID="606" v:groupContext="shape" transform="translate(563.852,-517.504)">
			<title>Sheet.606</title>
			<desc>UNIT 5</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="12.3736" cy="538.801" width="24.75" height="8"/>
			<rect x="0" y="534.801" width="24.7472" height="8" class="st25"/>
			<text x="1.34" y="541.2" class="st26" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 5</text>		</g>
		<g id="shape607-1519" v:mID="607" v:groupContext="shape" transform="translate(537.178,-461.28)">
			<title>Sheet.607</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="538.801" width="23.65" height="8"/>
			<rect x="0" y="534.801" width="23.6487" height="8" class="st25"/>
			<text x="3.63" y="529.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1"
						dy="1.2em" class="st28">35 MVA<v:newlineChar/></tspan><tspan x="6.88" dy="1.2em" class="st28">6,3/</tspan><tspan
						x="4" dy="1.2em" class="st28">150KV</tspan></text>		</g>
		<g id="group610-1525" transform="translate(458.078,686.075) scale(1,-1)" v:mID="610" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.215</title>
			<g id="shape611-1526" v:mID="611" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.611</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape612-1531" v:mID="612" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.612</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape613-1533" v:mID="613" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.613</title>
			</g>
		</g>
		<g id="group614-1535" transform="translate(470.627,686.075) scale(1,-1)" v:mID="614" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.223</title>
			<g id="shape615-1536" v:mID="615" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.615</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape616-1541" v:mID="616" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.616</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape617-1543" v:mID="617" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.617</title>
			</g>
		</g>
		<g id="shape618-1545" v:mID="618" v:groupContext="shape" v:layerMember="1" transform="translate(461.359,-384.255)">
			<title>Dynamic connector.228</title>
			<path d="M0.81 535.71 L13.36 535.71" class="st1"/>
		</g>
		<g id="shape619-1548" v:mID="619" v:groupContext="shape" transform="translate(465.099,-367.237)">
			<title>Sheet.619</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="shape620-1550" v:mID="620" v:groupContext="shape" transform="translate(-74.3558,161.332) rotate(-90)">
			<title>Sheet.620</title>
			<path d="M0 542.8 L4.55 542.8" class="st1"/>
		</g>
		<g id="shape621-1553" v:mID="621" v:groupContext="shape" transform="translate(-74.3558,180.012) rotate(-90)">
			<title>Sheet.621</title>
			<path d="M0 542.8 L4.45 542.8" class="st1"/>
		</g>
		<g id="shape622-1556" v:mID="622" v:groupContext="shape" transform="translate(-80.6301,143.274) rotate(-90)">
			<title>Sheet.622</title>
			<path d="M0 542.8 L7.69 542.8" class="st33"/>
		</g>
		<g id="shape623-1561" v:mID="623" v:groupContext="shape" transform="translate(-68.0815,143.274) rotate(-90)">
			<title>Sheet.623</title>
			<path d="M0 542.8 L4.01 542.8" class="st33"/>
		</g>
		<g id="shape625-1566" v:mID="625" v:groupContext="shape" transform="translate(465.099,-309.507)">
			<title>Sheet.625</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
		</g>
		<g id="shape626-1568" v:mID="626" v:groupContext="shape" transform="translate(1011.25,216.572) rotate(90)">
			<title>Sheet.626</title>
			<path d="M0 542.8 L2.49 542.8" class="st2"/>
		</g>
		<g id="group627-1571" transform="translate(472.21,-297.82) scale(-1,1)" v:mID="627" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
			</v:userDefs>
			<title>Make contact.627</title>
			<g id="shape628-1572" v:mID="628" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.628</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st3"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st3"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st3"/>
			</g>
			<g id="shape629-1577" v:mID="629" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.629</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape630-1579" v:mID="630" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.630</title>
			</g>
		</g>
		<g id="shape631-1581" v:mID="631" v:groupContext="shape" transform="translate(-74.3558,237.618) rotate(-90)">
			<title>Sheet.631</title>
			<path d="M0 542.8 L4.32 542.8" class="st2"/>
		</g>
		<g id="shape632-1584" v:mID="632" v:groupContext="shape" transform="translate(1011.25,244.982) rotate(90)">
			<title>Sheet.632</title>
			<path d="M0 542.8 L4.1 542.8" class="st2"/>
		</g>
		<g id="shape633-1587" v:mID="633" v:groupContext="shape" transform="translate(-74.3558,216.572) rotate(-90)">
			<title>Sheet.633</title>
			<path d="M0 542.8 L9.83 542.8" class="st2"/>
		</g>
		<g id="shape635-1590" v:mID="635" v:groupContext="shape" transform="translate(460.08,-344.999)">
			<title>Sheet.635</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st29"/>
		</g>
		<g id="shape636-1592" v:mID="636" v:groupContext="shape" transform="translate(460.08,-336.104)">
			<title>Sheet.636</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st41"/>
		</g>
		<g id="shape637-1594" v:mID="637" v:groupContext="shape" transform="translate(772.423,694.492) rotate(180)">
			<title>Sheet.637</title>
			<path d="M0 542.8 L193.79 542.8" class="st42"/>
		</g>
		<g id="shape638-1600" v:mID="638" v:groupContext="shape" transform="translate(772.423,705.831) rotate(180)">
			<title>Sheet.638</title>
			<path d="M0 542.8 L146.21 542.8" class="st42"/>
		</g>
		<g id="shape640-1605" v:mID="640" v:groupContext="shape" transform="translate(136.882,-309.403)">
			<title>Sheet.640</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
		</g>
		<g id="shape641-1607" v:mID="641" v:groupContext="shape" transform="translate(683.03,216.675) rotate(90)">
			<title>Sheet.641</title>
			<path d="M0 542.8 L2.49 542.8" class="st2"/>
		</g>
		<g id="group642-1610" transform="translate(143.993,-297.633) scale(-1,1)" v:mID="642" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
			</v:userDefs>
			<title>Make contact.459</title>
			<g id="shape643-1611" v:mID="643" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.14886E-06)">
				<title>Sheet.643</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.28 L3.19 537.25" class="st3"/>
				<path d="M3.19 542.8 L3.19 540.84" class="st3"/>
				<path d="M0.87 537.55 L3.19 540.84 L3.19 542.8" class="st3"/>
			</g>
			<g id="shape644-1616" v:mID="644" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.21296)">
				<title>Sheet.644</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape645-1618" v:mID="645" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.729797)">
				<title>Sheet.645</title>
			</g>
		</g>
		<g id="shape646-1620" v:mID="646" v:groupContext="shape" transform="translate(-402.573,237.639) rotate(-90)">
			<title>Sheet.646</title>
			<path d="M0 542.8 L4.24 542.8" class="st2"/>
		</g>
		<g id="shape647-1623" v:mID="647" v:groupContext="shape" transform="translate(683.03,245.169) rotate(90)">
			<title>Sheet.647</title>
			<path d="M0 542.8 L4.02 542.8" class="st2"/>
		</g>
		<g id="shape648-1626" v:mID="648" v:groupContext="shape" transform="translate(-402.573,216.533) rotate(-90)">
			<title>Sheet.648</title>
			<path d="M0 542.8 L9.66 542.8" class="st2"/>
		</g>
		<g id="shape649-1629" v:mID="649" v:groupContext="shape" transform="translate(55.1148,-336.145)">
			<title>Sheet.649</title>
			<path d="M0 542.8 L85.04 542.8" class="st2"/>
		</g>
		<g id="shape650-1632" v:mID="650" v:groupContext="shape" transform="translate(436.293,-360.956)">
			<title>Sheet.650</title>
			<desc>7 MVA I 70/6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="531.715" width="28.78" height="22.1732"/>
			<rect x="0" y="520.628" width="28.7783" height="22.1732" class="st25"/>
			<text x="4.75" y="529.91" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>7 MVA I<v:newlineChar/><tspan
						x="3.14" dy="1.2em" class="st28">70/6,3KV</tspan></text>		</g>
		<g id="shape651-1636" v:mID="651" v:groupContext="shape" transform="translate(491.339,-360.956)">
			<title>Sheet.651</title>
			<desc>7 MVA II 70/6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="531.715" width="28.78" height="22.1732"/>
			<rect x="0" y="520.628" width="28.7783" height="22.1732" class="st25"/>
			<text x="4" y="529.91" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>7 MVA II<v:newlineChar/><tspan
						x="3.14" dy="1.2em" class="st28">70/6,3KV</tspan></text>		</g>
		<g id="shape652-1640" v:mID="652" v:groupContext="shape" transform="translate(685.837,-381.441)">
			<title>Sheet.652</title>
			<desc>LINE 6,3 KV TO SENTRAL DIESEL</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.402" cy="538.801" width="88.81" height="8"/>
			<rect x="0" y="534.801" width="88.804" height="8" class="st25"/>
			<text x="6.06" y="540.6" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3 KV TO SENTRAL DIESEL</text>		</g>
		<g id="shape654-1643" v:mID="654" v:groupContext="shape" transform="translate(1203.03,270.746) rotate(90)">
			<title>Sheet.654</title>
			<path d="M0 542.8 L270.48 542.8" class="st43"/>
		</g>
		<g id="shape655-1646" v:mID="655" v:groupContext="shape" transform="translate(660.23,-272.055)">
			<title>Sheet.655</title>
			<path d="M0 542.8 L68.03 542.8" class="st43"/>
		</g>
		<g id="shape656-1649" v:mID="656" v:groupContext="shape" transform="translate(185.46,270.746) rotate(-90)">
			<title>Sheet.656</title>
			<path d="M0 542.8 L34.02 542.8" class="st43"/>
		</g>
		<g id="shape657-1652" v:mID="657" v:groupContext="shape" transform="translate(728.262,-306.071)">
			<title>Sheet.657</title>
			<path d="M0 542.8 L277.8 542.8" class="st43"/>
		</g>
		<g id="shape658-1655" v:mID="658" v:groupContext="shape" transform="translate(1548.86,236.73) rotate(90)">
			<title>Sheet.658</title>
			<path d="M0 542.8 L304.28 542.8" class="st43"/>
		</g>
		<g id="shape659-1658" v:mID="659" v:groupContext="shape" transform="translate(660.23,-1.63024)">
			<title>Sheet.659</title>
			<path d="M0 542.8 L345.83 542.8" class="st43"/>
		</g>
		<g id="shape660-1661" v:mID="660" v:groupContext="shape" transform="translate(543.551,212.636) rotate(90)">
			<title>Sheet.660</title>
			<path d="M0 542.8 L329.42 542.8" class="st44"/>
		</g>
		<g id="shape661-1664" v:mID="661" v:groupContext="shape" transform="translate(362.593,-271.981)">
			<title>Sheet.661</title>
			<path d="M0 542.8 L48.82 542.8" class="st44"/>
		</g>
		<g id="shape662-1667" v:mID="662" v:groupContext="shape" transform="translate(-180.209,270.746) rotate(-90)">
			<title>Sheet.662</title>
			<path d="M0 542.8 L58.11 542.8" class="st44"/>
		</g>
		<g id="shape663-1670" v:mID="663" v:groupContext="shape" transform="translate(0.952475,-330.166)">
			<title>Sheet.663</title>
			<path d="M0 542.8 L361.64 542.8" class="st44"/>
		</g>
		<g id="shape664-1673" v:mID="664" v:groupContext="shape" transform="translate(950.748,271.567) rotate(90)">
			<title>Sheet.664</title>
			<path d="M0 542.8 L270.26 542.8" class="st44"/>
		</g>
		<g id="shape665-1676" v:mID="665" v:groupContext="shape" transform="translate(2.3698,-0.809688)">
			<title>Sheet.665</title>
			<path d="M0 542.8 L405.58 542.8" class="st44"/>
		</g>
		<g id="shape668-1679" v:mID="668" v:groupContext="shape" transform="translate(313.437,-432.987)">
			<title>Sheet.668</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="group669-1681" transform="translate(314.602,-410.659) scale(-1,1)" v:mID="669" v:groupContext="group"
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
			<title>Make contact.669</title>
			<g id="shape670-1682" v:mID="670" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.670</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape671-1687" v:mID="671" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.671</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape672-1689" v:mID="672" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.672</title>
			</g>
		</g>
		<g id="group673-1691" transform="translate(327.15,-410.659) scale(-1,1)" v:mID="673" v:groupContext="group"
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
			<title>Make contact.673</title>
			<g id="shape674-1692" v:mID="674" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.674</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape675-1697" v:mID="675" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.675</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape676-1699" v:mID="676" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.676</title>
			</g>
		</g>
		<g id="shape677-1701" v:mID="677" v:groupContext="shape" v:layerMember="1" transform="translate(309.696,-411.758)">
			<title>Dynamic connector.677</title>
			<path d="M0.81 535.71 L0.81 530.4 L13.36 530.4 L13.36 535.71" class="st1"/>
		</g>
		<g id="shape678-1704" v:mID="678" v:groupContext="shape" transform="translate(853.31,132.143) rotate(90)">
			<title>Sheet.678</title>
			<path d="M0 542.8 L1.51 542.8" class="st31"/>
		</g>
		<g id="shape679-1709" v:mID="679" v:groupContext="shape" transform="translate(865.859,132.143) rotate(90)">
			<title>Sheet.679</title>
			<path d="M0 542.8 L3.51 542.8" class="st33"/>
		</g>
		<g id="shape680-1714" v:mID="680" v:groupContext="shape" transform="translate(859.585,109.814) rotate(90)">
			<title>Sheet.680</title>
			<path d="M0 542.8 L8.81 542.8" class="st1"/>
		</g>
		<g id="shape681-1717" v:mID="681" v:groupContext="shape" transform="translate(306.09,-517.504)">
			<title>Sheet.681</title>
			<desc>UNIT 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="12.3736" cy="538.801" width="24.75" height="8"/>
			<rect x="0" y="534.801" width="24.7472" height="8" class="st25"/>
			<text x="1.34" y="541.2" class="st26" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 1</text>		</g>
		<g id="shape683-1720" v:mID="683" v:groupContext="shape" transform="translate(308.476,-464.069)">
			<title>Sheet.683</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape684-1722" v:mID="684" v:groupContext="shape" transform="translate(308.476,-455.174)">
			<title>Sheet.684</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st45"/>
		</g>
		<g id="shape685-1724" v:mID="685" v:groupContext="shape" transform="translate(859.565,87.4638) rotate(90)">
			<title>Sheet.685</title>
			<path d="M0 542.8 L8.1 542.8" class="st46"/>
		</g>
		<g id="shape688-1727" v:mID="688" v:groupContext="shape" transform="translate(377.582,-432.987)">
			<title>Sheet.688</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="group689-1729" transform="translate(378.747,-410.659) scale(-1,1)" v:mID="689" v:groupContext="group"
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
			<title>Make contact.689</title>
			<g id="shape690-1730" v:mID="690" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.690</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape691-1735" v:mID="691" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.691</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape692-1737" v:mID="692" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.692</title>
			</g>
		</g>
		<g id="group693-1739" transform="translate(391.296,-410.659) scale(-1,1)" v:mID="693" v:groupContext="group"
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
			<title>Make contact.693</title>
			<g id="shape694-1740" v:mID="694" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.694</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape695-1745" v:mID="695" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.695</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape696-1747" v:mID="696" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.696</title>
			</g>
		</g>
		<g id="shape697-1749" v:mID="697" v:groupContext="shape" v:layerMember="1" transform="translate(373.842,-411.758)">
			<title>Dynamic connector.697</title>
			<path d="M0.81 535.71 L0.81 530.4 L13.36 530.4 L13.36 535.71" class="st1"/>
		</g>
		<g id="shape698-1752" v:mID="698" v:groupContext="shape" transform="translate(917.455,132.143) rotate(90)">
			<title>Sheet.698</title>
			<path d="M0 542.8 L1.51 542.8" class="st31"/>
		</g>
		<g id="shape699-1757" v:mID="699" v:groupContext="shape" transform="translate(930.004,132.143) rotate(90)">
			<title>Sheet.699</title>
			<path d="M0 542.8 L3.51 542.8" class="st33"/>
		</g>
		<g id="shape700-1762" v:mID="700" v:groupContext="shape" transform="translate(923.73,109.814) rotate(90)">
			<title>Sheet.700</title>
			<path d="M0 542.8 L8.81 542.8" class="st1"/>
		</g>
		<g id="shape701-1765" v:mID="701" v:groupContext="shape" transform="translate(369.026,-517.504)">
			<title>Sheet.701</title>
			<desc>UNIT 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="12.3736" cy="538.801" width="24.75" height="8"/>
			<rect x="0" y="534.801" width="24.7472" height="8" class="st25"/>
			<text x="1.34" y="541.2" class="st26" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 2</text>		</g>
		<g id="shape703-1768" v:mID="703" v:groupContext="shape" transform="translate(372.621,-464.069)">
			<title>Sheet.703</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape704-1770" v:mID="704" v:groupContext="shape" transform="translate(372.621,-455.174)">
			<title>Sheet.704</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st45"/>
		</g>
		<g id="shape705-1772" v:mID="705" v:groupContext="shape" transform="translate(923.711,87.4638) rotate(90)">
			<title>Sheet.705</title>
			<path d="M0 542.8 L8.1 542.8" class="st46"/>
		</g>
		<g id="shape708-1775" v:mID="708" v:groupContext="shape" transform="translate(441.746,-433.037)">
			<title>Sheet.708</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="group709-1777" transform="translate(442.911,-410.709) scale(-1,1)" v:mID="709" v:groupContext="group"
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
			<title>Make contact.709</title>
			<g id="shape710-1778" v:mID="710" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.710</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape711-1783" v:mID="711" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.711</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape712-1785" v:mID="712" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.712</title>
			</g>
		</g>
		<g id="group713-1787" transform="translate(455.46,-410.709) scale(-1,1)" v:mID="713" v:groupContext="group"
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
			<title>Make contact.713</title>
			<g id="shape714-1788" v:mID="714" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.714</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape715-1793" v:mID="715" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.715</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape716-1795" v:mID="716" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.716</title>
			</g>
		</g>
		<g id="shape717-1797" v:mID="717" v:groupContext="shape" v:layerMember="1" transform="translate(438.006,-411.808)">
			<title>Dynamic connector.717</title>
			<path d="M0.81 535.71 L0.81 530.4 L13.36 530.4 L13.36 535.71" class="st1"/>
		</g>
		<g id="shape718-1800" v:mID="718" v:groupContext="shape" transform="translate(981.619,132.093) rotate(90)">
			<title>Sheet.718</title>
			<path d="M0 542.8 L1.51 542.8" class="st31"/>
		</g>
		<g id="shape719-1805" v:mID="719" v:groupContext="shape" transform="translate(994.168,132.093) rotate(90)">
			<title>Sheet.719</title>
			<path d="M0 542.8 L3.51 542.8" class="st33"/>
		</g>
		<g id="shape720-1810" v:mID="720" v:groupContext="shape" transform="translate(987.894,109.765) rotate(90)">
			<title>Sheet.720</title>
			<path d="M0 542.8 L8.81 542.8" class="st1"/>
		</g>
		<g id="shape721-1813" v:mID="721" v:groupContext="shape" transform="translate(436.293,-517.504)">
			<title>Sheet.721</title>
			<desc>UNIT 3</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="12.3736" cy="538.801" width="24.75" height="8"/>
			<rect x="0" y="534.801" width="24.7472" height="8" class="st25"/>
			<text x="1.34" y="541.2" class="st26" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 3</text>		</g>
		<g id="shape723-1816" v:mID="723" v:groupContext="shape" transform="translate(436.785,-464.119)">
			<title>Sheet.723</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape724-1818" v:mID="724" v:groupContext="shape" transform="translate(436.785,-455.223)">
			<title>Sheet.724</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st45"/>
		</g>
		<g id="shape725-1820" v:mID="725" v:groupContext="shape" transform="translate(987.875,87.414) rotate(90)">
			<title>Sheet.725</title>
			<path d="M0 542.8 L8.1 542.8" class="st46"/>
		</g>
		<g id="shape728-1823" v:mID="728" v:groupContext="shape" transform="translate(504.533,-433.037)">
			<title>Sheet.728</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="group729-1825" transform="translate(505.698,-410.709) scale(-1,1)" v:mID="729" v:groupContext="group"
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
			<title>Make contact.729</title>
			<g id="shape730-1826" v:mID="730" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.730</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape731-1831" v:mID="731" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.731</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape732-1833" v:mID="732" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.732</title>
			</g>
		</g>
		<g id="group733-1835" transform="translate(518.247,-410.709) scale(-1,1)" v:mID="733" v:groupContext="group"
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
			<title>Make contact.733</title>
			<g id="shape734-1836" v:mID="734" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.734</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape735-1841" v:mID="735" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.735</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape736-1843" v:mID="736" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.736</title>
			</g>
		</g>
		<g id="shape737-1845" v:mID="737" v:groupContext="shape" v:layerMember="1" transform="translate(500.793,-411.808)">
			<title>Dynamic connector.737</title>
			<path d="M0.81 535.71 L0.81 530.4 L13.36 530.4 L13.36 535.71" class="st1"/>
		</g>
		<g id="shape738-1848" v:mID="738" v:groupContext="shape" transform="translate(1044.41,132.093) rotate(90)">
			<title>Sheet.738</title>
			<path d="M0 542.8 L1.51 542.8" class="st31"/>
		</g>
		<g id="shape739-1853" v:mID="739" v:groupContext="shape" transform="translate(1056.96,132.093) rotate(90)">
			<title>Sheet.739</title>
			<path d="M0 542.8 L3.51 542.8" class="st33"/>
		</g>
		<g id="shape740-1858" v:mID="740" v:groupContext="shape" transform="translate(1050.68,109.765) rotate(90)">
			<title>Sheet.740</title>
			<path d="M0 542.8 L8.81 542.8" class="st1"/>
		</g>
		<g id="shape742-1861" v:mID="742" v:groupContext="shape" transform="translate(499.572,-464.119)">
			<title>Sheet.742</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape743-1863" v:mID="743" v:groupContext="shape" transform="translate(499.572,-455.223)">
			<title>Sheet.743</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st45"/>
		</g>
		<g id="shape744-1865" v:mID="744" v:groupContext="shape" transform="translate(1050.66,87.414) rotate(90)">
			<title>Sheet.744</title>
			<path d="M0 542.8 L8.1 542.8" class="st46"/>
		</g>
		<g id="shape747-1868" v:mID="747" v:groupContext="shape" transform="translate(567.382,-433.1)">
			<title>Sheet.747</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="group748-1870" transform="translate(568.547,-410.772) scale(-1,1)" v:mID="748" v:groupContext="group"
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
			<title>Make contact.748</title>
			<g id="shape749-1871" v:mID="749" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.749</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape750-1876" v:mID="750" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.750</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape751-1878" v:mID="751" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.751</title>
			</g>
		</g>
		<g id="group752-1880" transform="translate(581.095,-410.772) scale(-1,1)" v:mID="752" v:groupContext="group"
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
			<title>Make contact.752</title>
			<g id="shape753-1881" v:mID="753" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.753</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape754-1886" v:mID="754" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.754</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape755-1888" v:mID="755" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.755</title>
			</g>
		</g>
		<g id="shape756-1890" v:mID="756" v:groupContext="shape" v:layerMember="1" transform="translate(563.641,-411.871)">
			<title>Dynamic connector.756</title>
			<path d="M0.81 535.71 L0.81 530.4 L13.36 530.4 L13.36 535.71" class="st1"/>
		</g>
		<g id="shape757-1893" v:mID="757" v:groupContext="shape" transform="translate(1107.25,132.03) rotate(90)">
			<title>Sheet.757</title>
			<path d="M0 542.8 L1.51 542.8" class="st31"/>
		</g>
		<g id="shape758-1898" v:mID="758" v:groupContext="shape" transform="translate(1119.8,132.03) rotate(90)">
			<title>Sheet.758</title>
			<path d="M0 542.8 L3.51 542.8" class="st33"/>
		</g>
		<g id="shape759-1903" v:mID="759" v:groupContext="shape" transform="translate(1113.53,109.702) rotate(90)">
			<title>Sheet.759</title>
			<path d="M0 542.8 L8.81 542.8" class="st1"/>
		</g>
		<g id="shape761-1906" v:mID="761" v:groupContext="shape" transform="translate(562.421,-464.182)">
			<title>Sheet.761</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape762-1908" v:mID="762" v:groupContext="shape" transform="translate(562.421,-455.286)">
			<title>Sheet.762</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st45"/>
		</g>
		<g id="shape763-1910" v:mID="763" v:groupContext="shape" transform="translate(1113.51,87.351) rotate(90)">
			<title>Sheet.763</title>
			<path d="M0 542.8 L8.1 542.8" class="st46"/>
		</g>
		<g id="shape766-1913" v:mID="766" v:groupContext="shape" transform="translate(630.917,-432.987)">
			<title>Sheet.766</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="group767-1915" transform="translate(632.082,-410.659) scale(-1,1)" v:mID="767" v:groupContext="group"
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
			<g id="shape768-1916" v:mID="768" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.768</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape769-1921" v:mID="769" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.769</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape770-1923" v:mID="770" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.770</title>
			</g>
		</g>
		<g id="group771-1925" transform="translate(644.631,-410.659) scale(-1,1)" v:mID="771" v:groupContext="group"
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
			<g id="shape772-1926" v:mID="772" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.772</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape773-1931" v:mID="773" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.773</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape774-1933" v:mID="774" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.774</title>
			</g>
		</g>
		<g id="shape775-1935" v:mID="775" v:groupContext="shape" v:layerMember="1" transform="translate(627.177,-411.758)">
			<title>Dynamic connector.132</title>
			<path d="M0.81 535.71 L0.81 530.4 L13.36 530.4 L13.36 535.71" class="st1"/>
		</g>
		<g id="shape776-1938" v:mID="776" v:groupContext="shape" transform="translate(1170.79,132.143) rotate(90)">
			<title>Sheet.776</title>
			<path d="M0 542.8 L1.51 542.8" class="st31"/>
		</g>
		<g id="shape777-1943" v:mID="777" v:groupContext="shape" transform="translate(1183.34,132.143) rotate(90)">
			<title>Sheet.777</title>
			<path d="M0 542.8 L3.51 542.8" class="st33"/>
		</g>
		<g id="shape778-1948" v:mID="778" v:groupContext="shape" transform="translate(1177.06,109.814) rotate(90)">
			<title>Sheet.778</title>
			<path d="M0 542.8 L8.81 542.8" class="st1"/>
		</g>
		<g id="shape779-1951" v:mID="779" v:groupContext="shape" transform="translate(624.145,-517.504)">
			<title>Sheet.779</title>
			<desc>UNIT 6</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="12.3736" cy="538.801" width="24.75" height="8"/>
			<rect x="0" y="534.801" width="24.7472" height="8" class="st25"/>
			<text x="1.34" y="541.2" class="st26" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 6</text>		</g>
		<g id="shape781-1954" v:mID="781" v:groupContext="shape" transform="translate(625.956,-464.069)">
			<title>Sheet.781</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape782-1956" v:mID="782" v:groupContext="shape" transform="translate(625.956,-455.174)">
			<title>Sheet.782</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st45"/>
		</g>
		<g id="shape783-1958" v:mID="783" v:groupContext="shape" transform="translate(1177.05,87.4638) rotate(90)">
			<title>Sheet.783</title>
			<path d="M0 542.8 L8.1 542.8" class="st46"/>
		</g>
		<g id="shape784-1961" v:mID="784" v:groupContext="shape" transform="translate(-487.682,206.392) rotate(-90)">
			<title>Sheet.784</title>
			<path d="M0 542.8 L21.26 542.8" class="st2"/>
		</g>
		<g id="shape785-1964" v:mID="785" v:groupContext="shape" transform="translate(-487.652,186.55) rotate(-90)">
			<title>Sheet.785</title>
			<path d="M5.41 542.8 L5.77 542.8 L7.38 542.8" class="st47"/>
		</g>
		<g id="shape787-1970" v:mID="787" v:groupContext="shape" transform="translate(35.2242,180.175) rotate(-90)">
			<title>Sheet.787</title>
			<path d="M0 542.8 L28.48 542.8" class="st7"/>
		</g>
		<g id="shape789-1973" v:mID="789" v:groupContext="shape" transform="translate(574.679,-309.233)">
			<title>Sheet.789</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
		</g>
		<g id="shape790-1975" v:mID="790" v:groupContext="shape" transform="translate(1120.83,216.846) rotate(90)">
			<title>Sheet.790</title>
			<path d="M0 542.8 L2.49 542.8" class="st2"/>
		</g>
		<g id="group791-1978" transform="translate(581.79,-297.545) scale(-1,1)" v:mID="791" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
			</v:userDefs>
			<title>Make contact.791</title>
			<g id="shape792-1979" v:mID="792" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.792</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st3"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st3"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st3"/>
			</g>
			<g id="shape793-1984" v:mID="793" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.793</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape794-1986" v:mID="794" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.794</title>
			</g>
		</g>
		<g id="shape795-1988" v:mID="795" v:groupContext="shape" transform="translate(35.2242,237.893) rotate(-90)">
			<title>Sheet.795</title>
			<path d="M0 542.8 L4.32 542.8" class="st2"/>
		</g>
		<g id="shape796-1991" v:mID="796" v:groupContext="shape" transform="translate(1120.83,245.256) rotate(90)">
			<title>Sheet.796</title>
			<path d="M0 542.8 L4.1 542.8" class="st2"/>
		</g>
		<g id="shape797-1994" v:mID="797" v:groupContext="shape" transform="translate(569.66,-344.836)">
			<title>Sheet.797</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape798-1996" v:mID="798" v:groupContext="shape" transform="translate(569.66,-335.941)">
			<title>Sheet.798</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st41"/>
		</g>
		<g id="shape799-1998" v:mID="799" v:groupContext="shape" transform="translate(35.2318,217.001) rotate(-90)">
			<title>Sheet.799</title>
			<path d="M0 542.8 L10.14 542.8" class="st2"/>
		</g>
		<g id="group802-2001" transform="translate(514.771,686.238) scale(1,-1)" v:mID="802" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)20)"/>
			</v:userDefs>
			<title>Make contact.304</title>
			<g id="shape803-2002" v:mID="803" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.803</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape804-2007" v:mID="804" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.804</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape805-2009" v:mID="805" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.805</title>
			</g>
		</g>
		<g id="group806-2011" transform="translate(527.32,686.238) scale(1,-1)" v:mID="806" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)10)"/>
			</v:userDefs>
			<title>Make contact.308</title>
			<g id="shape807-2012" v:mID="807" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.807</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 534.62 L3.47 536.76" class="st40"/>
				<path d="M3.47 542.8 L3.47 540.66" class="st40"/>
				<path d="M0.94 537.09 L3.47 540.66 L3.47 542.8" class="st40"/>
			</g>
			<g id="shape808-2017" v:mID="808" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.808</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape809-2019" v:mID="809" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.809</title>
			</g>
		</g>
		<g id="shape810-2021" v:mID="810" v:groupContext="shape" v:layerMember="1" transform="translate(518.052,-384.092)">
			<title>Dynamic connector.312</title>
			<path d="M0.81 535.71 L13.36 535.71" class="st1"/>
		</g>
		<g id="shape811-2024" v:mID="811" v:groupContext="shape" transform="translate(521.792,-367.074)">
			<title>Sheet.811</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st29"/>
		</g>
		<g id="shape812-2026" v:mID="812" v:groupContext="shape" transform="translate(-17.6629,161.495) rotate(-90)">
			<title>Sheet.812</title>
			<path d="M0 542.8 L4.14 542.8" class="st1"/>
		</g>
		<g id="shape813-2029" v:mID="813" v:groupContext="shape" transform="translate(-17.6629,180.175) rotate(-90)">
			<title>Sheet.813</title>
			<path d="M0 542.8 L4.45 542.8" class="st1"/>
		</g>
		<g id="shape814-2032" v:mID="814" v:groupContext="shape" transform="translate(-23.9372,143.437) rotate(-90)">
			<title>Sheet.814</title>
			<path d="M0 542.8 L7.69 542.8" class="st33"/>
		</g>
		<g id="group815-2037" transform="translate(521.374,-293.444)" v:mID="815" v:groupContext="group">
			<title>Sheet.815</title>
			<g id="shape816-2038" v:mID="816" v:groupContext="shape" transform="translate(0.418289,-15.7889)">
				<title>Sheet.816</title>
				<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
			</g>
			<g id="shape817-2040" v:mID="817" v:groupContext="shape" transform="translate(546.566,510.29) rotate(90)">
				<title>Sheet.817</title>
				<path d="M0 542.8 L2.49 542.8" class="st2"/>
			</g>
			<g id="group818-2043" transform="translate(7.5292,-4.10166) scale(-1,1)" v:mID="818" v:groupContext="group"
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
				<g id="shape819-2044" v:mID="819" v:groupContext="shape" v:layerMember="0"
						transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.819</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 535.45 L3.19 537.37" class="st3"/>
					<path d="M3.19 542.8 L3.19 540.88" class="st3"/>
					<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st3"/>
				</g>
				<g id="shape820-2049" v:mID="820" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.820</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape821-2051" v:mID="821" v:groupContext="shape" v:layerMember="0"
						transform="translate(-0.729798,0.713712)">
					<title>Sheet.821</title>
				</g>
			</g>
			<g id="shape822-2053" v:mID="822" v:groupContext="shape" transform="translate(-539.037,531.337) rotate(-90)">
				<title>Sheet.822</title>
				<path d="M0 542.8 L4.32 542.8" class="st2"/>
			</g>
			<g id="shape823-2056" v:mID="823" v:groupContext="shape" transform="translate(546.566,538.7) rotate(90)">
				<title>Sheet.823</title>
				<path d="M0 542.8 L4.1 542.8" class="st2"/>
			</g>
		</g>
		<g id="group824-2059" transform="translate(516.773,-335.941)" v:mID="824" v:groupContext="group">
			<title>Sheet.824</title>
			<g id="shape825-2060" v:mID="825" v:groupContext="shape" transform="translate(0,-8.89518)">
				<title>Sheet.825</title>
				<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st29"/>
			</g>
			<g id="shape826-2062" v:mID="826" v:groupContext="shape">
				<title>Sheet.826</title>
				<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st41"/>
			</g>
		</g>
		<g id="shape827-2064" v:mID="827" v:groupContext="shape" transform="translate(-17.6553,217.001) rotate(-90)">
			<title>Sheet.827</title>
			<path d="M0 542.8 L10.14 542.8" class="st2"/>
		</g>
		<g id="shape828-2067" v:mID="828" v:groupContext="shape" transform="translate(-11.3885,143.437) rotate(-90)">
			<title>Sheet.828</title>
			<path d="M0 542.8 L3.82 542.8" class="st33"/>
		</g>
		<g id="shape830-2072" v:mID="830" v:groupContext="shape" transform="translate(83.275,180.175) rotate(-90)">
			<title>Sheet.830</title>
			<path d="M0 542.8 L17.15 542.8" class="st7"/>
		</g>
		<g id="shape832-2075" v:mID="832" v:groupContext="shape" transform="translate(622.73,-309.233)">
			<title>Sheet.832</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st4"/>
		</g>
		<g id="shape833-2077" v:mID="833" v:groupContext="shape" transform="translate(1168.88,216.846) rotate(90)">
			<title>Sheet.833</title>
			<path d="M0 542.8 L2.49 542.8" class="st2"/>
		</g>
		<g id="group834-2080" transform="translate(629.841,-297.545) scale(-1,1)" v:mID="834" v:groupContext="group"
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
				<v:ud v:nameU="Label" v:prompt="" v:val="VT4(S(n/o)21)"/>
			</v:userDefs>
			<title>Make contact.834</title>
			<g id="shape835-2081" v:mID="835" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
				<title>Sheet.835</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.19 535.45 L3.19 537.37" class="st3"/>
				<path d="M3.19 542.8 L3.19 540.88" class="st3"/>
				<path d="M0.87 537.66 L3.19 540.88 L3.19 542.8" class="st3"/>
			</g>
			<g id="shape836-2086" v:mID="836" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
				<title>Sheet.836</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape837-2088" v:mID="837" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
				<title>Sheet.837</title>
			</g>
		</g>
		<g id="shape838-2090" v:mID="838" v:groupContext="shape" transform="translate(83.275,237.893) rotate(-90)">
			<title>Sheet.838</title>
			<path d="M0 542.8 L4.32 542.8" class="st2"/>
		</g>
		<g id="shape839-2093" v:mID="839" v:groupContext="shape" transform="translate(1168.88,245.256) rotate(90)">
			<title>Sheet.839</title>
			<path d="M0 542.8 L4.1 542.8" class="st2"/>
		</g>
		<g id="shape840-2096" v:mID="840" v:groupContext="shape" transform="translate(617.711,-344.836)">
			<title>Sheet.840</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st6"/>
		</g>
		<g id="shape841-2098" v:mID="841" v:groupContext="shape" transform="translate(617.711,-335.941)">
			<title>Sheet.841</title>
			<ellipse cx="8.36578" cy="533.906" rx="8.36578" ry="8.89518" class="st41"/>
		</g>
		<g id="shape842-2100" v:mID="842" v:groupContext="shape" transform="translate(83.2826,217.001) rotate(-90)">
			<title>Sheet.842</title>
			<path d="M0 542.8 L10.14 542.8" class="st2"/>
		</g>
		<g id="shape844-2103" v:mID="844" v:groupContext="shape" transform="translate(980.71,246.152) rotate(90)">
			<title>Sheet.844</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st49"/>
		</g>
		<g id="shape845-2105" v:mID="845" v:groupContext="shape" transform="translate(454.632,792.3) rotate(180)">
			<title>Sheet.845</title>
			<path d="M0 542.8 L2.49 542.8" class="st2"/>
		</g>
		<g id="shape846-2108" v:mID="846" v:groupContext="shape" transform="translate(433.668,-293.303)">
			<title>Sheet.846</title>
			<path d="M0 542.8 L4.24 542.8" class="st2"/>
		</g>
		<g id="shape849-2111" v:mID="849" v:groupContext="shape" transform="translate(319.089,-510.417)">
			<title>Sheet.849</title>
			<path d="M0 542.8 L1.02 542.8" class="st7"/>
		</g>
		<g id="shape850-2114" v:mID="850" v:groupContext="shape" transform="translate(313.441,-510.417)">
			<title>Sheet.850</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape851-2117" v:mID="851" v:groupContext="shape" transform="translate(859.576,50.072) rotate(90)">
			<title>Sheet.851</title>
			<path d="M0 542.8 L10.87 542.8" class="st50"/>
		</g>
		<g id="shape852-2120" v:mID="852" v:groupContext="shape" transform="translate(309.917,-492.729)">
			<title>Sheet.852</title>
			<desc>G</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="7.08661" cy="535.715" width="14.18" height="14.1732"/>
			<ellipse cx="7.08661" cy="535.715" rx="7.08661" ry="7.08661" class="st51"/>
			<text x="4.25" y="538.41" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>		</g>
		<g id="shape853-2123" v:mID="853" v:groupContext="shape" transform="translate(859.588,32.7807) rotate(90)">
			<title>Sheet.853</title>
			<path d="M0 542.8 L2.83 542.8" class="st50"/>
		</g>
		<g id="shape856-2126" v:mID="856" v:groupContext="shape" transform="translate(383.234,-510.417)">
			<title>Sheet.856</title>
			<path d="M0 542.8 L1.02 542.8" class="st7"/>
		</g>
		<g id="shape857-2129" v:mID="857" v:groupContext="shape" transform="translate(377.586,-510.417)">
			<title>Sheet.857</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape858-2132" v:mID="858" v:groupContext="shape" transform="translate(923.722,50.072) rotate(90)">
			<title>Sheet.858</title>
			<path d="M0 542.8 L10.87 542.8" class="st50"/>
		</g>
		<g id="shape859-2135" v:mID="859" v:groupContext="shape" transform="translate(374.062,-492.729)">
			<title>Sheet.859</title>
			<desc>G</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="7.08661" cy="535.715" width="14.18" height="14.1732"/>
			<ellipse cx="7.08661" cy="535.715" rx="7.08661" ry="7.08661" class="st51"/>
			<text x="4.25" y="538.41" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>		</g>
		<g id="shape860-2138" v:mID="860" v:groupContext="shape" transform="translate(923.733,32.7807) rotate(90)">
			<title>Sheet.860</title>
			<path d="M0 542.8 L2.83 542.8" class="st50"/>
		</g>
		<g id="shape863-2141" v:mID="863" v:groupContext="shape" transform="translate(447.34,-510.417)">
			<title>Sheet.863</title>
			<path d="M0 542.8 L1.02 542.8" class="st7"/>
		</g>
		<g id="shape864-2144" v:mID="864" v:groupContext="shape" transform="translate(441.692,-510.417)">
			<title>Sheet.864</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape865-2147" v:mID="865" v:groupContext="shape" transform="translate(987.827,50.072) rotate(90)">
			<title>Sheet.865</title>
			<path d="M0 542.8 L10.87 542.8" class="st50"/>
		</g>
		<g id="shape866-2150" v:mID="866" v:groupContext="shape" transform="translate(438.167,-492.729)">
			<title>Sheet.866</title>
			<desc>G</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="7.08661" cy="535.715" width="14.18" height="14.1732"/>
			<ellipse cx="7.08661" cy="535.715" rx="7.08661" ry="7.08661" class="st51"/>
			<text x="4.25" y="538.41" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>		</g>
		<g id="shape867-2153" v:mID="867" v:groupContext="shape" transform="translate(987.838,32.7807) rotate(90)">
			<title>Sheet.867</title>
			<path d="M0 542.8 L2.83 542.8" class="st50"/>
		</g>
		<g id="shape870-2156" v:mID="870" v:groupContext="shape" transform="translate(510.186,-510.417)">
			<title>Sheet.870</title>
			<path d="M0 542.8 L1.02 542.8" class="st7"/>
		</g>
		<g id="shape871-2159" v:mID="871" v:groupContext="shape" transform="translate(504.538,-510.417)">
			<title>Sheet.871</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape872-2162" v:mID="872" v:groupContext="shape" transform="translate(1050.67,50.072) rotate(90)">
			<title>Sheet.872</title>
			<path d="M0 542.8 L10.87 542.8" class="st50"/>
		</g>
		<g id="shape873-2165" v:mID="873" v:groupContext="shape" transform="translate(501.013,-492.729)">
			<title>Sheet.873</title>
			<desc>G</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="7.08661" cy="535.715" width="14.18" height="14.1732"/>
			<ellipse cx="7.08661" cy="535.715" rx="7.08661" ry="7.08661" class="st51"/>
			<text x="4.25" y="538.41" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>		</g>
		<g id="shape874-2168" v:mID="874" v:groupContext="shape" transform="translate(1050.68,32.7807) rotate(90)">
			<title>Sheet.874</title>
			<path d="M0 542.8 L2.83 542.8" class="st50"/>
		</g>
		<g id="shape877-2171" v:mID="877" v:groupContext="shape" transform="translate(573.412,-510.417)">
			<title>Sheet.877</title>
			<path d="M0 542.8 L1.02 542.8" class="st7"/>
		</g>
		<g id="shape878-2174" v:mID="878" v:groupContext="shape" transform="translate(567.764,-510.417)">
			<title>Sheet.878</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape879-2177" v:mID="879" v:groupContext="shape" transform="translate(1113.9,50.072) rotate(90)">
			<title>Sheet.879</title>
			<path d="M0 542.8 L10.87 542.8" class="st50"/>
		</g>
		<g id="shape880-2180" v:mID="880" v:groupContext="shape" transform="translate(564.239,-492.729)">
			<title>Sheet.880</title>
			<desc>G</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="7.08661" cy="535.715" width="14.18" height="14.1732"/>
			<ellipse cx="7.08661" cy="535.715" rx="7.08661" ry="7.08661" class="st51"/>
			<text x="4.25" y="538.41" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>		</g>
		<g id="shape881-2183" v:mID="881" v:groupContext="shape" transform="translate(1113.91,32.7807) rotate(90)">
			<title>Sheet.881</title>
			<path d="M0 542.8 L2.83 542.8" class="st50"/>
		</g>
		<g id="shape884-2186" v:mID="884" v:groupContext="shape" transform="translate(636.438,-510.417)">
			<title>Sheet.884</title>
			<path d="M0 542.8 L1.02 542.8" class="st7"/>
		</g>
		<g id="shape885-2189" v:mID="885" v:groupContext="shape" transform="translate(630.79,-510.417)">
			<title>Sheet.885</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape886-2192" v:mID="886" v:groupContext="shape" transform="translate(1176.92,50.072) rotate(90)">
			<title>Sheet.886</title>
			<path d="M0 542.8 L10.87 542.8" class="st50"/>
		</g>
		<g id="shape887-2195" v:mID="887" v:groupContext="shape" transform="translate(627.265,-492.729)">
			<title>Sheet.887</title>
			<desc>G</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="7.08661" cy="535.715" width="14.18" height="14.1732"/>
			<ellipse cx="7.08661" cy="535.715" rx="7.08661" ry="7.08661" class="st51"/>
			<text x="4.25" y="538.41" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>		</g>
		<g id="shape888-2198" v:mID="888" v:groupContext="shape" transform="translate(1176.94,32.7807) rotate(90)">
			<title>Sheet.888</title>
			<path d="M0 542.8 L2.83 542.8" class="st50"/>
		</g>
		<g id="shape890-2201" v:mID="890" v:groupContext="shape" transform="translate(1177.05,246.152) rotate(90)">
			<title>Sheet.890</title>
			<rect x="0" y="528.569" width="6.69262" height="14.2323" class="st49"/>
		</g>
		<g id="shape891-2203" v:mID="891" v:groupContext="shape" transform="translate(650.974,792.3) rotate(180)">
			<title>Sheet.891</title>
			<path d="M0 542.8 L2.49 542.8" class="st2"/>
		</g>
		<g id="shape892-2206" v:mID="892" v:groupContext="shape" transform="translate(630.01,-293.303)">
			<title>Sheet.892</title>
			<path d="M0 542.8 L4.24 542.8" class="st2"/>
		</g>
		<g id="shape895-2209" v:mID="895" v:groupContext="shape" transform="translate(26.3231,-300.538)">
			<title>Sheet.895</title>
			<path d="M0 542.8 L1.02 542.8" class="st7"/>
		</g>
		<g id="shape896-2212" v:mID="896" v:groupContext="shape" transform="translate(20.6751,-300.538)">
			<title>Sheet.896</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape897-2215" v:mID="897" v:groupContext="shape" transform="translate(566.807,258.092) rotate(89.8038)">
			<title>Sheet.897</title>
			<path d="M0 542.8 L14.12 542.8" class="st50"/>
		</g>
		<g id="shape898-2218" v:mID="898" v:groupContext="shape" transform="translate(17.1504,-282.851)">
			<title>Sheet.898</title>
			<desc>G</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="7.08661" cy="535.715" width="14.18" height="14.1732"/>
			<ellipse cx="7.08661" cy="535.715" rx="7.08661" ry="7.08661" class="st51"/>
			<text x="4.25" y="538.41" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>		</g>
		<g id="shape899-2221" v:mID="899" v:groupContext="shape" transform="translate(566.822,242.66) rotate(90)">
			<title>Sheet.899</title>
			<path d="M0 542.8 L2.83 542.8" class="st50"/>
		</g>
		<g id="shape902-2224" v:mID="902" v:groupContext="shape" transform="translate(76.4963,-300.538)">
			<title>Sheet.902</title>
			<path d="M0 542.8 L1.02 542.8" class="st7"/>
		</g>
		<g id="shape903-2227" v:mID="903" v:groupContext="shape" transform="translate(70.8483,-300.538)">
			<title>Sheet.903</title>
			<path d="M0 542.8 L5.65 542.8" class="st7"/>
		</g>
		<g id="shape904-2230" v:mID="904" v:groupContext="shape" transform="translate(616.98,258.092) rotate(89.8038)">
			<title>Sheet.904</title>
			<path d="M0 542.8 L14.12 542.8" class="st50"/>
		</g>
		<g id="shape905-2233" v:mID="905" v:groupContext="shape" transform="translate(67.3237,-282.851)">
			<title>Sheet.905</title>
			<desc>G</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="7.08661" cy="535.715" width="14.18" height="14.1732"/>
			<ellipse cx="7.08661" cy="535.715" rx="7.08661" ry="7.08661" class="st51"/>
			<text x="4.25" y="538.41" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>		</g>
		<g id="shape906-2236" v:mID="906" v:groupContext="shape" transform="translate(616.995,242.66) rotate(90)">
			<title>Sheet.906</title>
			<path d="M0 542.8 L2.83 542.8" class="st50"/>
		</g>
        <a href="dashboard_curug.php">
		<g id="shape907-2239" v:mID="907" v:groupContext="shape" transform="translate(8.58347,-8.61879)">
			<title>Sheet.907</title>
			<desc>GI CURUG</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="64.8752" cy="532.543" width="129.76" height="20.5161"/>
			<rect x="0" y="522.285" width="129.75" height="20.5161" class="st23"/>
			<text x="39.88" y="536.14" class="st24" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>GI <tspan
			class="st28" v:langID="1033">CURUG</tspan></text>		
        </g>
        </a>
		<a href="dashboard_ciganea.php">
        <g id="shape908-2243" v:mID="908" v:groupContext="shape" transform="translate(668.734,-8.61879)">
			<title>Sheet.908</title>
			<desc>GI CIGANEA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="64.8752" cy="532.543" width="129.76" height="20.5161"/>
			<rect x="0" y="522.285" width="129.75" height="20.5161" class="st23"/>
			<text x="35.35" y="536.14" class="st24" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>GI <tspan class="st28" v:langID="1033">CIGANEA</tspan></text>		
        </g></a>
	   </g>
</svg>



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
