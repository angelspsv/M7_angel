<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escull idioma</title>
</head>
<body>
    <?php
        //codi per mostrar l'idioma triat
        if(isset($_COOKIE['sel_idioma'])){
            if ($_COOKIE['sel_idioma'] == 'es') {
                header('Location: spanish.html');
            } elseif ($_COOKIE['sel_idioma'] == 'en') {
                header('Location: english.html');
            } elseif ($_COOKIE['sel_idioma'] == 'cat') {
                header('Location: catala.html');
            }
        }
    ?>
</body>
</html>