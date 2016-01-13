<?php
	$title = 'Grand Prix de Tennis de Lyon';
	ob_start();
?>

<a href="#" class="img-shadow"><img src="../Web/Files/images/bordereau.jpg" alt="bordereau" id="bordereau"/></a>

<div id="authentification">
    <form method="post" action="">
		<p>
            <input type="text" name="pseudo" placeholder="Nom d'utilisateur *"/>
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
            <input type="password" name="pass" id="passConfirm" placeholder="Confirmer le mot de passe *"/>
        </p>
        <p>
            <input type="submit" value="Créer un compte"/>
        </p>
    </form>
	<p class="textalign_center">* champs obligatoires</p>
</div>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
