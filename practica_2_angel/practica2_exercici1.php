<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $arrayTaules = [];
        echo "<ul>";
        for($mesa=1; $mesa<11; $mesa++){
            $arrayTaules[$mesa] = rand(0, 5);
            echo "<li> La taula " . $mesa . " té " . $arrayTaules[$mesa] . " comensals </li>";
        }
        echo "</ul>";   
    ?>

</body>
</html>