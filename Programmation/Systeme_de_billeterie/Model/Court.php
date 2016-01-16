<?php
	require_once 'ListeCourt.php';

	class Court {

        private $_noJoueur;
        private $_nomCourt;
        private $_typeCourt;
        private $_reserve;

		//_______CONSTRUCTEUR_CLASSE_Court______//

		function __construct($noCourt,$nomCourt,$typeCourt,$reserve)
		{
			try {
				$this->setNoCourt($noCourt);
				$this->setNomCourt($nomCourt);
				$this->setTypeCourt($typeCourt);
				$this->setReserve($reserve);
			}
			catch (Exception $e) {
			   die('Erreur : '.$e->getMessage());
			}
		}

		//________________GETTER__________________//

		public function __get($noCourt)
		{
			return $this->data[$noCourt];
		}

		public function getNoCourt() {
			return $this->_noCourt;
		}

		public function getNomCourt() {
			return $this->_nomCourt;
		}

		public function getTypeCourt() {
			return $this->_typeCourt;
		}

		public function getReserve() {
			return $this->_reserve;
		}

		//________________SETTER__________________//

		private function setNoCourt($noCourt){
			$this->_noCourt = $noCourt;
		}

		public function setNomCourt($nomCourt){
			$this->_nomCourt = $nomCourt;
		}

		public function setTypeCourt($typeCourt){
			$this->_typeCourt = $typeCourt;
		}

		public function setReserve($reserve){
			$this->_reserve = $reserve;
		}
	}

?>
