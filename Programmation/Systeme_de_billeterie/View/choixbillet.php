<?php
	$title = 'GPTL - Réservation - Étape 5 : Choix de votre billet';
	ob_start();
?>

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
	<a href="index.php?action=<?php echo 'billet'; ?>" id="suivant">Confirmer</a>
</div>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
