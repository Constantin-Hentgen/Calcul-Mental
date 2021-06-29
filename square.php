<?php
    $nombre_A = random_int(1,10);
    $nombre_B = random_int(1,10);
    echo "<strong>",$nombre_A,"+",$nombre_B,"</strong>";

    include "form.php";

    //if (isset($_POST['variable']) AND ctype_digit($_POST["variable"]))
        //on vérifie que variable existe et que c'est bien un entier naturel
    $chaine_traitee = array();
    if (isset($_POST['variable']))
    {
        $array = str_split($_POST["variable"]);
        foreach ($array as $char){
            if (ctype_digit($char) === false){
                    $array = 0;
                    header("Refresh:0");
                    break;
                        //on gère les cas de caratères non chiffre
                        //en prod il faudra enlever l'affichage des erreurs
                }
        }

        echo '<script type="text/javascript">','addition_verification(',$nombre_A,',',$nombre_B,',',$_POST["variable"],');','</script>';
        //echo "<strong>",$_POST["variable"],"=",(int)$_POST["variable"],"</strong>";
        //echo random_int(0,100);//génération d'un nombre aléatoire compris entre 0 et 100
    }
    else
    {
        header("math.php");
        echo "<small>Your input is wrong, try again…</small>";
    }
?>