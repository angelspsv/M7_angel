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
    
        //query para obtener nombre y apellido a partir del email
        $names_query = "SELECT `nom`,`cognom` FROM `users` WHERE `correu`='$email'";
        $resultado_names = mysqli_query($connect, $names_query);
        $salida_names = mysqli_fetch_assoc($resultado_names);
        $name = $salida_names['nom'];
        $surname = $salida_names['cognom'];

        if (mysqli_num_rows($resultado_where) > 0){
            if($rol == "alumnat"){
                $_SESSION['nom'] = $name;
                $_SESSION['cognom'] = $surname;
                //$_SESSION['rol'] = $rol;
                //$_SESSION['password'] = $contrasenya;
                //$_SESSION['email'] = $correu;
                //$_SESSION['active'] = $actiu;

                //echo "Benvingut!<br>";
                //echo "soc un alumne<br>";
                //echo "nom: " . $name . "<br>";
                //echo "cognom: " . $surname . "<br>";
                //echo "email: " . $email;
            }elseif($rol == "professorat"){
                echo "Hola " . $name . ", ets professor!!<br>";
                echo "<br>";
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