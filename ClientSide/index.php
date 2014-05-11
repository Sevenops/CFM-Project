<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<?php
include "ayar.php";
//include "guncelle.php";
include "tema/".$tema."/css.php";
?>
<title><?php echo $isim?> - CFM</title>
</head>
<body>
<center>
<form target="_self" method="get">

<font color="white">Search<font>
<br />

<input type="text" id="bakery" name="search" size="140" value="" />
<br /><br />
<input type="submit" name="but" value="Search" />
</form>
</center>
<?php
$sayfa = isset($_GET["sayfa"]) ? (int) $_GET["sayfa"] : 1;
$search=$_GET["search"];
$only=$_GET["only"];
if (!$only){


if($sayfa < 1) $sayfa = 1; 
$veri = "";
$fp = stream_socket_client($ip.":".$port, $errno, $errstr, 1);
if (!$fp) {
    echo "Servera Bağlanılamadı.";
} else {
    fwrite($fp, $sayfa."|".$sayfada."|".$search);
    while (!feof($fp)) {
		$veri=fgets($fp, 1000000);
    }
    fclose($fp);
}
$a=explode("$7$", $veri);
foreach ($a as $b) {
	if (is_numeric($b))
	{
		$toplam_icerik = $b;
	}
}
$toplam_sayfa = ceil($toplam_icerik / $sayfada);
$sira=($sayfa*$sayfada)-$sayfada;
include "tema/".$tema."/tablo.php";
include "tema/".$tema."/tablo_son.php";
include "tema/".$tema."/son.php";
}
?>


<footer>
<div id="footer"><a target="_blank" href="http://dev-tr.net">Dev-TR Offical Blog</a></div></footer>
</body></html>