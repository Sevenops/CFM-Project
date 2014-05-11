<?php
echo '
<style type="text/css">
	.alert-box {
		color:#555;
		border-radius:10px;
		font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
		padding:10px 36px;
		margin:10px;
	}
	.alert-box span {
		font-weight:bold;
		text-transform:uppercase;
}
	.notice {
		background:#e3f7fc url("bilgi.png") no-repeat 10px 50%;
		border:1px solid #8ed9f6;
	}
    </style>
';
$site = "http://dev-tr.net/update.html";
$icerik = file_get_contents($site);
list($c1, $c2) = split("[|-]", $icerik);
if ($surum!=$c1)
{
echo '
<div class="alert-box notice"><span>Sürüm '.$c1.' :</span>'.$c2.'</div>';
}
?>