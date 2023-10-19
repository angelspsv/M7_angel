    <?php
        //conexió a la BBDD
        include("connect_file.php");

        if(isset($_POST['enter'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $select_query = "SELECT * FROM `users` WHERE `correu` = '$email' AND `contrasenya` = '$password'";
            $resultat_query = mysqli_query($conn, $select_query);

            if($resultat_query && mysqli_num_rows($resultat_query)>0){
                $query_where = "SELECT rol FROM `users` WHERE correu='$email'";
                $resultat_where = mysqli_query($conn, $query_where);
                
                //mostrar dades de professor o alumne
                if ($resultat_where == "alumnat") {
                    echo "soc un alumne<br>";
                    echo "nom: "  .    "<br>";
                    echo "cognom: " .   "<br>";
                    echo "email: " . $email . "<br>";
                } else if ($resultat_where == "profesorat") {
                    $select_name = "SELECT nom FROM `users` WHERE correu = $email";
                    $resultat_name = mysqli_query($conn, $select_name);
                    $query_select_all = "SELECT nom, cognom FROM `users`";
                    $resultat_select_all = mysqli_query($conn, $query_select_all);
                    echo "Hola " . $resultat_name . ", ets professor!!<br>";
                    echo "<br>";
                    foreach ($resultat_select_all as $row) {
                        echo "nom i cognom: " . $row;
                    }
                }
            } else {
                header("Location: inici_sessio.html");
                exit();
            }

        }
    ?>
