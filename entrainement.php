<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <?php
        include 'head.php';
    ?>

    <body>
        <?php
            if ($_SESSION['ultimate_counter']==0){
                $_SESSION['start'] = hrtime(true)+3;
            }

            if ($_SESSION['counter']!=0 && $_SESSION['counter'] != 10){
                echo $_SESSION['counter']," calculs réussis";
                echo '<br>',$_SESSION['ultimate_counter']," calculs effectués";
                echo '<br> borne A : ',$_SESSION['borneA']," | borne B : ",$_SESSION['borneB'];
                // echo '<br>';print_r($_SESSION['dico']);
            }

            echo "<strong id='strong'>",$_SESSION['nombre_A'],' ',$_SESSION['operation'],' ',$_SESSION['nombre_B'],"</strong>";
            $delete_gap = hrtime(true);
            //$start = hrtime(true); // stopwatch begins
        ?>

        <!-- form pour entrer le résultat de l'opération -->
        <form id='form' action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="variable" name="variable" autofocus autocomplete="off"/>
        </form>
        
        <?php
            // détermination du résultat en fonction du type d'opération
            if ($_SESSION['operation'] === '+'){
                $result = $_SESSION['nombre_A']+$_SESSION['nombre_B'];
            }
            elseif($_SESSION['operation'] === '-'){
                $result = $_SESSION['nombre_A']-$_SESSION['nombre_B'];
            }
            elseif($_SESSION['operation'] === '×'){
                $result = $_SESSION['nombre_A']*$_SESSION['nombre_B'];
            }
            else{
                echo "<strong>erreur pour le calcul du résultat</strong>";
            }

            if (isset($_POST['variable'])){
                // Féliciter le joueur pour avoir finit une série de calculs
                if ($_SESSION['counter'] === 2 && (int)$_POST['variable']===$result)
                {
                    echo "<img id='fireworks' src='fireworks.gif'/>";
                    echo "
                    <script>
                        document.getElementById('strong').style.display = 'none';
                        document.getElementById('form').style.display = 'none';
                        document.getElementById('strong').style.color = '#282828';
                    </script>";

                    echo "<strong id='congrats'>Félicitations</strong>";
                    $_SESSION['counter'] = 0;
                    $_SESSION['ultimate_counter'] = 0;
                    header('Refresh:8;url=menu.php');
                }

                // cas de réussite standard
                elseif ((int)$_POST['variable']===$result)
                {
                    echo "
                    <strong id='answer'>",$_SESSION['nombre_A'],' ',$_SESSION['operation'],' ',$_SESSION['nombre_B'],' = ',$result,"</strong>
                    
                    <script>
                        document.getElementById('form').style.display = 'none';
                        document.getElementById('strong').style.display = 'none';
                        document.getElementById('answer').style.color = '#282828';
                        document.body.style.background = 'green';
                    </script>
                    ";
                    $end = hrtime(true); // time's out
                    if ($_SESSION['ultimate_counter'] == 0)
                    {
                        echo round(($end - $_SESSION['start']) / 1000000000)-3, ' secondes';
                        // réduire l'écart de temps fatalement généré au premier lancement
                        // c'est dû au soucis de déclenchement du chronomètre
                    }

                    else
                    {
                        echo round(($end - $_SESSION['start']) / 1000000000)-1, ' secondes';   // Seconds
                    }
                    
                    $_SESSION['counter'] += 1;
                    $_SESSION['ultimate_counter'] += 1;
                    include 'variable.php';   // génération du nombre aléatoire
                    header("Refresh:3");
                }
                
                // gestion des erreurs : ni réussite ni fin de session
                else
                {
                    $_SESSION['ultimate_counter'] += 1;
                    echo "
                    <strong id='answer'>",$_SESSION['nombre_A'],' ',$_SESSION['operation'],' ',$_SESSION['nombre_B'],' ≠ ',$_POST['variable'],"</strong>
                    <script>
                    document.getElementById('form').style.display = 'none';
                    document.getElementById('strong').style.display = 'none';
                    document.getElementById('answer').style.color = '#282828';
                    document.body.style.background = 'orange';
                    </script>";

                    header("Refresh:3");
                }
            }
        ?>
    </body>
</html>