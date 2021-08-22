<?php
    $_SESSION['dico'] = ['+','-','×'];
    $random_dico = random_int(0,2);
    $_SESSION['operation'] = $_SESSION['dico'][$random_dico];
    $_SESSION['tentatives'] = 0;
    $_SESSION['start'] = hrtime(true);
    $_SESSION['delete_gap'] = hrtime(true);
    
    $_SESSION['ArrayNiveau'] = array("facile");
    $_SESSION['facile'] = 'oui';
    $_SESSION['intermediaire'] = 'non';
    $_SESSION['difficile'] = 'non';
    $_SESSION['cauchemar'] = 'non';


    $_SESSION['ArrayOperation'] = array("addition");

    $_SESSION['addition'] = 'oui';
    $_SESSION['soustraction'] = 'non';
    $_SESSION['multiplication'] = 'non';

    

    $_SESSION['duration'] = 60;
    $_SESSION['endurance'] = 10;

if (isset($_SESSION['borneA']) && isset($_SESSION['borneB'])){
    $_SESSION['nombre_A'] = random_int($_SESSION['borneA'],$_SESSION['borneB']);
    $_SESSION['nombre_B'] = random_int($_SESSION['borneA'],$_SESSION['borneB']);
    //tant que A < B, regéner les deux opérandes
    while ($_SESSION['nombre_A'] < $_SESSION['nombre_B']){
        $_SESSION['nombre_A'] = random_int($_SESSION['borneA'],$_SESSION['borneB']);
        $_SESSION['nombre_B'] = random_int($_SESSION['borneA'],$_SESSION['borneB']);
    }
}
?>