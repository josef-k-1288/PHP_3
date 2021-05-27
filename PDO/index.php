<?php

require 'config.php';


try{
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';' ,USER,PASSWORD);
}catch(PDOException $e){
    echo $e->getMessage(); // prikazuje tacnu gresku u konekciji
}


$sql = "SELECT * FROM users";
$query = $db->query($sql);
$result = $query->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
var_dump($result);
echo "</pre>";

echo "<h1>".$result[0]['name']."</h1>";
 



