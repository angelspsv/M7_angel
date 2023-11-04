<?php
    session_start();

    include('db_connection.php');

    if (isset($_POST['enter'])){
        //agafem email i password des de formulari login
        $email = $_POST['email'];
        $password = $_POST['password'];

        $where_query = "SELECT `rol` FROM `users` WHERE `correu`= '$email'";
        $resultado_where = mysqli_query($connect, $where_query);
        $salida = mysqli_fetch_assoc($resultado_where);
        $rol = $salida['rol'];
    
        //query para obtener los datos a partir del email
        $query = "SELECT `nom`,`cognom`,`rol`,`contrasenya`,`correu` FROM `users` WHERE `correu`='$email'";
        $resultado_query = mysqli_query($connect, $query);
        $salida_query = mysqli_fetch_assoc($resultado_query);
        $name = $salida_query['nom'];
        $surname = $salida_query['cognom'];
        $rol = $salida_query['rol'];
        $password = $salida_query['contrasenya'];
        $email = $salida_query['correu'];

        //Desem les dades de la query a la sessió
        if (mysqli_num_rows($resultado_where) > 0){
            $_SESSION['nom'] = $name;
            $_SESSION['cognom'] = $surname;
            $_SESSION['rol'] = $rol;
            $_SESSION['contrasenya'] = $password;
            $_SESSION['correu'] = $email;
            if($rol == "alumnat"){
            }elseif($rol == "professorat"){
                //perfil professorat:
                $users_query = "SELECT `nom`, `cognom` FROM `users`;";
                $resultado_users = mysqli_query($connect, $users_query);
                
                //imprimir los nombres de todos los usuarios de la bbdd
                echo "La llista d'usuaris de la base de dades és:<br>";
                foreach($resultado_users as $row){
                    echo "nom i cognom: " . $row['nom'] . " " . $row['cognom'] . "<br>";                
                }
            }
        }

        //mostrem les dades
        header('Location: welcome.php');
    }
?>