<!doctype html>
<html lang="fr">
<head>
  <title>Echiquier</title>
  <style>
	table 	    { border-collapse: collapse;}
	td 	     	{ width:50px; height:50px; padding:0}
	.clair	    { background:#FCFAE1;}
	.sombre	    { background:#BD8D46;}
	.img	    { margin:0;padding:0;}
	#contenu    { width:500px; margin: 0 auto;}
  </style>
</head>
<body>
<div id="contenu">

<table>
<?php
$ligmax=8;
$colmax=8;

$pos[5][2]="fou_b.png";
$pos[8][1]="roi_n.png";



for($i=1;$i<=8;$i++){
	$pos[7][$i]="pion_n.png";
	$pos[2][$i]="pion_b.png";
}




for ($lig=$ligmax; $lig>0; $lig--){

	echo "<tr>";

	for ($col=1; $col<=$colmax; $col++){

		$couleur=(($lig+$col)%2==0)?"clair":"sombre"; //Operateur ternaire
			
		if(isset($pos[$lig][$col])){
			$piece=$pos[$lig][$col];
		}
		else{
				$piece='vide.png';
		}

		$piece=$pos[$lig][$col]??'vide.png';
		
		echo "<td class=\"$couleur\"><img src=\"img/$piece\" alt=\"\"></td>";
	}

	echo "</tr>";
}

?>
</table>


</div>
</body>
</html>
