<?php 

    require_once 'bootstrap.php';

    if (isset($_SESSION['loggedUser'])) { // ako je korisnik logovan ne moze vise da dolazi na ovu stranicu preko url
        header("Location: index.php"); // posalji ga na index.php
    }

    if (isset($_POST['registerBtn'])) { // kada se pritisne register dugme iz forme
        $user->registerUser(); // klasa iz bootstrapa
    }

    if (isset($_POST['loginBtn'])) { // kada se pritisne login dugme iz forme
        $user->logUser(); // klasa iz bootstrapa
    }

    require_once 'views/login.register.view.php';

?>