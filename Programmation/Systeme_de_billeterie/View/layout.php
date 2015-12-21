<!-- Layout qui permet d'avoir le calque d'une vue standard dans lequel on a juste à remplir les variables title et content -->
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script src="../Web/JS/effects.js"></script>
		<link rel="stylesheet" href="../Web/CSS/style.css"/>
    	<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
		<?php
			header('Content-type: text/html; charset=UTF-8'); // Permet de spécifier l'encodage afin de gérer l'affichage des accents et caractères spéciaux de la page
		?>
	</head>
	<body>
		<?php
			echo $content;
		?>
	</body>
</html>
