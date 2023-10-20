<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($piso=0; $piso<=5; $piso++){
            for($room=1; $room<10; $room++){
                $huespedes = rand(0, 4);
                if ($huespedes == 0) {
                    echo "<li> A l'habitació " . $room . " de la planta " . $piso . " està buida </li>";
                } elseif ($huespedes == 4) {
                    echo "<li> A l'habitació " . $room . " de la planta " . $piso . " està plena </li>";
                } else {
                    echo "<li> A l'habitació " . $room . " de la planta " . $piso . " te " . $huespedes . "</li>";
                }
            }
            
        }
    ?>
</body>
</html>