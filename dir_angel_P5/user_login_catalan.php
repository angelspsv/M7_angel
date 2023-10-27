<?php
    //include("db_connection.php");
    $db_host = "localhost:3307";
    $db_user = "newuser";
    $db_passwd = "";
    $db_name = "escola";

    $connect = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);


    if (isset($_POST['enter'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
            //query para sacar el rol a partir del email
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
                    echo "soc un alumne<br>";
                    echo "nom: " . $name . "<br>";
                    echo "cognom: " . $surname . "<br>";
                    echo "email: " . $email;
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
                }else{
                    echo "El Camp 'rol' està buit.";
                }
            }

    } else {
        echo "E-mail desconegut.";
    }

?>