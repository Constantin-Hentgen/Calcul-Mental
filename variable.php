<?php
    $borneA = 0;
    $borneB = 0;

    $dico = ['+','-','×'];
    $dico_picker = random_int(0,2);
    $_SESSION['operation'] = $dico[$dico_picker];
    $_SESSION['tentatives'] = 0;
    $_SESSION['start'] = hrtime(true);
    $_SESSION['delete_gap'] = hrtime(true);

    $_SESSION['facile'] = 'oui';
    $_SESSION['intermediaire'] = 'non';
    $_SESSION['difficile'] = 'non';
    $_SESSION['cauchemar'] = 'non';

    $_SESSION['addition'] = 'oui';
    $_SESSION['soustraction'] = 'non';
    $_SESSION['multiplication'] = 'non';

    $_SESSION['duration'] = 60;
    $_SESSION['endurance'] = 10;

    // $possiblities = [];

    // if ($_SESSION['facile']=='oui')
    // {
    //     $possiblities+= 'facile';
    // }
    // else{

    // }

    // elseif ($_SESSION['intermediaire']=='oui')
    // {
    //     $possiblities+= 'intermediaire';
    // }

    // elseif ($_SESSION['difficile']=='oui'){
    //     $possiblities+='difficile';
    // }
    // elseif ($_SESSION['cauchemar']=='oui'){
    //     $possiblities+='cauchemar';
    // }
    // else{}

    //$possiblities = implode(',',array_unique(explode(',', $possiblities)));
    //suppression des doublons dans la chaîne de caractères

    $_SESSION['nombre_A'] = random_int(1,9);
    $_SESSION['nombre_B'] = random_int(1,9);

    //tant que A < B, regéner les deux opérandes
    while ($_SESSION['nombre_A'] < $_SESSION['nombre_B']){
        $_SESSION['nombre_A'] = random_int(1,9);
        $_SESSION['nombre_B'] = random_int(1,9);
    }
?>