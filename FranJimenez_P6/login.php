<?php
    session_start();
    $databaseHost = "localhost";
    $databaseUser = "panda";
    $databasePassword = "Fran2001narF@";
    $databaseName = "Users";
    // Hacemos conexión con la base de datos
    $conn = mysqli_connect($databaseHost,$databaseUser,$databasePassword,$databaseName);
    if (!$conn) {
        die("DatabaseConnectionError: ".mysqli_connect_errno()." - ".mysqli_connect_error());
    }
    // Recogemos los datos del formulario de login
    $email = $_POST["email"];
    $password = $_POST["password"];
    // Miramos si existe un usuario con el email introducido y si la contraseña coincide
    $selectUser = "SELECT * FROM user WHERE email LIKE '$email'";
    $user = mysqli_query($conn,$selectUser);
    if ($user) {
        while ($row = $user->fetch_assoc()) {
            if ($password == $row["password"]) {
                echo "LOGIN OK<br>";
                $_SESSION['email'] = $row["email"];
                $_SESSION['name'] = $row["name"];
                $_SESSION['surname'] = $row["surname"];
                $_SESSION['role'] = $row["role"];
                mysqli_close($conn);
                header("Location: ./showData.php");
            }
        }
        echo "Hecha comprovación!";
        // header("Location: /");
    } else {
        echo "Error de login.";
        echo mysqli_error($conn);
        mysqli_close($conn);
        header("Location: /");
    }    
?>