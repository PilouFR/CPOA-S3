<?php
	$title = 'GPTL - Réservation - Étape 1 : Choix du type de match';
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
	<h2 id="etape">Etape 1 : Choisissez le type de match</h2>
	<div id="container_button">
		<a href="index.php?action=<?php echo 'type'; ?>"><div class="button">Simple</div></a>
		<a href="index.php?action=<?php echo 'type'; ?>"><div class="button">Double</div></a>
	</div>
</div>
<footer>All contents of this site, unless otherwise noted, are ©2015 <strong>Alan C. Pierre-Louis D.and Omar L.</strong> All Rights Reserved.</footer>
<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
