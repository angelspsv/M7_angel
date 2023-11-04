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

    <?php
    //Destruimos la sesión
        session_unset();
        session_destroy();

        header('Location: login.html');
    ?>
</body>
</html>