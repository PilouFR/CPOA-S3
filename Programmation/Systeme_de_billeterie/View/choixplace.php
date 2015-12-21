<?php
	$title = 'GPTL - Réservation - Étape 4 : Choix de votre place';
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
	<h2 id="etape">Etape 4 : Choisissez votre place</h2>
	<div id="colonne_gauche">
		<img src="../Web/Files/images/cours_central.svg" alt="img_cours" id="cours_tennis"/>
	</div>
	<div id="container_radio_form">
		<form>
			<input type="radio" name="place"value="a"/>A (15 places disponibles) 15€<br/>
			<input type="radio" name="place"value="b"/>B (12 places disponibles) 12€<br/>
			<input type="radio" name="place"value="c"/>C (26 places disponibles) 15€<br/>
			<input type="radio" name="place"value="d"/>D (3 places disponibles) 15€<br/>
			<input type="radio" name="place"value="e" disabled="disabled"/><span>E (0 places disponibles) 10€</span><br/>
			<input type="radio" name="place"value="f"/>F (13 places disponibles) 13€<br/>
			<input type="radio" name="place"value="g"/>G (4 places disponibles) 15€<br/>
			<input type="radio" name="place"value="h"/>H (21 places disponibles) 15€<br/>
			<input type="radio" name="place"value="i" disabled="disabled"/><span>I (0 places disponibles) 10€</span><br/>
			<input type="radio" name="place"value="j"/>J (8 places disponibles) 15€<br/>
		</form>
	</div>
</div>
<footer>All contents of this site, unless otherwise noted, are ©2015 <strong>Alan C. Pierre-Louis D.and Omar L.</strong> All Rights Reserved.</footer>
<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
