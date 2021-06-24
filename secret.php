<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Secured web page</title>
    </head>
    <body>
    
        <?php
        include "formulaire.php";
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou") // Si le mot de passe est bon
    {        
        include "math.php";
    ?>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
        
    </body>
</html>