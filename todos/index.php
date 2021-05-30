<?php 

require 'bootstrap.php';



$todos = $query->selectAll('todos','Todo');

require 'views/index.view.php';

?>


