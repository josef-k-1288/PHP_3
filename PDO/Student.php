<?php 

class Student {
    public function getInfo()
    {
        return $this->name." ".$this->email;
    }

    public function compare(Student $student)
    {
        if ($this->email > $student->email){
            return $this->name." je stariji";
        }elseif($this->email < $student->email){
            return $this->name." je mladji";
        }else{
            return "ISTIH su Godina";
        }
    }

}


?>