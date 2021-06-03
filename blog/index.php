<?php 

require_once 'bootstrap.php';

if (isset($_GET['post_id']) && isset($_SESSION['loggedUser'])) {
    $post->deletePost($_GET['post_id']);
}

$posts = $post->selectAll('posts'); // koristi se iz queryBuildera selectAll funkcijom

//var_dump($posts);

require_once 'views/index.view.php';


?>