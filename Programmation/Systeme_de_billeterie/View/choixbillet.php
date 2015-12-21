<?php
	$title = 'GPTL - Réservation - Étape 5 : Choix de votre billet';
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
	<h2 id="etape">Etape 5 : Choisissez votre billet</h2>
	<div id="container_information">
		<p>Joueur 4 / Joueur 5</p>
		<p>Dimanche 31 - 8h</p>
		<p>Cours Phillipe Chatrier - Tribune A</p>
	</div>
	<div id="container_billet_form">
		<form>
			<input type="radio" name="billet"value="billet_normal"/><span>Billet normal 15€</span><br/>
			<input type="radio" name="billet"value="billet_promo"/><span>Billet promotionnel 10€ - Entrez votre code promotionnel :</span><input type="password" name="password"/><br/>
			<input type="radio" name="billet"value="billet_licencie"/><span>Billet licencié Tennis 12€ - Entrez votre numéro de licencié :</span><input type="password" name="password"/><br/>
			<input type="radio" name="billet"value="billet_jdls"/><span>Billet "Journée de la solidarité" 12€ - Entrez votre code JdlS :</span><input type="password" name="password"/><br/>
		</form>
	</div>
</div>
<footer>All contents of this site, unless otherwise noted, are ©2015 <strong>Alan C. Pierre-Louis D.and Omar L.</strong> All Rights Reserved.</footer>
<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
