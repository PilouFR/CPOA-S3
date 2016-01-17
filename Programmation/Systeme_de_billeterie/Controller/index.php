<?php
	require_once '../Model/DBConnectionManager.php';
	require_once '../Model/ListeMatch.php';
	require_once '../Model/ListeJoueur.php';
	require_once '../Model/Commande.php';


	try{
		$dbb = DBConnectionManager::getInstance();
		if (isset($_COOKIE['id']) && isset($_COOKIE['prenom']))
		{
		  session_start();
		  $_SESSION['id'] = $_COOKIE['id'];
		  $_SESSION['prenom'] = $_COOKIE['prenom'];
		  $_SESSION['type'] = $_COOKIE['type'];
	 	  $_SESSION['phase'] = $_COOKIE['phase'];
		}

		$listeMatch = new ListeMatch($_COOKIE['type'], $_COOKIE['phase']);
		$errormsg = '';

		$listeJoueur = new ListeJoueur();
		//$commande = Commande::getInstance(null,null,null,null,null,null);


		if (isset($_GET['action'])){
			if($_GET['action']=='reservation'){
				require_once '../View/choixtype.php';
			}
			else if($_GET['action']=='type'){
				if($_GET['value']=='simple'){
					//$commande->setTypeMatch('simple');
					setcookie('type', 'simple', time() + 365*24*3600, null, null, false, true);
					require_once '../View/choixphase.php';
				}
				elseif ($_GET['value']=='double') {
					//$commande->setTypeMatch('double');
					setcookie('type', 'double', time() + 365*24*3600, null, null, false, true);
					require_once '../View/choixphase.php';
				}
				else{
					$error_msg = "Erreur";
					setcookie('type', '', time() + 365*24*3600, null, null, false, true);
					require_once '../View/choixtype.php';
				}
			}else if($_GET['action']=='phase'){
				if($_GET['value']=='qualif'){
					//$commande->setPhase('qualif');
					setcookie('phase', 'qualif', time() + 365*24*3600, null, null, false, true);
					require_once '../View/choixmatch.php';
				}
				elseif ($_GET['value']=='huitieme') {
					//$commande->setPhase('huitieme');
					setcookie('phase', 'huitieme', time() + 365*24*3600, null, null, false, true);
					require_once '../View/choixmatch.php';
				}
				elseif ($_GET['value']=='quart') {
					//$commande->setPhase('quart');
					setcookie('phase', 'quart', time() + 365*24*3600, null, null, false, true);
					require_once '../View/choixmatch.php';
				}
				elseif ($_GET['value']=='demi') {
					//$commande->setPhase('demi');
					setcookie('phase', 'demi finale', time() + 365*24*3600, null, null, false, true);
					require_once '../View/choixmatch.php';
				}
				elseif ($_GET['value']=='finale') {
					//$commande->setPhase('finale');
					setcookie('phase', 'finale', time() + 365*24*3600, null, null, false, true);
					require_once '../View/choixmatch.php';
				}
				else{
					$error_msg = "Erreur";
					setcookie('phase', '', time() + 365*24*3600, null, null, false, true);
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
		   		if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['mailConfirm']) && isset($_POST['pass'])
		   		&& isset($_POST['passConfirm']) && $_POST['prenom']!=NULL && $_POST['nom']!=NULL && $_POST['mail']!=NULL && $_POST['mailConfirm']!=NULL && $_POST['pass']!=NULL
		   		&& $_POST['passConfirm']!=NULL && $_POST['mail'] == $_POST['mailConfirm'] && $_POST['pass'] == $_POST['passConfirm']) {
					if(filter_var(($_POST['mail']), FILTER_VALIDATE_EMAIL)){ // Teste si le format de l'addresse est correct
						if(empty($dbb->adresseExist($_POST['mail']))){ // Si l'adress existe déjà
					   		$pass_hache = sha1($_POST['pass']);
					   		$nom = $_POST['nom'];
					   		$prenom = $_POST['prenom'];
					   		$email = $_POST['mail'];
							$dbb->createUser($nom,$prenom,$email,$pass_hache);
							$errormsg = "<div id='good_container'>Inscription réussie ! Vous pouvez vous dès à présent vous connecter ;)</div>";
						}else{
		  			   		$errormsg = "<div id='error_container'>Erreur : L'adresse e-mail entrée est déjà associé à un compte</div>";
		  			   	}
		  			}
		  			else{
						$errormsg = "<div id='error_container'>Erreur : L'adresse e-mail entrée n'est pas valide</div>";
					}
				}
			   	else{
			   		$errormsg = "<div id='error_container'>Erreur : Veuillez entrez des informations correctes</div>";
			   	}
			   	require_once '../View/register.php';
		   }else if($_GET['action']=='authentification'){
			   if (isset($_POST['mail']) && isset($_POST['pass']) && $_POST['mail']!=NULL && $_POST['pass']!=NULL) {
				   $pass_hache = sha1($_POST['pass']);
				   $resultat = $dbb->accountExist(($_POST['mail']),$pass_hache);
				   if($resultat){
					   session_start();
				       $_SESSION['id'] = $resultat;
				       $_SESSION['prenom'] = $dbb->getPrenomSession($resultat);
					   setcookie('id', $resultat, time() + 365*24*3600, null, null, false, true);
				       setcookie('prenom', $dbb->getPrenomSession($resultat), time() + 365*24*3600, null, null, false, true);

					   $errormsg = "<div id='good_container'>Connexion réussie ! Vous êtes bien connecté :)</div>";
				   }else{
					   $errormsg = "<div id='error_container'>Erreur : Adresse e-mail ou mot de passe incorrect</div>";
				   }
			   }
			   else{
				   $errormsg = "<div id='error_container'>Erreur : Veuillez renseignez tous les champs</div>";
			   }
			   require_once '../View/login.php';
		   }else if($_GET['action']=='logout'){
			   $_SESSION = array();
		   	   session_destroy();

			   setcookie('id', '');
		   	   setcookie('prenom', '');

			   $_POST[$monUrl];
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
