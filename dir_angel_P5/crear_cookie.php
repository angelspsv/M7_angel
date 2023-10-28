<?php
//creació de la cookie
    echo "<h3>Creo la cookie</h3>";
    setcookie("sel_idioma", $_GET['idioma'], time()+120);

    //retorna a menu idioma
    header('Location: idioma.php');
?>