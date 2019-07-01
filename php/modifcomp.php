<?php 
require_once('../php/db.php');

if (!ctype_digit($_POST['newlvl'])) {
	echo "Il faut utiliser un chiffre pour le niveau";
	echo "<p><a href=\"../page/administration.php\">Revenir a l'administration</a> ou bien <a href=\"../page/competence.php\">visualiser</a></p>";
}
else{
	$rqt_modifier ="UPDATE competences SET lvl_cpt = '".$_POST['newlvl']."' WHERE competence = '".$_POST['compmodif']."';";
		$mdf = $pdo->prepare($rqt_modifier);
		$mdf->execute();
	echo "Compétence modifier!";
	echo "<p><a href=\"../page/administration.php\">Revenir a l'administration</a> ou bien <a href=\"../page/competence.php\">visualiser</a></p>";
}


 ?>