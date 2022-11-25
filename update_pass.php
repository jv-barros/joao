<?php

$senha = password_hash('20906601', PASSWORD_BCRYPT);

$conn = new mysqli('localhost:3306', 'phpmyadmin', '20906601', 'joao');

    $sql = "UPDATE users SET pass= '".$senha."' WHERE email= 'jvcbcarvalho@gmail.com'";
   
    $query = mysqli_query($conn, $sql);
    //$usuario = mysqli_fetch_row($query); 


    var_dump($sql);
?>