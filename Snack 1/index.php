<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano- Cantù | 55-60 -->

<?php

$partite = [
    [
        'casa' => 'Basket Milano',
        'ospite' => 'Basket Roma',
        'punti_casa' => 45,
        'punti_ospite' => 21,
    ],

    [
        'casa' => 'Basket Palermo',
        'ospite' => 'Basket Firenze',
        'punti_casa' => 78,
        'punti_ospite' => 81,
    ],

    [
        'casa' => 'Basket Bologna',
        'ospite' => 'Basket Pavia',
        'punti_casa' => 82,
        'punti_ospite' => 89,
    ],

    [
        'casa' => 'Basket Napoli',
        'ospite' => 'Basket Perugia',
        'punti_casa' => 85,
        'punti_ospite' => 77,
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
    <h3>Giornata del 29/03/2022</h3>
    
    <ul>
        <?php 
            for($i = 0; $i < count($partite); $i++) {
                ?>
                <li>
                    <?php echo $partite[$i]['casa'];?> - 
                    <?php echo $partite[$i]['ospite'];?> |
                    <?php echo $partite[$i]['punti_casa'];?> - 
                    <?php echo $partite[$i]['punti_ospite'];?> 
                </li>
                <?php
            }
        ?>
    </ul>

    <h3>Con interpolazione:</h3>
    
    <ul>
        <?php 
            for($i = 0; $i < count($partite); $i++) {
                ?>
                <li>
                    <?php echo "{$partite[$i]['casa']} - {$partite[$i]['ospite']} | {$partite[$i]['punti_casa']} - {$partite[$i]['punti_ospite']}";?> 
                </li>
                <?php
            }
        ?>
    </ul>

</body>
</html>
