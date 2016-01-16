 <?php
	require_once '../Controller/index.php';
    require_once 'Commande.php';

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
			$this->_query=self::$_db->prepare("SELECT * FROM  `Match` ORDER BY noMatch LIMIT 0 , 15");
			$this->_query->execute();						// Exécute la requête qui récupère tous les films par ordre alphabétique
            return $this->_query->fetchAll();
		}

        public function getListeMatch(){
			$this->_query=self::$_db->prepare("SELECT `noMatch`
                                                FROM  `Match`
                                                WHERE `phase` = `huitieme` AND `type` = `double`
                                                ORDER BY `date`");
            //$commande = Commande::getInstance('type','phase',null,null,null,null);

            $this->_query->execute();
            return $this->_query->fetchAll();
		}

		public function getJoueurs(){
			$this->_query=self::$_db->prepare("SELECT * FROM  `Joueur` ORDER BY noJoueur");
			$this->_query->execute();						// Exécute la requête qui récupère tous les films par ordre alphabétique
            return $this->_query->fetchAll();
		}

		public function getNomJoueur1($noMatch){
			$this->_query=self::$_db->prepare ("SELECT prenomJoueur, nomJoueur, nationalite
                                                FROM  `Joueur`
                                                INNER JOIN  `Match` ON  `Joueur`.`noJoueur` =  `Match`.`noJoueur1`
                                                WHERE noMatch = ?");
			$this->_query->execute(array($noMatch));						// Exécute la requête qui récupère tous les films par ordre alphabétique
            while($data = $this->_query->fetch()){
                echo($data[0] ." ". $data[1] ." (".strtoupper(substr($data[2],0,3)).")");
            }
            $this->closeCursor();
		}

        public function getNomJoueur2($noMatch){
			$this->_query=self::$_db->prepare ("SELECT prenomJoueur, nomJoueur, nationalite
                                                FROM  `Joueur`
                                                INNER JOIN  `Match` ON  `Joueur`.`noJoueur` =  `Match`.`noJoueur2`
                                                WHERE noMatch = ?");
			$this->_query->execute(array($noMatch));						// Exécute la requête qui récupère tous les films par ordre alphabétique
            while($data = $this->_query->fetch()){
                echo($data[0] ." ". $data[1] ." (".strtoupper(substr($data[2],0,3)).")");
            }
            $this->closeCursor();
		}

        public function getNomCourt($noMatch){
			$this->_query=self::$_db->prepare ("SELECT nomCourt
                                                FROM  `Court`
                                                INNER JOIN  `Match` ON  `Court`.`noCourt` =  `Match`.`noCourt`
                                                WHERE noMatch = ?");
			$this->_query->execute(array($noMatch));
            while($data = $this->_query->fetch()){
                echo($data[0]);
            }
            $this->closeCursor();
		}

        public function adresseExist($adresseMail){

            $this->_query=self::$_db->prepare("SELECT CASE WHEN EXISTS(SELECT adresseMail FROM `Utilisateur` WHERE adresseMail = ?)THEN CAST(1 AS BIT)ELSE CAST(0 AS BIT) END;");
			$this->_query->execute(array($adresseMail));

            return true;
		}

        public function createUser($nom, $prenom, $email,$pass_hache){
            $this->_query=self::$_db->prepare('INSERT INTO Utilisateur(adresseMail, nom, prenom, password) VALUES(:email,:nom, :prenom, :pass_hache)');
        	$this->_query->execute(array(
    	    'email' => $nom,
    		'nom' => $email,
    		'prenom' => $prenom,
    	    'pass_hache' => $pass_hache));
        }

		public function fetch()
		{
			return $this->_query->fetch(PDO::FETCH_ASSOC);
		}

        public function fetchAll()
		{
			return $this->_query->fetchAll(PDO::FETCH_ASSOC);
		}

        /*public function prepare($sql)
		{
            return self::$_db->prepare($sql);
		}*/

		public function closeCursor()
		{
			$this->_query->closeCursor();
		}


		public function afficheNbMatchTrouve() 					// Affiche le nombre de film trouvés dans la base de données
		{

			$query=self::$_db->prepare('SELECT COUNT(noMatch) FROM `Match`');
			$query->execute();
			$num=$query->fetch();
			echo("<p>$num[0] match(s) trouvé(s) dans la base de données.</p>");
			$query->closeCursor();
		}

	}
?>
