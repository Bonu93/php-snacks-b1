<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php

    $rand_numbers = [];
    $rand_numbers_length = 15;

    while(count($rand_numbers) < $rand_numbers_length) {
        $newInt = rand(1, 100);

        if (!in_array($newInt, $rand_numbers)) {
            $rand_numbers[] = $newInt;
        }
    }

    var_dump($rand_numbers);




?>