<?php
	require_once 'Match.php';
	require_once 'DBConnectionManager.php';

	class ListeMatch
	{

		private $_listeMatch = array();

		public function __construct()
		{
			try {
				$i = 0;
				$db = DBConnectionManager::getInstance();
				$resultMatch = $db->getMatchs();
				foreach($resultMatch as $data){
					$this->_listeMatch[$i]=new Match($data['noMatch'],$data['noCourt'],$data['noCreneau'],$data['phase'],$data['resultat'],$data['noJoueur1'],$data['noJoueur2'],
													 $data['noJoueur3'],$data['noJoueur4'],$data['type'],$data['nbPlacesRestantes'],$data['date']);
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

		public function getMatch($id) {
			foreach (self::$_listeMatch as $Match){
				if ($Match->getNoMatch() == $id){
					return $this->Match;
				}
			}
		}
	}

?>
