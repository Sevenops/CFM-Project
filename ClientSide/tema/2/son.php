<?php

foreach ($a as $b) {
if ($b!="")
	{
	if (is_numeric($b))
	{
	}
	else
	{
	if ($search){list($c1, $c2, $c3, $c4, $c5, $c6) = split("[|.-]", $b);}
	else{list($c1, $c2, $c3, $c4, $c5) = split("[|.-]", $b);}
if ($search){$sira=$c6;}
else {$sira++;}

$color++;
$renk=($color%2!=1)?"lb1":"lb2";

	
echo "<tr class=".$renk." '<td class='c1'></td>
<td class='c1'><span class='sprite_none' title='None'></span> ".$sira."</td>
<td class='c2'>".$c1."</td>
<td class='c3'>".$c2."</td>
<td class='c4'>".$c3."</td>
<td class='c5'>".$c4."</td>
<td class='c5'>".$c5."</td>
</tr>";
}}}
echo '</table>'; 
?>