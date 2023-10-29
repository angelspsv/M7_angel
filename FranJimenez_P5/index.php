<?php
if (isset($_COOKIE['language_selected'])) {
    if ($_COOKIE['language_selected'] == "cat") {
        header("Location: loginCAT.html");
    } else if ($_COOKIE['language_selected'] == "es") {
        header("Location: loginES.html");
    } else if ($_COOKIE['language_selected'] == "en") {
        header("Location: loginEN.html");
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Idioma</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
    <div id="title">
        <h1>Selecciona idioma de preferencia</h1>
    </div>
    <div id="leng">
        <a href="crearCookie.php?language=es">
            <div class="lengCard">
                <img src="img/bandera_españa.png" alt="Bandera España">
                <p>Español</p>
            </div>
        </a>

        <a href="crearCookie.php?language=cat">
            <div class="lengCard">
                <img src="img/bandera_catalana.png" alt="Bandera Cataluña">
                <p>Catalán</p>
            </div>
        </a>

        <a href="crearCookie.php?language=en">
            <div class="lengCard">
                <img src="img/bandera_inglesa.png" alt="Bandera Inglaterra">
                <p>Inglés</p>
            </div>
        </a>
    </div>
</body>
</html>