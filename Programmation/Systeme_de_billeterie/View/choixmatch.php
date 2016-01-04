<?php
	$title = 'GPTL - Réservation - Étape 3 : Choix du match';
	ob_start();
?>

<img src="../Web/Files/images/wimbledon_court.jpg" alt="bordereau" id="bordereau"/>
<div id="container_content">
	<h2 id="etape">Etape 3 : Sélectionnez votre match</h2>
	<div id="container_liste_match">
		<div class="container_info_match">
			<div class="hour">08h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 1 (FR)</div>
				<div class="joueur2">Joueur 2 (EN)</div>
			</div>
			<div class="court">Court Philippe Chatrier</div>
		</div>
		<div class="container_info_match">
			<div class="hour">10h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 3 (ESP)</div>
				<div class="joueur2">Joueur 4 (POR)</div>
			</div>
			<div class="court">Court d'entraînement n° 1</div>
		</div>
		<div class="container_info_match">
			<div class="hour">08h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 1 (FR)</div>
				<div class="joueur2">Joueur 2 (EN)</div>
			</div>
			<div class="court">Court Philippe Chatrier</div>
		</div>
		<div class="container_info_match">
			<div class="hour">10h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 3 (ESP)</div>
				<div class="joueur2">Joueur 4 (POR)</div>
			</div>
			<div class="court">Court d'entraînement n° 1</div>
		</div>
		<div class="container_info_match">
			<div class="hour">08h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 1 (FR)</div>
				<div class="joueur2">Joueur 2 (EN)</div>
			</div>
			<div class="court">Court Philippe Chatrier</div>
		</div>
		<div class="container_info_match">
			<div class="hour">10h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 3 (ESP)</div>
				<div class="joueur2">Joueur 4 (POR)</div>
			</div>
			<div class="court">Court d'entraînement n° 1</div>
		</div>
		<div class="container_info_match">
			<div class="hour">08h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 1 (FR)</div>
				<div class="joueur2">Joueur 2 (EN)</div>
			</div>
			<div class="court">Court Philippe Chatrier</div>
		</div>
		<div class="container_info_match">
			<div class="hour">10h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 3 (ESP)</div>
				<div class="joueur2">Joueur 4 (POR)</div>
			</div>
			<div class="court">Court d'entraînement n° 1</div>
		</div>
		<div class="container_info_match">
			<div class="hour">08h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 1 (FR)</div>
				<div class="joueur2">Joueur 2 (EN)</div>
			</div>
			<div class="court">Court Philippe Chatrier</div>
		</div>
		<div class="container_info_match">
			<div class="hour">10h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 3 (ESP)</div>
				<div class="joueur2">Joueur 4 (POR)</div>
			</div>
			<div class="court">Court d'entraînement n° 1</div>
		</div>
		<div class="container_info_match">
			<div class="hour">08h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 1 (FR)</div>
				<div class="joueur2">Joueur 2 (EN)</div>
			</div>
			<div class="court">Court Philippe Chatrier</div>
		</div>
		<div class="container_info_match">
			<div class="hour">10h</div>
			<div class="joueur">
				<div class="joueur1">Joueur 3 (ESP)</div>
				<div class="joueur2">Joueur 4 (POR)</div>
			</div>
			<div class="court">Court d'entraînement n° 1</div>
		</div>
	</div>
</div>
<a href="index.php?action=<?php echo 'match'; ?>" id="suivant">Suivant ></a>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
