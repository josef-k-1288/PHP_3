<?php 

    class User extends QueryBuilder { // obuhvata sve iz QueryBuilder-a 

        public $register_result = NULL;
        public $loggedUser = NULL;

        public function registerUser()
        {
            //var_dump("metoda register");
            $name = $_POST['register_name'];
            $email = $_POST['register_email'];
            $password = $_POST['register_password'];

            $sql = "INSERT INTO users VALUES(NULL,?,?,?)";
            $query = $this->db->prepare($sql);
            $query->execute([$name,$email,$password]);


            if($query){
                $this->register_result = true; // ako je registracija uspesna
            }
        }

        public function logUser()
        {
            $email = $_POST['login_email'];
            $password = $_POST['login_password'];

            $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
            $query = $this->db->prepare($sql);
            $query->execute([$email,$password]);
            $loggedUser = $query->fetch(PDO::FETCH_OBJ);

            if ($loggedUser != NULL) {
                $_SESSION['loggedUser'] = $loggedUser;
                $this->loggedUser = $loggedUser; // ako je Logovanje uspesno
            }
        }

        public function getUserWithId($id)
        {
            $sql = "SELECT * FROM users WHERE id = ?";
            $query = $this->db->prepare($sql);
            $query->execute([$id]);

            $postOwner = $query->fetch(PDO::FETCH_OBJ);
            return $postOwner;

        }
    }

?>