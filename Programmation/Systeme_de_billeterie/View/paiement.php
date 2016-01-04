<?php
	$title = 'GPTL - Réservation - Étape 6 : Paiement';
	ob_start();
?>

<img src="../Web/Files/images/wimbledon_court.jpg" alt="bordereau" id="bordereau"/>
<div id="container_content">
	<h2 id="etape">Etape 6 : Paiement</h2>

	<a href="index.php?action=<?php echo 'paiement'; ?>" id="suivant">Confirmer</a>
</div>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
