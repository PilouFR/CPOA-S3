<?php
	require_once '../Model/DBConnectionManager.php';
	require_once '../Model/ListeMatch.php';
	require_once '../Model/ListeJoueur.php';
	require_once '../Model/Commande.php';


	try{
		$dbb = DBConnectionManager::getInstance();
		$listeMatch = new ListeMatch();
		$errormsg = '';

		$listeJoueur = new ListeJoueur();
		$commande = Commande::getInstance(null,null,null,null,null,null);


		if (isset($_GET['action'])){
			if($_GET['action']=='reservation'){
				require_once '../View/choixtype.php';
			}
			else if($_GET['action']=='type'){
				if($_GET['value']=='simple'){
					$commande->setTypeMatch('simple');
					require_once '../View/choixphase.php';
				}
				elseif ($_GET['value']=='double') {
					$commande->setTypeMatch('double');
					require_once '../View/choixphase.php';
				}
				else{
					$error_msg = "Erreur";
					require_once '../View/choixtype.php';
				}
			}else if($_GET['action']=='phase'){
				if($_GET['value']=='qualif'){
					$commande->setPhase('qualif');
					require_once '../View/choixmatch.php';
				}
				elseif ($_GET['value']=='huitieme') {
					$commande->setPhase('huitieme');
					require_once '../View/choixmatch.php';
				}
				elseif ($_GET['value']=='quart') {
					$commande->setPhase('quart');
					require_once '../View/choixmatch.php';
				}
				elseif ($_GET['value']=='demi') {
					$commande->setPhase('demi');
					require_once '../View/choixmatch.php';
				}
				elseif ($_GET['value']=='finale') {
					$commande->setPhase('finale');
					require_once '../View/choixmatch.php';
				}
				else{
					$error_msg = "Erreur";
					require_once '../View/choixphase.php';
				}
			}
			else if($_GET['action']=='match'){
				require_once '../View/choixplace.php';
			}
			else if($_GET['action']=='place'){
				require_once '../View/choixbillet.php';
			}
			else if($_GET['action']=='billet'){
				require_once '../View/paiement.php';
			}
			else if($_GET['action']=='paiement'){
				require_once '../View/merci.php';
			}
			else if($_GET['action']=='login'){
				require_once '../View/login.php';
			}
			else if($_GET['action']=='register'){
				require_once '../View/register.php';
			}
			else if($_GET['action']=='inscription'){
		   		if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['mail']) AND isset($_GET['mailConfirm']) AND isset($_GET['pass'])
		   		AND isset($_GET['passConfirm']) AND $_GET['mail'] == $_GET['mailConfirm'] AND $_GET['pass'] == $_GET['passConfirm']) {
					if(adresseExist($_GET['mail'])){
				   		$pass_hache = sha1($_POST['pass']);
				   		$nom = $_GET['nom'];
				   		$prenom = $_GET['prenom'];
				   		$email = $_GET['mail'];

						$errormsg = "<div id='good_container'>Félicitation ! Vous êtes bien connecté :)</div>";
					}else{
	  			   		$errormsg = "<div id='error_container'>Erreur : L'adresse mail entré est déjà associé à un compte</div>";
	  			   	}
				}
			   	else{
			   		$errormsg = "<div id='error_container'>Erreur : Veuillez entrez des informations correctes</div>";
			   	}
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
