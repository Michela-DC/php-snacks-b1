<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $keys = array_keys($db);
    // var_dump($keys);

    // for($i = 0; $i < count($keys); $i++) {
    //     // echo $keys[$i];

    //     $role = $keys[$i];
    //     echo $role;

    //     $person_in_role = $db[$role]; 
    //     // var_dump($person_in_role);

    //     if($role === 'teachers') {
    //         echo 'ciao';

    //         for($j = 0; $j < count($person_in_role); $j++){
    //             $current_person = $person_in_role[$j];
    
    //             echo $current_person['name']. ' '. $current_person['lastname']. '<br>';
    //         }

    //     } else{
    //         echo 'weila';

    //         for($j = 0; $j < count($person_in_role); $j++){
    //             $current_person = $person_in_role[$j];
    
    //             echo $current_person['name']. ' '. $current_person['lastname']. '<br>';
    //         }
    //     }


    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack 6</title>
</head>
<body>
<?php
    for($i = 0; $i < count($keys); $i++) {

        $role = $keys[$i];
        
        $person_in_role = $db[$role]; 
        // var_dump($person_in_role);

        if($role === 'teachers') {
            ?>
            <div class="common gray">
                <?php
                echo $role. '<br>';

                for($j = 0; $j < count($person_in_role); $j++){
                    $current_person = $person_in_role[$j];
        
                    echo $current_person['name']. ' '. $current_person['lastname']. '<br>';
                }
                ?>
            </div>
            <?php

        } else{
            ?>
            <div class="common green">
                <?php
                echo $role. '<br>';

                for($j = 0; $j < count($person_in_role); $j++){
                    $current_person = $person_in_role[$j];
        
                    echo $current_person['name']. ' '. $current_person['lastname']. '<br>';
                }
                ?>
            </div>
            <?php
        }
    }
?>

<h3>Con soluzione 2</h3>

<div class="gray common">
        <?php
            for($i = 0; $i < count($db['teachers']); $i++){
                ?>
                <div>
                    <?php echo ($db['teachers'][$i]['name']);?> 
                    <?php echo ($db['teachers'][$i]['lastname']);?> 
                </div>
                <?php
            }
        ?>
    </div>

    <div class="green common">
        <?php
            for($i = 0; $i < count($db['pm']); $i++){
                ?>
                <div>
                    <?php echo ($db['pm'][$i]['name']);?> 
                    <?php echo ($db['pm'][$i]['lastname']);?> 
                </div>
                <?php
            }
        ?>
    </div>
</body>
</html>