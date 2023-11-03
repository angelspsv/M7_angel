<?php
    session_start();

    //recuperem les dades des de session
    $nom = $_SESSION['nom'];
    $cognom = $_SESSION['cognom'];
    //$rol = $_SESSION['rol'];
    //$contrasenya = $_SESSION['password'];
    //$correu = $_SESSION['email'];
    //$actiu = $_SESSION['active'];

    //mostrem les dades de l'usuari
    echo "Benvingut/a,<br>";
    echo "Hola, $nom $cognom!<br>";
    //echo "Tu contraseña es: $contrasenya<br>";

?>