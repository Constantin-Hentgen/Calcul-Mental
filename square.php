<?php
    include "form.php";
    //if (isset($_POST['variable']) AND ctype_digit($_POST["variable"]))
        //on vérifie que variable existe et que c'est bien un entier naturel
    $chaine_traitee = array();
    if (isset($_POST['variable']))
    {
        $array = str_split($_POST["variable"]);
        foreach($array as $char){
            if (ctype_digit($char) === false){
                if ($char === "+" || $char === "-"){
                }
                else {
                    $array = 0;
                    header("Refresh:0");
                        //en prod il faudra enlever l'affichage des erreurs
                }
            }    
        }
        $string = implode(",",$array);
        echo $string;
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