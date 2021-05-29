<?php 

    class Connection  {

        public static function connect($database){ // static omogucava da ne mora da se pravi instanca nego samo Connection::connect pozivanje

            try {
                return new PDO('mysql:host='.$database['host'].';dbname='.$database['dbname'].';',$database['user'], $database['password']);
            }catch(PDOException $e){
                die("Error ".$e->getMessage());
            }

            
        }

    }


    

?>