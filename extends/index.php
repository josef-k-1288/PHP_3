<?php

use ShopProduct as GlobalShopProduct;

require_once('Printer.php');

class ShopProduct { // parent klasa

    public $title; // public metodi moze da se pristupi izvan klase a private ne moze
    public $price;

    function __construct($title="ShopProduct", $price=0) // argumenti - lenovo, 55000 itd
    {   
        $this->title = $title; // laptopu ili book dodaj title 
        $this->price = $price;
    }

}

//  $laptop = new ShopProduct("Lenovo Y799", 55000);
//   $book = new ShopProduct("Semestar 34", 1300);



    class Laptop extends ShopProduct { // child klasa koja obuhvata sve sto ima u parent klasi ShopProduct
            public $screen_size;


            public function __construct($title="ShopProduct", $price=0, $screen_size)
            {
                parent::__construct($title, $price);
                $this->screen_size = $screen_size;
            }
    }


    $laptop = new Laptop("Lenovo Y799", 55000, 14); // ako ne stavimo nista u zagradi imace vrednosti iz contruct - ShopProct i 0
    $hp->display($laptop);
    

    // var_dump($laptop);




?>