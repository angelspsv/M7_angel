<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span>Destruimos la sesión.</span>
    <?php
        session_unset();
        session_destroy();

        if (empty($_SESSION)) {
            echo "<p>La sesión se ha eliminado con éxito.</p>";
            $sessionID = session_id();
            echo "El identificador de sesión es: $sessionID<br>";
        } else {
            echo "<p>La sesión no se ha eliminado.</p>";
        }

        header('Location: login.html');
    ?>
</body>
</html>