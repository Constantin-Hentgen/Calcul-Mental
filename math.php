<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Secured web page</title>
    </head>
    <body>
    
        <?php
        include "formulaire.php";
    if (isset($_POST['nombre']) AND $_POST["nombre"] != 0) // Si le nombre existe
    {
        $nombre = $_POST["nombre"];
        echo $nombre*$nombre;
    // On affiche les codes
    
    ?>
    <form action="math.php" method="post">
        <p>
        <input type="nombre" name="nombre" />
        <input type="submit" value="Valider" />
        </p>
    </form>;
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
        
    </body>
</html>