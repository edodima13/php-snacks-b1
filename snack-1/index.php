<?php
//creare un array contenenti delle partite di basket
$partite = [
    [
    'casa' => 'Basket Lazio',
    'ospite' => 'Basket Roma',
    'punti_casa' => 45,
    'punti_opsite' => 52,
    ],
    [
    'casa' => 'Basket Catania',
    'ospite' => 'Basket Palermo',
    'punti_casa' => 60,
    'punti_opsite' => 79,
    ],
    [
    'casa' => 'Basket Milano',
    'ospite' => 'Basket Internazionale Milano',
    'punti_casa' => 75,
    'punti_opsite' => 72,
    ]
    ];
?>
<?php
//stampare a schermo con un ciclo for nel seguente schema: Olimpia Milano- Cantù | 55-60
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        for($i = 0; $i < count($partite); $i++){
            ?>
            <li>Lazio - Roma | 45-52</li>
            <?php
        }
        ?>
        
    </ul>
</body>
</html>