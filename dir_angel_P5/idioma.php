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
                header('Location: login_spanish.html');
            } elseif ($_COOKIE['sel_idioma'] == 'en') {
                header('Location: login_english.html');
            } elseif ($_COOKIE['sel_idioma'] == 'cat') {
                header('Location: login_catalan.html');
            }
        }
    ?>
    <table width="25%" border="0" align="center">
        <tr>
            <td>Escull idioma</td>
        </tr>
        <tr>
            <td align="center">
                <a href="crear_cookie.php?idioma=es">
                    <img src="spain_flag_icon.jpg" width="90" height="60">
                </a>
                <h3>SPANISH</h3>
            </td>
            <td align="center">
                <a href="crear_cookie.php?idioma=en">
                    <img src="britain_flag_icon.jpg" width="90" height="60">
                </a>
                <h3>ENGLISH</h3>
            </td>
            <td align="center">
                <a href="crear_cookie.php?idioma=cat">
                    <img src="catalan_flag_icon.jpg" width="90" height="60">
                </a>
                <h3>CATALAN</h3>
            </td>
        </tr>
    </table>
</body>
</html>