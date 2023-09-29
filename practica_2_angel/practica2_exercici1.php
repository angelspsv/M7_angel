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
            if ($arrayTaules[$mesa] == 0) {
                echo "<li> La taula " . $mesa . " està buida </li>";
            } elseif ($arrayTaules[$mesa] == 5) {
                echo "<li> La taula " . $mesa . " està plena </li>";
            } else {
                echo "<li> La taula " . $mesa . " té " . $arrayTaules[$mesa] . " comensals </li>";
            }
        }
        echo "</ul>";   
    ?>

</body>
</html>