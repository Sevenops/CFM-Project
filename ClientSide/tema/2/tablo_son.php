<?php
if (!$search){
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
$en_az_orta = ceil($sayfa_goster/2);
$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;

$sayfa_orta = $sayfa;
if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;

$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 

if($sol_sayfalar < 1) $sol_sayfalar = 1;
if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;
echo '<div class="pagination">';
if($sayfa != 1) echo ' <a href="?sayfa=1">İlk sayfa</a> ';
if($sayfa != 1) echo '<a href="?sayfa='.($sayfa-1).'">« Önceki</a>';
for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
   if($sayfa == $s) {
       echo '<c>'.$s.'</c>';
       
   } else {
       echo '<a href="?sayfa='.$s.'">'.$s.'</a> ';}
   
}
if($sayfa != $toplam_sayfa) echo ' <a href="?sayfa='.($sayfa+1).'">Sonraki »</a> ';
if($sayfa != $toplam_sayfa) echo ' <a href="?sayfa='.$toplam_sayfa.'">Son sayfa</a>';

echo '</div>';}
?>