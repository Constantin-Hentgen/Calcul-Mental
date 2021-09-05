<?php
    session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>Calcul Mental</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>

   <body>
       <p id='message'>Site de Calcul Mental</p>
       <?php
           include('variable.php');
           $_SESSION['counter'] = 0;
           $_SESSION['ultimate_counter'] = 0;
           header("Refresh:3;url=menu.php"); // menu.php
       ?>
   </body>
</html>