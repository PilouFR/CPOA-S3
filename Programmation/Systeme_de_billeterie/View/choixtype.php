<?php
	$title = 'GPTL - Réservation - Étape 1 : Choix du type de match';
	ob_start();
?>

<img src="../Web/Files/images/wimbledon_court.jpg" alt="bordereau" id="bordereau"/>

<div id="container_content">
	<h2 id="etape">Etape 1 : Choisissez le type de match</h2>
	<div id="container_button">
		<a href="index.php?action=<?php echo 'type'; ?>"><div class="button">Simple</div></a>
		<a href="index.php?action=<?php echo 'type'; ?>"><div class="button">Double</div></a>
	</div>
</div>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
