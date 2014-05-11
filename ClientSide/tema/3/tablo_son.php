<?php
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
$en_az_orta = ceil($sayfa_goster/2);
$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;

$sayfa_orta = $sayfa;
if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;

$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
echo '</tfoot><tbody>';
echo "<center>";
if($sol_sayfalar < 1) $sol_sayfalar = 1;
if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;
if($sayfa-1 != 0) echo '<a class="classname" href="?sayfa='.($sayfa-1).'"><span>«</span></a>';


for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
   if($sayfa == $s) {
       echo '<a class="classname" href="#"><span>'.$s.'</span></a>';
       
   } else {
	 echo '<a class="classname" href="?sayfa='.$s.'">'.$s.'</a>';
	  }
  
   }
  if($sayfa != $toplam_sayfa)
{
 echo '<a class="classname" href="?sayfa='.($sayfa+1).'"><span>»</span></a>';
 
}
echo "</center>";
echo '</div>';
?>