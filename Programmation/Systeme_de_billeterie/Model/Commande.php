<?php

	class Commande {
		private static $_instance = null;
		private $_typeMatch;
		private $_phase;
		private $_place;
		private $_typeBillet;
		private $_nomUtilisateur;
		private $_password;

		private function __construct($typeMatch,$phase,$place,$typeBillet,$nomUtilisateur,$password)
		{
			try {
				$this->_typeMatch = $typeMatch;
				$this->_phase = $phase;
				$this->_place = $place;
				$this->_typeBillet = $typeBillet;
				$this->_nomUtilisateur = $nomUtilisateur;
				$this->_password = $password;
			}
			catch (Exception $e) {
			   die('Erreur : '.$e->getMessage());
			}
		}

		public static function getInstance($typeMatch,$phase,$place,$typeBillet,$nomUtilisateur,$password) {

			if(is_null(self::$_instance)){
				self::$_instance = new Commande($typeMatch,$phase,$place,$typeBillet,$nomUtilisateur,$password);
			}
			return self::$_instance;
		}

		public function __toString() {
			return $this->getTypeMatch() .'typematch / phase '. $this->getPhase();
		}

		public function getTypeMatch() {
			return $this->_typeMatch;
		}

		public function getPhase() {
			return $this->_phase;
		}

		public function getPlace() {
			return $this->_place;
		}

		public function getTypeBillet() {
			return $this->_typeBillet;
		}

		public function getNomUtilisateur() {
			return $this->_nomUtilisateur;
		}

		public function getPassword() {
			return $this->_password;
		}

		//________________SETTER__________________//

		public function setTypeMatch($typeMatch){
			self::$_instance->_typeMatch = $typeMatch;
		}

		public function setPhase($phase){
			self::$_instance->_phase = $phase;
		}

		public function setPlace($place){
			self::$_instance->_place = $place;
		}

		public function setTypeBillet($typeBillet){
			self::$_instance->_typeBillet = $typeBillet;
		}

		public function setNomUtilisateur($nomUtilisateur){
			self::$_instance->_nomUtilisateur = $nomUtilisateur;
		}

		public function setPassword($password){
			self::$_instance->_password = $password;
		}
	}

?>
