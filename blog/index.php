<?php 

require_once 'bootstrap.php';

$post = $post->selectAll('posts'); // koristi se iz queryBuildera selectAll funkcijom

var_dump($post);

require_once 'views/index.view.php';


?>