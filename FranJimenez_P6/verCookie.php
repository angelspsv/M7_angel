<?php
    if (!isset($_COOKIE['language_selected'])) {
        header("Location: /");
    } else {
        if ($_COOKIE['language_selected'] == "cat") {
            echo "CAT";
            header("Location: loginCAT.html");
        } else if ($_COOKIE['language_selected'] == "es") {
            echo "ES";
            header("Location: loginES.html");
        } else if ($_COOKIE['language_selected'] == "en") {
            echo "EN";
            header("Location: loginEN.html");
        }
    }
?>