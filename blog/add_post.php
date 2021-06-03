<?php 

require_once 'bootstrap.php';

if(!isset($_SESSION['loggedUser'])) { // ako korisnik nije logovan vratice se na index.php
    header("Location: index.php");
}

if(isset($_POST['post_sub_btn'])) {
    $post->createPost();
}

require_once 'views/add.post.view.php';

?>