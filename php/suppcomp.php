<!DOCTYPE html>
<html>
<head>
	<title>Suppresion compétence</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once('../php/db.php');

$rqt_supp = "DELETE FROM competences WHERE competence=\"".$_POST['compt']."\"";


$supp = $pdo->prepare($rqt_supp);
$supp->execute();

echo "La compétence ".$_POST['compt']." a bien été supprimer.";
 ?>

 <a href="../page/administration.php">Revenir a l'administration</a>
</body>
</html>