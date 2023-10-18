<?php
    $db_host = "localhost:3307";
    $db_user = "newuser";
    $db_passwd = "";
    $db_nombre = "escola";

    try{
        $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_nombre);
    } catch(Exception $e){
        echo "".$e->getMessage()."";
    }    
?>