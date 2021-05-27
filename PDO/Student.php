<?php 

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


?>