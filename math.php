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
            //$_SESSION['nombre_A'] = random_int(1,10);
            //$_SESSION['nombre_B'] = random_int(1,10);
            //echo "<strong>",$_SESSION['nombre_A'],"+",$_SESSION['nombre_B'],"</strong>";
            echo "<strong id='strong'>",$_SESSION['counter']," ; ",$_SESSION['nombre_A'],$_SESSION['operation'],$_SESSION['nombre_B'],"</strong>";
        ?>
        <form id='form' action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="variable" name="variable" autofocus autocomplete="off"/>
        </form>
        <?php            
            $result = $_SESSION['nombre_B']+$_SESSION['nombre_A'];
            if (isset($_POST['variable'])){
                if ($_SESSION['counter'] === 3)
                {                   
                    echo "
                    <script>
                    document.getElementById('form').style.display = 'none';
                    document.getElementById('strong').innerHTML = 'Terminé !';
                    document.body.style.background = 'green';
                    document.form.style.display = 'none';
                    </script>"; 
                }
                elseif ((int)$_POST['variable']===$result)
                {
                    echo "
                    <script>
                    document.getElementById('form').style.display = 'none';
                    document.getElementById('strong').innerHTML = 'Bien joué';
                    document.body.style.background = 'green';
                    document.form.style.display = 'none';
                    </script>";
                    $_SESSION['counter'] += 1;
                    if ($_SESSION['counter']===3)
                    {
                        header('index.php');
                    }
                    $_SESSION['nombre_A'] = random_int(1,10);
                    $_SESSION['nombre_B'] = random_int(1,10);
                    header("Refresh:2");
                }
                
                else
                {
                    header("math.php");
                    echo "<small>Wrong input…</small>";
                }
            }
            //gestion générique en cas de problème
        ?>
    </body>
</html>