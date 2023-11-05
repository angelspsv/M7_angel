<?php
    // CONEXION A LA BASE DE DATOS.
    $dbHost = "localhost";
    $dbName = "Users";
    $dbUser = "panda";
    $dbPassword = "Fran2001narF@";

    $conn = mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);

    // SI FALLA CONEXION --> MENSAJE DE ERROR
    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }

    echo "Conexion a BBDD correcta.";

    // OBTENCION DE DATOS DEL FORMULARIO DE REGISTRO.
    $role = $_POST['rol'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    echo $email,$user,$password;

    // INSERTAR DATOS A LA BASE DE DATOS.
    $insert = "INSERT INTO user (role,name,surname,password,email) VALUES ('$role','$name','$surname','$password','$email')";
    if (mysqli_query($conn,$insert)) {
        echo "Se ha hecho la consulta de puta madre";
    } else {
        echo "La consulta no se ha hecho parguelón";
        
        die("Error: " . $insert . "<br>" . mysqli_error($conn));
    }
    // CERRAMOS CONEXION A LA BASE DE DATOS.
    mysqli_close($conn);

    header("Location: /index.php");
?>