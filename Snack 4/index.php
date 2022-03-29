<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

    // creo un array vuoto
    $random_numbers = [];

    // dentro a un ciclo do while creo i numeri random con la funzione rand e li inserisco dentro all'array vuoto solo se non sono giá presenti in esso
    do{
        $number = rand(1, 100);

        if(!in_array($number, $random_numbers)){
            $random_numbers[] = $number;
        }

    }while (count($random_numbers) < 15);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <?php
        for($i = 0; $i < count($random_numbers); $i++ ) {
            ?>

            <li>
                <?php echo $random_numbers[$i]; ?>
            </li>

            <?php
        }
    ?>
</body>
</html>