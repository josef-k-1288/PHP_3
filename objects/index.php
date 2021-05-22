<?php 

class ShopProduct {

}

$laptop = new ShopProduct();
$laptop->title = "Lenovo Y799";

$book = new ShopProduct();
$book->title = "Semestar 34";
$book->price = 1300;

//var_dump($book);

echo "<h1>".$book->title."</h1>";

?>