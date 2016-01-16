<?php
	$title = 'GPTL - Réservation - Étape 3 : Choix du match';
	ob_start();
?>

<img src="../Web/Files/images/wimbledon_court.jpg" alt="bordereau" id="bordereau"/>
<div id="container_content">
	<h2 id="etape">Etape 3 : Sélectionnez votre match</h2>

	<div id="container_liste_match">
		<?php
			$dbb->afficheNbMatchTrouve();

			foreach ($listeMatch->_listeMatch as $match){
		?>
		<div class="container_info_match">
			<div class="hour"><?php echo(substr($match->getDate(),11,-6)) ?>h</div>
			<div class="joueur">
				<div class="joueur1">
					<?php
						require_once '../Model/DBConnectionManager.php';
					 	echo($dbb->getNomJoueur1($match->getNoMatch()));
					?>
				</div>
				<div class="joueur2">
					<?php
						require_once '../Model/DBConnectionManager.php';
					 	echo($dbb->getNomJoueur2($match->getNoMatch()));
					?>
				</div>
			</div>
			<div class="court">
				<?php
					require_once '../Model/DBConnectionManager.php';
					echo($dbb->getNomCourt($match->getNoMatch()));
				?>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<a href="index.php?action=<?php echo 'match'; ?>" id="suivant">Suivant ></a>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
