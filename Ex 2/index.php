<?php


require "html.php";



$html = new Html();




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	echo $html->charset('UTF-8'); // META CHARSET
	echo $html->javascript('script.js'); // page Javascript
	echo $html->style('style.css'); // Page de style
	?>

	<title>Html</title>
	<?php ?>
</head>
<body>
	<?php
		echo $html->image('https://image.shutterstock.com/image-vector/neon-grid-landscape-purple-sun-260nw-1085843642.jpg','C\'est une image'); // insertion img
		echo $html->lien('https://www.becode.org/','siteWeb','sonNom'); // Lien vers un site
	?>
</body>
</html>




