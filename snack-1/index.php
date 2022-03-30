<?php
//creare un array contenenti delle partite di basket
$partite = [
    [
    'casa' => 'Basket Lazio',
    'ospite' => 'Basket Roma',
    'punti_casa' => 45,
    'punti_ospite' => 52,
    ],
    [
    'casa' => 'Basket Catania',
    'ospite' => 'Basket Palermo',
    'punti_casa' => 60,
    'punti_ospite' => 79,
    ],
    [
    'casa' => 'Basket Milano',
    'ospite' => 'Basket Internazionale Milano',
    'punti_casa' => 75,
    'punti_ospite' => 72,
    ]
    ];
    //var_dump($partite);
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
            $partita = $partite [$i];
            ?>
            <li>
                <?php
                    echo "{$partita ['casa']} - {$partita ['ospite']} | {$partita ['punti_casa']}-{$partita ['punti_ospite']}";
                ?>
            </li>
            <?php
        };
        ?>
        
    </ul>
</body>
</html>