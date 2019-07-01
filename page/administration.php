<!DOCTYPE html>
<html>
<head>
	<title>Ajout compétence</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../CSS/contact.css">
</head>
<body>
<?php 
require_once('../php/db.php');
$rqt_comp = "SELECT competence FROM competences";
$rqt_comp2 = "SELECT competence FROM competences";

$stmt = $pdo->prepare($rqt_comp);
$stmt->execute();
$stmt2 = $pdo->prepare($rqt_comp2);
$stmt2->execute();

 ?>
<div class="container">
<h1>Administration</h1>

<!--modification-->

 <FORM action="../php/modifcomp.php" method="POST" >
 	<label for="sujet">Modification</label><br>
		<SELECT name="compmodif" size="1">
			<?php while ($c = $stmt2->fetch()){
			echo "<option>".$c['competence']."</option>";
			} ?>
		</SELECT>
	<input class="cellule" type="number" name="newlvl" placeholder="nouveau niveau"><br>
	<input type="submit" value="modifier">
</form>


<!--suppresion -->

<label for="sujet">Suppression</label><br>
<FORM action="../php/suppcomp.php" method="POST" >
	<SELECT name="compt" size="1">
		<?php while ($a = $stmt->fetch()){
			echo "<option>".$a['competence']."</option>";
		} ?>
	</SELECT><br>
<input type="submit" value="supprimer">
</FORM>

<!--ajout-->

<form action="../php/ajoutcomp.php" method="POST">
	<label>Ajouter une compétence:</label><br>
		<input class="cellule" type="text" name="comp" placeholder="compétence">
		<input class="cellule" type="number" name="lvl" placeholder="Niveau">
		<input type="submit" name="ajout" value="ajouter">
</form>

<p>Voir les <a href="competence.php">compétences</a> </p>
<p>Retourner au <a href="../index.html">menu.</a> </p>

</div>
</body>
</html>