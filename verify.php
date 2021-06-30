<?php
    if (isset($_POST['variable']) AND $_POST['variable'] == "test")
    {
        header("Location:math.php");
    }
    elseif (isset($_POST["variable"]) == false)
    {}
    else
    {
        echo "<p>Mot de passe incorrect</p>";
    }
?>