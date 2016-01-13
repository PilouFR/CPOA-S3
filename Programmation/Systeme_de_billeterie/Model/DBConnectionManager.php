 <?php
	//require_once

	class DBConnectionManager {

		private static $_host;
		private static $_user;
		private static $_password;
		private static $_dbname;
		private static $_db;
		private static $_instance;
		private $_query;

		//____CONSTRUCTEUR_CLASSE_DBConnectionManager___//

		private function __construct()
		{
			$_host="iutdoua-webetu.univ-lyon1.fr";				//								//
			$_user="p1404604";    				 				//	Identifiants de connection  //
			$_password="213607";      			 				//		à la base de données    //
			$_dbname="p1404604";								//								//

			try {
				self::$_db = new PDO('mysql:host='.$_host.';dbname='.$_dbname.';charset=utf8',$_user,$_password);
			}catch (Exception $e) {
				die('Erreur : '.$e->getMessage());
			}
		}

		//___________________GETTER_____________________//

		public static function getInstance()
		{
			if (!isset(self::$_instance)) {						// Si aucune instance de DBConnectionManager trouvée
				self::$_instance = new DBConnectionManager();	// alors créer une instance
			}
			return self::$_instance;							// Retour de l'objet connection
		}

		public function getMatchs(){
			$this->_query=self::$_db->prepare("SELECT * FROM Match ORDER BY noMatch");
			$this->_query->execute();							// Exécute la requête qui récupère tous les films par ordre alphabétique

		}

		public function fetch()
		{
			return $this->_query->fetch();
		}

		public function closeCursor()
		{
			$this->_query->closeCursor();
		}

		/*public function afficheNbFilmTrouve() 					// Affiche le nombre de film trouvés dans la base de données
		{
			$query=self::$_db->prepare('SELECT COUNT(id_film) FROM films');
			$query->execute();
			$num=$query->fetch();
			echo("<p>$num[0] film(s) trouvé(s) dans la base de données.</p>");
			$query->closeCursor();
		}*/

	}
?>
