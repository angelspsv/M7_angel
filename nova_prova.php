//fitxer de prova amb php i html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><b>Llista de la compra</b></p>
    <?php 
        $item1=1;
        $item2=3;
        $item3=6;
    ?>    
    <ul>
        <li>pa: <?php echo $item1; ?></li>
        <li>patates: <?php echo $item2; ?></li>
        <li>ous: <?php echo $item3; ?></li>
    </ul>
</body>
</html>