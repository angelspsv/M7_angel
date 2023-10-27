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
    header('Location: index_spanish.html');
?>