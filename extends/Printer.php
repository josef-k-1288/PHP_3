<?php 

class Printer {
    public function display(ShopProduct $oneShopItem)
    {
        foreach ($oneShopItem as $key => $value){
            echo $key." : ".$value."<br>";
        }
    }
}

$hp = new Printer();


?>