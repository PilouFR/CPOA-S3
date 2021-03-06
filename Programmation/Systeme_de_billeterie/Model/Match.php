<?php
	require_once 'ListeMatch.php';

	class Match {

        private $_noMatch;
		private $_noCourt;
		private $_noCreneau;
        private $_phase;
        private $_resultatJ1;
        private $_resultatJ2;
		private $_noJoueur1;
		private $_noJoueur2;
		private $_noJoueur3;
		private $_noJoueur4;
        private $_nbPlacesRestantes;
        private $_typeMatch;
		private $_date;
		private $_gagnant;

		//_______CONSTRUCTEUR_CLASSE_Match______//

		function __construct($noMatch,$noCourt,$noCreneau,$phase,$noJoueur1,$noJoueur2,$noJoueur3,$noJoueur4,$nbPlacesRestantes,$date,$resultatJ1,$resultatJ2,$gagnant,$typeMatch)
		{
			try {
				$this->setNoMatch($noMatch);
				$this->setNoCourt($noCourt);
				$this->setNoCreneau($noCreneau);
				$this->setPhase($phase);
				$this->setNoJoueur1($noJoueur1);
				$this->setNoJoueur2($noJoueur2);
				$this->setNoJoueur3($noJoueur3);
				$this->setNoJoueur4($noJoueur4);
                $this->setNbPlacesRestantes($nbPlacesRestantes);
                $this->setTypeMatch($typeMatch);
                $this->setDate($date);
				$this->setResultatJ1($resultatJ1);
				$this->setResultatJ2($resultatJ2);
				$this->setGagnant($gagnant);
			}
			catch (Exception $e) {
			   die('Erreur : '.$e->getMessage());
			}
		}

		//________________GETTER__________________//


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

		public function getResultatJ1() {
			return $this->_resultatJ1;
		}

		public function getResultatJ2() {
			return $this->_resultatJ2;
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

		public function getGagnant() {
			return $this->_gagnant;
		}

		//________________SETTER__________________//

		private function setNoMatch($noMatch){
			$this->_noMatch = $noMatch;
		}

		public function setNoCourt($noCourt){
			$this->_noCourt = $noCourt;
		}

		public function setNoCreneau($noCreneau){
			$this->_noCreneau = $noCreneau;
		}

		public function setPhase($phase){
			$this->_phase = $phase;
		}

		public function setResultatJ1($resultatJ1){
			$this->_resultatJ1 = $resultatJ1;
		}
		public function setResultatJ2($resultatJ2){
			$this->_resultatJ2 = $resultatJ2;
		}
		public function setNoJoueur1($noJoueur1){
			$this->_noJoueur1 = $noJoueur1;
		}
		public function setNoJoueur2($noJoueur2){
			$this->_noJoueur2 = $noJoueur2;
		}
		public function setNoJoueur3($noJoueur3){
			$this->_noJoueur3 = $noJoueur3;
		}
		public function setNoJoueur4($noJoueur4){
			$this->_noJoueur4 = $noJoueur4;
		}
		public function setNbPlacesRestantes($nbPlacesRestantes){
			$this->_nbPlacesRestantes = $nbPlacesRestantes;
		}
		public function setTypeMatch($typeMatch){
			$this->_typeMatch = $typeMatch;
		}
		public function setDate($date){
			$this->_date = $date;
		}
		public function setGagnant($gagnant){
			$this->_gagnant = $gagnant;
		}
	}

?>
