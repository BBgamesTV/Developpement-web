<?php


function calculer_moyenne($tableau) {
    $somme = 0;

    foreach ($tableau as $valeur) {
        $somme += $valeur;
    }
    $moyenne = $somme / count($tableau);

    return $moyenne;
}

function calculer_max($tableau) {
    $max = $tableau[0];
    for ($i = 0; $i < count($tableau); $i++) {
        if ($tableau[$i] > $max) {
            $max = $tableau[$i];
        }
    }
    return $max;
}

function calculer_min($tableau) {
    $min = $tableau[0];
    for ($i = 0; $i < count($tableau); $i++) {
        if ($tableau[$i] < $min) {
            $min = $tableau[$i];
        }
    }
    return $min;
}




?>