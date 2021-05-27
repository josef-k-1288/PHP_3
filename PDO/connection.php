<?php 

require 'config.php';


try{
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';' ,USER,PASSWORD);
}catch(PDOException $e){
    echo $e->getMessage(); // prikazuje tacnu gresku u konekciji
}


?>