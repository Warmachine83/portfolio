<!DOCTYPE html>
<html>
<head>
	<title>Compétence</title>
	<meta charset="utf-8">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/competence.css">
</head>
<body>
	<header>
		<a href="../index.html"><div>Retour menu</div></a>
		<img src="../img/photocanva.png" title="photo de profile" alt="photo de profil">
		<p>
			Romain<br>
			mesguich<br>
			B1 Ingésup<br>
		</p>
		<h1><p>Compétences</p></h1>
	</header>




<?php 
require_once('../php/db.php');

$rqt_comp = "SELECT competence FROM competences";
$rqt_lvl = "SELECT lvl_cpt FROM competences";

$stmt = $pdo->prepare($rqt_comp);
$stmt->execute();

$lvl = $pdo->prepare($rqt_lvl);
$lvl->execute();

?>


<!-- Template JS tableau de compétence -->

<div style="width: 75%; margin-left: auto; margin-right: auto;" class="essai">
<canvas id="myChart"></canvas>

<script>
	var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',
    

    // The data for our dataset
    data: {
        labels:[<?php while ($c = $stmt->fetch()){echo "'".$c['competence']."', ";} ?>],
        datasets: [{
        	label: "niveau", 
            backgroundColor: 'red',
            data: [<?php while ($b = $lvl->fetch()){echo "'".$b['lvl_cpt']."', ";} ?>]
        }]
    },

    // Configuration options go here
    options: {
    	
        scales: {
            yAxes: [{
                ticks: {
                    fontColor: "white",
                    fontSize: 18,
                    stepSize: 1,
                    beginAtZero: true
                }
            }],
            xAxes: [{
                ticks: {
                    fontColor: "white",
                    fontSize: 14,
                    stepSize: 1,
                    beginAtZero: true
                }
            }]
           } 
    }

});
</script>
</div>

</body>
</html>
