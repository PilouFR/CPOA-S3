<?php

	if (isset($_GET['action'])){
	   if($_GET['action']=='reservation'){
		   require_once '../View/choixtype.php';
	   }else if($_GET['action']=='type'){
		   require_once '../View/choixphase.php';
	   }else if($_GET['action']=='phase'){
		   require_once '../View/choixplace.php';
	   }
	   else{
		   throw new Exception("Action indisponible.");
	   }
	}
	else{
	   require_once '../View/accueil.php';	   // Sinon affiche la vue par défaut 'accueil.php'
	}

 ?>
