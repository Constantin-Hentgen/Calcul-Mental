<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Secured web page</title>
    </head>

<?php
    if (isset($_POST['variable'])) // Si le variable existe
    {
        echo $_POST["variable"]*$_POST["variable"];
        echo "<a href='index.php'>Let's compute more squares !</a>";
    }

    else
    {
        echo "Your input is wrong, try again…";
        include "math.php";
    }

?>