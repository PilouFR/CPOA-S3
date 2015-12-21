<?php
	$title = 'Grand Prix de Tennis de Lyon';
	ob_start();
?>

<nav>
	<ul>
		<li><h1><a href="../View/accueil.php">Grand Prix de Tennis de Lyon</a></h1></li>
		<div id="right_nav">
			<li><a href="#">S'inscrire</a></li>
			<li><a href="#" id="login">Se connecter</a></li>
		</div>
	</ul>
</nav>
<a href="#" class="img-shadow"><img src="../Web/Files/images/bordereau.jpg" alt="bordereau" id="bordereau"/></a>

<div>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
		ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull
		amco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend
		erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occa
		ecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
		ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull
		amco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend
		erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occa
		ecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
		ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull
		amco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend
		erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occa
		ecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
</div>

<div id="container_content">
	<div id="container_button">
		<a href="index.php?action=<?php echo 'reservation'; ?>"><div class="button">Réservez vos places dès maintenant !</div></a>
	</div>
</div>

<footer>All contents of this site, unless otherwise noted, are ©2015 <strong>Alan C. Pierre-Louis D.and Omar L.</strong> All Rights Reserved.</footer>
<?php
	$content = ob_get_clean();	// Vide le tampon dans la variable content
	require_once 'layout.php';	// Remplace les variables title et content dans le 'layout.php'
?>
