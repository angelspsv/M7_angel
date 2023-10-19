<?php
    //fem la conexió a la BBDD
    include("connect_file.php");

    //si fem click al botó enviar...
    if(isset($_POST["send"])){
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $rol = $_POST["rol"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $active = $_POST["active"];

        //converteix l'estat de l'usuari a booleà
        if($active = "si"){
            $active = "True";
        } else {
            $active = "False";
        }


        //consulta query a la BBDD
        $insert = "INSERT INTO `users`(`nom`, `cognom`, `rol`, `contrasenya`, `correu`, `actiu`) VALUES('$name', '$surname', '$rol', '$password', '$email', $active)";

        //introduim les dades de l'usuari a la BBDD
        $resultat = mysqli_query($conn, $insert);

        if(!$resultat){
            die("Query fail!");
        }
    }

?>