<?php
	$title = 'GPTL - Réservation - Étape 3 : Choix du match';
	ob_start();
?>

<nav>
	<ul>
		<li><h1><a href="../View/accueil.php">Grand Prix de Tennis de Lyon</a></h1></li>
		<div id="right_nav">
			<li><a href="#">S'inscrire</a></li>
			<li><a href="#" id="login">Se connecter</a></li>
		</div>
	</ul>
</nav>
<img src="../Web/Files/images/wimbledon_court.jpg" alt="bordereau" id="bordereau"/>
<div id="container_content">
	<h2 id="etape">Etape 3 : Sélectionnez votre match</h2>
	<a href="#"><div class="container_info_match">
		<div class="hour">08h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 1 (FR)</div>
			<div class="joueur2">Joueur 2 (EN)</div>
		</div>
		<div class="court">Court Philippe Chatrier</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">10h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 3 (ESP)</div>
			<div class="joueur2">Joueur 4 (POR)</div>
		</div>
		<div class="court">Court d'entraînement n° 1</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">08h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 1 (FR)</div>
			<div class="joueur2">Joueur 2 (EN)</div>
		</div>
		<div class="court">Court Philippe Chatrier</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">10h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 3 (ESP)</div>
			<div class="joueur2">Joueur 4 (POR)</div>
		</div>
		<div class="court">Court d'entraînement n° 1</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">08h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 1 (FR)</div>
			<div class="joueur2">Joueur 2 (EN)</div>
		</div>
		<div class="court">Court Philippe Chatrier</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">10h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 3 (ESP)</div>
			<div class="joueur2">Joueur 4 (POR)</div>
		</div>
		<div class="court">Court d'entraînement n° 1</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">08h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 1 (FR)</div>
			<div class="joueur2">Joueur 2 (EN)</div>
		</div>
		<div class="court">Court Philippe Chatrier</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">10h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 3 (ESP)</div>
			<div class="joueur2">Joueur 4 (POR)</div>
		</div>
		<div class="court">Court d'entraînement n° 1</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">08h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 1 (FR)</div>
			<div class="joueur2">Joueur 2 (EN)</div>
		</div>
		<div class="court">Court Philippe Chatrier</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">10h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 3 (ESP)</div>
			<div class="joueur2">Joueur 4 (POR)</div>
		</div>
		<div class="court">Court d'entraînement n° 1</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">08h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 1 (FR)</div>
			<div class="joueur2">Joueur 2 (EN)</div>
		</div>
		<div class="court">Court Philippe Chatrier</div>
	</div></a>
	<a href="#"><div class="container_info_match">
		<div class="hour">10h</div>
		<div class="joueur">
			<div class="joueur1">Joueur 3 (ESP)</div>
			<div class="joueur2">Joueur 4 (POR)</div>
		</div>
		<div class="court">Court d'entraînement n° 1</div>
	</div></a>
</div>

<footer>All contents of this site, unless otherwise noted, are ©2015 <strong>Alan C. Pierre-Louis D.and Omar L.</strong> All Rights Reserved.</footer>
<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
