<?php
	require_once '../Model/DBConnectionManager.php';
	require_once '../Model/ListeMatch.php';

	try{
		$dbb = DBConnectionManager::getInstance();
		$listeMatch = new ListeMatch();

		if (isset($_GET['action'])){
		   if($_GET['action']=='reservation'){
			   require_once '../View/choixtype.php';
		   }else if($_GET['action']=='type'){
			   require_once '../View/choixphase.php';
		   }else if($_GET['action']=='phase'){
			   require_once '../View/choixmatch.php';
		   }else if($_GET['action']=='match'){
			   require_once '../View/choixplace.php';
		   }else if($_GET['action']=='place'){
			   require_once '../View/choixbillet.php';
		   }else if($_GET['action']=='billet'){
			   require_once '../View/paiement.php';
		   }else if($_GET['action']=='paiement'){
			   require_once '../View/merci.php';
		   }else if($_GET['action']=='login'){
			   require_once '../View/login.php';
		   }else if($_GET['action']=='register'){
			   require_once '../View/register.php';
		   }else{
			   throw new Exception("Action indisponible.");
		   }
		}
		else{
		   require_once '../View/accueil.php';	   // Sinon affiche la vue par défaut 'accueil.php'
		}
	}catch (Exception $e) {
	   die('Erreur : '.$e->getMessage());
	}

 ?>
