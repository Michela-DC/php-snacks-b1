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
        'voti' => [
            '7',
            '6',
            '6',
            '8',
        ]
    ],

    [
        'nome' => 'Elisa',
        'cognome' => 'Rossi',
        'voti' => [
            '7',
            '8',
            '8',
            '6',
        ]
    ],

    [
        'nome' => 'Giulia',
        'cognome' => 'Lira',
        'voti' => [
            '8',
            '8',
            '9',
            '7',
        ]
    ],
];

// for($i = 0; $i < count($alunni); $i++){
//     var_dump($alunni[$i]['nome'], $alunni[$i]['cognome']);
    
//     //ogni volta che si entra nell'array di un nuovo studente il totale e la media dei voti vanno a 0
//     $totale = 0; 
//     $media = 0;
    
//     for($j = 0; $j < count($alunni[$i]['voti']); $j++){
//         $voto = $alunni[$i]['voti'][$j];
//         var_dump($voto);

//         $totale = $totale + $voto;
//         $media = $totale / count($alunni[$i]['voti']);
//     }

//     var_dump($totale, $media);
// }

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

<?php
    for($i = 0; $i < count($alunni); $i++){
        //ogni volta che si entra nell'array di un nuovo studente il totale e la media dei voti vanno a 0
        $totale = 0; 
        $media = 0;
        
        for($j = 0; $j < count($alunni[$i]['voti']); $j++){
            $voto = $alunni[$i]['voti'][$j];
    
            $totale = $totale + $voto;
            $media = $totale / count($alunni[$i]['voti']);
        }
        ?>
        
        <li>
            Alunna/o: 
            <span> <?php echo $alunni[$i]['nome'];?> </span>
            <span> <?php echo $alunni[$i]['cognome'];?> </span>
            --> Media voti = <span> <?php echo $media;?> </span>
        </li>

        <?php
    }
?>
    
</body>
</html>