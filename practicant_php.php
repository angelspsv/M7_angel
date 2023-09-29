<?php
    $myArr = ["angel", 25, "Barcelona", true];
    foreach($myArr as $value) {
        echo $value . "\n";
    }
    echo "///\n";
    $comunidad = "Catalunya";
    array_push($myArr, $comunidad);
    print_r($myArr);
    echo "///\n";

    $pais = "Espanya";
    array_push($myArr, $pais);
    foreach($myArr as $contador){
        echo $contador . "\n";
    }
    $arrColoresBG = ["rojo", "verde", "blanco"];
    $arrColoresCAT = ["rojo", "amarillo"];

    $coloresDiff = array_diff($arrColoresBG, $arrColoresCAT);
    print_r($coloresDiff);
?>