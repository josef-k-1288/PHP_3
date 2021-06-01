<?php 

    class User extends QueryBuilder { // obuhvata sve iz QueryBuilder-a 

        public $register_result = NULL;

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
                $this->register_result = true;
            }
        }
    }

?>