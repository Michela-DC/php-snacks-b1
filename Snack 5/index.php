<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php

$text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, qui maxime consectetur odio assumenda eligendi laborum autem animi cupiditate quaerat ullam, harum libero. Aut, corrupti? Placeat nulla odit ut hic dolor obcaecati? Ratione labore molestias sed, ipsum eius accusamus ipsa, laboriosam rem quisquam vitae reiciendis alias velit debitis obcaecati porro magnam? Rem, officiis debitis. Reiciendis ipsum aspernatur deleniti corporis odit voluptatem illum illo est? Odit possimus doloremque quo illum officia maxime, nisi eaque nam? Labore illum quasi non expedita ullam quod dignissimos blanditiis pariatur eligendi. Beatae consequuntur, suscipit, vero tenetur ullam architecto doloremque aliquam blanditiis accusamus explicabo minus, libero quasi.';

$paragraphs = explode(".", $text); 
//Explode = Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator.
var_dump($paragraphs);

// Altra soluzione usando preg_split = split the given string by a regular expression:
// $paragraphs = preg_split("/[.]/", $text);
// $paragraphs = preg_split('~(?<=\.)\s~', $text, -1, PREG_SPLIT_NO_EMPTY); --> se voglio mantenere i punti

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <?php
        for($i = 0; $i < count($paragraphs); $i++ ) {
            ?>
            <p>
                <?php echo $paragraphs[$i]; ?>
            </p>
            <?php
        }
    ?>
</body>
</html>