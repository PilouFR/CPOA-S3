<?php
	$title = 'Grand Prix de Tennis de Lyon';
	ob_start();
?>

<a href="#" class="img-shadow"><img src="../Web/Files/images/bordereau.jpg" alt="bordereau" id="bordereau"/></a>

<div id="container_form">

	<?php
		$msg = '';

		if (isset($_POST['loginMenu']) && !empty($_POST['pseudo'])&& !empty($_POST['pass'])) {
			echo 'hey';
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
    <form method="post">
		<p><?php echo $msg; ?></p>
        <p>
            <input type="text" name="pseudo" placeholder="Identifiant ou adresse e-mail"/>
        </p>
        <p>
            <input type="password" name="pass" id="pass" placeholder="Mot de passe"/>
        </p>
        <p>
            <input type="submit" value="Se connecter"  class="button" id="logButton"/>
        </p>
    </form>
</div>

<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
