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
    <div class="col-md-10" style="font-size:1.1em; font-weight:bold;">Overview PLTA Ir. H. Djuanda</div>
    <a href="dashboard_dataview.php"><div class="col-md-2 panels-blue2">Data View</div></a>  
</div>
</div>          
        
<div class="col-md-12">    
<div class="panels-white2">


<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:ev="http://www.w3.org/2001/xml-events" xmlns:v="http://schemas.microsoft.com/visio/2003/SVGExtensions/" width="100%" height="100%" viewBox="0 0 841.89 595.276" xml:space="preserve" color-interpolation-filters="sRGB" class="st53">
	<v:documentProperties v:langID="1033" v:metric="true" v:viewMarkup="false">
		<v:userDefs>
			<v:ud v:nameU="msvNoAutoConnect" v:val="VT0(1):26"/>
		</v:userDefs>
	</v:documentProperties>

	<style type="text/css">
	<![CDATA[
		.st1 {fill:url(#grad0-4);stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st2 {stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st3 {stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st4 {stroke:#00b050;stroke-linecap:butt;stroke-width:0.301168}
		.st5 {fill:none;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st6 {fill:#ffffff;fill-opacity:0;stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st7 {fill:none;stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st8 {stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st9 {fill:#ffffff;fill-opacity:0;stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st10 {fill:none;stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st11 {stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st12 {stroke:#ffff00;stroke-linecap:butt;stroke-width:0.301168}
		.st13 {stroke:#c00000;stroke-linecap:butt;stroke-width:0.327443}
		.st14 {marker-start:url(#mrkr5-316);stroke:#923931;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st15 {fill:#923931;fill-opacity:1;stroke:#923931;stroke-opacity:1;stroke-width:0.45454545454545}
		.st16 {fill:#000000;font-family:Calibri;font-size:0.833336em}
		.st17 {fill:#ffffff;fill-opacity:0;stroke:#7030a0;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st18 {marker-end:url(#mrkr5-515);stroke:#7030a0;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st19 {fill:#7030a0;fill-opacity:1;stroke:#7030a0;stroke-opacity:1;stroke-width:0.45454545454545}
		.st20 {marker-start:url(#mrkr5-544);stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st21 {fill:#ffff00;fill-opacity:1;stroke:#ffff00;stroke-opacity:1;stroke-width:0.45454545454545}
		.st22 {stroke:#ffff00;stroke-linecap:butt;stroke-width:0.210818}
		.st23 {stroke:#9dbb61;stroke-dasharray:3.5,2.5,0,2.5;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.5}
		.st24 {fill:#ffff00;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.5}
		.st25 {fill:#000000;font-family:Calibri;font-size:0.75em}
		.st26 {fill:none;stroke:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st27 {fill:#000000;font-family:Calibri;font-size:0.499992em}
		.st28 {font-size:1em}
		.st29 {fill:none;stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st30 {stroke:#ff0000;stroke-linecap:butt;stroke-width:0.301168}
		.st31 {marker-end:url(#mrkr10-1221);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st32 {fill:#ff0000;fill-opacity:1;stroke:#ff0000;stroke-opacity:1;stroke-width:0.29411764705882}
		.st33 {marker-end:url(#mrkr10-1227);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st34 {marker-end:url(#mrkr5-1233);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st35 {fill:#ff0000;fill-opacity:1;stroke:#ff0000;stroke-opacity:1;stroke-width:0.45454545454545}
		.st36 {fill:none;stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st37 {marker-end:url(#mrkr13-1243);stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.5}
		.st38 {fill:#ff0000;fill-opacity:1;stroke:#ff0000;stroke-opacity:1;stroke-width:0.21739130434783}
		.st39 {stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.5}
		.st40 {fill:#000000;font-family:Calibri;font-size:1.00001em;font-weight:bold}
		.st41 {stroke:#ff0000;stroke-linecap:butt;stroke-width:0.327443}
		.st42 {fill:#ffffff;fill-opacity:0;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st43 {marker-start:url(#mrkr1-1681);stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st44 {stroke:#7f7f7f;stroke-dasharray:1.68,1.2,0,1.2;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.24}
		.st45 {fill:#ffffff;fill-opacity:0;stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st46 {stroke:#ff0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st47 {marker-start:url(#mrkr5-2071);stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st48 {fill:#00b050;fill-opacity:1;stroke:#00b050;stroke-opacity:1;stroke-width:0.45454545454545}
		.st49 {fill:#ffffff;stroke:#00b050;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5}
		.st50 {stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st51 {fill:none;stroke:#ffff00;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st52 {fill:#ffff00;font-family:Calibri;font-size:0.75em}
		.st53 {fill:none;fill-rule:evenodd;font-size:12px;overflow:visible;stroke-linecap:square;stroke-miterlimit:3}
	]]>
	</style>

	<defs id="Patterns_And_Gradients">
		<linearGradient id="grad0-4" x1="0" y1="0" x2="1" y2="0" gradientTransform="rotate(90 0.5 0.5)">
			<stop offset="0.06" stop-color="#b7dde8" stop-opacity="1"/>
			<stop offset="0.49" stop-color="#ffffff" stop-opacity="0.14"/>
			<stop offset="0.97" stop-color="#b7dde8" stop-opacity="1"/>
		</linearGradient>
	</defs>
	<defs id="Markers">
		<g id="lend5">
			<path d="M 2 1 L 0 0 L 1.98117 -0.993387 C 1.67173 -0.364515 1.67301 0.372641 1.98465 1.00043 " style="stroke:none"/>
		</g>
		<marker id="mrkr5-316" class="st15" v:arrowType="5" v:arrowSize="1" v:setback="3.61" refX="3.61" orient="auto" markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(2.2) "/>
		</marker>
		<marker id="mrkr5-515" class="st19" v:arrowType="5" v:arrowSize="1" v:setback="3.85" refX="-3.85" orient="auto" markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(-2.2,-2.2) "/>
		</marker>
		<marker id="mrkr5-544" class="st21" v:arrowType="5" v:arrowSize="1" v:setback="3.61" refX="3.61" orient="auto" markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(2.2) "/>
		</marker>
		<g id="lend10">
			<path d="M 0 0.75 C -0.414214 0.75 -0.75 0.414214 -0.75 0 -0.75 -0.414214 -0.414214 -0.75 0 -0.75 0.414214 -0.75 0.75 -0.414214 0.75 0 0.75 0.414214 0.414214 0.75 0 0.75 Z " style="stroke:none"/>
		</g>
		<marker id="mrkr10-1221" class="st32" v:arrowType="10" v:arrowSize="1" v:setback="0" refX="-0" orient="auto" markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend10" transform="scale(-3.4,-3.4) "/>
		</marker>
		<marker id="mrkr10-1227" class="st32" v:arrowType="10" v:arrowSize="1" v:setback="2.55" refX="-2.55" orient="auto" markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend10" transform="scale(-3.4,-3.4) "/>
		</marker>
		<marker id="mrkr5-1233" class="st35" v:arrowType="5" v:arrowSize="1" v:setback="3.85" refX="-3.85" orient="auto" markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(-2.2,-2.2) "/>
		</marker>
		<g id="lend13">
			<path d="M 3 1 L 0 0 L 3 -1 L 3 1 " style="stroke:none"/>
		</g>
		<marker id="mrkr13-1243" class="st38" v:arrowType="13" v:arrowSize="1" v:setback="13.8" refX="-13.8" orient="auto" markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend13" transform="scale(-4.6,-4.6) "/>
		</marker>
		<g id="lend1">
			<path d="M 1 -1 L 0 0 L 1 1 " style="stroke-linecap:round;stroke-linejoin:round;fill:none"/>
		</g>
		<marker id="mrkr1-1681" class="st21" v:arrowType="1" v:arrowSize="1" orient="auto" markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend1" transform="scale(2.2) "/>
		</marker>
		<marker id="mrkr5-2071" class="st48" v:arrowType="5" v:arrowSize="1" v:setback="3.61" refX="3.61" orient="auto" markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend5" transform="scale(2.2) "/>
		</marker>
	</defs>
	<g v:mID="0" v:index="1" v:groupContext="foregroundPage">
		<v:userDefs>
			<v:ud v:nameU="MContactCount" v:prompt="" v:val="VT0(36):26"/>
			<v:ud v:nameU="SwitchCount" v:prompt="" v:val="VT0(2):26"/>
			<v:ud v:nameU="RelayCount" v:prompt="" v:val="VT0(2):26"/>
		</v:userDefs>
		<title>Semua GI</title>
		<v:pageProperties v:drawingScale="0.0393701" v:pageScale="0.0393701" v:drawingUnits="24" v:shadowOffsetX="8.50394" v:shadowOffsetY="-8.50394"/>
		<v:layer v:name="Electrical" v:index="0"/>
		<v:layer v:name="Connector" v:index="1"/>
		<g id="shape1440-1" v:mID="1440" v:groupContext="shape" transform="translate(18.2835,-18.1417)">
			<title>Sheet.1440</title>
			<rect x="0" y="32.315" width="805.89" height="562.961" class="st1"/>
		</g>
		<g id="shape66-5" v:mID="66" v:groupContext="shape" transform="translate(134.038,-427.034)">
			<title>Sheet.66</title>
			<path d="M0 595.28 L566.93 595.28" class="st2"/>
		</g>
		<g id="shape67-8" v:mID="67" v:groupContext="shape" transform="translate(134.038,-430.948)">
			<title>Sheet.67</title>
			<path d="M0 595.28 L566.93 595.28" class="st2"/>
		</g>
		<g id="shape456-11" v:mID="456" v:groupContext="shape" transform="translate(175.588,-315.133)">
			<title>Sheet.456</title>
			<path d="M0 595.28 L517.44 595.28" class="st3"/>
		</g>
		<g id="group662-14" transform="translate(544.095,-203.854)" v:mID="662" v:groupContext="group">
			<title>Sheet.662</title>
			<g id="group630-15" transform="translate(0,-21.3484)" v:mID="630" v:groupContext="group">
				<title>Sheet.630</title>
				<g id="group121-16" transform="translate(12.1304,-75.5744) scale(-1,1)" v:mID="121" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<title>Make contact.121</title>
					<g id="shape122-17" v:mID="122" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.122</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st4"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st4"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st4"/>
					</g>
					<g id="shape123-22" v:mID="123" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.123</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape124-24" v:mID="124" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.124</title>
					</g>
				</g>
				<g id="shape257-26" v:mID="257" v:groupContext="shape" transform="translate(5.01947,-54.4385)">
					<title>Sheet.257</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
				</g>
				<g id="shape263-28" v:mID="263" v:groupContext="shape" transform="translate(-586.91,526.605) rotate(-90)">
					<title>Sheet.263</title>
					<path d="M0 595.28 L6.9 595.28" class="st3"/>
				</g>
				<g id="shape625-31" v:mID="625" v:groupContext="shape" transform="translate(0,-32.2006)">
					<title>Sheet.625</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st5"/>
				</g>
				<g id="shape626-33" v:mID="626" v:groupContext="shape" transform="translate(0,-23.3054)">
					<title>Sheet.626</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st6"/>
				</g>
				<g id="shape627-35" v:mID="627" v:groupContext="shape" transform="translate(603.641,540.837) rotate(90)">
					<title>Sheet.627</title>
					<path d="M0 595.28 L4.45 595.28" class="st3"/>
				</g>
				<g id="shape628-38" v:mID="628" v:groupContext="shape" transform="translate(5.01947,0)">
					<title>Sheet.628</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
				</g>
				<g id="shape629-40" v:mID="629" v:groupContext="shape" transform="translate(-586.814,581.043) rotate(-90)">
					<title>Sheet.629</title>
					<path d="M0 595.28 L9.05 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape656-43" v:mID="656" v:groupContext="shape" transform="translate(603.737,573.927) rotate(90)">
				<title>Sheet.656</title>
				<path d="M0 595.28 L21.35 595.28" class="st8"/>
			</g>
			<g id="shape659-46" v:mID="659" v:groupContext="shape" transform="translate(-586.91,490.989) rotate(-90)">
				<title>Sheet.659</title>
				<path d="M0 595.28 L6.9 595.28" class="st3"/>
			</g>
		</g>
		<g id="group663-49" transform="translate(684.64,-203.854)" v:mID="663" v:groupContext="group">
			<title>Sheet.663</title>
			<g id="group631-50" transform="translate(0,-21.3484)" v:mID="631" v:groupContext="group">
				<title>Sheet.631</title>
				<g id="group632-51" transform="translate(12.1304,-75.5744) scale(-1,1)" v:mID="632" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<title>Make contact.121</title>
					<g id="shape633-52" v:mID="633" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.633</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st4"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st4"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st4"/>
					</g>
					<g id="shape634-57" v:mID="634" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.634</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape635-59" v:mID="635" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.635</title>
					</g>
				</g>
				<g id="shape636-61" v:mID="636" v:groupContext="shape" transform="translate(5.01947,-54.4385)">
					<title>Sheet.636</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
				</g>
				<g id="shape637-63" v:mID="637" v:groupContext="shape" transform="translate(-586.91,526.605) rotate(-90)">
					<title>Sheet.637</title>
					<path d="M0 595.28 L6.9 595.28" class="st3"/>
				</g>
				<g id="shape638-66" v:mID="638" v:groupContext="shape" transform="translate(0,-32.2006)">
					<title>Sheet.638</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st5"/>
				</g>
				<g id="shape639-68" v:mID="639" v:groupContext="shape" transform="translate(0,-23.3054)">
					<title>Sheet.639</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st6"/>
				</g>
				<g id="shape640-70" v:mID="640" v:groupContext="shape" transform="translate(603.641,540.837) rotate(90)">
					<title>Sheet.640</title>
					<path d="M0 595.28 L4.45 595.28" class="st3"/>
				</g>
				<g id="shape641-73" v:mID="641" v:groupContext="shape" transform="translate(5.01947,0)">
					<title>Sheet.641</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
				</g>
				<g id="shape642-75" v:mID="642" v:groupContext="shape" transform="translate(-586.814,581.043) rotate(-90)">
					<title>Sheet.642</title>
					<path d="M0 595.28 L9.05 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape657-78" v:mID="657" v:groupContext="shape" transform="translate(603.641,573.927) rotate(90)">
				<title>Sheet.657</title>
				<path d="M0 595.28 L21.35 595.28" class="st8"/>
			</g>
			<g id="shape660-81" v:mID="660" v:groupContext="shape" transform="translate(-586.91,490.989) rotate(-90)">
				<title>Sheet.660</title>
				<path d="M0 595.28 L6.9 595.28" class="st3"/>
			</g>
		</g>
		<g id="group695-84" transform="translate(283.45,-203.854)" v:mID="695" v:groupContext="group">
			<title>Sheet.695</title>
			<g id="group696-85" transform="translate(0,-21.3484)" v:mID="696" v:groupContext="group">
				<title>Sheet.696</title>
				<g id="group697-86" transform="translate(12.1304,-75.5744) scale(-1,1)" v:mID="697" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<title>Make contact.121</title>
					<g id="shape698-87" v:mID="698" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.698</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st4"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st4"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st4"/>
					</g>
					<g id="shape699-92" v:mID="699" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.699</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape700-94" v:mID="700" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.700</title>
					</g>
				</g>
				<g id="shape701-96" v:mID="701" v:groupContext="shape" transform="translate(5.01947,-54.4385)">
					<title>Sheet.701</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
				</g>
				<g id="shape702-98" v:mID="702" v:groupContext="shape" transform="translate(-586.91,526.605) rotate(-90)">
					<title>Sheet.702</title>
					<path d="M0 595.28 L6.9 595.28" class="st3"/>
				</g>
				<g id="shape703-101" v:mID="703" v:groupContext="shape" transform="translate(0,-32.2006)">
					<title>Sheet.703</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st5"/>
				</g>
				<g id="shape704-103" v:mID="704" v:groupContext="shape" transform="translate(0,-23.3054)">
					<title>Sheet.704</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st6"/>
				</g>
				<g id="shape705-105" v:mID="705" v:groupContext="shape" transform="translate(603.641,540.837) rotate(90)">
					<title>Sheet.705</title>
					<path d="M0 595.28 L4.45 595.28" class="st3"/>
				</g>
				<g id="shape706-108" v:mID="706" v:groupContext="shape" transform="translate(5.01947,0)">
					<title>Sheet.706</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
				</g>
				<g id="shape707-110" v:mID="707" v:groupContext="shape" transform="translate(-586.814,581.043) rotate(-90)">
					<title>Sheet.707</title>
					<path d="M0 595.28 L9.05 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape708-113" v:mID="708" v:groupContext="shape" transform="translate(603.737,573.927) rotate(90)">
				<title>Sheet.708</title>
				<path d="M0 595.28 L21.35 595.28" class="st8"/>
			</g>
			<g id="shape709-116" v:mID="709" v:groupContext="shape" transform="translate(-586.91,490.989) rotate(-90)">
				<title>Sheet.709</title>
				<path d="M0 595.28 L6.9 595.28" class="st3"/>
			</g>
		</g>
		<g id="group710-119" transform="translate(340.777,-203.854)" v:mID="710" v:groupContext="group">
			<title>Sheet.710</title>
			<g id="group711-120" transform="translate(0,-21.3484)" v:mID="711" v:groupContext="group">
				<title>Sheet.711</title>
				<g id="group712-121" transform="translate(12.1304,-75.5744) scale(-1,1)" v:mID="712" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<title>Make contact.121</title>
					<g id="shape713-122" v:mID="713" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.713</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st4"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st4"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st4"/>
					</g>
					<g id="shape714-127" v:mID="714" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.714</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape715-129" v:mID="715" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.715</title>
					</g>
				</g>
				<g id="shape716-131" v:mID="716" v:groupContext="shape" transform="translate(5.01947,-54.4385)">
					<title>Sheet.716</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
				</g>
				<g id="shape717-133" v:mID="717" v:groupContext="shape" transform="translate(-586.91,526.605) rotate(-90)">
					<title>Sheet.717</title>
					<path d="M0 595.28 L6.9 595.28" class="st3"/>
				</g>
				<g id="shape718-136" v:mID="718" v:groupContext="shape" transform="translate(0,-32.2006)">
					<title>Sheet.718</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st5"/>
				</g>
				<g id="shape719-138" v:mID="719" v:groupContext="shape" transform="translate(0,-23.3054)">
					<title>Sheet.719</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st6"/>
				</g>
				<g id="shape720-140" v:mID="720" v:groupContext="shape" transform="translate(603.641,540.837) rotate(90)">
					<title>Sheet.720</title>
					<path d="M0 595.28 L4.45 595.28" class="st3"/>
				</g>
				<g id="shape721-143" v:mID="721" v:groupContext="shape" transform="translate(5.01947,0)">
					<title>Sheet.721</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
				</g>
				<g id="shape722-145" v:mID="722" v:groupContext="shape" transform="translate(-586.814,581.043) rotate(-90)">
					<title>Sheet.722</title>
					<path d="M0 595.28 L9.05 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape723-148" v:mID="723" v:groupContext="shape" transform="translate(603.737,573.927) rotate(90)">
				<title>Sheet.723</title>
				<path d="M0 595.28 L21.35 595.28" class="st8"/>
			</g>
			<g id="shape724-151" v:mID="724" v:groupContext="shape" transform="translate(-586.91,490.989) rotate(-90)">
				<title>Sheet.724</title>
				<path d="M0 595.28 L6.9 595.28" class="st3"/>
			</g>
		</g>
		<g id="group726-154" transform="translate(210.171,-203.854)" v:mID="726" v:groupContext="group">
			<title>Sheet.726</title>
			<g id="group727-155" transform="translate(12.1304,-96.9229) scale(-1,1)" v:mID="727" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<title>Make contact.121</title>
				<g id="shape728-156" v:mID="728" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.728</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.92 L3.19 589.84" class="st4"/>
					<path d="M3.19 595.28 L3.19 593.35" class="st4"/>
					<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st4"/>
				</g>
				<g id="shape729-161" v:mID="729" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.729</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape730-163" v:mID="730" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
					<title>Sheet.730</title>
				</g>
			</g>
			<g id="shape731-165" v:mID="731" v:groupContext="shape" transform="translate(5.01947,-75.7869)">
				<title>Sheet.731</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
			</g>
			<g id="shape732-167" v:mID="732" v:groupContext="shape" transform="translate(-586.91,505.256) rotate(-90)">
				<title>Sheet.732</title>
				<path d="M0 595.28 L6.9 595.28" class="st3"/>
			</g>
			<g id="shape733-170" v:mID="733" v:groupContext="shape" transform="translate(0,-53.549)">
				<title>Sheet.733</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st5"/>
			</g>
			<g id="shape734-172" v:mID="734" v:groupContext="shape" transform="translate(0,-44.6538)">
				<title>Sheet.734</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st9"/>
			</g>
			<g id="shape735-174" v:mID="735" v:groupContext="shape" transform="translate(603.641,519.489) rotate(90)">
				<title>Sheet.735</title>
				<path d="M0 595.28 L4.45 595.28" class="st3"/>
			</g>
			<g id="shape736-177" v:mID="736" v:groupContext="shape" transform="translate(5.01947,-21.3484)">
				<title>Sheet.736</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st10"/>
			</g>
			<g id="shape737-179" v:mID="737" v:groupContext="shape" transform="translate(-586.814,559.695) rotate(-90)">
				<title>Sheet.737</title>
				<path d="M0 595.28 L9.05 595.28" class="st11"/>
			</g>
			<g id="shape738-182" v:mID="738" v:groupContext="shape" transform="translate(603.737,573.927) rotate(90)">
				<title>Sheet.738</title>
				<path d="M0 595.28 L21.35 595.28" class="st11"/>
			</g>
			<g id="shape739-185" v:mID="739" v:groupContext="shape" transform="translate(-586.91,490.989) rotate(-90)">
				<title>Sheet.739</title>
				<path d="M0 595.28 L6.9 595.28" class="st3"/>
			</g>
		</g>
		<g id="group754-188" transform="translate(167.147,-203.854)" v:mID="754" v:groupContext="group">
			<title>Sheet.754</title>
			<g id="group682-189" transform="translate(12.1304,-96.9229) scale(-1,1)" v:mID="682" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<title>Make contact.121</title>
				<g id="shape683-190" v:mID="683" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.683</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.92 L3.19 589.84" class="st4"/>
					<path d="M3.19 595.28 L3.19 593.35" class="st4"/>
					<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st4"/>
				</g>
				<g id="shape684-195" v:mID="684" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.684</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape685-197" v:mID="685" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
					<title>Sheet.685</title>
				</g>
			</g>
			<g id="shape686-199" v:mID="686" v:groupContext="shape" transform="translate(5.01947,-75.7869)">
				<title>Sheet.686</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
			</g>
			<g id="shape687-201" v:mID="687" v:groupContext="shape" transform="translate(-586.91,505.256) rotate(-90)">
				<title>Sheet.687</title>
				<path d="M0 595.28 L6.9 595.28" class="st3"/>
			</g>
			<g id="shape688-204" v:mID="688" v:groupContext="shape" transform="translate(0,-53.549)">
				<title>Sheet.688</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st5"/>
			</g>
			<g id="shape689-206" v:mID="689" v:groupContext="shape" transform="translate(0,-44.6538)">
				<title>Sheet.689</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st9"/>
			</g>
			<g id="shape690-208" v:mID="690" v:groupContext="shape" transform="translate(603.641,519.489) rotate(90)">
				<title>Sheet.690</title>
				<path d="M0 595.28 L4.45 595.28" class="st3"/>
			</g>
			<g id="shape691-211" v:mID="691" v:groupContext="shape" transform="translate(5.01947,-21.3484)">
				<title>Sheet.691</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st10"/>
			</g>
			<g id="shape692-213" v:mID="692" v:groupContext="shape" transform="translate(-586.814,559.695) rotate(-90)">
				<title>Sheet.692</title>
				<path d="M0 595.28 L9.05 595.28" class="st11"/>
			</g>
			<g id="shape693-216" v:mID="693" v:groupContext="shape" transform="translate(603.737,573.927) rotate(90)">
				<title>Sheet.693</title>
				<path d="M0 595.28 L21.35 595.28" class="st11"/>
			</g>
			<g id="shape694-219" v:mID="694" v:groupContext="shape" transform="translate(-586.91,490.989) rotate(-90)">
				<title>Sheet.694</title>
				<path d="M0 595.28 L6.9 595.28" class="st3"/>
			</g>
		</g>
		<g id="shape769-222" v:mID="769" v:groupContext="shape" transform="translate(59.4672,-203.854)">
			<title>Sheet.769</title>
			<path d="M0 595.28 L115.85 595.28" class="st11"/>
		</g>
		<g id="group770-225" transform="translate(48.4722,-203.854)" v:mID="770" v:groupContext="group">
			<title>Sheet.770</title>
			<g id="group741-226" transform="translate(14.6401,-79.3104) scale(-1,1)" v:mID="741" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape742-227" v:mID="742" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.742</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.92 L3.19 589.84" class="st12"/>
					<path d="M3.19 595.28 L3.19 593.35" class="st12"/>
					<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st12"/>
				</g>
				<g id="shape743-232" v:mID="743" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.743</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape744-234" v:mID="744" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
					<title>Sheet.744</title>
				</g>
			</g>
			<g id="shape746-236" v:mID="746" v:groupContext="shape" transform="translate(-584.4,523.936) rotate(-90)">
				<title>Sheet.746</title>
				<path d="M0 595.28 L7.97 595.28" class="st8"/>
			</g>
			<g id="shape747-239" v:mID="747" v:groupContext="shape" transform="translate(2.50973,-53.549)">
				<title>Sheet.747</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
			</g>
			<g id="shape748-241" v:mID="748" v:groupContext="shape" transform="translate(2.50973,-44.6538)">
				<title>Sheet.748</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st9"/>
			</g>
			<g id="shape750-243" v:mID="750" v:groupContext="shape" transform="translate(7.5292,-21.3484)">
				<title>Sheet.750</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st10"/>
			</g>
			<g id="shape751-245" v:mID="751" v:groupContext="shape" transform="translate(-584.304,559.695) rotate(-90)">
				<title>Sheet.751</title>
				<path d="M0 595.28 L9.05 595.28" class="st11"/>
			</g>
			<g id="shape752-248" v:mID="752" v:groupContext="shape" transform="translate(606.247,573.927) rotate(90)">
				<title>Sheet.752</title>
				<path d="M0 595.28 L21.35 595.28" class="st11"/>
			</g>
		</g>
		<g id="group771-251" transform="translate(98.6668,-203.854)" v:mID="771" v:groupContext="group">
			<title>Sheet.771</title>
			<g id="group773-252" transform="translate(14.6401,-79.3104) scale(-1,1)" v:mID="773" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape774-253" v:mID="774" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.774</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.92 L3.19 589.84" class="st12"/>
					<path d="M3.19 595.28 L3.19 593.35" class="st12"/>
					<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st12"/>
				</g>
				<g id="shape775-258" v:mID="775" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.775</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape776-260" v:mID="776" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
					<title>Sheet.776</title>
				</g>
			</g>
			<g id="shape777-262" v:mID="777" v:groupContext="shape" transform="translate(-584.4,523.936) rotate(-90)">
				<title>Sheet.777</title>
				<path d="M0 595.28 L7.97 595.28" class="st8"/>
			</g>
			<g id="shape778-265" v:mID="778" v:groupContext="shape" transform="translate(2.50973,-53.549)">
				<title>Sheet.778</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
			</g>
			<g id="shape779-267" v:mID="779" v:groupContext="shape" transform="translate(2.50973,-44.6538)">
				<title>Sheet.779</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st9"/>
			</g>
			<g id="shape780-269" v:mID="780" v:groupContext="shape" transform="translate(7.5292,-21.3484)">
				<title>Sheet.780</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st10"/>
			</g>
			<g id="shape781-271" v:mID="781" v:groupContext="shape" transform="translate(-584.304,559.695) rotate(-90)">
				<title>Sheet.781</title>
				<path d="M0 595.28 L9.05 595.28" class="st11"/>
			</g>
			<g id="shape782-274" v:mID="782" v:groupContext="shape" transform="translate(606.247,573.927) rotate(90)">
				<title>Sheet.782</title>
				<path d="M0 595.28 L21.35 595.28" class="st11"/>
			</g>
		</g>
		<g id="group787-277" transform="translate(778.228,387.309) rotate(90)" v:mID="787" v:groupContext="group" v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
			<g id="shape788-278" v:mID="788" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.788</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 587.1 L3.47 589.24" class="st13"/>
				<path d="M3.47 595.28 L3.47 593.14" class="st13"/>
				<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st13"/>
			</g>
			<g id="shape789-283" v:mID="789" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.789</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape790-285" v:mID="790" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.790</title>
			</g>
		</g>
		<g id="shape799-287" v:mID="799" v:groupContext="shape" transform="translate(792.778,391.421) rotate(90)">
			<title>Sheet.799</title>
			<path d="M0 595.28 L25.8 595.28" class="st11"/>
		</g>
		<g id="shape800-290" v:mID="800" v:groupContext="shape" transform="translate(160.693,-181.616)">
			<title>Sheet.800</title>
			<path d="M0 595.28 L73.62 595.28" class="st11"/>
		</g>
		<g id="shape801-293" v:mID="801" v:groupContext="shape" transform="translate(157.347,-151.373)">
			<title>Sheet.801</title>
			<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st10"/>
		</g>
		<g id="shape802-295" v:mID="802" v:groupContext="shape" transform="translate(194.156,-151.373)">
			<title>Sheet.802</title>
			<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st10"/>
		</g>
		<g id="shape803-297" v:mID="803" v:groupContext="shape" transform="translate(230.966,-151.373)">
			<title>Sheet.803</title>
			<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st10"/>
		</g>
		<g id="shape804-299" v:mID="804" v:groupContext="shape" transform="translate(-434.583,429.671) rotate(-90)">
			<title>Sheet.804</title>
			<path d="M0 595.28 L16.01 595.28" class="st11"/>
		</g>
		<g id="shape805-302" v:mID="805" v:groupContext="shape" transform="translate(-397.773,429.671) rotate(-90)">
			<title>Sheet.805</title>
			<path d="M0 595.28 L16.01 595.28" class="st11"/>
		</g>
		<g id="shape806-305" v:mID="806" v:groupContext="shape" transform="translate(-360.964,429.671) rotate(-90)">
			<title>Sheet.806</title>
			<path d="M0 595.28 L16.01 595.28" class="st11"/>
		</g>
		<g id="shape807-308" v:mID="807" v:groupContext="shape" transform="translate(258.763,-203.918)">
			<title>Sheet.807</title>
			<path d="M0 595.28 L150.24 595.28" class="st8"/>
		</g>
		<g id="shape991-311" v:mID="991" v:groupContext="shape" transform="translate(-434.583,459.914) rotate(-90)">
			<title>Sheet.991</title>
			<path d="M5.41 595.28 L5.77 595.28 L16.01 595.28" class="st14"/>
		</g>
		<g id="shape992-317" v:mID="992" v:groupContext="shape" transform="translate(-397.773,459.914) rotate(-90)">
			<title>Sheet.992</title>
			<path d="M5.41 595.28 L5.77 595.28 L16.01 595.28" class="st14"/>
		</g>
		<g id="shape993-322" v:mID="993" v:groupContext="shape" transform="translate(-360.964,459.914) rotate(-90)">
			<title>Sheet.993</title>
			<path d="M5.41 595.28 L5.77 595.28 L16.01 595.28" class="st14"/>
		</g>
		<g id="shape998-327" v:mID="998" v:groupContext="shape" transform="translate(626.079,-203.854)">
			<title>Sheet.998</title>
			<path d="M0 595.28 L98.57 595.28" class="st8"/>
		</g>
		<g id="shape999-330" v:mID="999" v:groupContext="shape" transform="translate(619.322,-201.034)">
			<title>Sheet.999</title>
			<rect x="0" y="588.826" width="6.82174" height="6.44964" class="st7"/>
		</g>
		<g id="shape1002-332" v:mID="1002" v:groupContext="shape" transform="translate(489.219,-203.854)">
			<title>Sheet.1002</title>
			<path d="M0 595.28 L130.17 595.28" class="st8"/>
		</g>
		<g id="group1058-335" transform="translate(798.306,387.309) rotate(90)" v:mID="1058" v:groupContext="group" v:layerMember="0">
			<v:custProps>
				<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
				<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
				<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
			<g id="shape1059-336" v:mID="1059" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
				<title>Sheet.1059</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
				<path d="M3.47 587.1 L3.47 589.24" class="st13"/>
				<path d="M3.47 595.28 L3.47 593.14" class="st13"/>
				<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st13"/>
			</g>
			<g id="shape1060-341" v:mID="1060" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
				<title>Sheet.1060</title>
				<v:userDefs>
					<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
				</v:userDefs>
			</g>
			<g id="shape1061-343" v:mID="1061" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
				<title>Sheet.1061</title>
			</g>
		</g>
		<g id="shape1062-345" v:mID="1062" v:groupContext="shape" transform="translate(182.952,986.678) rotate(180)">
			<title>Sheet.1062</title>
			<path d="M0 595.28 L7.2 595.28" class="st11"/>
		</g>
		<g id="shape1063-348" v:mID="1063" v:groupContext="shape" transform="translate(211.216,-203.874)">
			<title>Sheet.1063</title>
			<path d="M0 595.28 L7.2 595.28" class="st11"/>
		</g>
		<g id="shape1064-351" v:mID="1064" v:groupContext="shape" transform="translate(191.138,-203.874)">
			<title>Sheet.1064</title>
			<path d="M0 595.28 L11.89 595.28" class="st11"/>
		</g>
		<g id="group1065-354" transform="translate(250.058,-117.571)" v:mID="1065" v:groupContext="group">
			<title>Sheet.1065</title>
			<g id="group808-355" transform="translate(12.06,-64.3665) scale(-1,1)" v:mID="808" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape809-356" v:mID="809" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.809</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.92 L3.19 589.84" class="st12"/>
					<path d="M3.19 595.28 L3.19 593.35" class="st12"/>
					<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st12"/>
				</g>
				<g id="shape810-361" v:mID="810" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.810</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape811-363" v:mID="811" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
					<title>Sheet.811</title>
				</g>
			</g>
			<g id="shape812-365" v:mID="812" v:groupContext="shape" transform="translate(5.01947,-33.8017)">
				<title>Sheet.812</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
			</g>
			<g id="shape813-367" v:mID="813" v:groupContext="shape" transform="translate(603.571,561.296) rotate(90)">
				<title>Sheet.813</title>
				<path d="M0 595.28 L16.01 595.28" class="st8"/>
			</g>
			<g id="shape814-370" v:mID="814" v:groupContext="shape" transform="translate(8.29542,-67.8258)">
				<title>Sheet.814</title>
				<path d="M0 595.28 L0 592.67 L0 576.82" class="st8"/>
			</g>
			<g id="shape815-373" v:mID="815" v:groupContext="shape" transform="translate(603.571,530.909) rotate(90)">
				<title>Sheet.815</title>
				<path d="M0 595.28 L16.33 595.28" class="st8"/>
			</g>
			<g id="shape823-376" v:mID="823" v:groupContext="shape">
				<title>Sheet.823</title>
				<desc>M</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="8.36578" cy="586.38" width="16.74" height="17.7904"/>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				<text x="4.09" y="589.38" class="st16" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>			</g>
		</g>
		<g id="group1066-379" transform="translate(270.065,-117.571)" v:mID="1066" v:groupContext="group">
			<title>Sheet.1066</title>
			<g id="group1067-380" transform="translate(12.06,-64.3665) scale(-1,1)" v:mID="1067" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape1068-381" v:mID="1068" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.1068</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.92 L3.19 589.84" class="st12"/>
					<path d="M3.19 595.28 L3.19 593.35" class="st12"/>
					<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st12"/>
				</g>
				<g id="shape1069-386" v:mID="1069" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.1069</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape1070-388" v:mID="1070" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
					<title>Sheet.1070</title>
				</g>
			</g>
			<g id="shape1071-390" v:mID="1071" v:groupContext="shape" transform="translate(5.01947,-33.8017)">
				<title>Sheet.1071</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
			</g>
			<g id="shape1072-392" v:mID="1072" v:groupContext="shape" transform="translate(603.571,561.296) rotate(90)">
				<title>Sheet.1072</title>
				<path d="M0 595.28 L16.01 595.28" class="st8"/>
			</g>
			<g id="shape1073-395" v:mID="1073" v:groupContext="shape" transform="translate(8.29542,-67.8258)">
				<title>Sheet.1073</title>
				<path d="M0 595.28 L0 592.67 L0 576.82" class="st8"/>
			</g>
			<g id="shape1074-398" v:mID="1074" v:groupContext="shape" transform="translate(603.571,530.909) rotate(90)">
				<title>Sheet.1074</title>
				<path d="M0 595.28 L16.33 595.28" class="st8"/>
			</g>
			<g id="shape1075-401" v:mID="1075" v:groupContext="shape">
				<title>Sheet.1075</title>
				<desc>M</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="8.36578" cy="586.38" width="16.74" height="17.7904"/>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				<text x="4.09" y="589.38" class="st16" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>			</g>
		</g>
		<g id="group1076-404" transform="translate(290.072,-117.571)" v:mID="1076" v:groupContext="group">
			<title>Sheet.1076</title>
			<g id="group1077-405" transform="translate(12.06,-64.3665) scale(-1,1)" v:mID="1077" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape1078-406" v:mID="1078" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.1078</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.92 L3.19 589.84" class="st12"/>
					<path d="M3.19 595.28 L3.19 593.35" class="st12"/>
					<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st12"/>
				</g>
				<g id="shape1079-411" v:mID="1079" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.1079</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape1080-413" v:mID="1080" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
					<title>Sheet.1080</title>
				</g>
			</g>
			<g id="shape1081-415" v:mID="1081" v:groupContext="shape" transform="translate(5.01947,-33.8017)">
				<title>Sheet.1081</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
			</g>
			<g id="shape1082-417" v:mID="1082" v:groupContext="shape" transform="translate(603.571,561.296) rotate(90)">
				<title>Sheet.1082</title>
				<path d="M0 595.28 L16.01 595.28" class="st8"/>
			</g>
			<g id="shape1083-420" v:mID="1083" v:groupContext="shape" transform="translate(8.29542,-67.8258)">
				<title>Sheet.1083</title>
				<path d="M0 595.28 L0 592.67 L0 576.82" class="st8"/>
			</g>
			<g id="shape1084-423" v:mID="1084" v:groupContext="shape" transform="translate(603.571,530.909) rotate(90)">
				<title>Sheet.1084</title>
				<path d="M0 595.28 L16.33 595.28" class="st8"/>
			</g>
			<g id="shape1085-426" v:mID="1085" v:groupContext="shape">
				<title>Sheet.1085</title>
				<desc>M</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="8.36578" cy="586.38" width="16.74" height="17.7904"/>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				<text x="4.09" y="589.38" class="st16" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>			</g>
		</g>
		<g id="group1086-429" transform="translate(310.079,-117.571)" v:mID="1086" v:groupContext="group">
			<title>Sheet.1086</title>
			<g id="group1087-430" transform="translate(12.06,-64.3665) scale(-1,1)" v:mID="1087" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape1088-431" v:mID="1088" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.1088</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.92 L3.19 589.84" class="st12"/>
					<path d="M3.19 595.28 L3.19 593.35" class="st12"/>
					<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st12"/>
				</g>
				<g id="shape1089-436" v:mID="1089" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.1089</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape1090-438" v:mID="1090" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
					<title>Sheet.1090</title>
				</g>
			</g>
			<g id="shape1091-440" v:mID="1091" v:groupContext="shape" transform="translate(5.01947,-33.8017)">
				<title>Sheet.1091</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
			</g>
			<g id="shape1092-442" v:mID="1092" v:groupContext="shape" transform="translate(603.571,561.296) rotate(90)">
				<title>Sheet.1092</title>
				<path d="M0 595.28 L16.01 595.28" class="st8"/>
			</g>
			<g id="shape1093-445" v:mID="1093" v:groupContext="shape" transform="translate(8.29542,-67.8258)">
				<title>Sheet.1093</title>
				<path d="M0 595.28 L0 592.67 L0 576.82" class="st8"/>
			</g>
			<g id="shape1094-448" v:mID="1094" v:groupContext="shape" transform="translate(603.571,530.909) rotate(90)">
				<title>Sheet.1094</title>
				<path d="M0 595.28 L16.33 595.28" class="st8"/>
			</g>
			<g id="shape1095-451" v:mID="1095" v:groupContext="shape">
				<title>Sheet.1095</title>
				<desc>M</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="8.36578" cy="586.38" width="16.74" height="17.7904"/>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				<text x="4.09" y="589.38" class="st16" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>			</g>
		</g>
		<g id="group1096-454" transform="translate(330.086,-117.571)" v:mID="1096" v:groupContext="group">
			<title>Sheet.1096</title>
			<g id="group1097-455" transform="translate(12.06,-64.3665) scale(-1,1)" v:mID="1097" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape1098-456" v:mID="1098" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.1098</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.92 L3.19 589.84" class="st12"/>
					<path d="M3.19 595.28 L3.19 593.35" class="st12"/>
					<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st12"/>
				</g>
				<g id="shape1099-461" v:mID="1099" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.1099</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape1100-463" v:mID="1100" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
					<title>Sheet.1100</title>
				</g>
			</g>
			<g id="shape1101-465" v:mID="1101" v:groupContext="shape" transform="translate(5.01947,-33.8017)">
				<title>Sheet.1101</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
			</g>
			<g id="shape1102-467" v:mID="1102" v:groupContext="shape" transform="translate(603.571,561.296) rotate(90)">
				<title>Sheet.1102</title>
				<path d="M0 595.28 L16.01 595.28" class="st8"/>
			</g>
			<g id="shape1103-470" v:mID="1103" v:groupContext="shape" transform="translate(8.29542,-67.8258)">
				<title>Sheet.1103</title>
				<path d="M0 595.28 L0 592.67 L0 576.82" class="st8"/>
			</g>
			<g id="shape1104-473" v:mID="1104" v:groupContext="shape" transform="translate(603.571,530.909) rotate(90)">
				<title>Sheet.1104</title>
				<path d="M0 595.28 L16.33 595.28" class="st8"/>
			</g>
			<g id="shape1105-476" v:mID="1105" v:groupContext="shape">
				<title>Sheet.1105</title>
				<desc>M</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="8.36578" cy="586.38" width="16.74" height="17.7904"/>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				<text x="4.09" y="589.38" class="st16" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>			</g>
		</g>
		<g id="shape1111-479" v:mID="1111" v:groupContext="shape" transform="translate(355.113,-151.373)">
			<title>Sheet.1111</title>
			<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
		</g>
		<g id="shape1112-481" v:mID="1112" v:groupContext="shape" transform="translate(953.664,443.725) rotate(90)">
			<title>Sheet.1112</title>
			<path d="M0 595.28 L16.01 595.28" class="st8"/>
		</g>
		<g id="shape1115-484" v:mID="1115" v:groupContext="shape" transform="translate(349.363,-117.371)">
			<title>Sheet.1115</title>
			<desc>M</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="9.09565" cy="586.18" width="18.2" height="18.1913"/>
			<ellipse cx="9.09565" cy="586.18" rx="9.09565" ry="9.09565" class="st7"/>
			<text x="4.82" y="589.18" class="st16" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>M</text>		</g>
		<g id="group1127-487" transform="translate(354.624,-165.605)" v:mID="1127" v:groupContext="group">
			<title>Sheet.1127</title>
			<g id="group1107-488" transform="translate(7.5292,-16.3325) scale(-1,1)" v:mID="1107" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape1108-489" v:mID="1108" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
					<title>Sheet.1108</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.92 L3.19 589.84" class="st12"/>
					<path d="M3.19 595.28 L3.19 593.35" class="st12"/>
					<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st12"/>
				</g>
				<g id="shape1109-494" v:mID="1109" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
					<title>Sheet.1109</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape1110-496" v:mID="1110" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
					<title>Sheet.1110</title>
				</g>
			</g>
			<g id="shape1113-498" v:mID="1113" v:groupContext="shape" transform="translate(3.7646,-19.7918)">
				<title>Sheet.1113</title>
				<path d="M0 595.28 L0 592.67 L0 576.82" class="st8"/>
			</g>
			<g id="shape1114-501" v:mID="1114" v:groupContext="shape" transform="translate(599.04,578.943) rotate(90)">
				<title>Sheet.1114</title>
				<path d="M0 595.28 L16.33 595.28" class="st8"/>
			</g>
		</g>
		<g id="group1128-504" transform="translate(374.857,-108.739)" v:mID="1128" v:groupContext="group">
			<title>Sheet.1128</title>
			<g id="group977-505" transform="translate(0,-30.1801)" v:mID="977" v:groupContext="group">
				<title>Sheet.977</title>
				<g id="shape966-506" v:mID="966" v:groupContext="shape" transform="translate(0,-8.89518)">
					<title>Sheet.966</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				</g>
				<g id="shape967-508" v:mID="967" v:groupContext="shape">
					<title>Sheet.967</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st17"/>
				</g>
			</g>
			<g id="shape978-510" v:mID="978" v:groupContext="shape" transform="translate(603.641,565.032) rotate(90)">
				<title>Sheet.978</title>
				<path d="M0 595.28 L24.47 595.28" class="st18"/>
			</g>
			<g id="group1126-516" transform="translate(4.60118,-57.5328)" v:mID="1126" v:groupContext="group">
				<title>Sheet.1126</title>
				<g id="group1120-517" transform="translate(7.5292,-16.3325) scale(-1,1)" v:mID="1120" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1121-518" v:mID="1121" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.1121</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st12"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st12"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st12"/>
					</g>
					<g id="shape1122-523" v:mID="1122" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.1122</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1123-525" v:mID="1123" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.1123</title>
					</g>
				</g>
				<g id="shape1124-527" v:mID="1124" v:groupContext="shape" transform="translate(3.7646,-19.7918)">
					<title>Sheet.1124</title>
					<path d="M0 595.28 L0 592.67 L0 576.82" class="st8"/>
				</g>
				<g id="shape1125-530" v:mID="1125" v:groupContext="shape" transform="translate(599.04,578.943) rotate(90)">
					<title>Sheet.1125</title>
					<path d="M0 595.28 L16.33 595.28" class="st8"/>
				</g>
			</g>
		</g>
		<g id="group1195-533" transform="translate(485.534,-108.707)" v:mID="1195" v:groupContext="group">
			<title>Sheet.1195</title>
			<g id="shape1189-534" v:mID="1189" v:groupContext="shape" transform="translate(0,-42.6657)">
				<title>Sheet.1189</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
			</g>
			<g id="shape1191-536" v:mID="1191" v:groupContext="shape" transform="translate(-591.929,538.279) rotate(-90)">
				<title>Sheet.1191</title>
				<path d="M0 595.28 L38.16 595.28" class="st8"/>
			</g>
			<g id="shape1192-539" v:mID="1192" v:groupContext="shape" transform="translate(-591.929,595.276) rotate(-90)">
				<title>Sheet.1192</title>
				<path d="M5.41 595.28 L5.77 595.28 L42.63 595.28" class="st20"/>
			</g>
		</g>
		<g id="group1196-545" transform="translate(507.285,-108.072)" v:mID="1196" v:groupContext="group">
			<title>Sheet.1196</title>
			<g id="shape1197-546" v:mID="1197" v:groupContext="shape" transform="translate(0,-42.6657)">
				<title>Sheet.1197</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
			</g>
			<g id="shape1198-548" v:mID="1198" v:groupContext="shape" transform="translate(-591.929,538.279) rotate(-90)">
				<title>Sheet.1198</title>
				<path d="M0 595.28 L38.16 595.28" class="st8"/>
			</g>
			<g id="shape1199-551" v:mID="1199" v:groupContext="shape" transform="translate(-591.929,595.276) rotate(-90)">
				<title>Sheet.1199</title>
				<path d="M5.41 595.28 L5.77 595.28 L42.63 595.28" class="st20"/>
			</g>
		</g>
		<g id="group1200-556" transform="translate(529.036,-108.072)" v:mID="1200" v:groupContext="group">
			<title>Sheet.1200</title>
			<g id="shape1201-557" v:mID="1201" v:groupContext="shape" transform="translate(0,-42.6657)">
				<title>Sheet.1201</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
			</g>
			<g id="shape1202-559" v:mID="1202" v:groupContext="shape" transform="translate(-591.929,538.279) rotate(-90)">
				<title>Sheet.1202</title>
				<path d="M0 595.28 L38.16 595.28" class="st8"/>
			</g>
			<g id="shape1203-562" v:mID="1203" v:groupContext="shape" transform="translate(-591.929,595.276) rotate(-90)">
				<title>Sheet.1203</title>
				<path d="M5.41 595.28 L5.77 595.28 L42.63 595.28" class="st20"/>
			</g>
		</g>
		<g id="group1290-567" transform="translate(641.138,-108.072)" v:mID="1290" v:groupContext="group">
			<title>Sheet.1290</title>
			<g id="shape1291-568" v:mID="1291" v:groupContext="shape" transform="translate(0,-42.6657)">
				<title>Sheet.1291</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
			</g>
			<g id="shape1292-570" v:mID="1292" v:groupContext="shape" transform="translate(-591.929,538.279) rotate(-90)">
				<title>Sheet.1292</title>
				<path d="M0 595.28 L38.16 595.28" class="st8"/>
			</g>
			<g id="shape1293-573" v:mID="1293" v:groupContext="shape" transform="translate(-591.929,595.276) rotate(-90)">
				<title>Sheet.1293</title>
				<path d="M5.41 595.28 L5.77 595.28 L42.63 595.28" class="st20"/>
			</g>
		</g>
		<g id="group1294-578" transform="translate(663.098,-108.072)" v:mID="1294" v:groupContext="group">
			<title>Sheet.1294</title>
			<g id="shape1295-579" v:mID="1295" v:groupContext="shape" transform="translate(0,-42.6657)">
				<title>Sheet.1295</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st7"/>
			</g>
			<g id="shape1296-581" v:mID="1296" v:groupContext="shape" transform="translate(-591.929,538.279) rotate(-90)">
				<title>Sheet.1296</title>
				<path d="M0 595.28 L38.16 595.28" class="st8"/>
			</g>
			<g id="shape1297-584" v:mID="1297" v:groupContext="shape" transform="translate(-591.929,595.276) rotate(-90)">
				<title>Sheet.1297</title>
				<path d="M5.41 595.28 L5.77 595.28 L42.63 595.28" class="st20"/>
			</g>
		</g>
		<g id="group1298-589" transform="translate(548.278,-108.072)" v:mID="1298" v:groupContext="group">
			<title>Sheet.1298</title>
			<g id="group1177-590" v:mID="1177" v:groupContext="group">
				<title>Sheet.1177</title>
				<g id="group1178-591" transform="translate(0,-21.1261)" v:mID="1178" v:groupContext="group">
					<title>Sheet.1178</title>
					<g id="shape1179-592" v:mID="1179" v:groupContext="shape" transform="translate(0,-6.22663)">
						<title>Sheet.1179</title>
						<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
					</g>
					<g id="shape1180-594" v:mID="1180" v:groupContext="shape">
						<title>Sheet.1180</title>
						<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
					</g>
				</g>
				<g id="shape1181-596" v:mID="1181" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
					<title>Sheet.1181</title>
					<path d="M0 595.28 L15.4 595.28" class="st18"/>
				</g>
				<g id="group1182-601" transform="translate(3.22082,-40.2729)" v:mID="1182" v:groupContext="group">
					<title>Sheet.1182</title>
					<g id="group1183-602" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1183" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape1184-603" v:mID="1184" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
							<title>Sheet.1184</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
							<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
							<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
						</g>
						<g id="shape1185-608" v:mID="1185" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
							<title>Sheet.1185</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape1186-610" v:mID="1186" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
							<title>Sheet.1186</title>
						</g>
					</g>
					<g id="shape1188-612" v:mID="1188" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
						<title>Sheet.1188</title>
						<path d="M0 595.28 L5.65 595.28" class="st8"/>
					</g>
				</g>
			</g>
			<g id="shape1229-615" v:mID="1229" v:groupContext="shape" transform="translate(-559.303,527.326) rotate(-90)">
				<title>Sheet.1229</title>
				<path d="M0 595.28 L27.58 595.28" class="st8"/>
			</g>
			<g id="group1241-618" transform="translate(15.0584,4.54747E-13)" v:mID="1241" v:groupContext="group">
				<title>Sheet.1241</title>
				<g id="group1242-619" transform="translate(0,-21.1261)" v:mID="1242" v:groupContext="group">
					<title>Sheet.1242</title>
					<g id="shape1243-620" v:mID="1243" v:groupContext="shape" transform="translate(0,-6.22663)">
						<title>Sheet.1243</title>
						<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
					</g>
					<g id="shape1244-622" v:mID="1244" v:groupContext="shape">
						<title>Sheet.1244</title>
						<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
					</g>
				</g>
				<g id="shape1245-624" v:mID="1245" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
					<title>Sheet.1245</title>
					<path d="M0 595.28 L15.4 595.28" class="st18"/>
				</g>
				<g id="group1246-629" transform="translate(3.22082,-40.2729)" v:mID="1246" v:groupContext="group">
					<title>Sheet.1246</title>
					<g id="group1247-630" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1247" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape1248-631" v:mID="1248" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
							<title>Sheet.1248</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
							<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
							<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
						</g>
						<g id="shape1249-636" v:mID="1249" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
							<title>Sheet.1249</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape1250-638" v:mID="1250" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
							<title>Sheet.1250</title>
						</g>
					</g>
					<g id="shape1251-640" v:mID="1251" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
						<title>Sheet.1251</title>
						<path d="M0 595.28 L5.65 595.28" class="st8"/>
					</g>
				</g>
			</g>
			<g id="group1252-643" transform="translate(30.1168,4.54747E-13)" v:mID="1252" v:groupContext="group">
				<title>Sheet.1252</title>
				<g id="group1253-644" transform="translate(0,-21.1261)" v:mID="1253" v:groupContext="group">
					<title>Sheet.1253</title>
					<g id="shape1254-645" v:mID="1254" v:groupContext="shape" transform="translate(0,-6.22663)">
						<title>Sheet.1254</title>
						<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
					</g>
					<g id="shape1255-647" v:mID="1255" v:groupContext="shape">
						<title>Sheet.1255</title>
						<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
					</g>
				</g>
				<g id="shape1256-649" v:mID="1256" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
					<title>Sheet.1256</title>
					<path d="M0 595.28 L15.4 595.28" class="st18"/>
				</g>
				<g id="group1257-654" transform="translate(3.22082,-40.2729)" v:mID="1257" v:groupContext="group">
					<title>Sheet.1257</title>
					<g id="group1258-655" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1258" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape1259-656" v:mID="1259" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
							<title>Sheet.1259</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
							<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
							<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
						</g>
						<g id="shape1260-661" v:mID="1260" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
							<title>Sheet.1260</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape1261-663" v:mID="1261" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
							<title>Sheet.1261</title>
						</g>
					</g>
					<g id="shape1262-665" v:mID="1262" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
						<title>Sheet.1262</title>
						<path d="M0 595.28 L5.65 595.28" class="st8"/>
					</g>
				</g>
			</g>
			<g id="group1263-668" transform="translate(45.1752,4.54747E-13)" v:mID="1263" v:groupContext="group">
				<title>Sheet.1263</title>
				<g id="group1264-669" transform="translate(0,-21.1261)" v:mID="1264" v:groupContext="group">
					<title>Sheet.1264</title>
					<g id="shape1265-670" v:mID="1265" v:groupContext="shape" transform="translate(0,-6.22663)">
						<title>Sheet.1265</title>
						<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
					</g>
					<g id="shape1266-672" v:mID="1266" v:groupContext="shape">
						<title>Sheet.1266</title>
						<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
					</g>
				</g>
				<g id="shape1267-674" v:mID="1267" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
					<title>Sheet.1267</title>
					<path d="M0 595.28 L15.4 595.28" class="st18"/>
				</g>
				<g id="group1268-679" transform="translate(3.22082,-40.2729)" v:mID="1268" v:groupContext="group">
					<title>Sheet.1268</title>
					<g id="group1269-680" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1269" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape1270-681" v:mID="1270" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
							<title>Sheet.1270</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
							<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
							<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
						</g>
						<g id="shape1271-686" v:mID="1271" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
							<title>Sheet.1271</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape1272-688" v:mID="1272" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
							<title>Sheet.1272</title>
						</g>
					</g>
					<g id="shape1273-690" v:mID="1273" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
						<title>Sheet.1273</title>
						<path d="M0 595.28 L5.65 595.28" class="st8"/>
					</g>
				</g>
			</g>
			<g id="group1274-693" transform="translate(60.2336,4.54747E-13)" v:mID="1274" v:groupContext="group">
				<title>Sheet.1274</title>
				<g id="group1275-694" transform="translate(0,-21.1261)" v:mID="1275" v:groupContext="group">
					<title>Sheet.1275</title>
					<g id="shape1276-695" v:mID="1276" v:groupContext="shape" transform="translate(0,-6.22663)">
						<title>Sheet.1276</title>
						<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
					</g>
					<g id="shape1277-697" v:mID="1277" v:groupContext="shape">
						<title>Sheet.1277</title>
						<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
					</g>
				</g>
				<g id="shape1278-699" v:mID="1278" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
					<title>Sheet.1278</title>
					<path d="M0 595.28 L15.4 595.28" class="st18"/>
				</g>
				<g id="group1279-704" transform="translate(3.22082,-40.2729)" v:mID="1279" v:groupContext="group">
					<title>Sheet.1279</title>
					<g id="group1280-705" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1280" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape1281-706" v:mID="1281" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
							<title>Sheet.1281</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
							<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
							<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
						</g>
						<g id="shape1282-711" v:mID="1282" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
							<title>Sheet.1282</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape1283-713" v:mID="1283" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
							<title>Sheet.1283</title>
						</g>
					</g>
					<g id="shape1284-715" v:mID="1284" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
						<title>Sheet.1284</title>
						<path d="M0 595.28 L5.65 595.28" class="st8"/>
					</g>
				</g>
			</g>
			<g id="shape1285-718" v:mID="1285" v:groupContext="shape" transform="translate(5.85604,-51.3007)">
				<title>Sheet.1285</title>
				<path d="M0 595.28 L0 578.95 L60.23 578.95" class="st8"/>
			</g>
			<g id="shape1286-721" v:mID="1286" v:groupContext="shape" transform="translate(-529.186,544.2) rotate(-90)">
				<title>Sheet.1286</title>
				<path d="M0 595.28 L16.55 595.28" class="st8"/>
			</g>
			<g id="shape1287-724" v:mID="1287" v:groupContext="shape" transform="translate(-574.361,544.2) rotate(-90)">
				<title>Sheet.1287</title>
				<path d="M0 595.28 L16.52 595.28" class="st8"/>
			</g>
			<g id="shape1288-727" v:mID="1288" v:groupContext="shape" transform="translate(-559.303,544.2) rotate(-90)">
				<title>Sheet.1288</title>
				<path d="M0 595.28 L16.52 595.28" class="st8"/>
			</g>
			<g id="shape1289-730" v:mID="1289" v:groupContext="shape" transform="translate(-544.244,544.2) rotate(-90)">
				<title>Sheet.1289</title>
				<path d="M0 595.28 L16.52 595.28" class="st8"/>
			</g>
		</g>
		<g id="group1300-733" transform="translate(681.294,-107.702)" v:mID="1300" v:groupContext="group">
			<title>Sheet.1300</title>
			<g id="group1301-734" transform="translate(0,-21.1261)" v:mID="1301" v:groupContext="group">
				<title>Sheet.1301</title>
				<g id="shape1302-735" v:mID="1302" v:groupContext="shape" transform="translate(0,-6.22663)">
					<title>Sheet.1302</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
				</g>
				<g id="shape1303-737" v:mID="1303" v:groupContext="shape">
					<title>Sheet.1303</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
				</g>
			</g>
			<g id="shape1304-739" v:mID="1304" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
				<title>Sheet.1304</title>
				<path d="M0 595.28 L15.4 595.28" class="st18"/>
			</g>
			<g id="group1305-744" transform="translate(3.22082,-40.2729)" v:mID="1305" v:groupContext="group">
				<title>Sheet.1305</title>
				<g id="group1306-745" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1306" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1307-746" v:mID="1307" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
						<title>Sheet.1307</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
						<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
						<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
					</g>
					<g id="shape1308-751" v:mID="1308" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
						<title>Sheet.1308</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1309-753" v:mID="1309" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
						<title>Sheet.1309</title>
					</g>
				</g>
				<g id="shape1310-755" v:mID="1310" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
					<title>Sheet.1310</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
		</g>
		<g id="shape1311-758" v:mID="1311" v:groupContext="shape" transform="translate(129.52,419.787) rotate(-90)">
			<title>Sheet.1311</title>
			<path d="M0 595.28 L28.29 595.28" class="st8"/>
		</g>
		<g id="group1312-761" transform="translate(696.352,-107.702)" v:mID="1312" v:groupContext="group">
			<title>Sheet.1312</title>
			<g id="group1313-762" transform="translate(0,-21.1261)" v:mID="1313" v:groupContext="group">
				<title>Sheet.1313</title>
				<g id="shape1314-763" v:mID="1314" v:groupContext="shape" transform="translate(0,-6.22663)">
					<title>Sheet.1314</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
				</g>
				<g id="shape1315-765" v:mID="1315" v:groupContext="shape">
					<title>Sheet.1315</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
				</g>
			</g>
			<g id="shape1316-767" v:mID="1316" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
				<title>Sheet.1316</title>
				<path d="M0 595.28 L15.4 595.28" class="st18"/>
			</g>
			<g id="group1317-772" transform="translate(3.22082,-40.2729)" v:mID="1317" v:groupContext="group">
				<title>Sheet.1317</title>
				<g id="group1318-773" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1318" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1319-774" v:mID="1319" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
						<title>Sheet.1319</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
						<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
						<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
					</g>
					<g id="shape1320-779" v:mID="1320" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
						<title>Sheet.1320</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1321-781" v:mID="1321" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
						<title>Sheet.1321</title>
					</g>
				</g>
				<g id="shape1322-783" v:mID="1322" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
					<title>Sheet.1322</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
		</g>
		<g id="group1323-786" transform="translate(711.41,-107.702)" v:mID="1323" v:groupContext="group">
			<title>Sheet.1323</title>
			<g id="group1324-787" transform="translate(0,-21.1261)" v:mID="1324" v:groupContext="group">
				<title>Sheet.1324</title>
				<g id="shape1325-788" v:mID="1325" v:groupContext="shape" transform="translate(0,-6.22663)">
					<title>Sheet.1325</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
				</g>
				<g id="shape1326-790" v:mID="1326" v:groupContext="shape">
					<title>Sheet.1326</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
				</g>
			</g>
			<g id="shape1327-792" v:mID="1327" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
				<title>Sheet.1327</title>
				<path d="M0 595.28 L15.4 595.28" class="st18"/>
			</g>
			<g id="group1328-797" transform="translate(3.22082,-40.2729)" v:mID="1328" v:groupContext="group">
				<title>Sheet.1328</title>
				<g id="group1329-798" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1329" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1330-799" v:mID="1330" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
						<title>Sheet.1330</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
						<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
						<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
					</g>
					<g id="shape1331-804" v:mID="1331" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
						<title>Sheet.1331</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1332-806" v:mID="1332" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
						<title>Sheet.1332</title>
					</g>
				</g>
				<g id="shape1333-808" v:mID="1333" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
					<title>Sheet.1333</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
		</g>
		<g id="group1334-811" transform="translate(726.469,-107.702)" v:mID="1334" v:groupContext="group">
			<title>Sheet.1334</title>
			<g id="group1335-812" transform="translate(0,-21.1261)" v:mID="1335" v:groupContext="group">
				<title>Sheet.1335</title>
				<g id="shape1336-813" v:mID="1336" v:groupContext="shape" transform="translate(0,-6.22663)">
					<title>Sheet.1336</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
				</g>
				<g id="shape1337-815" v:mID="1337" v:groupContext="shape">
					<title>Sheet.1337</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
				</g>
			</g>
			<g id="shape1338-817" v:mID="1338" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
				<title>Sheet.1338</title>
				<path d="M0 595.28 L15.4 595.28" class="st18"/>
			</g>
			<g id="group1339-822" transform="translate(3.22082,-40.2729)" v:mID="1339" v:groupContext="group">
				<title>Sheet.1339</title>
				<g id="group1340-823" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1340" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1341-824" v:mID="1341" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
						<title>Sheet.1341</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
						<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
						<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
					</g>
					<g id="shape1342-829" v:mID="1342" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
						<title>Sheet.1342</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1343-831" v:mID="1343" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
						<title>Sheet.1343</title>
					</g>
				</g>
				<g id="shape1344-833" v:mID="1344" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
					<title>Sheet.1344</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
		</g>
		<g id="group1345-836" transform="translate(741.527,-107.702)" v:mID="1345" v:groupContext="group">
			<title>Sheet.1345</title>
			<g id="group1346-837" transform="translate(0,-21.1261)" v:mID="1346" v:groupContext="group">
				<title>Sheet.1346</title>
				<g id="shape1347-838" v:mID="1347" v:groupContext="shape" transform="translate(0,-6.22663)">
					<title>Sheet.1347</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
				</g>
				<g id="shape1348-840" v:mID="1348" v:groupContext="shape">
					<title>Sheet.1348</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
				</g>
			</g>
			<g id="shape1349-842" v:mID="1349" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
				<title>Sheet.1349</title>
				<path d="M0 595.28 L15.4 595.28" class="st18"/>
			</g>
			<g id="group1350-847" transform="translate(3.22082,-40.2729)" v:mID="1350" v:groupContext="group">
				<title>Sheet.1350</title>
				<g id="group1351-848" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1351" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1352-849" v:mID="1352" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
						<title>Sheet.1352</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
						<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
						<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
					</g>
					<g id="shape1353-854" v:mID="1353" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
						<title>Sheet.1353</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1354-856" v:mID="1354" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
						<title>Sheet.1354</title>
					</g>
				</g>
				<g id="shape1355-858" v:mID="1355" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
					<title>Sheet.1355</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
		</g>
		<g id="shape1356-861" v:mID="1356" v:groupContext="shape" transform="translate(687.15,-159.003)">
			<title>Sheet.1356</title>
			<path d="M0 595.28 L0 578.95 L75.29 578.95" class="st8"/>
		</g>
		<g id="shape1357-864" v:mID="1357" v:groupContext="shape" transform="translate(152.108,436.498) rotate(-90)">
			<title>Sheet.1357</title>
			<path d="M0 595.28 L16.55 595.28" class="st8"/>
		</g>
		<g id="shape1358-867" v:mID="1358" v:groupContext="shape" transform="translate(106.932,436.498) rotate(-90)">
			<title>Sheet.1358</title>
			<path d="M0 595.28 L16.52 595.28" class="st8"/>
		</g>
		<g id="shape1359-870" v:mID="1359" v:groupContext="shape" transform="translate(121.991,436.498) rotate(-90)">
			<title>Sheet.1359</title>
			<path d="M0 595.28 L16.52 595.28" class="st8"/>
		</g>
		<g id="shape1360-873" v:mID="1360" v:groupContext="shape" transform="translate(137.049,436.498) rotate(-90)">
			<title>Sheet.1360</title>
			<path d="M0 595.28 L16.52 595.28" class="st8"/>
		</g>
		<g id="group1361-876" transform="translate(756.586,-107.702)" v:mID="1361" v:groupContext="group">
			<title>Sheet.1361</title>
			<g id="group1362-877" transform="translate(0,-21.1261)" v:mID="1362" v:groupContext="group">
				<title>Sheet.1362</title>
				<g id="shape1363-878" v:mID="1363" v:groupContext="shape" transform="translate(0,-6.22663)">
					<title>Sheet.1363</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st7"/>
				</g>
				<g id="shape1364-880" v:mID="1364" v:groupContext="shape">
					<title>Sheet.1364</title>
					<ellipse cx="5.85604" cy="589.049" rx="5.85604" ry="6.22663" class="st17"/>
				</g>
			</g>
			<g id="shape1365-882" v:mID="1365" v:groupContext="shape" transform="translate(601.132,574.105) rotate(90)">
				<title>Sheet.1365</title>
				<path d="M0 595.28 L15.4 595.28" class="st18"/>
			</g>
			<g id="group1366-887" transform="translate(3.22082,-40.2729)" v:mID="1366" v:groupContext="group">
				<title>Sheet.1366</title>
				<g id="group1367-888" transform="translate(5.27044,-5.64868) scale(-1,1)" v:mID="1367" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1368-889" v:mID="1368" v:groupContext="shape" v:layerMember="0" transform="translate(0.397813,-7.86481E-07)">
						<title>Sheet.1368</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M2.23 590.13 L2.23 591.47" class="st22"/>
						<path d="M2.23 595.28 L2.23 593.93" class="st22"/>
						<path d="M0.61 591.68 L2.23 593.93 L2.23 595.28" class="st22"/>
					</g>
					<g id="shape1369-894" v:mID="1369" v:groupContext="shape" v:layerMember="0" transform="translate(2.10238,-0.830356)">
						<title>Sheet.1369</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1370-896" v:mID="1370" v:groupContext="shape" v:layerMember="0" transform="translate(-0.510858,0.499599)">
						<title>Sheet.1370</title>
					</g>
				</g>
				<g id="shape1371-898" v:mID="1371" v:groupContext="shape" transform="translate(597.911,589.627) rotate(90)">
					<title>Sheet.1371</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
		</g>
		<g id="shape1372-901" v:mID="1372" v:groupContext="shape" transform="translate(167.166,436.498) rotate(-90)">
			<title>Sheet.1372</title>
			<path d="M0 595.28 L16.55 595.28" class="st8"/>
		</g>
		<g id="shape1392-904" v:mID="1392" v:groupContext="shape" transform="translate(123.744,-563.852)">
			<title>Sheet.1392</title>
			<path d="M0 595.28 L585.58 595.28" class="st23"/>
		</g>
		<g id="shape1394-907" v:mID="1394" v:groupContext="shape" transform="translate(1304.75,31.4238) rotate(90)">
			<title>Sheet.1394</title>
			<path d="M0 595.28 L197.43 595.28" class="st23"/>
		</g>
		<g id="shape1395-910" v:mID="1395" v:groupContext="shape" transform="translate(717.975,31.4238) rotate(90)">
			<title>Sheet.1395</title>
			<path d="M0 595.28 L197.71 595.28" class="st23"/>
		</g>
		<g id="shape1396-913" v:mID="1396" v:groupContext="shape" transform="translate(124.117,-366.139)">
			<title>Sheet.1396</title>
			<path d="M0 595.28 L231.99 595.28" class="st23"/>
		</g>
		<g id="shape1397-916" v:mID="1397" v:groupContext="shape" transform="translate(519.55,-366.139)">
			<title>Sheet.1397</title>
			<path d="M0 595.28 L189.92 595.28" class="st23"/>
		</g>
		<g id="shape1398-919" v:mID="1398" v:groupContext="shape" transform="translate(951.422,229.136) rotate(90)">
			<title>Sheet.1398</title>
			<path d="M0 595.28 L61.68 595.28" class="st23"/>
		</g>
		<g id="shape1399-922" v:mID="1399" v:groupContext="shape" transform="translate(1114.83,228.853) rotate(90)">
			<title>Sheet.1399</title>
			<path d="M0 595.28 L62.31 595.28" class="st23"/>
		</g>
		<g id="shape1400-925" v:mID="1400" v:groupContext="shape" transform="translate(357.258,-304.304) rotate(0.0673556)">
			<title>Sheet.1400</title>
			<path d="M0 595.28 L162.99 595.28" class="st23"/>
		</g>
        <a href="dashboard_jatiluhur.php">
		<g id="shape1425-928" v:mID="1425" v:groupContext="shape" transform="translate(126.233,-369.32)">
			<title>Sheet.1425</title>
			<desc>GI JATILUHUR</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="45.0049" cy="588.159" width="90.01" height="14.2323"/>
			<rect x="0" y="581.043" width="90.0097" height="14.2323" class="st24"/>
			<text x="19.74" y="590.86" class="st25" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>GI JATILUHUR</text>		
            
        </g>
		<g id="shape1426-931" v:mID="1426" v:groupContext="shape" transform="translate(37.9347,-25.9818)">
			<title>Sheet.1426</title>
			<desc>GI CURUG</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="38.4022" cy="588.159" width="76.81" height="14.2323"/>
			<rect x="0" y="581.043" width="76.8045" height="14.2323" class="st24"/>
			<text x="19.96" y="590.86" class="st25" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>GI CURUG</text>		</g>
		<g id="shape1427-934" v:mID="1427" v:groupContext="shape" transform="translate(459.426,-25.9818)">
			<title>Sheet.1427</title>
			<desc>GI CIGANEA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="38.4022" cy="588.159" width="76.81" height="14.2323"/>
			<rect x="0" y="581.043" width="76.8045" height="14.2323" class="st24"/>
			<text x="16.73" y="590.86" class="st25" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>GI CIGANEA</text>		</g>
		<g id="group1428-937" transform="translate(400.495,-108.739)" v:mID="1428" v:groupContext="group">
			<title>Sheet.1428</title>
			<g id="group1429-938" transform="translate(0,-30.1801)" v:mID="1429" v:groupContext="group">
				<title>Sheet.1429</title>
				<g id="shape1430-939" v:mID="1430" v:groupContext="shape" transform="translate(0,-8.89518)">
					<title>Sheet.1430</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				</g>
				<g id="shape1431-941" v:mID="1431" v:groupContext="shape">
					<title>Sheet.1431</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st17"/>
				</g>
			</g>
			<g id="shape1432-943" v:mID="1432" v:groupContext="shape" transform="translate(603.641,565.032) rotate(90)">
				<title>Sheet.1432</title>
				<path d="M0 595.28 L24.47 595.28" class="st18"/>
			</g>
			<g id="group1433-948" transform="translate(4.60118,-57.5328)" v:mID="1433" v:groupContext="group">
				<title>Sheet.1433</title>
				<g id="group1434-949" transform="translate(7.5292,-16.3325) scale(-1,1)" v:mID="1434" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1435-950" v:mID="1435" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.1435</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st12"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st12"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st12"/>
					</g>
					<g id="shape1436-955" v:mID="1436" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.1436</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1437-957" v:mID="1437" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.1437</title>
					</g>
				</g>
				<g id="shape1438-959" v:mID="1438" v:groupContext="shape" transform="translate(3.7646,-19.7918)">
					<title>Sheet.1438</title>
					<path d="M0 595.28 L0 592.86 L0 578.19" class="st8"/>
				</g>
				<g id="shape1439-962" v:mID="1439" v:groupContext="shape" transform="translate(599.04,578.943) rotate(90)">
					<title>Sheet.1439</title>
					<path d="M0 595.28 L16.33 595.28" class="st8"/>
				</g>
			</g>
		</g>
		<g id="shape1444-965" v:mID="1444" v:groupContext="shape" transform="translate(427.991,-539.305)">
			<title>Sheet.1444</title>
			<desc>UNIT 4</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
			<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
			<text x="3.55" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 4</text>		</g>
		<g id="shape1451-968" v:mID="1451" v:groupContext="shape" transform="translate(354.412,-383.399)">
			<title>Sheet.1451</title>
			<desc>TRAFO 1 40 MVA 150/70KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
			<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
			<text x="1.43" y="582.28" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 1<v:newlineChar/><tspan x="2.1" dy="1.2em" class="st28">40 </tspan>MVA<v:newlineChar/><tspan x="6.1" dy="1.2em" class="st28">150</tspan>/<tspan x="5.52" dy="1.2em" class="st28">70</tspan>KV</text>		</g>
		<g id="shape1452-974" v:mID="1452" v:groupContext="shape" transform="translate(393.449,-383.399)">
			<title>Sheet.1452</title>
			<desc>TRAFO 2 40 MVA 150/70KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
			<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
			<text x="1.43" y="582.28" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 2<v:newlineChar/><tspan x="2.1" dy="1.2em" class="st28">40 </tspan>MVA<v:newlineChar/><tspan x="6.1" dy="1.2em" class="st28">150</tspan>/<tspan x="5.52" dy="1.2em" class="st28">70</tspan>KV</text>		</g>
		<g id="shape1454-980" v:mID="1454" v:groupContext="shape" transform="translate(624.074,-99.9345)">
			<title>Sheet.1454</title>
			<desc>ELEGANT 4</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="7.04" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>ELEGANT 4</text>		</g>
		<g id="shape1455-983" v:mID="1455" v:groupContext="shape" transform="translate(646.248,-92.8479)">
			<title>Sheet.1455</title>
			<desc>INDORAMA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="6.27" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>INDORAMA</text>		</g>
		<g id="shape1456-986" v:mID="1456" v:groupContext="shape" transform="translate(468.168,-99.9345)">
			<title>Sheet.1456</title>
			<desc>ELEGANT 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="7.04" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>ELEGANT 1</text>		</g>
		<g id="shape1457-989" v:mID="1457" v:groupContext="shape" transform="translate(489.878,-92.8479)">
			<title>Sheet.1457</title>
			<desc>ELEGANT 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="7.04" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>ELEGANT 2</text>		</g>
		<g id="shape1458-992" v:mID="1458" v:groupContext="shape" transform="translate(512.052,-99.9345)">
			<title>Sheet.1458</title>
			<desc>ELEGANT 3</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="7.04" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>ELEGANT 3</text>		</g>
		<g id="shape1459-995" v:mID="1459" v:groupContext="shape" transform="translate(667.152,-99.9345)">
			<title>Sheet.1459</title>
			<desc>PT.URASE</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="8.55" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PT.URASE</text>		</g>
		<g id="shape1460-998" v:mID="1460" v:groupContext="shape" transform="translate(682.211,-92.8479)">
			<title>Sheet.1460</title>
			<desc>PT.KURNIA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="7.15" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PT.KURNIA</text>		</g>
		<g id="shape1461-1001" v:mID="1461" v:groupContext="shape" transform="translate(685.058,-184.974)">
			<title>Sheet.1461</title>
			<desc>T.KAYAT</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="10.28" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>T.KAYAT</text>		</g>
		<g id="shape1462-1004" v:mID="1462" v:groupContext="shape" transform="translate(712.306,-96.8479)">
			<title>Sheet.1462</title>
			<desc>PERUMAHAN</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="4.05" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PERUMAHAN</text>		</g>
		<g id="shape1463-1007" v:mID="1463" v:groupContext="shape" transform="translate(513.881,-248.363)">
			<title>Sheet.1463</title>
			<desc>TRAFO 1 15 MVA 70/6,3 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="13.3692" cy="584.189" width="26.74" height="22.1732"/>
			<rect x="0" y="573.102" width="26.7385" height="22.1732" class="st26"/>
			<text x="2.98" y="578.79" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 1<v:newlineChar/><tspan x="3.65" dy="1.2em" class="st28">15 </tspan>MVA<v:newlineChar/><tspan x="1.44" dy="1.2em" class="st28">70</tspan>/6,3 KV</text>		</g>
		<g id="shape1464-1012" v:mID="1464" v:groupContext="shape" transform="translate(655.613,-248.363)">
			<title>Sheet.1464</title>
			<desc>TRAFO 2 15 MVA 70/6,3 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="13.3692" cy="584.189" width="26.74" height="22.1732"/>
			<rect x="0" y="573.102" width="26.7385" height="22.1732" class="st26"/>
			<text x="2.98" y="578.79" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 2<v:newlineChar/><tspan x="3.65" dy="1.2em" class="st28">15 </tspan>MVA<v:newlineChar/><tspan x="1.44" dy="1.2em" class="st28">70</tspan>/6,3 KV</text>		</g>
		<g id="shape1465-1017" v:mID="1465" v:groupContext="shape" transform="translate(543.835,-184.974)">
			<title>Sheet.1465</title>
			<desc>PS / K.PUSAT</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="4.65" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PS / K.PUSAT</text>		</g>
		<g id="shape1466-1020" v:mID="1466" v:groupContext="shape" transform="translate(61.9455,-333.793)">
			<title>Sheet.1466</title>
			<desc>MINIHYDRO</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="5.65" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>MINIHYDRO</text>		</g>
		<g id="shape1467-1023" v:mID="1467" v:groupContext="shape" transform="translate(38.7046,-323.62)">
			<title>Sheet.1467</title>
			<desc>UNIT 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="12.18" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 1</text>		</g>
		<g id="shape1468-1026" v:mID="1468" v:groupContext="shape" transform="translate(88.7135,-323.62)">
			<title>Sheet.1468</title>
			<desc>UNIT 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="12.18" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 2</text>		</g>
		<g id="shape1469-1029" v:mID="1469" v:groupContext="shape" transform="translate(67.4241,-251.73)">
			<title>Sheet.1469</title>
			<desc>TRAFO 4 MVA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="10.8755" cy="588.159" width="21.76" height="14.2323"/>
			<rect x="0" y="581.043" width="21.751" height="14.2323" class="st26"/>
			<text x="2.68" y="586.36" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO<v:newlineChar/><tspan x="2" dy="1.2em" class="st28"> </tspan>4 MVA</text>		</g>
		<g id="shape1470-1033" v:mID="1470" v:groupContext="shape" transform="translate(117.03,-250.767)">
			<title>Sheet.1470</title>
			<desc>TRAFO 4 MVA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="10.8755" cy="587.196" width="21.76" height="16.1601"/>
			<rect x="0" y="579.116" width="21.751" height="16.1601" class="st26"/>
			<text x="2.68" y="585.4" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <v:newlineChar/><tspan x="2.67" dy="1.2em" class="st28">4 </tspan>MVA</text>		</g>
		<g id="shape1472-1037" v:mID="1472" v:groupContext="shape" transform="translate(141.033,-250.767)">
			<title>Sheet.1472</title>
			<desc>TRAFO 1 10 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.1732" cy="587.196" width="28.35" height="16.1601"/>
			<rect x="0" y="579.116" width="28.3465" height="16.1601" class="st26"/>
			<text x="3.78" y="581.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 1 <v:newlineChar/><tspan x="4.45" dy="1.2em" class="st28">10 </tspan>MVA<v:newlineChar/><tspan x="3.67" dy="1.2em" class="st28">70</tspan>/20KV</text>		</g>
		<g id="shape1473-1042" v:mID="1473" v:groupContext="shape" transform="translate(224.701,-250.767)">
			<title>Sheet.1473</title>
			<desc>TRAFO 4 15 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.1732" cy="587.196" width="28.35" height="16.1601"/>
			<rect x="0" y="579.116" width="28.3465" height="16.1601" class="st26"/>
			<text x="3.78" y="581.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 4 <v:newlineChar/><tspan x="4.45" dy="1.2em" class="st28">15 </tspan>MVA<v:newlineChar/><tspan x="3.67" dy="1.2em" class="st28">70</tspan>/20KV</text>		</g>
		<g id="shape1497-1047" v:mID="1497" v:groupContext="shape" transform="translate(298.299,-250.767)">
			<title>Sheet.1497</title>
			<desc>TRAFO 2 5 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.1732" cy="587.196" width="28.35" height="16.1601"/>
			<rect x="0" y="579.116" width="28.3465" height="16.1601" class="st26"/>
			<text x="3.78" y="581.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 2 <v:newlineChar/><tspan x="5.97" dy="1.2em" class="st28">5 </tspan>MVA<v:newlineChar/><tspan x="3.67" dy="1.2em" class="st28">70</tspan>/20KV</text>		</g>
		<g id="shape1498-1052" v:mID="1498" v:groupContext="shape" transform="translate(365.062,-250.767)">
			<title>Sheet.1498</title>
			<desc>TRAFO 3 5 MVA 70/20KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.1732" cy="587.196" width="28.35" height="16.1601"/>
			<rect x="0" y="579.116" width="28.3465" height="16.1601" class="st26"/>
			<text x="3.78" y="581.8" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO 3<v:newlineChar/><tspan x="5.97" dy="1.2em" class="st28">5 </tspan>MVA<v:newlineChar/><tspan x="3.67" dy="1.2em" class="st28">70</tspan>/20KV</text>		</g>
		<g id="shape1499-1057" v:mID="1499" v:groupContext="shape" transform="translate(139.094,-128.281)">
			<title>Sheet.1499</title>
			<desc>PT.BPS</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="12.13" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PT.BPS</text>		</g>
		<g id="shape1500-1060" v:mID="1500" v:groupContext="shape" transform="translate(175.331,-128.281)">
			<title>Sheet.1500</title>
			<desc>PT.KTP</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="12.12" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PT.KTP</text>		</g>
		<g id="shape1501-1063" v:mID="1501" v:groupContext="shape" transform="translate(212.153,-128.281)">
			<title>Sheet.1501</title>
			<desc>AUXILIARY</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="7.64" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>AUXILIARY</text>		</g>
		<g id="shape1502-1066" v:mID="1502" v:groupContext="shape" transform="translate(237.503,-108.739)">
			<title>Sheet.1502</title>
			<desc>POMPA 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="8.87" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 1</text>		</g>
		<g id="shape1503-1069" v:mID="1503" v:groupContext="shape" transform="translate(258.763,-103.021)">
			<title>Sheet.1503</title>
			<desc>POMPA 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="8.87" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 2</text>		</g>
		<g id="shape1504-1072" v:mID="1504" v:groupContext="shape" transform="translate(278.589,-108.739)">
			<title>Sheet.1504</title>
			<desc>POMPA 3</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="8.87" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 3</text>		</g>
		<g id="shape1505-1075" v:mID="1505" v:groupContext="shape" transform="translate(317.064,-108.739)">
			<title>Sheet.1505</title>
			<desc>POMPA 5</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="8.87" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 5</text>		</g>
		<g id="shape1506-1078" v:mID="1506" v:groupContext="shape" transform="translate(299.044,-103.021)">
			<title>Sheet.1506</title>
			<desc>POMPA 4</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="8.87" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 4</text>		</g>
		<g id="shape1507-1081" v:mID="1507" v:groupContext="shape" transform="translate(338.323,-103.021)">
			<title>Sheet.1507</title>
			<desc>POMPA 6</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="8.87" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>POMPA 6</text>		</g>
		<g id="shape1520-1084" v:mID="1520" v:groupContext="shape" transform="translate(51.2143,-389.764)">
			<title>Sheet.1520</title>
			<desc>LINE 70 KV FROM KOSAMBI</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="38.1724" cy="591.276" width="76.35" height="8"/>
			<rect x="0" y="587.276" width="76.3448" height="8" class="st26"/>
			<text x="25.1" y="589.48" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 70 KV <v:newlineChar/><tspan x="18.32" dy="1.2em" class="st28">FROM KOSAMBI</tspan></text>		</g>
		<g id="shape1523-1088" v:mID="1523" v:groupContext="shape" transform="translate(131.48,-437.257)">
			<title>Sheet.1523</title>
			<desc>REL 1</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="8.36578" cy="591.276" width="16.74" height="8"/>
			<rect x="0" y="587.276" width="16.7316" height="8" class="st26"/>
			<text x="1.81" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>REL 1</text>		</g>
		<g id="shape1524-1091" v:mID="1524" v:groupContext="shape" transform="translate(686.932,-418.58)">
			<title>Sheet.1524</title>
			<desc>REL 2</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="8.36578" cy="591.276" width="16.74" height="8"/>
			<rect x="0" y="587.276" width="16.7316" height="8" class="st26"/>
			<text x="1.81" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>REL 2</text>		</g>
		<g id="shape1525-1094" v:mID="1525" v:groupContext="shape" transform="translate(425.197,-315.244)">
			<title>Sheet.1525</title>
			<desc>LINE 70 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="591.276" width="28.78" height="8"/>
			<rect x="0" y="587.276" width="28.7783" height="8" class="st26"/>
			<text x="1.31" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 70 KV</text>		</g>
		<g id="shape1526-1097" v:mID="1526" v:groupContext="shape" transform="translate(575.55,-204.816)">
			<title>Sheet.1526</title>
			<desc>LINE 6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="591.276" width="28.78" height="8"/>
			<rect x="0" y="587.276" width="28.7783" height="8" class="st26"/>
			<text x="1.24" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3KV</text>		</g>
		<g id="shape1527-1100" v:mID="1527" v:groupContext="shape" transform="translate(306.952,-204.816)">
			<title>Sheet.1527</title>
			<desc>LINE 6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="591.276" width="28.78" height="8"/>
			<rect x="0" y="587.276" width="28.7783" height="8" class="st26"/>
			<text x="1.24" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3KV</text>		</g>
		<g id="shape1528-1103" v:mID="1528" v:groupContext="shape" transform="translate(137.442,-204.816)">
			<title>Sheet.1528</title>
			<desc>LINE 20 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="591.276" width="28.78" height="8"/>
			<rect x="0" y="587.276" width="28.7783" height="8" class="st26"/>
			<text x="1.31" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 20 KV</text>		</g>
		<g id="shape1529-1106" v:mID="1529" v:groupContext="shape" transform="translate(425.197,-418.832)">
			<title>Sheet.1529</title>
			<desc>LINE 150 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="5.86" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 150 KV</text>		</g>
		<g id="shape1530-1109" v:mID="1530" v:groupContext="shape" transform="translate(127.142,-431.588)">
			<title>Sheet.1530</title>
			<desc>LINE 150 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="5.86" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 150 KV</text>		</g>
		<g id="shape1531-1112" v:mID="1531" v:groupContext="shape" transform="translate(666.952,-413.415)">
			<title>Sheet.1531</title>
			<desc>LINE 150 KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
			<rect x="0" y="587.276" width="40.9117" height="8" class="st26"/>
			<text x="5.86" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 150 KV</text>		</g>
		<g id="shape1532-1115" v:mID="1532" v:groupContext="shape" transform="translate(357.004,-483.561)">
			<title>Sheet.1532</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
			<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
			<text x="3.63" y="582.28" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1" dy="1.2em" class="st28">35 </tspan>MVA<v:newlineChar/><tspan x="6.88" dy="1.2em" class="st28">6</tspan>,3/<tspan x="4" dy="1.2em" class="st28">150</tspan>KV</text>		</g>
		<g id="shape1533-1121" v:mID="1533" v:groupContext="shape" transform="translate(306.466,-483.321)">
			<title>Sheet.1533</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
			<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
			<text x="3.63" y="582.28" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1" dy="1.2em" class="st28">35 </tspan>MVA<v:newlineChar/><tspan x="6.88" dy="1.2em" class="st28">6</tspan>,3/<tspan x="4" dy="1.2em" class="st28">150</tspan>KV</text>		</g>
		<g id="shape1534-1127" v:mID="1534" v:groupContext="shape" transform="translate(255.928,-483.801)">
			<title>Sheet.1534</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
			<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
			<text x="3.63" y="582.28" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1" dy="1.2em" class="st28">35 </tspan>MVA<v:newlineChar/><tspan x="6.88" dy="1.2em" class="st28">6</tspan>,3/<tspan x="4" dy="1.2em" class="st28">150</tspan>KV</text>		</g>
		<g id="shape1535-1133" v:mID="1535" v:groupContext="shape" transform="translate(405.678,-483.081)">
			<title>Sheet.1535</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
			<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
			<text x="3.63" y="582.28" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1" dy="1.2em" class="st28">35 </tspan>MVA<v:newlineChar/><tspan x="6.88" dy="1.2em" class="st28">6</tspan>,3/<tspan x="4" dy="1.2em" class="st28">150</tspan>KV</text>		</g>
		<g id="shape1536-1139" v:mID="1536" v:groupContext="shape" transform="translate(504.405,-483.169)">
			<title>Sheet.1536</title>
			<desc>TRAFO 40 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
			<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
			<text x="3.63" y="582.28" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1" dy="1.2em" class="st28">40 </tspan>MVA<v:newlineChar/><tspan x="6.88" dy="1.2em" class="st28">6</tspan>,3/<tspan x="4" dy="1.2em" class="st28">150</tspan>KV</text>		</g>
		<g id="group1537-1145" transform="translate(624.432,-427.301)" v:mID="1537" v:groupContext="group">
			<title>Sheet.1537</title>
			<g id="shape569-1146" v:mID="569" v:groupContext="shape" transform="translate(17.2472,1148.65) scale(1,-1)">
				<title>Sheet.569</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
			</g>
			<g id="group570-1148" transform="translate(12.2278,1126.05) scale(1,-1)" v:mID="570" v:groupContext="group">
				<title>Sheet.570</title>
				<g id="group571-1149" transform="translate(609.92,595.276) rotate(90) scale(-1,1)" v:mID="571" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="Core" v:lbl="Core" v:type="1" v:format="Air;Magnetic;Magnetic with Gap" v:langID="1033" v:val="VT4(Air)"/>
						<v:cp v:nameU="Adjustability" v:lbl="Adjustability" v:type="1" v:format="Fixed;Adjustable;Continuously Adjustable" v:langID="1033" v:val="VT4(Fixed)"/>
						<v:cp v:nameU="Taps" v:lbl="Taps" v:type="1" v:format="0;1;2;3" v:langID="1033" v:val="VT4(0)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:type="0" v:format="" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:val="VT0(0):26"/>
						<v:cp v:nameU="Value" v:lbl="Value" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:val="VT4()"/>
					</v:custProps>
					<v:userDefs>
						<v:ud v:nameU="Core" v:val="VT0(0):26"/>
						<v:ud v:nameU="Adjustability" v:val="VT0(0):26"/>
						<v:ud v:nameU="CH"/>
						<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
						<v:ud v:nameU="visDescription" v:val="VT4(Inductor. Right-click to set inductor properties.)"/>
					</v:userDefs>
					<title>Inductor</title>
					<g id="shape572-1150" v:mID="572" v:groupContext="shape" v:layerMember="0">
						<title>Sheet.572</title>
						<path d="M0 595.28 A1.85071 2.0068 0 1 1 3.7 595.28 A1.85071 2.0068 0 1 1 7.4 595.28 A1.85071 2.0068 0 1           1 11.1 595.28 A1.85071 2.0068 0 1 1 14.79 595.28" class="st2"/>
						<path d="M0 595.28 L0 599.45" class="st2"/>
						<path d="M14.79 595.28 L14.79 599.45" class="st2"/>
					</g>
					<g id="shape573-1155" v:mID="573" v:groupContext="shape" v:layerMember="0" transform="translate(7.1311,2.34788)">
						<title>Sheet.573</title>
					</g>
					<g id="shape574-1157" v:mID="574" v:groupContext="shape" v:layerMember="0" transform="translate(-418.327,178.607) rotate(-45)">
						<title>Sheet.574</title>
					</g>
				</g>
				<g id="group575-1159" transform="translate(0,-1.50958)" v:mID="575" v:groupContext="group">
					<title>Sheet.575</title>
					<g id="group576-1160" transform="translate(0,-6.4157)" v:mID="576" v:groupContext="group">
						<title>Sheet.576</title>
						<g id="shape577-1161" v:mID="577" v:groupContext="shape" transform="translate(597.689,589.992) rotate(90)">
							<title>Sheet.577</title>
							<path d="M0 595.28 L5.28 595.28" class="st2"/>
						</g>
						<g id="shape578-1164" v:mID="578" v:groupContext="shape">
							<title>Sheet.578</title>
							<path d="M0 595.28 L4.69 595.28" class="st2"/>
						</g>
					</g>
					<g id="group579-1167" transform="translate(0,1185.27) scale(1,-1)" v:mID="579" v:groupContext="group">
						<title>Sheet.579</title>
						<g id="shape580-1168" v:mID="580" v:groupContext="shape" transform="translate(597.689,589.992) rotate(90)">
							<title>Sheet.580</title>
							<path d="M0 595.28 L5.28 595.28" class="st2"/>
						</g>
						<g id="shape581-1171" v:mID="581" v:groupContext="shape">
							<title>Sheet.581</title>
							<path d="M0 595.28 L4.69 595.28" class="st2"/>
						</g>
					</g>
				</g>
				<g id="shape582-1174" v:mID="582" v:groupContext="shape" transform="translate(10.4705,1175.76) rotate(180)">
					<title>Sheet.582</title>
					<path d="M0 595.28 L8.06 595.28" class="st2"/>
				</g>
				<g id="shape583-1177" v:mID="583" v:groupContext="shape" transform="translate(10.4705,1190.55) rotate(180)">
					<title>Sheet.583</title>
					<path d="M0 595.28 L8.06 595.28" class="st2"/>
				</g>
				<g id="shape584-1180" v:mID="584" v:groupContext="shape" transform="translate(597.689,580.482) rotate(90)">
					<title>Sheet.584</title>
					<path d="M0 595.28 L1.66 595.28" class="st2"/>
				</g>
				<g id="shape585-1183" v:mID="585" v:groupContext="shape" transform="translate(597.689,593.766) rotate(90)">
					<title>Sheet.585</title>
					<path d="M0 595.28 L1.51 595.28" class="st2"/>
				</g>
			</g>
			<g id="group586-1186" transform="translate(10.5546,-5.42606)" v:mID="586" v:groupContext="group">
				<title>Sheet.586</title>
				<g id="group587-1187" transform="translate(7.5292,-0.321204) scale(-1,1)" v:mID="587" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape588-1188" v:mID="588" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.588</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st30"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st30"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st30"/>
					</g>
					<g id="shape589-1193" v:mID="589" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.589</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape590-1195" v:mID="590" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.590</title>
					</g>
				</g>
				<g id="group591-1197" transform="translate(20.0779,-0.321204) scale(-1,1)" v:mID="591" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape592-1198" v:mID="592" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.592</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st30"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st30"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st30"/>
					</g>
					<g id="shape593-1203" v:mID="593" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.593</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape594-1205" v:mID="594" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.594</title>
					</g>
				</g>
				<g id="shape595-1207" v:mID="595" v:groupContext="shape" v:layerMember="1" transform="translate(2.95232,-0.597845)">
					<title>Dynamic connector.205</title>
					<path d="M0.81 588.19 L0.81 582.87 L13.36 582.87 L13.36 588.19" class="st2"/>
				</g>
			</g>
			<g id="shape596-1210" v:mID="596" v:groupContext="shape" transform="translate(615.869,567.914) rotate(90)">
				<title>Sheet.596</title>
				<path d="M0 595.28 L8.74 595.28" class="st2"/>
			</g>
			<g id="shape597-1213" v:mID="597" v:groupContext="shape" transform="translate(-574.682,553.29) rotate(-90)">
				<title>Sheet.597</title>
				<path d="M0 595.28 L7.72 595.28" class="st2"/>
			</g>
			<g id="shape598-1216" v:mID="598" v:groupContext="shape" transform="translate(609.595,589.528) rotate(90)">
				<title>Sheet.598</title>
				<path d="M0 595.28 L1.83 595.28" class="st31"/>
			</g>
			<g id="shape599-1222" v:mID="599" v:groupContext="shape" transform="translate(622.143,589.528) rotate(90)">
				<title>Sheet.599</title>
				<path d="M0 595.28 L3.83 595.28" class="st33"/>
			</g>
			<g id="shape600-1228" v:mID="600" v:groupContext="shape" transform="translate(-574.682,530.697) rotate(-90)">
				<title>Sheet.600</title>
				<path d="M0 595.28 L11.48 595.28" class="st34"/>
			</g>
			<g id="shape1448-1234" v:mID="1448" v:groupContext="shape" transform="translate(0,-84.8223)">
				<title>Sheet.1448</title>
				<desc>PADALARANG 2</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
				<rect x="0" y="587.276" width="40.9117" height="8" class="st36"/>
				<text x="1.2" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PADALARANG 2</text>			</g>
			<g id="group1474-1237" transform="translate(1.43561,-69.0361)" v:mID="1474" v:groupContext="group">
				<title>Sheet.1474</title>
				<g id="shape601-1238" v:mID="601" v:groupContext="shape" transform="translate(18.3746,1188.3) rotate(180)">
					<title>Sheet.601</title>
					<path d="M0 595.28 L1.13 595.28" class="st37"/>
				</g>
				<g id="shape602-1244" v:mID="602" v:groupContext="shape" transform="translate(1.73973,1188.33) scale(1,-1)">
					<title>Sheet.602</title>
					<path d="M0 595.28 L2.3 595.28" class="st37"/>
				</g>
				<g id="group603-1249" transform="translate(595.276,590.828) rotate(90)" v:mID="603" v:groupContext="group">
					<title>Sheet.603</title>
					<g id="shape604-1250" v:mID="604" v:groupContext="shape" transform="translate(1.94844E-14,-1.67316)">
						<title>Sheet.604</title>
						<path d="M0 595.28 L4.45 595.28" class="st39"/>
					</g>
					<g id="shape605-1253" v:mID="605" v:groupContext="shape" transform="translate(0.889518,-0.836578)">
						<title>Sheet.605</title>
						<path d="M0 595.28 L2.67 595.28" class="st39"/>
					</g>
					<g id="shape606-1256" v:mID="606" v:groupContext="shape" transform="translate(1.77904,0)">
						<title>Sheet.606</title>
						<path d="M0 595.28 L0.89 595.28" class="st39"/>
					</g>
				</g>
			</g>
		</g>
		<g id="group1538-1259" transform="translate(570.574,-427.301)" v:mID="1538" v:groupContext="group">
			<title>Sheet.1538</title>
			<g id="group997-1260" transform="translate(1.53995,0)" v:mID="997" v:groupContext="group">
				<title>Sheet.997</title>
				<g id="shape530-1261" v:mID="530" v:groupContext="shape" transform="translate(15.393,1148.65) scale(1,-1)">
					<title>Sheet.530</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
				</g>
				<g id="group531-1263" transform="translate(10.3736,1126.05) scale(1,-1)" v:mID="531" v:groupContext="group">
					<title>Sheet.531</title>
					<g id="group532-1264" transform="translate(609.92,595.276) rotate(90) scale(-1,1)" v:mID="532" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="Core" v:lbl="Core" v:type="1" v:format="Air;Magnetic;Magnetic with Gap" v:langID="1033" v:val="VT4(Air)"/>
							<v:cp v:nameU="Adjustability" v:lbl="Adjustability" v:type="1" v:format="Fixed;Adjustable;Continuously Adjustable" v:langID="1033" v:val="VT4(Fixed)"/>
							<v:cp v:nameU="Taps" v:lbl="Taps" v:type="1" v:format="0;1;2;3" v:langID="1033" v:val="VT4(0)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:type="0" v:format="" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:val="VT0(0):26"/>
							<v:cp v:nameU="Value" v:lbl="Value" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Core" v:val="VT0(0):26"/>
							<v:ud v:nameU="Adjustability" v:val="VT0(0):26"/>
							<v:ud v:nameU="CH"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Inductor. Right-click to set inductor properties.)"/>
						</v:userDefs>
						<title>Inductor</title>
						<g id="shape533-1265" v:mID="533" v:groupContext="shape" v:layerMember="0">
							<title>Sheet.533</title>
							<path d="M0 595.28 A1.85071 2.0068 0 1 1 3.7 595.28 A1.85071 2.0068 0 1 1 7.4 595.28 A1.85071 2.0068            0 1 1 11.1 595.28 A1.85071 2.0068 0 1 1 14.79 595.28" class="st2"/>
							<path d="M0 595.28 L0 599.45" class="st2"/>
							<path d="M14.79 595.28 L14.79 599.45" class="st2"/>
						</g>
						<g id="shape534-1270" v:mID="534" v:groupContext="shape" v:layerMember="0" transform="translate(7.1311,2.34788)">
							<title>Sheet.534</title>
						</g>
						<g id="shape535-1272" v:mID="535" v:groupContext="shape" v:layerMember="0" transform="translate(-418.327,178.607) rotate(-45)">
							<title>Sheet.535</title>
						</g>
					</g>
					<g id="group536-1274" transform="translate(0,-1.50958)" v:mID="536" v:groupContext="group">
						<title>Sheet.536</title>
						<g id="group537-1275" transform="translate(0,-6.4157)" v:mID="537" v:groupContext="group">
							<title>Sheet.537</title>
							<g id="shape538-1276" v:mID="538" v:groupContext="shape" transform="translate(597.689,589.992) rotate(90)">
								<title>Sheet.538</title>
								<path d="M0 595.28 L5.28 595.28" class="st2"/>
							</g>
							<g id="shape539-1279" v:mID="539" v:groupContext="shape">
								<title>Sheet.539</title>
								<path d="M0 595.28 L4.69 595.28" class="st2"/>
							</g>
						</g>
						<g id="group540-1282" transform="translate(0,1185.27) scale(1,-1)" v:mID="540" v:groupContext="group">
							<title>Sheet.540</title>
							<g id="shape541-1283" v:mID="541" v:groupContext="shape" transform="translate(597.689,589.992) rotate(90)">
								<title>Sheet.541</title>
								<path d="M0 595.28 L5.28 595.28" class="st2"/>
							</g>
							<g id="shape542-1286" v:mID="542" v:groupContext="shape">
								<title>Sheet.542</title>
								<path d="M0 595.28 L4.69 595.28" class="st2"/>
							</g>
						</g>
					</g>
					<g id="shape543-1289" v:mID="543" v:groupContext="shape" transform="translate(10.4705,1175.76) rotate(180)">
						<title>Sheet.543</title>
						<path d="M0 595.28 L8.06 595.28" class="st2"/>
					</g>
					<g id="shape544-1292" v:mID="544" v:groupContext="shape" transform="translate(10.4705,1190.55) rotate(180)">
						<title>Sheet.544</title>
						<path d="M0 595.28 L8.06 595.28" class="st2"/>
					</g>
					<g id="shape545-1295" v:mID="545" v:groupContext="shape" transform="translate(597.689,580.482) rotate(90)">
						<title>Sheet.545</title>
						<path d="M0 595.28 L1.66 595.28" class="st2"/>
					</g>
					<g id="shape546-1298" v:mID="546" v:groupContext="shape" transform="translate(597.689,593.766) rotate(90)">
						<title>Sheet.546</title>
						<path d="M0 595.28 L1.51 595.28" class="st2"/>
					</g>
				</g>
				<g id="group547-1301" transform="translate(8.70041,-5.42606)" v:mID="547" v:groupContext="group">
					<title>Sheet.547</title>
					<g id="group548-1302" transform="translate(7.5292,-0.321204) scale(-1,1)" v:mID="548" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape549-1303" v:mID="549" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
							<title>Sheet.549</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M3.19 587.92 L3.19 589.84" class="st30"/>
							<path d="M3.19 595.28 L3.19 593.35" class="st30"/>
							<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st30"/>
						</g>
						<g id="shape550-1308" v:mID="550" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
							<title>Sheet.550</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape551-1310" v:mID="551" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
							<title>Sheet.551</title>
						</g>
					</g>
					<g id="group552-1312" transform="translate(20.0779,-0.321204) scale(-1,1)" v:mID="552" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape553-1313" v:mID="553" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
							<title>Sheet.553</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M3.19 587.92 L3.19 589.84" class="st30"/>
							<path d="M3.19 595.28 L3.19 593.35" class="st30"/>
							<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st30"/>
						</g>
						<g id="shape554-1318" v:mID="554" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
							<title>Sheet.554</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape555-1320" v:mID="555" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
							<title>Sheet.555</title>
						</g>
					</g>
					<g id="shape556-1322" v:mID="556" v:groupContext="shape" v:layerMember="1" transform="translate(2.95232,-0.597845)">
						<title>Dynamic connector.205</title>
						<path d="M0.81 588.19 L0.81 582.87 L13.36 582.87 L13.36 588.19" class="st2"/>
					</g>
				</g>
				<g id="shape557-1325" v:mID="557" v:groupContext="shape" transform="translate(614.145,567.713) rotate(90)">
					<title>Sheet.557</title>
					<path d="M0 595.28 L8.9 595.28" class="st2"/>
				</g>
				<g id="shape558-1328" v:mID="558" v:groupContext="shape" transform="translate(-576.536,553.29) rotate(-90)">
					<title>Sheet.558</title>
					<path d="M0 595.28 L7.72 595.28" class="st2"/>
				</g>
				<g id="shape559-1331" v:mID="559" v:groupContext="shape" transform="translate(607.741,589.528) rotate(90)">
					<title>Sheet.559</title>
					<path d="M0 595.28 L1.83 595.28" class="st31"/>
				</g>
				<g id="shape560-1336" v:mID="560" v:groupContext="shape" transform="translate(620.289,589.528) rotate(90)">
					<title>Sheet.560</title>
					<path d="M0 595.28 L3.83 595.28" class="st33"/>
				</g>
				<g id="shape561-1341" v:mID="561" v:groupContext="shape" transform="translate(-576.536,530.697) rotate(-90)">
					<title>Sheet.561</title>
					<path d="M0 595.28 L11.48 595.28" class="st34"/>
				</g>
			</g>
			<g id="shape1447-1346" v:mID="1447" v:groupContext="shape" transform="translate(0,-84.8223)">
				<title>Sheet.1447</title>
				<desc>PADALARANG 1</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
				<rect x="0" y="587.276" width="40.9117" height="8" class="st36"/>
				<text x="1.2" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>PADALARANG 1</text>			</g>
			<g id="group1475-1349" transform="translate(1.01808,-69.0361)" v:mID="1475" v:groupContext="group">
				<title>Sheet.1475</title>
				<g id="shape1476-1350" v:mID="1476" v:groupContext="shape" transform="translate(18.3746,1188.3) rotate(180)">
					<title>Sheet.1476</title>
					<path d="M0 595.28 L1.13 595.28" class="st37"/>
				</g>
				<g id="shape1477-1355" v:mID="1477" v:groupContext="shape" transform="translate(1.73973,1188.33) scale(1,-1)">
					<title>Sheet.1477</title>
					<path d="M0 595.28 L2.3 595.28" class="st37"/>
				</g>
				<g id="group1478-1360" transform="translate(595.276,590.828) rotate(90)" v:mID="1478" v:groupContext="group">
					<title>Sheet.1478</title>
					<g id="shape1479-1361" v:mID="1479" v:groupContext="shape" transform="translate(1.94844E-14,-1.67316)">
						<title>Sheet.1479</title>
						<path d="M0 595.28 L4.45 595.28" class="st39"/>
					</g>
					<g id="shape1480-1364" v:mID="1480" v:groupContext="shape" transform="translate(0.889518,-0.836578)">
						<title>Sheet.1480</title>
						<path d="M0 595.28 L2.67 595.28" class="st39"/>
					</g>
					<g id="shape1481-1367" v:mID="1481" v:groupContext="shape" transform="translate(1.77904,0)">
						<title>Sheet.1481</title>
						<path d="M0 595.28 L0.89 595.28" class="st39"/>
					</g>
				</g>
			</g>
		</g>
		<g id="group1539-1370" transform="translate(167.441,-427.123)" v:mID="1539" v:groupContext="group">
			<title>Sheet.1539</title>
			<g id="group994-1371" transform="translate(1.38471,0)" v:mID="994" v:groupContext="group">
				<title>Sheet.994</title>
				<g id="shape491-1372" v:mID="491" v:groupContext="shape" transform="translate(15.393,1148.65) scale(1,-1)">
					<title>Sheet.491</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
				</g>
				<g id="group492-1374" transform="translate(10.3736,1126.05) scale(1,-1)" v:mID="492" v:groupContext="group">
					<title>Sheet.492</title>
					<g id="group493-1375" transform="translate(609.92,595.276) rotate(90) scale(-1,1)" v:mID="493" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="Core" v:lbl="Core" v:type="1" v:format="Air;Magnetic;Magnetic with Gap" v:langID="1033" v:val="VT4(Air)"/>
							<v:cp v:nameU="Adjustability" v:lbl="Adjustability" v:type="1" v:format="Fixed;Adjustable;Continuously Adjustable" v:langID="1033" v:val="VT4(Fixed)"/>
							<v:cp v:nameU="Taps" v:lbl="Taps" v:type="1" v:format="0;1;2;3" v:langID="1033" v:val="VT4(0)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:type="0" v:format="" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:val="VT0(0):26"/>
							<v:cp v:nameU="Value" v:lbl="Value" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Core" v:val="VT0(0):26"/>
							<v:ud v:nameU="Adjustability" v:val="VT0(0):26"/>
							<v:ud v:nameU="CH"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Inductor. Right-click to set inductor properties.)"/>
						</v:userDefs>
						<title>Inductor</title>
						<g id="shape494-1376" v:mID="494" v:groupContext="shape" v:layerMember="0">
							<title>Sheet.494</title>
							<path d="M0 595.28 A1.85071 2.0068 0 1 1 3.7 595.28 A1.85071 2.0068 0 1 1 7.4 595.28 A1.85071 2.0068            0 1 1 11.1 595.28 A1.85071 2.0068 0 1 1 14.79 595.28" class="st2"/>
							<path d="M0 595.28 L0 599.45" class="st2"/>
							<path d="M14.79 595.28 L14.79 599.45" class="st2"/>
						</g>
						<g id="shape495-1381" v:mID="495" v:groupContext="shape" v:layerMember="0" transform="translate(7.1311,2.34788)">
							<title>Sheet.495</title>
						</g>
						<g id="shape496-1383" v:mID="496" v:groupContext="shape" v:layerMember="0" transform="translate(-418.327,178.607) rotate(-45)">
							<title>Sheet.496</title>
						</g>
					</g>
					<g id="group497-1385" transform="translate(0,-1.50958)" v:mID="497" v:groupContext="group">
						<title>Sheet.497</title>
						<g id="group498-1386" transform="translate(0,-6.4157)" v:mID="498" v:groupContext="group">
							<title>Sheet.498</title>
							<g id="shape499-1387" v:mID="499" v:groupContext="shape" transform="translate(597.689,589.992) rotate(90)">
								<title>Sheet.499</title>
								<path d="M0 595.28 L5.28 595.28" class="st2"/>
							</g>
							<g id="shape500-1390" v:mID="500" v:groupContext="shape">
								<title>Sheet.500</title>
								<path d="M0 595.28 L4.69 595.28" class="st2"/>
							</g>
						</g>
						<g id="group501-1393" transform="translate(0,1185.27) scale(1,-1)" v:mID="501" v:groupContext="group">
							<title>Sheet.501</title>
							<g id="shape502-1394" v:mID="502" v:groupContext="shape" transform="translate(597.689,589.992) rotate(90)">
								<title>Sheet.502</title>
								<path d="M0 595.28 L5.28 595.28" class="st2"/>
							</g>
							<g id="shape503-1397" v:mID="503" v:groupContext="shape">
								<title>Sheet.503</title>
								<path d="M0 595.28 L4.69 595.28" class="st2"/>
							</g>
						</g>
					</g>
					<g id="shape504-1400" v:mID="504" v:groupContext="shape" transform="translate(10.4705,1175.76) rotate(180)">
						<title>Sheet.504</title>
						<path d="M0 595.28 L8.06 595.28" class="st2"/>
					</g>
					<g id="shape505-1403" v:mID="505" v:groupContext="shape" transform="translate(10.4705,1190.55) rotate(180)">
						<title>Sheet.505</title>
						<path d="M0 595.28 L8.06 595.28" class="st2"/>
					</g>
					<g id="shape506-1406" v:mID="506" v:groupContext="shape" transform="translate(597.689,580.482) rotate(90)">
						<title>Sheet.506</title>
						<path d="M0 595.28 L1.66 595.28" class="st2"/>
					</g>
					<g id="shape507-1409" v:mID="507" v:groupContext="shape" transform="translate(597.689,593.766) rotate(90)">
						<title>Sheet.507</title>
						<path d="M0 595.28 L1.51 595.28" class="st2"/>
					</g>
				</g>
				<g id="group508-1412" transform="translate(8.70041,-5.42606)" v:mID="508" v:groupContext="group">
					<title>Sheet.508</title>
					<g id="group509-1413" transform="translate(7.5292,-0.321204) scale(-1,1)" v:mID="509" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape510-1414" v:mID="510" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
							<title>Sheet.510</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M3.19 587.92 L3.19 589.84" class="st30"/>
							<path d="M3.19 595.28 L3.19 593.35" class="st30"/>
							<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st30"/>
						</g>
						<g id="shape511-1419" v:mID="511" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
							<title>Sheet.511</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape512-1421" v:mID="512" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
							<title>Sheet.512</title>
						</g>
					</g>
					<g id="group513-1423" transform="translate(20.0779,-0.321204) scale(-1,1)" v:mID="513" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape514-1424" v:mID="514" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
							<title>Sheet.514</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M3.19 587.92 L3.19 589.84" class="st30"/>
							<path d="M3.19 595.28 L3.19 593.35" class="st30"/>
							<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st30"/>
						</g>
						<g id="shape515-1429" v:mID="515" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
							<title>Sheet.515</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape516-1431" v:mID="516" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
							<title>Sheet.516</title>
						</g>
					</g>
					<g id="shape517-1433" v:mID="517" v:groupContext="shape" v:layerMember="1" transform="translate(2.95232,-0.597845)">
						<title>Dynamic connector.205</title>
						<path d="M0.81 588.19 L0.81 582.87 L13.36 582.87 L13.36 588.19" class="st2"/>
					</g>
				</g>
				<g id="shape518-1436" v:mID="518" v:groupContext="shape" transform="translate(614.015,567.841) rotate(90)">
					<title>Sheet.518</title>
					<path d="M0 595.28 L8.77 595.28" class="st2"/>
				</g>
				<g id="shape519-1439" v:mID="519" v:groupContext="shape" transform="translate(-576.536,553.29) rotate(-90)">
					<title>Sheet.519</title>
					<path d="M0 595.28 L7.72 595.28" class="st2"/>
				</g>
				<g id="shape520-1442" v:mID="520" v:groupContext="shape" transform="translate(607.741,589.528) rotate(90)">
					<title>Sheet.520</title>
					<path d="M0 595.28 L1.83 595.28" class="st31"/>
				</g>
				<g id="shape521-1447" v:mID="521" v:groupContext="shape" transform="translate(620.289,589.528) rotate(90)">
					<title>Sheet.521</title>
					<path d="M0 595.28 L3.83 595.28" class="st33"/>
				</g>
				<g id="shape522-1452" v:mID="522" v:groupContext="shape" transform="translate(-576.536,530.697) rotate(-90)">
					<title>Sheet.522</title>
					<path d="M0 595.28 L11.48 595.28" class="st34"/>
				</g>
			</g>
			<g id="shape1449-1457" v:mID="1449" v:groupContext="shape" transform="translate(0,-85.0002)">
				<title>Sheet.1449</title>
				<desc>TATA JABAR 1</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
				<rect x="0" y="587.276" width="40.9117" height="8" class="st36"/>
				<text x="3.49" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TATA JABAR 1</text>			</g>
			<g id="group1490-1460" transform="translate(0.993749,-69.214)" v:mID="1490" v:groupContext="group">
				<title>Sheet.1490</title>
				<g id="shape1491-1461" v:mID="1491" v:groupContext="shape" transform="translate(18.3746,1188.3) rotate(180)">
					<title>Sheet.1491</title>
					<path d="M0 595.28 L1.13 595.28" class="st37"/>
				</g>
				<g id="shape1492-1466" v:mID="1492" v:groupContext="shape" transform="translate(1.73973,1188.33) scale(1,-1)">
					<title>Sheet.1492</title>
					<path d="M0 595.28 L2.3 595.28" class="st37"/>
				</g>
				<g id="group1493-1471" transform="translate(595.276,590.828) rotate(90)" v:mID="1493" v:groupContext="group">
					<title>Sheet.1493</title>
					<g id="shape1494-1472" v:mID="1494" v:groupContext="shape" transform="translate(1.94844E-14,-1.67316)">
						<title>Sheet.1494</title>
						<path d="M0 595.28 L4.45 595.28" class="st39"/>
					</g>
					<g id="shape1495-1475" v:mID="1495" v:groupContext="shape" transform="translate(0.889518,-0.836578)">
						<title>Sheet.1495</title>
						<path d="M0 595.28 L2.67 595.28" class="st39"/>
					</g>
					<g id="shape1496-1478" v:mID="1496" v:groupContext="shape" transform="translate(1.77904,0)">
						<title>Sheet.1496</title>
						<path d="M0 595.28 L0.89 595.28" class="st39"/>
					</g>
				</g>
			</g>
		</g>
		<g id="group1540-1481" transform="translate(217.851,-427.123)" v:mID="1540" v:groupContext="group">
			<title>Sheet.1540</title>
			<g id="group995-1482" transform="translate(2.45951,0)" v:mID="995" v:groupContext="group">
				<title>Sheet.995</title>
				<g id="shape429-1483" v:mID="429" v:groupContext="shape" transform="translate(15.393,1148.65) scale(1,-1)">
					<title>Sheet.429</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
				</g>
				<g id="group431-1485" transform="translate(10.3736,1126.05) scale(1,-1)" v:mID="431" v:groupContext="group">
					<title>Sheet.431</title>
					<g id="group432-1486" transform="translate(609.92,595.276) rotate(90) scale(-1,1)" v:mID="432" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="Core" v:lbl="Core" v:type="1" v:format="Air;Magnetic;Magnetic with Gap" v:langID="1033" v:val="VT4(Air)"/>
							<v:cp v:nameU="Adjustability" v:lbl="Adjustability" v:type="1" v:format="Fixed;Adjustable;Continuously Adjustable" v:langID="1033" v:val="VT4(Fixed)"/>
							<v:cp v:nameU="Taps" v:lbl="Taps" v:type="1" v:format="0;1;2;3" v:langID="1033" v:val="VT4(0)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:type="0" v:format="" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:val="VT0(0):26"/>
							<v:cp v:nameU="Value" v:lbl="Value" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:val="VT4()"/>
						</v:custProps>
						<v:userDefs>
							<v:ud v:nameU="Core" v:val="VT0(0):26"/>
							<v:ud v:nameU="Adjustability" v:val="VT0(0):26"/>
							<v:ud v:nameU="CH"/>
							<v:ud v:nameU="visVersion" v:val="VT0(15):26"/>
							<v:ud v:nameU="visDescription" v:val="VT4(Inductor. Right-click to set inductor properties.)"/>
						</v:userDefs>
						<title>Inductor</title>
						<g id="shape433-1487" v:mID="433" v:groupContext="shape" v:layerMember="0">
							<title>Sheet.433</title>
							<path d="M0 595.28 A1.85071 2.0068 0 1 1 3.7 595.28 A1.85071 2.0068 0 1 1 7.4 595.28 A1.85071 2.0068            0 1 1 11.1 595.28 A1.85071 2.0068 0 1 1 14.79 595.28" class="st2"/>
							<path d="M0 595.28 L0 599.45" class="st2"/>
							<path d="M14.79 595.28 L14.79 599.45" class="st2"/>
						</g>
						<g id="shape434-1492" v:mID="434" v:groupContext="shape" v:layerMember="0" transform="translate(7.1311,2.34788)">
							<title>Sheet.434</title>
						</g>
						<g id="shape435-1494" v:mID="435" v:groupContext="shape" v:layerMember="0" transform="translate(-418.327,178.607) rotate(-45)">
							<title>Sheet.435</title>
						</g>
					</g>
					<g id="group436-1496" transform="translate(0,-1.50958)" v:mID="436" v:groupContext="group">
						<title>Sheet.436</title>
						<g id="group437-1497" transform="translate(0,-6.4157)" v:mID="437" v:groupContext="group">
							<title>Sheet.437</title>
							<g id="shape438-1498" v:mID="438" v:groupContext="shape" transform="translate(597.689,589.992) rotate(90)">
								<title>Sheet.438</title>
								<path d="M0 595.28 L5.28 595.28" class="st2"/>
							</g>
							<g id="shape439-1501" v:mID="439" v:groupContext="shape">
								<title>Sheet.439</title>
								<path d="M0 595.28 L4.69 595.28" class="st2"/>
							</g>
						</g>
						<g id="group440-1504" transform="translate(0,1185.27) scale(1,-1)" v:mID="440" v:groupContext="group">
							<title>Sheet.440</title>
							<g id="shape441-1505" v:mID="441" v:groupContext="shape" transform="translate(597.689,589.992) rotate(90)">
								<title>Sheet.441</title>
								<path d="M0 595.28 L5.28 595.28" class="st2"/>
							</g>
							<g id="shape442-1508" v:mID="442" v:groupContext="shape">
								<title>Sheet.442</title>
								<path d="M0 595.28 L4.69 595.28" class="st2"/>
							</g>
						</g>
					</g>
					<g id="shape443-1511" v:mID="443" v:groupContext="shape" transform="translate(10.4705,1175.76) rotate(180)">
						<title>Sheet.443</title>
						<path d="M0 595.28 L8.06 595.28" class="st2"/>
					</g>
					<g id="shape444-1514" v:mID="444" v:groupContext="shape" transform="translate(10.4705,1190.55) rotate(180)">
						<title>Sheet.444</title>
						<path d="M0 595.28 L8.06 595.28" class="st2"/>
					</g>
					<g id="shape445-1517" v:mID="445" v:groupContext="shape" transform="translate(597.689,580.482) rotate(90)">
						<title>Sheet.445</title>
						<path d="M0 595.28 L1.66 595.28" class="st2"/>
					</g>
					<g id="shape446-1520" v:mID="446" v:groupContext="shape" transform="translate(597.689,593.766) rotate(90)">
						<title>Sheet.446</title>
						<path d="M0 595.28 L1.51 595.28" class="st2"/>
					</g>
				</g>
				<g id="group476-1523" transform="translate(8.70041,-5.42606)" v:mID="476" v:groupContext="group">
					<title>Sheet.476</title>
					<g id="group420-1524" transform="translate(7.5292,-0.321204) scale(-1,1)" v:mID="420" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape421-1525" v:mID="421" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
							<title>Sheet.421</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M3.19 587.92 L3.19 589.84" class="st30"/>
							<path d="M3.19 595.28 L3.19 593.35" class="st30"/>
							<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st30"/>
						</g>
						<g id="shape422-1530" v:mID="422" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
							<title>Sheet.422</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape423-1532" v:mID="423" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
							<title>Sheet.423</title>
						</g>
					</g>
					<g id="group424-1534" transform="translate(20.0779,-0.321204) scale(-1,1)" v:mID="424" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape425-1535" v:mID="425" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
							<title>Sheet.425</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M3.19 587.92 L3.19 589.84" class="st30"/>
							<path d="M3.19 595.28 L3.19 593.35" class="st30"/>
							<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st30"/>
						</g>
						<g id="shape426-1540" v:mID="426" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
							<title>Sheet.426</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape427-1542" v:mID="427" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
							<title>Sheet.427</title>
						</g>
					</g>
					<g id="shape428-1544" v:mID="428" v:groupContext="shape" v:layerMember="1" transform="translate(2.95232,-0.597845)">
						<title>Dynamic connector.205</title>
						<path d="M0.81 588.19 L0.81 582.87 L13.36 582.87 L13.36 588.19" class="st2"/>
					</g>
				</g>
				<g id="shape477-1547" v:mID="477" v:groupContext="shape" transform="translate(614.015,567.841) rotate(90)">
					<title>Sheet.477</title>
					<path d="M0 595.28 L8.77 595.28" class="st2"/>
				</g>
				<g id="shape478-1550" v:mID="478" v:groupContext="shape" transform="translate(-576.536,553.29) rotate(-90)">
					<title>Sheet.478</title>
					<path d="M0 595.28 L7.72 595.28" class="st2"/>
				</g>
				<g id="shape479-1553" v:mID="479" v:groupContext="shape" transform="translate(607.741,589.528) rotate(90)">
					<title>Sheet.479</title>
					<path d="M0 595.28 L1.83 595.28" class="st31"/>
				</g>
				<g id="shape480-1558" v:mID="480" v:groupContext="shape" transform="translate(620.289,589.528) rotate(90)">
					<title>Sheet.480</title>
					<path d="M0 595.28 L3.83 595.28" class="st33"/>
				</g>
				<g id="shape481-1563" v:mID="481" v:groupContext="shape" transform="translate(-576.536,530.697) rotate(-90)">
					<title>Sheet.481</title>
					<path d="M0 595.28 L11.48 595.28" class="st34"/>
				</g>
			</g>
			<g id="shape1450-1568" v:mID="1450" v:groupContext="shape" transform="translate(0,-85.0002)">
				<title>Sheet.1450</title>
				<desc>TATA JABAR 2</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="20.4558" cy="591.276" width="40.92" height="8"/>
				<rect x="0" y="587.276" width="40.9117" height="8" class="st36"/>
				<text x="3.49" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TATA JABAR 2</text>			</g>
			<g id="group1483-1571" transform="translate(2.03482,-69.214)" v:mID="1483" v:groupContext="group">
				<title>Sheet.1483</title>
				<g id="shape1484-1572" v:mID="1484" v:groupContext="shape" transform="translate(18.3746,1188.3) rotate(180)">
					<title>Sheet.1484</title>
					<path d="M0 595.28 L1.13 595.28" class="st37"/>
				</g>
				<g id="shape1485-1577" v:mID="1485" v:groupContext="shape" transform="translate(1.73973,1188.33) scale(1,-1)">
					<title>Sheet.1485</title>
					<path d="M0 595.28 L2.3 595.28" class="st37"/>
				</g>
				<g id="group1486-1582" transform="translate(595.276,590.828) rotate(90)" v:mID="1486" v:groupContext="group">
					<title>Sheet.1486</title>
					<g id="shape1487-1583" v:mID="1487" v:groupContext="shape" transform="translate(1.94844E-14,-1.67316)">
						<title>Sheet.1487</title>
						<path d="M0 595.28 L4.45 595.28" class="st39"/>
					</g>
					<g id="shape1488-1586" v:mID="1488" v:groupContext="shape" transform="translate(0.889518,-0.836578)">
						<title>Sheet.1488</title>
						<path d="M0 595.28 L2.67 595.28" class="st39"/>
					</g>
					<g id="shape1489-1589" v:mID="1489" v:groupContext="shape" transform="translate(1.77904,0)">
						<title>Sheet.1489</title>
						<path d="M0 595.28 L0.89 595.28" class="st39"/>
					</g>
				</g>
			</g>
		</g>
		<g id="shape1445-1592" v:mID="1445" v:groupContext="shape" transform="translate(476.463,-539.305)">
			<title>Sheet.1445</title>
			<desc>UNIT 5</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
			<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
			<text x="3.55" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 5</text>		</g>
		<g id="shape1552-1595" v:mID="1552" v:groupContext="shape" transform="translate(454.799,-483.081)">
			<title>Sheet.1552</title>
			<desc>TRAFO 35 MVA 6,3/150KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
			<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
			<text x="3.63" y="582.28" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>TRAFO <tspan x="2.1" dy="1.2em" class="st28">35 </tspan>MVA<v:newlineChar/><tspan x="6.88" dy="1.2em" class="st28">6</tspan>,3/<tspan x="4" dy="1.2em" class="st28">150</tspan>KV</text>		</g>
		<g id="shape1553-1601" v:mID="1553" v:groupContext="shape" transform="translate(343.112,-564.035)">
			<title>Sheet.1553</title>
			<desc>SINGLE LINE PLTA Ir.H.DJUANDA</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197" v:verticalAlign="0"/>
			<v:textRect cx="81.5521" cy="588.159" width="163.11" height="14.2323"/>
			<rect x="0" y="581.043" width="163.104" height="14.2323" class="st26"/>
			<text x="1.04" y="592.84" class="st40" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>SINGLE LINE PLTA Ir.H.DJUANDA</text>		</g>
		<g id="group1555-1604" transform="translate(372.31,-315.518)" v:mID="1555" v:groupContext="group">
			<title>Sheet.1555</title>
			<g id="group215-1605" transform="translate(-9.99201E-16,1084.74) scale(1,-1)" v:mID="215" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape216-1606" v:mID="216" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
					<title>Sheet.216</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
					<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
					<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
				</g>
				<g id="shape217-1611" v:mID="217" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
					<title>Sheet.217</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape218-1613" v:mID="218" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
					<title>Sheet.218</title>
				</g>
			</g>
			<g id="group223-1615" transform="translate(12.5487,1084.74) scale(1,-1)" v:mID="223" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape224-1616" v:mID="224" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
					<title>Sheet.224</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
					<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
					<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
				</g>
				<g id="shape225-1621" v:mID="225" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
					<title>Sheet.225</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape226-1623" v:mID="226" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
					<title>Sheet.226</title>
				</g>
			</g>
			<g id="shape228-1625" v:mID="228" v:groupContext="shape" v:layerMember="1" transform="translate(3.28076,-90.5367)">
				<title>Dynamic connector.228</title>
				<path d="M0.81 588.19 L0.81 593.5 L13.36 593.5 L13.36 588.19" class="st2"/>
			</g>
			<g id="shape261-1628" v:mID="261" v:groupContext="shape" transform="translate(7.02107,-73.5187)">
				<title>Sheet.261</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
			</g>
			<g id="shape267-1630" v:mID="267" v:groupContext="shape" transform="translate(-584.908,507.525) rotate(-90)">
				<title>Sheet.267</title>
				<path d="M0 595.28 L4.55 595.28" class="st2"/>
			</g>
			<g id="shape303-1633" v:mID="303" v:groupContext="shape" transform="translate(-584.908,526.205) rotate(-90)">
				<title>Sheet.303</title>
				<path d="M0 595.28 L4.45 595.28" class="st2"/>
			</g>
			<g id="shape451-1636" v:mID="451" v:groupContext="shape" transform="translate(-591.183,489.466) rotate(-90)">
				<title>Sheet.451</title>
				<path d="M0 595.28 L7.69 595.28" class="st33"/>
			</g>
			<g id="shape452-1641" v:mID="452" v:groupContext="shape" transform="translate(-578.634,489.466) rotate(-90)">
				<title>Sheet.452</title>
				<path d="M0 595.28 L4.01 595.28" class="st33"/>
			</g>
			<g id="group465-1646" transform="translate(6.60278,0)" v:mID="465" v:groupContext="group">
				<title>Sheet.465</title>
				<g id="shape457-1647" v:mID="457" v:groupContext="shape" transform="translate(0.418289,-15.7889)">
					<title>Sheet.457</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
				</g>
				<g id="shape458-1649" v:mID="458" v:groupContext="shape" transform="translate(599.04,562.764) rotate(90)">
					<title>Sheet.458</title>
					<path d="M0 595.28 L2.49 595.28" class="st3"/>
				</g>
				<g id="group459-1652" transform="translate(7.5292,-4.10166) scale(-1,1)" v:mID="459" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape460-1653" v:mID="460" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.460</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st4"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st4"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st4"/>
					</g>
					<g id="shape461-1658" v:mID="461" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.461</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape462-1660" v:mID="462" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.462</title>
					</g>
				</g>
				<g id="shape463-1662" v:mID="463" v:groupContext="shape" transform="translate(-591.511,583.811) rotate(-90)">
					<title>Sheet.463</title>
					<path d="M0 595.28 L4.32 595.28" class="st3"/>
				</g>
				<g id="shape464-1665" v:mID="464" v:groupContext="shape" transform="translate(599.04,591.174) rotate(90)">
					<title>Sheet.464</title>
					<path d="M0 595.28 L4.1 595.28" class="st3"/>
				</g>
			</g>
			<g id="shape614-1668" v:mID="614" v:groupContext="shape" transform="translate(-584.908,562.764) rotate(-90)">
				<title>Sheet.614</title>
				<path d="M0 595.28 L9.83 595.28" class="st3"/>
			</g>
			<g id="group615-1671" transform="translate(2.0016,-42.3855)" v:mID="615" v:groupContext="group">
				<title>Sheet.615</title>
				<g id="shape607-1672" v:mID="607" v:groupContext="shape" transform="translate(0,-8.89518)">
					<title>Sheet.607</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st29"/>
				</g>
				<g id="shape608-1674" v:mID="608" v:groupContext="shape">
					<title>Sheet.608</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st42"/>
				</g>
			</g>
		</g>
		<g id="shape1599-1676" v:mID="1599" v:groupContext="shape" transform="translate(653.002,777.64) rotate(180)">
			<title>Sheet.1599</title>
			<path d="M0 595.28 L193.79 595.28" class="st43"/>
		</g>
		<g id="shape1633-1682" v:mID="1633" v:groupContext="shape" transform="translate(653.002,788.979) rotate(180)">
			<title>Sheet.1633</title>
			<path d="M0 595.28 L155.81 595.28" class="st43"/>
		</g>
		<g id="group1509-1687" transform="translate(171.755,-315.414)" v:mID="1509" v:groupContext="group">
			<title>Sheet.1509</title>
			<g id="shape1510-1688" v:mID="1510" v:groupContext="shape" transform="translate(0.418289,-15.7889)">
				<title>Sheet.1510</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
			</g>
			<g id="shape1511-1690" v:mID="1511" v:groupContext="shape" transform="translate(599.04,562.764) rotate(90)">
				<title>Sheet.1511</title>
				<path d="M0 595.28 L2.49 595.28" class="st3"/>
			</g>
			<g id="group1512-1693" transform="translate(7.5292,-4.01868) scale(-1,1)" v:mID="1512" v:groupContext="group" v:layerMember="0">
				<v:custProps>
					<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
					<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
					<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
				<g id="shape1513-1694" v:mID="1513" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.14886E-06)">
					<title>Sheet.1513</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
					<path d="M3.19 587.75 L3.19 589.72" class="st4"/>
					<path d="M3.19 595.28 L3.19 593.31" class="st4"/>
					<path d="M0.87 590.02 L3.19 593.31 L3.19 595.28" class="st4"/>
				</g>
				<g id="shape1514-1699" v:mID="1514" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.21296)">
					<title>Sheet.1514</title>
					<v:userDefs>
						<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
					</v:userDefs>
				</g>
				<g id="shape1515-1701" v:mID="1515" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.729797)">
					<title>Sheet.1515</title>
				</g>
			</g>
			<g id="shape1516-1703" v:mID="1516" v:groupContext="shape" transform="translate(-591.511,583.728) rotate(-90)">
				<title>Sheet.1516</title>
				<path d="M0 595.28 L4.24 595.28" class="st3"/>
			</g>
			<g id="shape1517-1706" v:mID="1517" v:groupContext="shape" transform="translate(599.04,591.257) rotate(90)">
				<title>Sheet.1517</title>
				<path d="M0 595.28 L4.02 595.28" class="st3"/>
			</g>
		</g>
		<g id="shape1519-1709" v:mID="1519" v:groupContext="shape" transform="translate(-419.756,247.207) rotate(-90)">
			<title>Sheet.1519</title>
			<path d="M0 595.28 L9.66 595.28" class="st3"/>
		</g>
		<g id="shape1522-1712" v:mID="1522" v:groupContext="shape" transform="translate(90.4053,-357.945)">
			<title>Sheet.1522</title>
			<path d="M0 595.28 L85.04 595.28" class="st3"/>
		</g>
		<g id="shape1636-1715" v:mID="1636" v:groupContext="shape" transform="translate(431.433,-382.801)">
			<title>Sheet.1636</title>
			<desc>7 MVA I 70/6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="584.189" width="28.78" height="22.1732"/>
			<rect x="0" y="573.102" width="28.7783" height="22.1732" class="st26"/>
			<text x="4.75" y="582.39" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>7 MVA I<v:newlineChar/><tspan x="3.14" dy="1.2em" class="st28">70</tspan>/6,3KV</text>		</g>
		<g id="shape1637-1719" v:mID="1637" v:groupContext="shape" transform="translate(469.768,-382.801)">
			<title>Sheet.1637</title>
			<desc>7 MVA II 70/6,3KV</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="14.3891" cy="584.189" width="28.78" height="22.1732"/>
			<rect x="0" y="573.102" width="28.7783" height="22.1732" class="st26"/>
			<text x="4" y="582.39" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>7 MVA II<v:newlineChar/><tspan x="3.14" dy="1.2em" class="st28">70</tspan>/6,3KV</text>		</g>
		<g id="shape1638-1723" v:mID="1638" v:groupContext="shape" transform="translate(566.417,-403.242)">
			<title>Sheet.1638</title>
			<desc>LINE 6,3 KV TO SENTRAL DIESEL</desc>
			<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
			<v:textRect cx="44.402" cy="591.276" width="88.81" height="8"/>
			<rect x="0" y="587.276" width="88.804" height="8" class="st26"/>
			<text x="6.06" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>LINE 6,3 KV TO SENTRAL DIESEL</text>		</g>
		<g id="group1646-1726" transform="translate(457.188,-23.3709)" v:mID="1646" v:groupContext="group">
			<title>Sheet.1646</title>
			<g id="shape1639-1727" v:mID="1639" v:groupContext="shape" transform="translate(595.276,324.791) rotate(90)">
				<title>Sheet.1639</title>
				<path d="M0 595.28 L270.48 595.28" class="st44"/>
			</g>
			<g id="shape1640-1730" v:mID="1640" v:groupContext="shape" transform="translate(-6.39488E-14,-270.485)">
				<title>Sheet.1640</title>
				<path d="M0 595.28 L68.03 595.28" class="st44"/>
			</g>
			<g id="shape1641-1733" v:mID="1641" v:groupContext="shape" transform="translate(-527.244,324.791) rotate(-90)">
				<title>Sheet.1641</title>
				<path d="M0 595.28 L34.02 595.28" class="st44"/>
			</g>
			<g id="shape1642-1736" v:mID="1642" v:groupContext="shape" transform="translate(68.0315,-304.501)">
				<title>Sheet.1642</title>
				<path d="M0 595.28 L277.8 595.28" class="st44"/>
			</g>
			<g id="shape1644-1739" v:mID="1644" v:groupContext="shape" transform="translate(941.102,290.775) rotate(90)">
				<title>Sheet.1644</title>
				<path d="M0 595.28 L304.28 595.28" class="st44"/>
			</g>
			<g id="shape1645-1742" v:mID="1645" v:groupContext="shape" transform="translate(0,-0.0596768)">
				<title>Sheet.1645</title>
				<path d="M0 595.28 L345.83 595.28" class="st44"/>
			</g>
		</g>
		<g id="shape1648-1745" v:mID="1648" v:groupContext="shape" transform="translate(631.316,243.31) rotate(90)">
			<title>Sheet.1648</title>
			<path d="M0 595.28 L329.42 595.28" class="st44"/>
		</g>
		<g id="shape1649-1748" v:mID="1649" v:groupContext="shape" transform="translate(354.29,-293.781)">
			<title>Sheet.1649</title>
			<path d="M0 595.28 L77.16 595.28" class="st44"/>
		</g>
		<g id="shape1650-1751" v:mID="1650" v:groupContext="shape" transform="translate(-241.03,301.42) rotate(-90)">
			<title>Sheet.1650</title>
			<path d="M0 595.28 L58.11 595.28" class="st44"/>
		</g>
		<g id="shape1651-1754" v:mID="1651" v:groupContext="shape" transform="translate(36.243,-351.966)">
			<title>Sheet.1651</title>
			<path d="M0 595.28 L318.05 595.28" class="st44"/>
		</g>
		<g id="shape1652-1757" v:mID="1652" v:groupContext="shape" transform="translate(1026.95,302.24) rotate(90)">
			<title>Sheet.1652</title>
			<path d="M0 595.28 L270.26 595.28" class="st44"/>
		</g>
		<g id="shape1653-1760" v:mID="1653" v:groupContext="shape" transform="translate(37.6603,-22.61)">
			<title>Sheet.1653</title>
			<path d="M0 595.28 L394.02 595.28" class="st44"/>
		</g>
		<g id="group1663-1763" transform="translate(279.272,-427.034)" v:mID="1663" v:groupContext="group">
			<title>Sheet.1663</title>
			<g id="group1541-1764" v:mID="1541" v:groupContext="group">
				<title>Sheet.1541</title>
				<g id="shape71-1765" v:mID="71" v:groupContext="shape" transform="translate(8.47804,-27.753)">
					<title>Sheet.71</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
				</g>
				<g id="group83-1767" transform="translate(9.64306,-5.4248) scale(-1,1)" v:mID="83" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape84-1768" v:mID="84" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.84</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape85-1773" v:mID="85" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.85</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape86-1775" v:mID="86" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.86</title>
					</g>
				</g>
				<g id="group117-1777" transform="translate(22.1917,-5.4248) scale(-1,1)" v:mID="117" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape118-1778" v:mID="118" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.118</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape119-1783" v:mID="119" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.119</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape120-1785" v:mID="120" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.120</title>
					</g>
				</g>
				<g id="shape132-1787" v:mID="132" v:groupContext="shape" v:layerMember="1" transform="translate(4.73773,-6.52427)">
					<title>Dynamic connector.132</title>
					<path d="M0.81 588.19 L0.81 582.87 L13.36 582.87 L13.36 588.19" class="st2"/>
				</g>
				<g id="shape137-1790" v:mID="137" v:groupContext="shape" transform="translate(600.826,589.851) rotate(90)">
					<title>Sheet.137</title>
					<path d="M0 595.28 L1.51 595.28" class="st31"/>
				</g>
				<g id="shape139-1795" v:mID="139" v:groupContext="shape" transform="translate(613.374,589.851) rotate(90)">
					<title>Sheet.139</title>
					<path d="M0 595.28 L3.51 595.28" class="st33"/>
				</g>
				<g id="shape141-1800" v:mID="141" v:groupContext="shape" transform="translate(607.1,567.523) rotate(90)">
					<title>Sheet.141</title>
					<path d="M0 595.28 L8.81 595.28" class="st2"/>
				</g>
				<g id="shape1441-1803" v:mID="1441" v:groupContext="shape" transform="translate(1.19598,-112.27)">
					<title>Sheet.1441</title>
					<desc>UNIT 1</desc>
					<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
					<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
					<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
					<text x="3.55" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 1</text>				</g>
			</g>
			<g id="group1660-1806" transform="translate(3.51699,-49.9395)" v:mID="1660" v:groupContext="group">
				<title>Sheet.1660</title>
				<g id="shape1656-1807" v:mID="1656" v:groupContext="shape" transform="translate(-6.99441E-15,-8.89518)">
					<title>Sheet.1656</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				</g>
				<g id="shape1657-1809" v:mID="1657" v:groupContext="shape">
					<title>Sheet.1657</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st45"/>
				</g>
			</g>
			<g id="shape1662-1811" v:mID="1662" v:groupContext="shape" transform="translate(607.081,545.172) rotate(90)">
				<title>Sheet.1662</title>
				<path d="M0 595.28 L8.1 595.28" class="st46"/>
			</g>
		</g>
		<g id="group1664-1814" transform="translate(329.244,-427.034)" v:mID="1664" v:groupContext="group">
			<title>Sheet.1664</title>
			<g id="group1665-1815" v:mID="1665" v:groupContext="group">
				<title>Sheet.1665</title>
				<g id="shape1667-1816" v:mID="1667" v:groupContext="shape" transform="translate(8.47804,-27.753)">
					<title>Sheet.1667</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
				</g>
				<g id="group1668-1818" transform="translate(9.64306,-5.4248) scale(-1,1)" v:mID="1668" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1669-1819" v:mID="1669" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.1669</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape1670-1824" v:mID="1670" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.1670</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1671-1826" v:mID="1671" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.1671</title>
					</g>
				</g>
				<g id="group1672-1828" transform="translate(22.1917,-5.4248) scale(-1,1)" v:mID="1672" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1673-1829" v:mID="1673" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.1673</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape1674-1834" v:mID="1674" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.1674</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1675-1836" v:mID="1675" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.1675</title>
					</g>
				</g>
				<g id="shape1676-1838" v:mID="1676" v:groupContext="shape" v:layerMember="1" transform="translate(4.73773,-20.6975)">
					<title>Dynamic connector.132</title>
					<path d="M0.81 602.36 L0.81 597.05 L13.36 597.05 L13.36 602.36" class="st2"/>
				</g>
				<g id="shape1677-1841" v:mID="1677" v:groupContext="shape" transform="translate(600.826,589.851) rotate(90)">
					<title>Sheet.1677</title>
					<path d="M0 595.28 L1.51 595.28" class="st31"/>
				</g>
				<g id="shape1678-1846" v:mID="1678" v:groupContext="shape" transform="translate(613.374,589.851) rotate(90)">
					<title>Sheet.1678</title>
					<path d="M0 595.28 L3.51 595.28" class="st33"/>
				</g>
				<g id="shape1679-1851" v:mID="1679" v:groupContext="shape" transform="translate(607.1,567.523) rotate(90)">
					<title>Sheet.1679</title>
					<path d="M0 595.28 L8.81 595.28" class="st2"/>
				</g>
				<g id="shape1683-1854" v:mID="1683" v:groupContext="shape" transform="translate(1.19598,-112.27)">
					<title>Sheet.1683</title>
					<desc>UNIT 2</desc>
					<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
					<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
					<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
					<text x="3.55" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 2</text>				</g>
			</g>
			<g id="group1684-1857" transform="translate(3.51699,-49.9395)" v:mID="1684" v:groupContext="group">
				<title>Sheet.1684</title>
				<g id="shape1685-1858" v:mID="1685" v:groupContext="shape" transform="translate(-6.99441E-15,-8.89518)">
					<title>Sheet.1685</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				</g>
				<g id="shape1686-1860" v:mID="1686" v:groupContext="shape">
					<title>Sheet.1686</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st45"/>
				</g>
			</g>
			<g id="shape1688-1862" v:mID="1688" v:groupContext="shape" transform="translate(607.081,545.172) rotate(90)">
				<title>Sheet.1688</title>
				<path d="M0 595.28 L8.1 595.28" class="st46"/>
			</g>
		</g>
		<g id="group1689-1865" transform="translate(379.235,-427.084)" v:mID="1689" v:groupContext="group">
			<title>Sheet.1689</title>
			<g id="group1690-1866" v:mID="1690" v:groupContext="group">
				<title>Sheet.1690</title>
				<g id="shape1692-1867" v:mID="1692" v:groupContext="shape" transform="translate(8.47804,-27.753)">
					<title>Sheet.1692</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
				</g>
				<g id="group1693-1869" transform="translate(9.64306,-5.4248) scale(-1,1)" v:mID="1693" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1694-1870" v:mID="1694" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.1694</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape1695-1875" v:mID="1695" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.1695</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1696-1877" v:mID="1696" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.1696</title>
					</g>
				</g>
				<g id="group1697-1879" transform="translate(22.1917,-5.4248) scale(-1,1)" v:mID="1697" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1698-1880" v:mID="1698" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.1698</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape1699-1885" v:mID="1699" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.1699</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1700-1887" v:mID="1700" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.1700</title>
					</g>
				</g>
				<g id="shape1701-1889" v:mID="1701" v:groupContext="shape" v:layerMember="1" transform="translate(4.73773,-6.52427)">
					<title>Dynamic connector.132</title>
					<path d="M0.81 588.19 L0.81 582.87 L13.36 582.87 L13.36 588.19" class="st2"/>
				</g>
				<g id="shape1702-1892" v:mID="1702" v:groupContext="shape" transform="translate(600.826,589.851) rotate(90)">
					<title>Sheet.1702</title>
					<path d="M0 595.28 L1.51 595.28" class="st31"/>
				</g>
				<g id="shape1703-1897" v:mID="1703" v:groupContext="shape" transform="translate(613.374,589.851) rotate(90)">
					<title>Sheet.1703</title>
					<path d="M0 595.28 L3.51 595.28" class="st33"/>
				</g>
				<g id="shape1704-1902" v:mID="1704" v:groupContext="shape" transform="translate(607.1,567.523) rotate(90)">
					<title>Sheet.1704</title>
					<path d="M0 595.28 L8.81 595.28" class="st2"/>
				</g>
				<g id="shape1708-1905" v:mID="1708" v:groupContext="shape" transform="translate(1.19598,-112.22)">
					<title>Sheet.1708</title>
					<desc>UNIT 3</desc>
					<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
					<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
					<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
					<text x="3.55" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 3</text>				</g>
			</g>
			<g id="group1709-1908" transform="translate(3.51699,-49.9395)" v:mID="1709" v:groupContext="group">
				<title>Sheet.1709</title>
				<g id="shape1710-1909" v:mID="1710" v:groupContext="shape" transform="translate(-6.99441E-15,-8.89518)">
					<title>Sheet.1710</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				</g>
				<g id="shape1711-1911" v:mID="1711" v:groupContext="shape">
					<title>Sheet.1711</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st45"/>
				</g>
			</g>
			<g id="shape1713-1913" v:mID="1713" v:groupContext="shape" transform="translate(607.081,545.172) rotate(90)">
				<title>Sheet.1713</title>
				<path d="M0 595.28 L8.1 595.28" class="st46"/>
			</g>
		</g>
		<g id="group1714-1916" transform="translate(427.849,-427.084)" v:mID="1714" v:groupContext="group">
			<title>Sheet.1714</title>
			<g id="group1715-1917" v:mID="1715" v:groupContext="group">
				<title>Sheet.1715</title>
				<g id="shape1717-1918" v:mID="1717" v:groupContext="shape" transform="translate(8.47804,-27.753)">
					<title>Sheet.1717</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
				</g>
				<g id="group1718-1920" transform="translate(9.64306,-5.4248) scale(-1,1)" v:mID="1718" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1719-1921" v:mID="1719" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.1719</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape1720-1926" v:mID="1720" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.1720</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1721-1928" v:mID="1721" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.1721</title>
					</g>
				</g>
				<g id="group1722-1930" transform="translate(22.1917,-5.4248) scale(-1,1)" v:mID="1722" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1723-1931" v:mID="1723" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.1723</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape1724-1936" v:mID="1724" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.1724</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1725-1938" v:mID="1725" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.1725</title>
					</g>
				</g>
				<g id="shape1726-1940" v:mID="1726" v:groupContext="shape" v:layerMember="1" transform="translate(4.73773,-6.52427)">
					<title>Dynamic connector.132</title>
					<path d="M0.81 588.19 L0.81 582.87 L13.36 582.87 L13.36 588.19" class="st2"/>
				</g>
				<g id="shape1727-1943" v:mID="1727" v:groupContext="shape" transform="translate(600.826,589.851) rotate(90)">
					<title>Sheet.1727</title>
					<path d="M0 595.28 L1.51 595.28" class="st31"/>
				</g>
				<g id="shape1728-1948" v:mID="1728" v:groupContext="shape" transform="translate(613.374,589.851) rotate(90)">
					<title>Sheet.1728</title>
					<path d="M0 595.28 L3.51 595.28" class="st33"/>
				</g>
				<g id="shape1729-1953" v:mID="1729" v:groupContext="shape" transform="translate(607.1,567.523) rotate(90)">
					<title>Sheet.1729</title>
					<path d="M0 595.28 L8.81 595.28" class="st2"/>
				</g>
			</g>
			<g id="group1734-1956" transform="translate(3.51699,-49.9395)" v:mID="1734" v:groupContext="group">
				<title>Sheet.1734</title>
				<g id="shape1735-1957" v:mID="1735" v:groupContext="shape" transform="translate(-6.99441E-15,-8.89518)">
					<title>Sheet.1735</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				</g>
				<g id="shape1736-1959" v:mID="1736" v:groupContext="shape">
					<title>Sheet.1736</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st45"/>
				</g>
			</g>
			<g id="shape1738-1961" v:mID="1738" v:groupContext="shape" transform="translate(607.081,545.172) rotate(90)">
				<title>Sheet.1738</title>
				<path d="M0 595.28 L8.1 595.28" class="st46"/>
			</g>
		</g>
		<g id="group1739-1964" transform="translate(476.524,-427.147)" v:mID="1739" v:groupContext="group">
			<title>Sheet.1739</title>
			<g id="group1740-1965" v:mID="1740" v:groupContext="group">
				<title>Sheet.1740</title>
				<g id="shape1742-1966" v:mID="1742" v:groupContext="shape" transform="translate(8.47804,-27.753)">
					<title>Sheet.1742</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
				</g>
				<g id="group1743-1968" transform="translate(9.64306,-5.4248) scale(-1,1)" v:mID="1743" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1744-1969" v:mID="1744" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.1744</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape1745-1974" v:mID="1745" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.1745</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1746-1976" v:mID="1746" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.1746</title>
					</g>
				</g>
				<g id="group1747-1978" transform="translate(22.1917,-5.4248) scale(-1,1)" v:mID="1747" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1748-1979" v:mID="1748" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.1748</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape1749-1984" v:mID="1749" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.1749</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1750-1986" v:mID="1750" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.1750</title>
					</g>
				</g>
				<g id="shape1751-1988" v:mID="1751" v:groupContext="shape" v:layerMember="1" transform="translate(4.73773,-6.52427)">
					<title>Dynamic connector.132</title>
					<path d="M0.81 588.19 L0.81 582.87 L13.36 582.87 L13.36 588.19" class="st2"/>
				</g>
				<g id="shape1752-1991" v:mID="1752" v:groupContext="shape" transform="translate(600.826,589.851) rotate(90)">
					<title>Sheet.1752</title>
					<path d="M0 595.28 L1.51 595.28" class="st31"/>
				</g>
				<g id="shape1753-1996" v:mID="1753" v:groupContext="shape" transform="translate(613.374,589.851) rotate(90)">
					<title>Sheet.1753</title>
					<path d="M0 595.28 L3.51 595.28" class="st33"/>
				</g>
				<g id="shape1754-2001" v:mID="1754" v:groupContext="shape" transform="translate(607.1,567.523) rotate(90)">
					<title>Sheet.1754</title>
					<path d="M0 595.28 L8.81 595.28" class="st2"/>
				</g>
			</g>
			<g id="group1759-2004" transform="translate(3.51699,-49.9395)" v:mID="1759" v:groupContext="group">
				<title>Sheet.1759</title>
				<g id="shape1760-2005" v:mID="1760" v:groupContext="shape" transform="translate(-6.99441E-15,-8.89518)">
					<title>Sheet.1760</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				</g>
				<g id="shape1761-2007" v:mID="1761" v:groupContext="shape">
					<title>Sheet.1761</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st45"/>
				</g>
			</g>
			<g id="shape1763-2009" v:mID="1763" v:groupContext="shape" transform="translate(607.081,545.172) rotate(90)">
				<title>Sheet.1763</title>
				<path d="M0 595.28 L8.1 595.28" class="st46"/>
			</g>
		</g>
		<g id="group1764-2012" transform="translate(525.886,-427.034)" v:mID="1764" v:groupContext="group">
			<title>Sheet.1764</title>
			<g id="group1765-2013" v:mID="1765" v:groupContext="group">
				<title>Sheet.1765</title>
				<g id="shape1767-2014" v:mID="1767" v:groupContext="shape" transform="translate(8.47804,-27.753)">
					<title>Sheet.1767</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
				</g>
				<g id="group1768-2016" transform="translate(9.64306,-5.4248) scale(-1,1)" v:mID="1768" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1769-2017" v:mID="1769" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.1769</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape1770-2022" v:mID="1770" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.1770</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1771-2024" v:mID="1771" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.1771</title>
					</g>
				</g>
				<g id="group1772-2026" transform="translate(22.1917,-5.4248) scale(-1,1)" v:mID="1772" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1773-2027" v:mID="1773" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.1773</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape1774-2032" v:mID="1774" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.1774</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1775-2034" v:mID="1775" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.1775</title>
					</g>
				</g>
				<g id="shape1776-2036" v:mID="1776" v:groupContext="shape" v:layerMember="1" transform="translate(4.73773,-6.52427)">
					<title>Dynamic connector.132</title>
					<path d="M0.81 588.19 L0.81 582.87 L13.36 582.87 L13.36 588.19" class="st2"/>
				</g>
				<g id="shape1777-2039" v:mID="1777" v:groupContext="shape" transform="translate(600.826,589.851) rotate(90)">
					<title>Sheet.1777</title>
					<path d="M0 595.28 L1.51 595.28" class="st31"/>
				</g>
				<g id="shape1778-2044" v:mID="1778" v:groupContext="shape" transform="translate(613.374,589.851) rotate(90)">
					<title>Sheet.1778</title>
					<path d="M0 595.28 L3.51 595.28" class="st33"/>
				</g>
				<g id="shape1779-2049" v:mID="1779" v:groupContext="shape" transform="translate(607.1,567.523) rotate(90)">
					<title>Sheet.1779</title>
					<path d="M0 595.28 L8.81 595.28" class="st2"/>
				</g>
				<g id="shape1783-2052" v:mID="1783" v:groupContext="shape" transform="translate(1.19598,-112.27)">
					<title>Sheet.1783</title>
					<desc>UNIT 6</desc>
					<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
					<v:textRect cx="11.8243" cy="591.276" width="23.65" height="8"/>
					<rect x="0" y="587.276" width="23.6487" height="8" class="st26"/>
					<text x="3.55" y="593.08" class="st27" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>UNIT 6</text>				</g>
			</g>
			<g id="group1784-2055" transform="translate(3.51699,-49.9395)" v:mID="1784" v:groupContext="group">
				<title>Sheet.1784</title>
				<g id="shape1785-2056" v:mID="1785" v:groupContext="shape" transform="translate(-6.99441E-15,-8.89518)">
					<title>Sheet.1785</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
				</g>
				<g id="shape1786-2058" v:mID="1786" v:groupContext="shape">
					<title>Sheet.1786</title>
					<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st45"/>
				</g>
			</g>
			<g id="shape1788-2060" v:mID="1788" v:groupContext="shape" transform="translate(607.081,545.172) rotate(90)">
				<title>Sheet.1788</title>
				<path d="M0 595.28 L8.1 595.28" class="st46"/>
			</g>
		</g>
		<g id="shape1792-2063" v:mID="1792" v:groupContext="shape" transform="translate(-504.865,237.066) rotate(-90)">
			<title>Sheet.1792</title>
			<path d="M0 595.28 L21.26 595.28" class="st3"/>
		</g>
		<g id="shape1793-2066" v:mID="1793" v:groupContext="shape" transform="translate(-504.835,217.223) rotate(-90)">
			<title>Sheet.1793</title>
			<path d="M5.41 595.28 L5.77 595.28 L7.38 595.28" class="st47"/>
		</g>
		<g id="group1797-2072" transform="translate(450.985,-315.244)" v:mID="1797" v:groupContext="group">
			<title>Sheet.1797</title>
			<g id="shape1584-2073" v:mID="1584" v:groupContext="shape" transform="translate(-586.91,526.093) rotate(-90)">
				<title>Sheet.1584</title>
				<path d="M0 595.28 L28.48 595.28" class="st8"/>
			</g>
			<g id="group1586-2076" transform="translate(4.60118,0)" v:mID="1586" v:groupContext="group">
				<title>Sheet.1586</title>
				<g id="shape1587-2077" v:mID="1587" v:groupContext="shape" transform="translate(0.418289,-15.7889)">
					<title>Sheet.1587</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
				</g>
				<g id="shape1588-2079" v:mID="1588" v:groupContext="shape" transform="translate(599.04,562.764) rotate(90)">
					<title>Sheet.1588</title>
					<path d="M0 595.28 L2.49 595.28" class="st3"/>
				</g>
				<g id="group1589-2082" transform="translate(7.5292,-4.10166) scale(-1,1)" v:mID="1589" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1590-2083" v:mID="1590" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.1590</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st4"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st4"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st4"/>
					</g>
					<g id="shape1591-2088" v:mID="1591" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.1591</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1592-2090" v:mID="1592" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.1592</title>
					</g>
				</g>
				<g id="shape1593-2092" v:mID="1593" v:groupContext="shape" transform="translate(-591.511,583.811) rotate(-90)">
					<title>Sheet.1593</title>
					<path d="M0 595.28 L4.32 595.28" class="st3"/>
				</g>
				<g id="shape1594-2095" v:mID="1594" v:groupContext="shape" transform="translate(599.04,591.174) rotate(90)">
					<title>Sheet.1594</title>
					<path d="M0 595.28 L4.1 595.28" class="st3"/>
				</g>
			</g>
			<g id="shape1596-2098" v:mID="1596" v:groupContext="shape" transform="translate(6.99441E-15,-51.3919)">
				<title>Sheet.1596</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
			</g>
			<g id="shape1597-2100" v:mID="1597" v:groupContext="shape" transform="translate(6.99441E-15,-42.4967)">
				<title>Sheet.1597</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st42"/>
			</g>
			<g id="shape1598-2102" v:mID="1598" v:groupContext="shape" transform="translate(-586.902,562.919) rotate(-90)">
				<title>Sheet.1598</title>
				<path d="M0 595.28 L10.14 595.28" class="st3"/>
			</g>
		</g>
		<g id="group1799-2105" transform="translate(411.024,-315.244)" v:mID="1799" v:groupContext="group">
			<title>Sheet.1799</title>
			<g id="group1556-2106" v:mID="1556" v:groupContext="group">
				<title>Sheet.1556</title>
				<g id="group304-2107" transform="translate(-9.99201E-16,1084.63) scale(1,-1)" v:mID="304" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape305-2108" v:mID="305" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.305</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape306-2113" v:mID="306" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.306</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape307-2115" v:mID="307" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.307</title>
					</g>
				</g>
				<g id="group308-2117" transform="translate(12.5487,1084.63) scale(1,-1)" v:mID="308" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape309-2118" v:mID="309" v:groupContext="shape" v:layerMember="0" transform="translate(0.617886,-1.2491E-06)">
						<title>Sheet.309</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.47 587.1 L3.47 589.24" class="st41"/>
						<path d="M3.47 595.28 L3.47 593.14" class="st41"/>
						<path d="M0.94 589.56 L3.47 593.14 L3.47 595.28" class="st41"/>
					</g>
					<g id="shape310-2123" v:mID="310" v:groupContext="shape" v:layerMember="0" transform="translate(3.26543,-1.31878)">
						<title>Sheet.310</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape311-2125" v:mID="311" v:groupContext="shape" v:layerMember="0" transform="translate(-0.793469,0.793468)">
						<title>Sheet.311</title>
					</g>
				</g>
				<g id="shape312-2127" v:mID="312" v:groupContext="shape" v:layerMember="1" transform="translate(3.28076,-104.821)">
					<title>Dynamic connector.312</title>
					<path d="M0.81 602.36 L0.81 607.68 L13.36 607.68 L13.36 602.36" class="st2"/>
				</g>
				<g id="shape317-2130" v:mID="317" v:groupContext="shape" transform="translate(7.02107,-73.6299)">
					<title>Sheet.317</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st29"/>
				</g>
				<g id="shape318-2132" v:mID="318" v:groupContext="shape" transform="translate(-584.908,507.413) rotate(-90)">
					<title>Sheet.318</title>
					<path d="M0 595.28 L4.14 595.28" class="st2"/>
				</g>
				<g id="shape323-2135" v:mID="323" v:groupContext="shape" transform="translate(-584.908,526.093) rotate(-90)">
					<title>Sheet.323</title>
					<path d="M0 595.28 L4.45 595.28" class="st2"/>
				</g>
				<g id="shape453-2138" v:mID="453" v:groupContext="shape" transform="translate(-591.183,489.355) rotate(-90)">
					<title>Sheet.453</title>
					<path d="M0 595.28 L7.69 595.28" class="st33"/>
				</g>
				<g id="group466-2143" transform="translate(6.60278,0)" v:mID="466" v:groupContext="group">
					<title>Sheet.466</title>
					<g id="shape467-2144" v:mID="467" v:groupContext="shape" transform="translate(0.418289,-15.7889)">
						<title>Sheet.467</title>
						<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
					</g>
					<g id="shape468-2146" v:mID="468" v:groupContext="shape" transform="translate(599.04,562.764) rotate(90)">
						<title>Sheet.468</title>
						<path d="M0 595.28 L2.49 595.28" class="st3"/>
					</g>
					<g id="group469-2149" transform="translate(7.5292,-4.10166) scale(-1,1)" v:mID="469" v:groupContext="group" v:layerMember="0">
						<v:custProps>
							<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
							<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
							<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
						<g id="shape470-2150" v:mID="470" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
							<title>Sheet.470</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
							<path d="M3.19 587.92 L3.19 589.84" class="st4"/>
							<path d="M3.19 595.28 L3.19 593.35" class="st4"/>
							<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st4"/>
						</g>
						<g id="shape471-2155" v:mID="471" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
							<title>Sheet.471</title>
							<v:userDefs>
								<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
							</v:userDefs>
						</g>
						<g id="shape472-2157" v:mID="472" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
							<title>Sheet.472</title>
						</g>
					</g>
					<g id="shape473-2159" v:mID="473" v:groupContext="shape" transform="translate(-591.511,583.811) rotate(-90)">
						<title>Sheet.473</title>
						<path d="M0 595.28 L4.32 595.28" class="st3"/>
					</g>
					<g id="shape474-2162" v:mID="474" v:groupContext="shape" transform="translate(599.04,591.174) rotate(90)">
						<title>Sheet.474</title>
						<path d="M0 595.28 L4.1 595.28" class="st3"/>
					</g>
				</g>
				<g id="group616-2165" transform="translate(2.0016,-42.4967)" v:mID="616" v:groupContext="group">
					<title>Sheet.616</title>
					<g id="shape617-2166" v:mID="617" v:groupContext="shape" transform="translate(0,-8.89518)">
						<title>Sheet.617</title>
						<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st29"/>
					</g>
					<g id="shape618-2168" v:mID="618" v:groupContext="shape">
						<title>Sheet.618</title>
						<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st42"/>
					</g>
				</g>
				<g id="shape620-2170" v:mID="620" v:groupContext="shape" transform="translate(-584.901,562.919) rotate(-90)">
					<title>Sheet.620</title>
					<path d="M0 595.28 L10.14 595.28" class="st3"/>
				</g>
			</g>
			<g id="shape1798-2173" v:mID="1798" v:groupContext="shape" transform="translate(-578.634,489.355) rotate(-90)">
				<title>Sheet.1798</title>
				<path d="M0 595.28 L3.82 595.28" class="st33"/>
			</g>
		</g>
		<g id="group1800-2178" transform="translate(488.976,-315.244)" v:mID="1800" v:groupContext="group">
			<title>Sheet.1800</title>
			<g id="shape1620-2179" v:mID="1620" v:groupContext="shape" transform="translate(-586.91,526.093) rotate(-90)">
				<title>Sheet.1620</title>
				<path d="M0 595.28 L17.15 595.28" class="st8"/>
			</g>
			<g id="group1621-2182" transform="translate(4.60118,0)" v:mID="1621" v:groupContext="group">
				<title>Sheet.1621</title>
				<g id="shape1622-2183" v:mID="1622" v:groupContext="shape" transform="translate(0.418289,-15.7889)">
					<title>Sheet.1622</title>
					<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st5"/>
				</g>
				<g id="shape1623-2185" v:mID="1623" v:groupContext="shape" transform="translate(599.04,562.764) rotate(90)">
					<title>Sheet.1623</title>
					<path d="M0 595.28 L2.49 595.28" class="st3"/>
				</g>
				<g id="group1624-2188" transform="translate(7.5292,-4.10166) scale(-1,1)" v:mID="1624" v:groupContext="group" v:layerMember="0">
					<v:custProps>
						<v:cp v:nameU="SubType" v:lbl="Switch type" v:type="1" v:format="General;Early to close;Late to close" v:langID="1033" v:val="VT4(General)"/>
						<v:cp v:nameU="View" v:lbl="Symbol option" v:type="1" v:format="Symbol 1;Symbol 2;Symbol 3" v:langID="1033" v:val="VT4(Symbol 1)"/>
						<v:cp v:nameU="Label" v:lbl="Label" v:prompt="" v:type="0" v:format="@" v:sortKey="" v:invis="false" v:ask="false" v:langID="1033" v:cal="0" v:val="VT4()"/>
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
					<g id="shape1625-2189" v:mID="1625" v:groupContext="shape" v:layerMember="0" transform="translate(0.568304,-1.12354E-06)">
						<title>Sheet.1625</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
						<path d="M3.19 587.92 L3.19 589.84" class="st4"/>
						<path d="M3.19 595.28 L3.19 593.35" class="st4"/>
						<path d="M0.87 590.14 L3.19 593.35 L3.19 595.28" class="st4"/>
					</g>
					<g id="shape1626-2194" v:mID="1626" v:groupContext="shape" v:layerMember="0" transform="translate(3.0034,-1.18622)">
						<title>Sheet.1626</title>
						<v:userDefs>
							<v:ud v:nameU="Alt" v:val="VT0(0):26"/>
						</v:userDefs>
					</g>
					<g id="shape1627-2196" v:mID="1627" v:groupContext="shape" v:layerMember="0" transform="translate(-0.729798,0.713712)">
						<title>Sheet.1627</title>
					</g>
				</g>
				<g id="shape1628-2198" v:mID="1628" v:groupContext="shape" transform="translate(-591.511,583.811) rotate(-90)">
					<title>Sheet.1628</title>
					<path d="M0 595.28 L4.32 595.28" class="st3"/>
				</g>
				<g id="shape1629-2201" v:mID="1629" v:groupContext="shape" transform="translate(599.04,591.174) rotate(90)">
					<title>Sheet.1629</title>
					<path d="M0 595.28 L4.1 595.28" class="st3"/>
				</g>
			</g>
			<g id="shape1630-2204" v:mID="1630" v:groupContext="shape" transform="translate(6.99441E-15,-51.3919)">
				<title>Sheet.1630</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st7"/>
			</g>
			<g id="shape1631-2206" v:mID="1631" v:groupContext="shape" transform="translate(6.99441E-15,-42.4967)">
				<title>Sheet.1631</title>
				<ellipse cx="8.36578" cy="586.38" rx="8.36578" ry="8.89518" class="st42"/>
			</g>
			<g id="shape1632-2208" v:mID="1632" v:groupContext="shape" transform="translate(-586.902,562.919) rotate(-90)">
				<title>Sheet.1632</title>
				<path d="M0 595.28 L10.14 595.28" class="st3"/>
			</g>
		</g>
		<g id="group1802-2211" transform="translate(939.02,276.408) rotate(90)" v:mID="1802" v:groupContext="group">
			<title>Sheet.1802</title>
			<g id="shape1803-2212" v:mID="1803" v:groupContext="shape" transform="translate(0.418289,-15.7889)">
				<title>Sheet.1803</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st49"/>
			</g>
			<g id="shape1804-2214" v:mID="1804" v:groupContext="shape" transform="translate(599.04,562.764) rotate(90)">
				<title>Sheet.1804</title>
				<path d="M0 595.28 L2.49 595.28" class="st3"/>
			</g>
			<g id="shape1809-2217" v:mID="1809" v:groupContext="shape" transform="translate(-591.511,583.728) rotate(-90)">
				<title>Sheet.1809</title>
				<path d="M0 595.28 L4.24 595.28" class="st3"/>
			</g>
		</g>
		<g id="group1814-2220" transform="translate(284.23,-503.661)" v:mID="1814" v:groupContext="group">
			<title>Sheet.1814</title>
			<g id="group1407-2221" transform="translate(3.52463,-28.5558)" v:mID="1407" v:groupContext="group">
				<title>Sheet.1407</title>
				<g id="shape1408-2222" v:mID="1408" v:groupContext="shape" transform="translate(5.64798,0)">
					<title>Sheet.1408</title>
					<path d="M0 595.28 L1.02 595.28" class="st8"/>
				</g>
				<g id="shape1409-2225" v:mID="1409" v:groupContext="shape">
					<title>Sheet.1409</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape1661-2228" v:mID="1661" v:groupContext="shape" transform="translate(602.134,584.407) rotate(90)">
				<title>Sheet.1661</title>
				<path d="M0 595.28 L10.87 595.28" class="st50"/>
			</g>
			<g id="shape1811-2231" v:mID="1811" v:groupContext="shape" transform="translate(0,-10.8686)">
				<title>Sheet.1811</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="7.08661" cy="588.189" width="14.18" height="14.1732"/>
				<ellipse cx="7.08661" cy="588.189" rx="7.08661" ry="7.08661" class="st51"/>
				<text x="4.25" y="590.89" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
			<g id="shape1812-2234" v:mID="1812" v:groupContext="shape" transform="translate(602.145,567.116) rotate(90)">
				<title>Sheet.1812</title>
				<path d="M0 595.28 L2.83 595.28" class="st50"/>
			</g>
		</g>
		<g id="group1815-2237" transform="translate(334.202,-503.661)" v:mID="1815" v:groupContext="group">
			<title>Sheet.1815</title>
			<g id="group1816-2238" transform="translate(3.52463,-28.5558)" v:mID="1816" v:groupContext="group">
				<title>Sheet.1816</title>
				<g id="shape1817-2239" v:mID="1817" v:groupContext="shape" transform="translate(5.64798,0)">
					<title>Sheet.1817</title>
					<path d="M0 595.28 L1.02 595.28" class="st8"/>
				</g>
				<g id="shape1818-2242" v:mID="1818" v:groupContext="shape">
					<title>Sheet.1818</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape1819-2245" v:mID="1819" v:groupContext="shape" transform="translate(602.134,584.407) rotate(90)">
				<title>Sheet.1819</title>
				<path d="M0 595.28 L10.87 595.28" class="st50"/>
			</g>
			<g id="shape1820-2248" v:mID="1820" v:groupContext="shape" transform="translate(0,-10.8686)">
				<title>Sheet.1820</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="7.08661" cy="588.189" width="14.18" height="14.1732"/>
				<ellipse cx="7.08661" cy="588.189" rx="7.08661" ry="7.08661" class="st51"/>
				<text x="4.25" y="590.89" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
			<g id="shape1821-2251" v:mID="1821" v:groupContext="shape" transform="translate(602.145,567.116) rotate(90)">
				<title>Sheet.1821</title>
				<path d="M0 595.28 L2.83 595.28" class="st50"/>
			</g>
		</g>
		<g id="group1822-2254" transform="translate(384.134,-503.661)" v:mID="1822" v:groupContext="group">
			<title>Sheet.1822</title>
			<g id="group1823-2255" transform="translate(3.52463,-28.5558)" v:mID="1823" v:groupContext="group">
				<title>Sheet.1823</title>
				<g id="shape1824-2256" v:mID="1824" v:groupContext="shape" transform="translate(5.64798,0)">
					<title>Sheet.1824</title>
					<path d="M0 595.28 L1.02 595.28" class="st8"/>
				</g>
				<g id="shape1825-2259" v:mID="1825" v:groupContext="shape">
					<title>Sheet.1825</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape1826-2262" v:mID="1826" v:groupContext="shape" transform="translate(602.134,584.407) rotate(90)">
				<title>Sheet.1826</title>
				<path d="M0 595.28 L10.87 595.28" class="st50"/>
			</g>
			<g id="shape1827-2265" v:mID="1827" v:groupContext="shape" transform="translate(0,-10.8686)">
				<title>Sheet.1827</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="7.08661" cy="588.189" width="14.18" height="14.1732"/>
				<ellipse cx="7.08661" cy="588.189" rx="7.08661" ry="7.08661" class="st51"/>
				<text x="4.25" y="590.89" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
			<g id="shape1828-2268" v:mID="1828" v:groupContext="shape" transform="translate(602.145,567.116) rotate(90)">
				<title>Sheet.1828</title>
				<path d="M0 595.28 L2.83 595.28" class="st50"/>
			</g>
		</g>
		<g id="group1829-2271" transform="translate(432.807,-503.661)" v:mID="1829" v:groupContext="group">
			<title>Sheet.1829</title>
			<g id="group1830-2272" transform="translate(3.52463,-28.5558)" v:mID="1830" v:groupContext="group">
				<title>Sheet.1830</title>
				<g id="shape1831-2273" v:mID="1831" v:groupContext="shape" transform="translate(5.64798,0)">
					<title>Sheet.1831</title>
					<path d="M0 595.28 L1.02 595.28" class="st8"/>
				</g>
				<g id="shape1832-2276" v:mID="1832" v:groupContext="shape">
					<title>Sheet.1832</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape1833-2279" v:mID="1833" v:groupContext="shape" transform="translate(602.134,584.407) rotate(90)">
				<title>Sheet.1833</title>
				<path d="M0 595.28 L10.87 595.28" class="st50"/>
			</g>
			<g id="shape1834-2282" v:mID="1834" v:groupContext="shape" transform="translate(0,-10.8686)">
				<title>Sheet.1834</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="7.08661" cy="588.189" width="14.18" height="14.1732"/>
				<ellipse cx="7.08661" cy="588.189" rx="7.08661" ry="7.08661" class="st51"/>
				<text x="4.25" y="590.89" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
			<g id="shape1835-2285" v:mID="1835" v:groupContext="shape" transform="translate(602.145,567.116) rotate(90)">
				<title>Sheet.1835</title>
				<path d="M0 595.28 L2.83 595.28" class="st50"/>
			</g>
		</g>
		<g id="group1836-2288" transform="translate(481.86,-503.661)" v:mID="1836" v:groupContext="group">
			<title>Sheet.1836</title>
			<g id="group1837-2289" transform="translate(3.52463,-28.5558)" v:mID="1837" v:groupContext="group">
				<title>Sheet.1837</title>
				<g id="shape1838-2290" v:mID="1838" v:groupContext="shape" transform="translate(5.64798,0)">
					<title>Sheet.1838</title>
					<path d="M0 595.28 L1.02 595.28" class="st8"/>
				</g>
				<g id="shape1839-2293" v:mID="1839" v:groupContext="shape">
					<title>Sheet.1839</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape1840-2296" v:mID="1840" v:groupContext="shape" transform="translate(602.134,584.407) rotate(90)">
				<title>Sheet.1840</title>
				<path d="M0 595.28 L10.87 595.28" class="st50"/>
			</g>
			<g id="shape1841-2299" v:mID="1841" v:groupContext="shape" transform="translate(0,-10.8686)">
				<title>Sheet.1841</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="7.08661" cy="588.189" width="14.18" height="14.1732"/>
				<ellipse cx="7.08661" cy="588.189" rx="7.08661" ry="7.08661" class="st51"/>
				<text x="4.25" y="590.89" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
			<g id="shape1842-2302" v:mID="1842" v:groupContext="shape" transform="translate(602.145,567.116) rotate(90)">
				<title>Sheet.1842</title>
				<path d="M0 595.28 L2.83 595.28" class="st50"/>
			</g>
		</g>
		<g id="group1843-2305" transform="translate(530.712,-503.661)" v:mID="1843" v:groupContext="group">
			<title>Sheet.1843</title>
			<g id="group1844-2306" transform="translate(3.52463,-28.5558)" v:mID="1844" v:groupContext="group">
				<title>Sheet.1844</title>
				<g id="shape1845-2307" v:mID="1845" v:groupContext="shape" transform="translate(5.64798,0)">
					<title>Sheet.1845</title>
					<path d="M0 595.28 L1.02 595.28" class="st8"/>
				</g>
				<g id="shape1846-2310" v:mID="1846" v:groupContext="shape">
					<title>Sheet.1846</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape1847-2313" v:mID="1847" v:groupContext="shape" transform="translate(602.134,584.407) rotate(90)">
				<title>Sheet.1847</title>
				<path d="M0 595.28 L10.87 595.28" class="st50"/>
			</g>
			<g id="shape1848-2316" v:mID="1848" v:groupContext="shape" transform="translate(0,-10.8686)">
				<title>Sheet.1848</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="7.08661" cy="588.189" width="14.18" height="14.1732"/>
				<ellipse cx="7.08661" cy="588.189" rx="7.08661" ry="7.08661" class="st51"/>
				<text x="4.25" y="590.89" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
			<g id="shape1849-2319" v:mID="1849" v:groupContext="shape" transform="translate(602.145,567.116) rotate(90)">
				<title>Sheet.1849</title>
				<path d="M0 595.28 L2.83 595.28" class="st50"/>
			</g>
		</g>
		<g id="group1850-2322" transform="translate(1082.22,276.408) rotate(90)" v:mID="1850" v:groupContext="group">
			<title>Sheet.1850</title>
			<g id="shape1851-2323" v:mID="1851" v:groupContext="shape" transform="translate(0.418289,-15.7889)">
				<title>Sheet.1851</title>
				<rect x="0" y="581.043" width="6.69262" height="14.2323" class="st49"/>
			</g>
			<g id="shape1852-2325" v:mID="1852" v:groupContext="shape" transform="translate(599.04,562.764) rotate(90)">
				<title>Sheet.1852</title>
				<path d="M0 595.28 L2.49 595.28" class="st3"/>
			</g>
			<g id="shape1853-2328" v:mID="1853" v:groupContext="shape" transform="translate(-591.511,583.728) rotate(-90)">
				<title>Sheet.1853</title>
				<path d="M0 595.28 L4.24 595.28" class="st3"/>
			</g>
		</g>
		<g id="group1854-2331" transform="translate(52.4409,-293.782)" v:mID="1854" v:groupContext="group">
			<title>Sheet.1854</title>
			<g id="group1855-2332" transform="translate(3.52463,-28.5558)" v:mID="1855" v:groupContext="group">
				<title>Sheet.1855</title>
				<g id="shape1856-2333" v:mID="1856" v:groupContext="shape" transform="translate(5.64798,0)">
					<title>Sheet.1856</title>
					<path d="M0 595.28 L1.02 595.28" class="st8"/>
				</g>
				<g id="shape1857-2336" v:mID="1857" v:groupContext="shape">
					<title>Sheet.1857</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape1858-2339" v:mID="1858" v:groupContext="shape" transform="translate(602.13,582.369) rotate(89.8038)">
				<title>Sheet.1858</title>
				<path d="M0 595.28 L14.12 595.28" class="st50"/>
			</g>
			<g id="shape1859-2342" v:mID="1859" v:groupContext="shape" transform="translate(0,-10.8686)">
				<title>Sheet.1859</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="7.08661" cy="588.189" width="14.18" height="14.1732"/>
				<ellipse cx="7.08661" cy="588.189" rx="7.08661" ry="7.08661" class="st51"/>
				<text x="4.25" y="590.89" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
			<g id="shape1860-2345" v:mID="1860" v:groupContext="shape" transform="translate(602.145,567.116) rotate(90)">
				<title>Sheet.1860</title>
				<path d="M0 595.28 L2.83 595.28" class="st50"/>
			</g>
		</g>
		<g id="group1861-2348" transform="translate(102.614,-293.782)" v:mID="1861" v:groupContext="group">
			<title>Sheet.1861</title>
			<g id="group1862-2349" transform="translate(3.52463,-28.5558)" v:mID="1862" v:groupContext="group">
				<title>Sheet.1862</title>
				<g id="shape1863-2350" v:mID="1863" v:groupContext="shape" transform="translate(5.64798,0)">
					<title>Sheet.1863</title>
					<path d="M0 595.28 L1.02 595.28" class="st8"/>
				</g>
				<g id="shape1864-2353" v:mID="1864" v:groupContext="shape">
					<title>Sheet.1864</title>
					<path d="M0 595.28 L5.65 595.28" class="st8"/>
				</g>
			</g>
			<g id="shape1865-2356" v:mID="1865" v:groupContext="shape" transform="translate(602.13,582.369) rotate(89.8038)">
				<title>Sheet.1865</title>
				<path d="M0 595.28 L14.12 595.28" class="st50"/>
			</g>
			<g id="shape1866-2359" v:mID="1866" v:groupContext="shape" transform="translate(0,-10.8686)">
				<title>Sheet.1866</title>
				<desc>G</desc>
				<v:textBlock v:margins="rect(1,1,1,1)" v:tabSpace="42.5197"/>
				<v:textRect cx="7.08661" cy="588.189" width="14.18" height="14.1732"/>
				<ellipse cx="7.08661" cy="588.189" rx="7.08661" ry="7.08661" class="st51"/>
				<text x="4.25" y="590.89" class="st52" v:langID="1057"><v:paragraph v:horizAlign="1"/><v:tabList/>G</text>			</g>
			<g id="shape1867-2362" v:mID="1867" v:groupContext="shape" transform="translate(602.145,567.116) rotate(90)">
				<title>Sheet.1867</title>
				<path d="M0 595.28 L2.83 595.28" class="st50"/>
			</g>
		</g>
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
