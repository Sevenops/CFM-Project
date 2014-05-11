<?php

echo '
<style type="text/css">
html, body, #container { height: 100%; margin: 0; padding: 0; }
body > #container { height: auto; min-height: 100%; }
#content { padding-bottom: 3em; }
#footer { clear: both; position: relative; z-index: 10; height: 3em; margin-top: 1em; }
body { font: .75em/normal "Lucida Sans", "Lucida Grande", sans-serif; }
a, a:link, a:visited { color: #c6762f; text-decoration: underoline; }
a:hover, a:focus {  }
p { margin-bottom: 1em; }
#about { padding: 50px; } 
#footer { 
background-color: black; color: white; font-size: 200%; text-align: center; line-height: 3em; 
}

</style>
<style type="text/css">
.classname {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #151515), color-stop(1, #1d1414) );
	background:-moz-linear-gradient( center top, #151515 5%, #1d1414 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#151515", endColorstr="#1d1414");
	background-color:#151515;
	-webkit-border-top-left-radius:0px;
	-moz-border-radius-topleft:0px;
	border-top-left-radius:0px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:0px;
	-moz-border-radius-bottomright:0px;
	border-bottom-right-radius:0px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0px;
	border:2px solid #eeeeee;
	display:inline-block;
	color:#eeeeee;
	font-family:Arial;
	font-size:16px;
	font-weight:bold;
	font-style:normal;
	height:20px;
	line-height:20px;
	width:32px;
	text-decoration:none;
	text-align:center;
}
.classname:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #1d1414), color-stop(1, #151515) );
	background:-moz-linear-gradient( center top, #1d1414 5%, #151515 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#1d1414", endColorstr="#151515");
	background-color:#1d1414;
}.classname:active {
	position:relative;
	top:1px;
}</style>
<style type="text/css">
@charset "UTF-8";
.p{padding-top:15px;}
.pagination{padding-bottom:20px;padding-top:20px;text-align:center;margin:3px;}
.pagination a{border:1px solid #232323;color:#0078FF;text-decoration:none;margin:2px;padding:2px 5px;background-color:#000014}
.pagination a:hover,div. zebra pagination a:active{border:1px solid #555;}
.pagination c{background-color:#2E6AB1;border:1px solid #232323;color:#FFF;font-weight:700;margin:2px;padding:2px 5px;}
.pagination c:hover,div. zebra pagination a:active{border:1px solid #555;}
.pagination span.disabled{border:1px solid #232323;color:#888;margin:2px;padding:2px 5px;background-color:#000014}

html, body{
	padding:0;
	margin:0;
	position:relative;
	background:url(./tema/3/body.jpg);
	background-repeat:repeat;
	color:#fff;
	letter-spacing:1px;
	font-family:Georgia, "Times New Roman", Times, serif;
}

.zebra caption{
	font-size:20px;
	font-weight:normal;
	background:url(./tema/3/zebratable.png);
	background-repeat:no-repeat;
	background-position: 130px center;
	padding-top: 20px;
	height:50px;}

#container{
	padding-top:20px;
	width:960px;
	margin:0 auto;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
	width:100%;
	-webkit-box-shadow:  0px 2px 1px 5px rgba(242, 242, 242, 0.1);
    box-shadow:  0px 2px 1px 5px rgba(242, 242, 242, 0.1);
}

.zebra {
    border: 1px solid #555;
}

.zebra td {
    border-left: 1px solid #555;
    border-top: 1px solid #555;
    padding: 10px;
    text-align: left;    
}

.zebra th, .zebra th:hover {
    border-left: 1px solid #555;
	border-bottom: 1px solid #828282;
    padding: 20px;  
    background-color:#151515 !important;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#151515), to(#404040)) !important;
    background-image: -webkit-linear-gradient(top, #151515, #404040) !important;
    background-image:    -moz-linear-gradient(top, #151515, #404040) !important;
    background-image:     -ms-linear-gradient(top, #151515, #404040) !important;
    background-image:      -o-linear-gradient(top, #151515, #404040) !important;
    background-image:         linear-gradient(top, #151515, #404040) !important;
	color:#fff !important;
	font-weight:normal;
}

.zebra tbody tr:nth-child(even) {
    background: #000 !important;
	color:#fff;
}

.zebra tr:hover *{
    background: #eeeeee;
	color:#000;
}

.zebra tr {
	background:#404040;
	color:#fff;
}

</style>';
?>