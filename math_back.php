<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Computing with Safety</title>
    </head>

<?php
    if (isset($_POST['variable']) AND ctype_digit($_POST["variable"])) // Si le variable existe
    {
        echo $_POST["variable"]*$_POST["variable"];
        //echo random_int(0,100);
        echo "<a href='math.php'>Let's compute more squares !</a>";
    }

    else
    {
        include "math.php";
        echo "<small>Your input is wrong, try again…</small>";
    }

?>