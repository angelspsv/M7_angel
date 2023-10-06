<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['enviar'])) {
            $opcion = $_POST['opcion'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $contrasenya = $_POST['contrasenya'];
            $correo = $_POST['correo'];
        } else {
    ?>
        <form action="./formulari_php.php" method="post">
            <label for="opcion_alumno">
                <input type="radio" id="opcion_alumno" name="opcion" value="alumno">Alumno</label>
            <label for="opcion_profesor">
                <input type="radio" id="opcion_profesor" name="opcion" value="profesor">Profesor</label><br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre"><br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido"><br>
            <label for="contrasenya">Contrasenya:</label>
            <input type="text" name="contrasenya" id="contrasenya"><br>
            <label for="correo">Correo:</label>
            <input type="text" name="correo" id="correo"><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
        }
    ?>
</body>
</html>