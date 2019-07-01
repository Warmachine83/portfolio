<?php 

require_once('../php/db.php');

if (!isset($_POST['comp']) and !isset($_POST['lvl'])) {
	echo "Il faut rentrer une valeur";
	echo "<p><a href=\"../page/administration.php\">Revenir a l'administration</a> ou bien <a href=\"../page/competence.php\">visualiser</a></p>";
}
elseif (!ctype_digit($_POST['lvl'])) {
	echo "Il faut utiliser un chiffre pour le niveau";
	echo "<p><a href=\"../page/administration.php\">Revenir a l'administration</a> ou bien <a href=\"../page/competence.php\">visualiser</a></p>";
}
else{
	$rqt_ajout ="INSERT INTO competences (competence, lvl_cpt) VALUES (\"".$_POST['comp']."\", ".$_POST['lvl'].");";
		$ajt = $pdo->prepare($rqt_ajout);
		$ajt->execute();
	echo "Compétence ajouter!";
	echo "<p><a href=\"../page/administration.php\">Revenir a l'administration</a> ou bien <a href=\"../page/competence.php\">visualiser</a></p>";

}
?>