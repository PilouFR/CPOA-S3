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
		<nav>
			<ul>
				<li><h1><a href="../Controller">Grand Prix de Tennis de Lyon</a></h1></li>
				<div id="right_nav">
					<?php
						$monUrl = substr($_SERVER['REQUEST_URI'],20);
						if (!isset($_SESSION['id']) AND !isset($_SESSION['prenom']))
						{
							echo("<li><a href='index.php?action=register' id='register'>S'inscrire</a></li>");
						    echo("<li><a href='index.php?action=login'>Se connecter</a></li>");
						}else{
							echo("<li id='connection_msg'>".$_SESSION['prenom']."</li>");
							echo("<li><a href='index.php?action=logout' id='register'>Se déconnecter</a></li>");
						}
					?>
				</div>
			</ul>
		</nav>
		<?php
			echo $content;
		?>
		<footer>All contents of this site, unless otherwise noted, are ©2015-2016 <strong>Alan C. Pierre-Louis D.and Omar L.</strong> All Rights Reserved.</footer>
	</body>
</html>
