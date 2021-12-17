<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    $db_keys = array_keys($db);
    // var_dump($db_keys);


    ?>

    <div style="display: flex; justify-content: center">
        <div style="background: grey; width: 400px; padding: 16px; margin-right: 10px">
            <h2><?php echo $db_keys[0] ?></h2>
            <?php 
                for ($i = 0; $i < count($db[$db_keys[0]]); $i++) {
                    echo $db[$db_keys[0]][$i]['name'].' ';
                    echo $db[$db_keys[0]][$i]['lastname'].'<br>';

                }
            ?>
        </div>
        <div style="background: green; width: 400px; padding: 16px">
            <h2><?php echo $db_keys[1] ?></h2>
            <?php 
                for ($i = 0; $i < count($db[$db_keys[0]]); $i++) {
                    echo $db[$db_keys[1]][$i]['name'].' ';
                    echo $db[$db_keys[1]][$i]['lastname'].'<br>';

                }
            ?>
        </div>
    </div>
</body>
</html>
