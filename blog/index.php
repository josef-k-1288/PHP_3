<?php 

require_once 'bootstrap.php';

$posts = $post->selectAll('posts'); // koristi se iz queryBuildera selectAll funkcijom

//var_dump($posts);

require_once 'views/index.view.php';


?>