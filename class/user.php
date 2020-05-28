<?php
    class User {
        private $_id_user;
        private $_prenom;
        private $_nom;
        private $_pseudo;
        private $_id_role;
        
        public function __construct(){
        }

        /**
         * Remplie tout les champs de notre class (équivalent a un constructeur complet)
         */
        public function set_all($id_user=null,$prenom, $nom,$pseudo,$id_role){
            $this->_id_user = $id_user;
            $this->_prenom = $prenom;
            $this->_nom = $nom;
            $this->_pseudo = $pseudo;
            $this->_id_role = $id_role;
        }     
        
        /**
         * Remplie tout les champs de notre objet via la BDD et son id_user
         * @param int $id
         */
        public function remplir_depuis_bdd($id){
            require_once(realpath(dirname(__FILE__) . "/connexion.php"));
            $sql = "SELECT * FROM users NATURAL JOIN role WHERE id_user=". $id;
            $connexion = new Connexion(NOM_BDD);
            $resultat = $connexion->select($sql);
            foreach($resultat as $result){
                $this->_id_user =  stripcslashes($result->id_user);
                $this->_prenom = stripcslashes($result->firstname_user);
                $this->_nom = stripcslashes($result->name_user);
                $this->_pseudo = stripcslashes($result->pseudo_user);
                $this->_id_role = stripcslashes($result->id_role);
            }
        }

        /**
         * Insert dans la BDD l'utilisateur courant, si ce dernier n'as pas d'ID
         * @return mixte nombre de ligne inséré ou bien un message d'erreur
        */
        public function insert_dans_bdd($password){
            if (empty($this->_id_user)){
                require_once(realpath(dirname(__FILE__) . "/connexion.php"));
                
                $sql = "INSERT INTO users(name_user,firstname_user,pseudo_user,pass_user,adress1_user,adress2_user,tel_user,mail_user,id_town,birth_user,id_role) VALUES('".
                $this->_nom . "','" .
                $this->_prenom . "','" .
                $this->_pseudo . "',MD5('" .
                $password . "')";
                $connexion = new Connexion(NOM_BDD);
                return $connexion->insert($sql);
            } else {
                return "L'utilisateur actuel à déjà un id_user";
            }
        } 

        /**
         * Mise à jours de notre user dans la BDD pour refleter son contenu dans l'objet
         * @return int nombre de ligne affectée
         */
        public function update_dans_bdd(){
            if(!empty($this->_id_user)){
                require_once(realpath(dirname(__FILE__) . "/connexion.php"));
                $connexion = new Connexion(NOM_BDD);
                $sql = "UPDATE users SET " . 
                "name_user='" . $this->_nom . "', " .
                "firstname_user='" . $this->_prenom . "', " . 
                "pseudo_user='" . $this->_pseudo;
                return $connexion->update_delete($sql);
            }
        }
        /**
		 * Renvoie une chaine qui contient toute les infos, utile pour le debuggage;
		 * @return string
		 **/
        public function afficher_user(){
            return "Id_User : " . $this->_id_user 
            . "<br>Prenom : " . $this->_prenom
            . "<br>Nom : " . $this->_nom
            . "<br>Pseudo : " . $this->_pseudo;
        }
        /**
		 * Renvoie la valeur de $_prenom;
		 * @return string
		 **/
        public function get_prenom()
        {
            return $this->_prenom;
        }

        /**
		 * Modifie la valeur de $_prenom
		 * @param string $prenom
		 **/
        public function set_prenom($prenom)
        {
            $this->_prenom = $prenom;
        }

        /**
		 * Renvoie la valeur de $_nom;
		 * @return string
		 **/
        public function get_nom()
        {
            return $this->_nom;
        }

        /**
		 * Modifie la valeur de $_prenom
		 * @param string $prenom
		 **/
        public function set_nom($nom)
        {
            $this->_nom = $nom;
        }

        /**
		 * Renvoie la valeur de $_id_user;
		 * @return int
		 **/
        public function get_id_user()
        {
            return $this->_id_user;
        }

        /**
		 * Modifie la valeur de $_id_user
		 * @param int $id_user
		 **/
        public function set_id_user($id_user)
        {
            $this->_id_user = $id_user;
        }

        /**
		 * Renvoie la valeur de $_pseudo;
		 * @return string
		 **/
        public function get_pseudo()
        {
            return $this->_pseudo;
        }

        /**
		 * Modifie la valeur de $_pseudo
		 * @param string $pseudo
		 **/
        public function set_pseudo($pseudo)
        {
            $this->_pseudo = $pseudo;
        }

        /**
		 * Renvoie la valeur de $_id_role;
		 * @return int
		 **/
        public function get_id_role()  
        {
            return $this->_id_role;
        }

        /**
		 * Modifie la valeur de $_id_role
		 * @param int $id_role
		 **/
        public function set_id_role($id_role)
        {
            $this->_id_role = $id_role;
        }

        /**
		 * Renvoie la valeur de $_nom_role;
		 * @return string
		 **/
        public function get_nom_role()
        {
            return $this->_nom_role;
        }

        /**
		 * Modifie la valeur de $_nom_role
		 * @param string $nom_role
		 **/
        public function set_nom_role($nom_role)
        {
            $this->_nom_role = $nom_role;
        }

    }
?>
