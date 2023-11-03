<?php
    include("db_connection.php");

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $rol = $_POST['rol'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $active = $_POST['active'];

        if($active === 'no'){
            $active = false;
        } else {
            $active = true;
        }

        $db_insert = "INSERT INTO `users`(`nom`, `cognom`, `rol`, `contrasenya`, `correu`, `actiu`) VALUES ('$name','$surname','$rol','$password','$email','$active')";

        $resultat_insert = mysqli_query($connect, $db_insert);

        if(!$resultat_insert){
            die("Query fail!");
        }
    }
    header('Location: index.html');

/*
    $consulta = "SELECT * FROM `users`";
    $resultado = mysqli_query($connect, $consulta);

    if ($resultado) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nom</th><th>Cognom</th><th>rol</th><th>contrasenya</th><th>email</th><th>actiu</th></tr>";
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['nom'] . "</td>";
            echo "<td>" . $fila['cognom'] . "</td>";
            echo "<td>" . $fila['rol'] . "</td>";
            echo "<td>" . $fila['contrasenya'] . "</td>";
            echo "<td>" . $fila['correu'] . "</td>";
            echo "<td>" . $fila['actiu'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

    }else{
        echo "Query fail!";
        mysqli_connect_errno();
    }

    mysqli_close($connect);
*/
?>