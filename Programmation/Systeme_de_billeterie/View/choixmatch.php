<?php
	$title = 'GPTL - Réservation - Étape 3 : Choix du match';
	ob_start();
?>

<img src="../Web/Files/images/wimbledon_court.jpg" alt="bordereau" id="bordereau"/>
<div id="container_content">
	<h2 id="etape">Etape 3 : Sélectionnez votre match</h2>

	<?php
		echo("<div id='infoMatch'><h2>");
		if($_COOKIE['phase']=='qualif'){
			echo("Lundi 4 janvier - Qualifications ".$_COOKIE['type']);
		}
		else if($_COOKIE['phase']=='huitieme'){
			echo("Mardi 5 janvier - 1/8 finale ".$_COOKIE['type']);
		}
		else if($_COOKIE['phase']=='quart'){
			echo("Mercredi 6 janvier - 1/4 finale ".$_COOKIE['type']);
		}
		else if($_COOKIE['phase']=='demi finale'){
			echo("Jeudi 7 janvier - 1/2 finale ".$_COOKIE['type']);
		}
		else{
			echo("Vendredi 8 janvier - Finale ".$_COOKIE['type']);
		}
		echo("</h2></div>");
	?>

	<div id="container_liste_match">
		<?php
			foreach ($listeMatch->_listeMatch as $match){
		?>
		<div class="container_info_match">
			<div class="hour"><?php echo(substr($match->getDate(),11,-3)) ?>h</div>
			<div class="joueur">
				<div class="joueur1">
					<?php
						require_once '../Model/DBConnectionManager.php';
					 	if($dbb->getNomJoueur1($match->getNoMatch()) == ''){
							echo("(à venir)");
						}else{
							echo($dbb->getNomJoueur1($match->getNoMatch()));
						}

					?>
				</div>
				<div class="joueur2">
					<?php
						require_once '../Model/DBConnectionManager.php';
						if($dbb->getNomJoueur2($match->getNoMatch()) == ''){
							echo("(à venir)");
						}else{
							echo($dbb->getNomJoueur2($match->getNoMatch()));
						}
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
<a href="index.php?action=<?php echo 'phase'; ?>" id="precedent">< Précédent</a>
<a href="index.php?action=<?php echo 'match'; ?>" id="suivant">Suivant ></a>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
