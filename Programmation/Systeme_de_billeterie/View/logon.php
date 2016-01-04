<?php
	$title = 'Grand Prix de Tennis de Lyon';
	ob_start();
?>

<a href="#" class="img-shadow"><img src="../Web/Files/images/bordereau.jpg" alt="bordereau" id="bordereau"/></a>

<div id="authentification">
    <form method="post" action="">
        <p>
            <input type="text" name="pseudo" placeholder="Identifiant ou adresse e-mail"/>
        </p>
        <p>
            <input type="password" name="pass" id="pass" placeholder="Mot de passe"/>
        </p>
        <p>
            <input type="submit" value="Se connecter"/>
        </p>
    </form>
</div>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
