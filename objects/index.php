<?php 

class ShopProduct {

    public $title; // public metodi moze da se pristupi izvan klase a private ne moze
    public $price;

    function __construct($title, $price) // argumenti - lenovo, 55000 itd
    {   
        $this->title = $title; // laptopu ili book dodaj title 
        $this->price = $price;
    }

    function showInfo(){
        echo $this->title." ".$this->price;
    }

    public function changeTitle($new_title){
        $this->title = $new_title; // funkcija za promenu titla
    }

}

$laptop = new ShopProduct("Lenovo Y799", 55000);
$book = new ShopProduct("Semestar 34", 1300);


//var_dump($book);

//echo "<h1>".$book->title."</h1>";


//$book->showInfo();

//$book->title = "Semestar 4"; // promena vrednosti title za book
//$book->changeTitle("Semestar 4"); // pozivanje funckije za promenu titla
//$book->showInfo();

class Printer {
    public function display(ShopProduct $oneShopItem)
    {
        echo $oneShopItem->title." ".$oneShopItem->price;
    }
}

$hp = new Printer();
$hp->display($laptop);


function saySomething(array $names)
{
    var_dump($names);
}

saySomething(["Danilo", 'Ivko']);



?>