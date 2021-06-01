<?php 

    require_once 'bootstrap.php';

    if (isset($_POST['registerBtn'])) { // kada se pritisne register dugme iz forme
        $user->registerUser(); // klasa iz bootstrapa
    }

    require_once 'views/login.register.view.php';

?>