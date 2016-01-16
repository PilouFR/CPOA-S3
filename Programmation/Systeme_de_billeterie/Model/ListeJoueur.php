<?php
	require_once 'Joueur.php';
	require_once 'DBConnectionManager.php';

	class ListeJoueur
	{

		private $_listeJoueur = array();

		public function __construct()
		{
			try {
				$i = 0;
				$db = DBConnectionManager::getInstance();
				$resultJoueur = $db->getJoueurs();

				foreach($resultJoueur as $data){
					$this->_listeJoueur[$i]=new Joueur($data['noJoueur'],$data['nomJoueur'],$data['prenomJoueur'],$data['dob'],$data['nationalite'],$data['typeEntree']);
					$i++;
				}

				$db->closeCursor();

			}catch (Exception $e) {
				die('Erreur : '.$e->getMessage());
			}
		}

		//________________GETTER_________________//

		public function __get($name) {
			return $this->$name;
		}

		public function getJoueur($id) {
			foreach (self::$_listeJoueur as $Joueur){
				if ($Joueur->getNoJoueur() == $id){
					return $this->Joueur;
				}
			}
		}
	}

?>
