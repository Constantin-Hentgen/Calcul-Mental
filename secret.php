<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Secured web page</title>
    </head>
    <body>
    
        <?php
        echo "<p>Enter the password</p>";
    if (isset($_POST['variable']) AND $_POST['variable'] == "test") // Si le mot de passe est bon
    {
        header("Location:math.php");
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