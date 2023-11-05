<?php
    session_start();
    echo "Sessió iniciada";
    // NO ENTIENDO PORQUE SUCEDE ESTO PERO QUIERO PREGUNTAR AL PROFE!
    // if (!isset($_SESSION['name'])) {
    //     if ($_COOKIE['language_selected']=="es") {
    //         header("Location: ./loginES.html");
    //     } else if ($_COOKIE['language_selected']=="en") {
    //         header("Location: ./loginEN.html");
    //     } else if ($_COOKIE['language_selected']=="cat") {
    //         header("Location: ./loginCAT.html");
    //     } else {
    //         header("Location: ./index.php");
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/form.css">
    <title>Inicio</title>
</head>
<body>
    <?php
        if ($_SESSION['role']=="alumnat") {
            if ($_COOKIE['language_selected']=="es") {
                echo '<h2>Bienvenido/da alumno/a '.$_SESSION['name']." ". $_SESSION['surname'] . "</h2>";
            } else if ($_COOKIE['language_selected']=="en") {
                echo '<h2>Welcome student '.$_SESSION['name']." ". $_SESSION['surname'] . "</h2>";
            } else if ($_COOKIE['language_selected']=="cat") {
                echo '<h2>Benvingut/da alumne '.$_SESSION['name']." ". $_SESSION['surname'] . "</h2>";
            }
        } else {
            if ($_COOKIE['language_selected']=="es") {
                echo '<h2>Bienvenido/da profesor/a '.$_SESSION['name']." ". $_SESSION['surname'] . "</h2>";
            } else if ($_COOKIE['language_selected']=="en") {
                echo '<h2>Welcome teacher '.$_SESSION['name']." ". $_SESSION['surname'] . "</h2>";
            } else if ($_COOKIE['language_selected']=="cat") {
                echo '<h2>Benvingut/da professor/a '.$_SESSION['name']." ". $_SESSION['surname'] . "</h2>";
            }
        }

    ?>
    <?php
        if ($_COOKIE['language_selected']=="es") {
            echo '<a href="./sessionDelete.php">Cerrar Sesión</a>';
        } else if ($_COOKIE['language_selected']=="en") {
            echo '<a href="./sessionDelete.php">Log Out</a>';
        } else if ($_COOKIE['language_selected']=="cat") {
            echo '<a href="./sessionDelete.php">Tanca la Sessió</a>';
        }
    ?>
</body>
</html>