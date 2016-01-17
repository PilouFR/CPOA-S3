<?php
	$title = 'Grand Prix de Tennis de Lyon';
	ob_start();
?>

<a href="#" class="img-shadow"><img src="../Web/Files/images/bordereau3.jpg" alt="bordereau" id="bordereau"/></a>
<div id="msg_container">
	<?php echo($errormsg); ?>
</div>
<div id="authentification">
    <form method="post" autocomplete="off" action="index.php?action=<?php echo 'inscription'; ?>">
		<p>
            <input type="text" name="prenom" placeholder="Prénom *"/>
        </p>
		<p>
            <input type="text" name="nom" placeholder="Nom *"/>
        </p>
		<p>
            <input type="text" name="mail" placeholder="Adresse e-mail *"/>
        </p>
		<p>
            <input type="text" name="mailConfirm" placeholder="Confirmer l'adresse e-mail *"/>
        </p>
        <p>
            <input type="password" name="pass" id="pass" placeholder="Mot de passe *"/>
        </p>
        <p>
            <input type="password" name="passConfirm" id="passConfirm" placeholder="Confirmer le mot de passe *"/>
        </p>
        <p>
            <input type="submit" value="Créer un compte" class="button" id="logButton"/>
        </p>
    </form>
	<p class="textalign_center">* champs obligatoires</p>
</div>


<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
