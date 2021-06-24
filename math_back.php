<?php
    if (isset($_POST['variable'])) // Si le variable existe
    {
        $variable = $_POST["variable"];
    ?>
        <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Secured web page</title>
    </head>
    <?php
        echo $variable*$variable;    
}

    else
    {
        echo "there is a problem";
    }
    
?>