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
                        //en prod il faudra enlever l'affichage des erreurs
                }
            else {}
        }

        $suggestion = (int)$_POST["variable"];
        echo $suggestion;
        if ($suggestion === $nombre_B + $nombre_A){
            echo "you're the champion !";
        }
        else{
            echo '<script type="text/javascript">','button_react();','</script>';
        }
        //echo "<strong>",$_POST["variable"],"=",(int)$_POST["variable"],"</strong>";
        //echo random_int(0,100);//génération d'un nombre aléatoire compris entre 0 et 100
    }
    elseif (isset($_POST["variable"]) == false)
    {}
    else
    {
        header("math.php");
        echo "<small>Your input is wrong, try again…</small>";
    }
?>