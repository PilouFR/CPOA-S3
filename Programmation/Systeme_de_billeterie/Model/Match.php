<?php
	require_once 'ListeMatch.php';

	class Match {

        private $_noMatch;
		private $_noCourt;
		private $_noCreneau;
        private $_phase;
        private $_resultat;
		private $_noJoueur1;
		private $_noJoueur2;
		private $_noJoueur3;
		private $_noJoueur4;
        private $_nbPlacesRestantes;
        private $_typeMatch;
		private $_date;

		//_______CONSTRUCTEUR_CLASSE_Match______//

		function __construct($noMatch,$noCourt,$noCreneau,$phase,$resultat,$noJoueur1,$noJoueur2,$noJoueur3,$noJoueur4,$nbPlacesRestantes,$typeMatch,$date)
		{
			try {
				$this->_noMatch = $noMatch;
				$this->_noCourt = $noCourt;
				$this->_noCreneau = $noCreneau;
				$this->_phase = $phase;
				$this->_resultat = $resultat;
				$this->_noJoueur1 = $noJoueur1;
				$this->_noJoueur2 = $noJoueur2;
				$this->_noJoueur3 = $noJoueur3;
				$this->_noJoueur4 = $noJoueur4;
                $this->_nbPlacesRestantes = $nbPlacesRestantes;
                $this->_typeMatch = $typeMatch;
                $this->_date = $date;
			}
			catch (Exception $e) {
			   die('Erreur : '.$e->getMessage());
			}
		}

		//________________GETTER__________________//

		public function __get($noMatch)
		{
			return $this->data[$noMatch];
		}

		public function getNoMatch() {
			return $this->_noMatch;
		}

		public function getNoCourt() {
			return $this->_noCourt;
		}

		public function getNoCreneau() {
			return $this->_noCreneau;
		}

		public function getPhase() {
			return $this->_phase;
		}

		public function getResultat() {
			return $this->_resultat;
		}

		public function getNoJoueur1() {
			return $this->_noJoueur1;
		}

		public function getNoJoueur2() {
			return $this->_noJoueur2;
		}

		public function getNoJoueur3() {
			return $this->_noJoueur3;
		}

		public function getNoJoueur4() {
			return $this->_noJoueur4;
		}

		public function getNbPlacesRestantes() {
			return $this->_nbPlacesRestantes;
		}

		public function getTypeMatch() {
			return $this->_typeMatch;
		}

		public function getDate() {
			return $this->_date;
		}

		//________________SETTER__________________//

		public function __set($name, $value)
		{
			$this->data[$name] = $value;
		}
	}

?>
