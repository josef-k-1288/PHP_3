<?php

require 'connection.php';
require 'Student.php';


$sql = "SELECT * FROM users";
$query = $db->query($sql);
$students = $query->fetchAll(PDO::FETCH_CLASS,'Student');


// echo "<pre>";
// var_dump($result);
// echo "</pre>";

// echo "<h1>".$result[0]->compare($result[1])."</h1>";

require 'views/index.php';
 



