<?php 

class ShopProduct {

    public $title;
    public $price;

    function __construct($title, $price) // argumenti - lenovo, 55000 itd
    {   
        $this->title = $title; // laptopu ili book dodaj title 
        $this->price = $price;
    }

    function showInfo(){
        echo $this->title." ".$this->price;
    }

}

$laptop = new ShopProduct("Lenovo Y799", 55000);


$book = new ShopProduct("Semestar 34", 1300);


//var_dump($book);

//echo "<h1>".$book->title."</h1>";


$book->showInfo();


?>