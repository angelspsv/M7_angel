<?php
    //conexió a la BBDD
    include("connect_file.php");

        if(isset($_POST['enter'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $select_query = "SELECT * FROM `users` WHERE `correu` = '$email' AND `contrasenya` = '$password'";
            $resultat_query = mysqli_query($conn, $select_query);

            if($resultat_query && mysqli_num_rows($resultat_query)>0){
                //l'usuari existeix
                $row = mysqli_fetch_assoc($resultat_where);
            $rol = $row['rol'];

            if ($rol == "alumnat") {
                // Usuario es un alumno
                $select_name = "SELECT nom, cognom FROM `users` WHERE `correu` = '$email'";
                $resultat_name = mysqli_query($conn, $select_name);

                if ($resultat_name && mysqli_num_rows($resultat_name) > 0) {
                    //per alumne
                    $row = mysqli_fetch_assoc($resultat_name);
                    $nom = $row['nom'];
                    $cognom = $row['cognom'];
                    echo "soc un alumne<br>";
                    echo "nom: ". $nom ."<br>";
                    echo "cognom: " . $cognom . "<br>";
                    echo "email: " . $email . "<br>";
                }
                } else if ($resultat_where == "profesorat") {
                    //per professor
                    $query_select_all = "SELECT nom, cognom FROM `users`";
                    $resultat_select_all = mysqli_query($conn, $query_select_all);
                    echo "Hola " . $resultat_name . ", ets professor!!<br>";
                    echo "<br>";
                    foreach ($resultat_select_all as $row) {
                        echo "nom i cognom: " . $row['nom'] . " " . $row['cognom'] . "<br>";
                    }
                }
            } else {
                //les credencials no son correctes
                header("Location: inici_sessio.html");
                exit();
            }

        }
?>
