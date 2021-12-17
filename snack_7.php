<!-- Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 

$class = [

    [
        'name' => 'Pierfrancesco',
        'lastname' => 'Scarinci',
        'votes' => [
           'math' => rand(1, 10), 
           'italian' => rand(1, 10),
           'coding' => rand(1, 10),
           'english' => rand(1, 10),
        ]
    ],

    [
        'name' => 'Luca',
        'lastname' => 'Morucci',
        'votes' => [
           'math' => rand(1, 10), 
           'italian' => rand(1, 10),
           'coding' => rand(1, 10),
           'english' => rand(1, 10),
        ]
    ],

    [
        'name' => 'Francesco',
        'lastname' => 'Marino',
        'votes' => [
           'math' => rand(1, 10), 
           'italian' => rand(1, 10),
           'coding' => 9,
           'english' => rand(1, 10),
        ]
    ],
];


// var_dump($class);

for ($i = 0; $i < count($class); $i++) {
    echo $class[$i]['name'].' ';
    echo $class[$i]['lastname'].'  ';
    $votes_sum = 0;
    $votes_keys = array_keys($class[$i]['votes']);
    for ($index = 0; $index < count($votes_keys); $index++) {
        $votes_sum += $class[$i]['votes'][$votes_keys[$index]];
    }
    $votes_middle = $votes_sum / count($class[$i]['votes']);

    echo 'Media: '.$votes_middle.'<br>';
}

?>