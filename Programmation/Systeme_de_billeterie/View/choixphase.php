<?php
	$title = 'GPTL - Réservation - Étape 2 : Choix de la phase de match';
	ob_start();
?>
<img src="../Web/Files/images/wimbledon_court.jpg" alt="bordereau" id="bordereau"/>
<div id="container_content">
	<h2 id="etape">Etape 2 : Choisissez une phase du tournoi</h2>

	<div id="container_button">
		<a href="<?php echo "index.php?action=phase&value=qualif" ?>"><div class="button">Qualifications</div></a>
		<a href="<?php echo "index.php?action=phase&value=huitieme" ?>"><div class="button">1/8 de finale</div></a>
		<a href="<?php echo "index.php?action=phase&value=quart" ?>"><div class="button">1/4 de finale</div></a>
		<a href="<?php echo "index.php?action=phase&value=demi" ?>"><div class="button">1/2 de finale</div></a>
		<a href="<?php echo "index.php?action=phase&value=finale" ?>"><div class="button">Finale</div></a>
	</div>
	<div id="gif_container"><img src="../Web/Files/images/ajax-loader.gif"/></div> 
</div>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
