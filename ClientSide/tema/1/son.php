<?php
foreach ($a as $b) {
    if ($b!="")
	{
	if (is_numeric($b))
	{
	}
	else
	{
	list($c1, $c2, $c3, $c4, $c5) = split("[|.-]", $b);
	$sira++;
	echo "<tr><td>#".$sira."</td><td>".$c1."</td><td>".$c2."</td><td>".$c3."</td><td>".$c4."</td><td>".$c5."</td></tr>";
	}
	
	}
}
echo '
</tbody>
</table></div>';
?>