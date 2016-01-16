<?php
	require_once 'ListeJoueur.php';

	class Joueur {

        private $_noJoueur;
        private $_nomJoueur;
        private $_prenomJoueur;
        private $_dob;
		private $_nationalite;
		private $_typeEntree;

		//_______CONSTRUCTEUR_CLASSE_Joueur______//

		function __construct($noJoueur,$nomJoueur,$prenomJoueur,$dob,$nationalite,$typeEntree)
		{
			try {
				$this->setNoJoueur($noJoueur);
				$this->setNomJoueur($nomJoueur);
				$this->setPrenomJoueur($prenomJoueur);
				$this->setDob($dob);
				$this->setNationalite($nationalite);
				$this->setTypeEntree($typeEntree);
			}
			catch (Exception $e) {
			   die('Erreur : '.$e->getMessage());
			}
		}

		//________________GETTER__________________//

		public function __get($noJoueur)
		{
			return $this->data[$noJoueur];
		}

		public function getNoJoueur() {
			return $this->_noJoueur;
		}

		public function getNomJoueur() {
			return $this->_nomJoueur;
		}

		public function getPrenomJoueur() {
			return $this->_prenomJoueur;
		}

		public function getDob() {
			return $this->_dob;
		}

		public function getNationalite() {
			return $this->_nationalite;
		}

		public function getTypeEntree() {
			return $this->_typeEntree;
		}


		//________________SETTER__________________//

		private function setNoJoueur($noJoueur){
			$this->_noJoueur = $noJoueur;
		}

		public function setNomJoueur($nomJoueur){
			$this->_nomJoueur = $nomJoueur;
		}

		public function setPrenomJoueur($prenomJoueur){
			$this->_prenomJoueur = $prenomJoueur;
		}

		public function setDob($dob){
			$this->_dob = $dob;
		}

		public function setNationalite($nationalite){
			$this->_nationalite = $nationalite;
		}
		public function setTypeEntree($typeEntree){
			$this->_typeEntree = $typeEntree;
		}

	}

?>
