<?php
	require_once 'Court.php';
	require_once 'DBConnectionManager.php';

	class ListeCourt
	{

		private $_listeCourt = array();

		public function __construct()
		{
			try {
				$i = 0;
				$db = DBConnectionManager::getInstance();
				$resultCourt = $db->getCourts();

				foreach($resultCourt as $data){
					$this->_listeCourt[$i]=new Court($data['noCourt'],$data['nomCourt'],$data['typeCourt'],$data['reserve']);
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

		public function getCourt($id) {
			foreach (self::$_listeCourt as $Court){
				if ($Court->getNoCourt() == $id){
					return $this->Court;
				}
			}
		}
	}

?>
