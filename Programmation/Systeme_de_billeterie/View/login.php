<?php
	$title = 'Grand Prix de Tennis de Lyon';
	ob_start();
?>

<a href="#" class="img-shadow"><img src="../Web/Files/images/bordereau5.jpg" alt="bordereau" id="bordereau"/></a>

<div id="container_form">

	<?php
		$msg = '';

		if (isset($_POST['loginMenu']) && !empty($_POST['pseudo'])&& !empty($_POST['pass'])) {
			if ($_POST['pseudo'] == 'abc' && $_POST['pass'] == '1234') {
				$_SESSION['valid'] = true;
				$_SESSION['timeout'] = time();
				$_SESSION['username'] = 'abc';

				echo 'You have entered valid use name and password';
		}else {
			$msg = 'Identifiants ou mot de passe invalide';
			}
		}

	?>

</div>

<div id="authentification">
    <form method="post" autocomplete="off" action="index.php?action=<?php echo 'authentification'; ?>">
        <p>
            <input type="text" name="mail" placeholder="Adresse e-mail" value=""/>
        </p>
        <p>
            <input type="password" name="pass" id="pass" placeholder="Mot de passe" value=""/>
        </p>
        <p>
            <input type="submit" value="Se connecter"  class="button" id="logButton"/>
        </p>
    </form>
</div>
<div id="pasinscrit"><a href="index.php?action=<?php echo 'register'; ?>">Pas de compte ? Inscrivez vous !</a></div>
<div id="msg_container">
	<?php echo($errormsg); ?>
</div>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
