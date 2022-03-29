<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

    <?php

        if(isset ($_GET['name']) && isset ($_GET['email']) && isset ($_GET['age']) ){

            $name = $_GET['name'];
            $email = $_GET['email'];
            $age = $_GET['age'];
            var_dump($age);

            $length = strlen($name);
            $has_dot = strpos($email, '.'); // strpos() function is used to find the occurrence of one string inside another one
            $has_at = strpos($email, '@'); 
            $is_number = intval($age);// intval — Get the integer value of a variable
            var_dump($is_number);
            // oppure potevo fare $is_number = is_nan($age); e come condizione mettere !$is_number perché is_nan — Finds whether a value is not a number

            if($length && $has_dot && $has_at && $is_number){
                ?>
                <h3>Accesso riuscito!</h3>
                <?php

            } else {
                ?>
                <h3>Accesso negato!</h3>
                <?php
            }
        }else{
            ?>
            <h3>Effettua l'accesso...</h3>
            <?php
        }

    ?>
    
</body>
</html>