<?php 

    require 'connection.php';

    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users VALUES (NULL,?,?)";
    $query = $db->prepare($sql);
    $query->execute([$name,$age]);

    $row_count = $query->rowCount(); // na koliko redova uticemo

    // var_dump($row_count);


    if ($row_count == 1) {
        header("Location: index.php");
    } else {
        header("Location: 404.php");
    }


    //header("Location: index.php");

?>