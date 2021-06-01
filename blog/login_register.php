<?php 

    require_once 'bootstrap.php';

    if (isset($_POST['registerBtn'])) { // kada se pritisne register dugme iz forme
        $user->registerUser(); // klasa iz bootstrapa
    }

    if (isset($_POST['loginBtn'])) { // kada se pritisne login dugme iz forme
        $user->logUser(); // klasa iz bootstrapa
    }

    require_once 'views/login.register.view.php';

?>