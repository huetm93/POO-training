<?php
	
	require 'assets/pages/voiture.php';


	$voitureA = new Voiture(
		'audi',
		'Audi',
		'SportBack',
		'Jaune',
		1.6,
		'2016',
		'120000', 
		'BEbrg-979'
	);



	$voitureB = new Voiture(
		'land-rover',
		'Land Rover',
		'SUV',
		'bleu',
		3.6,
		'2014',
		'50000',
		'FR52-agf-12'
	);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parc de voiture</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<?php echo $voitureA->display(); ?>
	<?php echo $voitureB->display(); ?>

</body>
</html>