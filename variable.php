<?php
    $_SESSION['nombre_A'] = random_int(1,10);
    $_SESSION['nombre_B'] = random_int(1,10);

    //tant que A < B, regéner les deux opérandes
    while ($_SESSION['nombre_A'] < $_SESSION['nombre_B']){
        $_SESSION['nombre_A'] = random_int(1,10);
        $_SESSION['nombre_B'] = random_int(1,10);
    }

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
?>