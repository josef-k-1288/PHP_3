<?php 

    class Human {
        public static $gender = "Male";

        public static function getGender()
        {
            return self::$gender;
        }
    }

    echo Human::getGender();


?>