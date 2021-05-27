<?php

require 'connection.php';

class Student {
    public function getInfo()
    {
        return $this->name." ".$this->age;
    }

    public function compare(Student $student)
    {
        if ($this->age > $student->age){
            return $this->name." je stariji";
        }elseif($this->age < $student->age){
            return $this->name." je mladji";
        }else{
            return "ISTIH su Godina";
        }
    }

}

$sql = "SELECT * FROM users";
$query = $db->query($sql);
$result = $query->fetchAll(PDO::FETCH_CLASS,'Student');


echo "<pre>";
var_dump($result);
echo "</pre>";

echo "<h1>".$result[0]->compore($result[1])."</h1>";
 



