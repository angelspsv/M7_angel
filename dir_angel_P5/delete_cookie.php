<?php
//codi que elimina la cookie
    setcookie("sel_idioma","", time()-1);
    header("Location: idioma.php");
?>