<!-- Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/01/2022' => [
        [
            'title' => 'Post 1',
            'author' => 'Marco Lorem',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Giulia Ipsum',
            'text' => 'Iste, magnam accusantium est asperiores quos ea saepe explicabo quo libero veritatis.'
        ],
    ],
    '18/02/2022' => [
        [
            'title' => 'Post 3',
            'author' => 'Giovani Dolor',
            'text' => 'Explicabo pariatur harum, autem ab quo voluptatem eligendi mollitia, qui sapiente maxime perspiciatis!'
        ]
    ],
    '15/03/2022' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Sit',
            'text' => 'Vero repellendus vitae illum nemo in libero repellat nisi accusamus rem id?'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Clara Amet',
            'text' => 'Impedit temporibus quibusdam magnam ea minus nostrum libero tempore, dolorum repudiandae.'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Commodi repellendus quidem illum. Excepturi eaque error iste reprehenderit adipisci odit, repudiandae hic nobis atque.6'
        ]
    ],
];

$keys = array_keys($posts); //salvo le keys dell'array che nell'array post sono le date
// array_keys() returns the keys, numeric and string, from the array.

for($i = 0; $i < count($keys); $i++){

    $data = $keys[$i]; //prendo la data nella posizione corrente $i

    echo 'Data:' .$data. '<br>';

    $post_per_data = $posts[$data]; //salvo l'array con dentro i post suddivisi per data

    for($j = 0; $j < count($post_per_data); $j++){

        $post = $post_per_data[$j]; //prendo il post corrente nella data corrente
        echo $post['title']. ' - autore: ' .$post['author'] . '<br>'. $post['text']. '<br> <br>'; //concatenazione
    }
}

//Soluzione con foreach:
// foreach($posts as $key => $value){
//     echo $key. '<br>';
//     var_dump($value);

//     foreach($value as $post){ //accedo 
//         // var_dump($post);
//         foreach($post as $key => $val) {
//            echo  "$key : $val <br><br>";
//         }
//     }

// }

?>

