<?php
	$title = 'GPTL - Réservation - Merci';
	ob_start();
?>

<img src="../Web/Files/images/wimbledon_court.jpg" alt="bordereau" id="bordereau"/>
<div id="container_content">
	<!--<h2 id="etape">Merci</h2>-->
</div>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
