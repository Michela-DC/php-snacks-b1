<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$alunni = [
    [
        'nome' => 'Giulio',
        'cognome' => 'Bianchi',
        'voti' => [
            '9',
            '7',
            '8',
            '7',
        ]
    ],

    [
        'nome' => 'Marco',
        'cognome' => 'Verdi',
        'voti' => ['7','6','6','8',]
    ],

    [
        'nome' => 'Elisa',
        'cognome' => 'Rossi',
        'voti' => ['7','8','8','6',
        ]
    ],

    [
        'nome' => 'Giulia',
        'cognome' => 'Lira',
        'voti' => ['8','8','9','7',
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>

    <ul>
    <?php
        for($i = 0; $i < count($alunni); $i++){

            $studente = $alunni[$i];
            $voti = $studente['voti'];
            $media = array_sum($voti) / count($alunni);
            
            ?>
            
            <li> 
                <?php 
                echo 'Alunna/o: '. $studente['nome']. ' '. $studente['cognome']. '--> Media voti = '. $media;
                ?> 
            </li>
        
            <?php
        }
    ?>
    </ul>
    
</body>
</html>