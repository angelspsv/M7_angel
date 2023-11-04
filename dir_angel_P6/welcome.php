<?php
    session_start();

    //recuperem les dades des de session
    $nom = $_SESSION['nom'];
    $cognom = $_SESSION['cognom'];
    $rol = $_SESSION['rol'];
    $contrasenya = $_SESSION['contrasenya'];
    $correu = $_SESSION['correu'];
    

    if (empty($_SESSION)) {
        echo "Sessió no iniciada.<br>";
        exit();
    } else {
        echo "Sessió iniciada.</p>";
    }

    if($rol == "alumnat"){
        //mostrem les dades alumne
        echo "Benvingut/da, $nom $cognom!<br>";
        echo "Les teves dades són:<br>";
        echo "rol: $rol<br>";
        echo "correu: $correu<br>";
        echo "contrasenya: $contrasenya<br>";
    } else if($rol == "professorat"){
        //mostrem dades de professorat
        echo "Benvingut/da $rol, $nom $cognom!<br>";
    }
    echo '<br><a href="delete_session.php">Destrueix la sessió</a>';
?>