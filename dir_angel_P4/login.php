<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //conexió a la BBDD
        include("connect_file.php");

        if(isset($_POST['enter'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo $email;
            $select_query = "SELECT * FROM `users` WHERE `correu` = '$email' AND `contrasenya` = '$password'";
            $resultat_query = mysqli_query($conn, $select_query);

            if($resultat_query && mysqli_num_rows($resultat_query)>0){
                //mostrar dades de professor o alumne


            } else {
                header("Location: inici_sessio.html");
                exit();
            }

        }
    ?>
</body>
</html>