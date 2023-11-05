<?php 
    // Crea la cookie con el idioma pasado por GET desde el index
    setcookie("language_selected",$_GET['language']);
    header("Location: verCookie.php");
?>