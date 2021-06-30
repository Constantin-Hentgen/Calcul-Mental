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
            echo "<strong id='strong'>",$_SESSION['nombre_A'],' ',$_SESSION['operation'],' ',$_SESSION['nombre_B'],"</strong>";
            ?>
        <form id='form' action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="variable" name="variable" autofocus autocomplete="off"/>
        </form>
           
        <?php            
            $result = $_SESSION['nombre_B']+$_SESSION['nombre_A'];
            if (isset($_POST['variable'])){
                if ($_SESSION['counter'] === 10)
                {                   
                    echo "
                    <script>
                    document.getElementById('form').style.display = 'none';                 
                    document.getElementById('strong').innerHTML = 'Terminé !';
                    document.getElementById('strong').style.color = '#282828';
                    document.body.style.background = 'green';
                    document.form.style.display = 'none';
                    </script>"; 

                    header('Refresh:2;url=index.php');
                }
                elseif ((int)$_POST['variable']===$result)
                {
                    echo "                    
                    <strong id='answer'>",$_SESSION['nombre_A'],' ',$_SESSION['operation'],' ',$_SESSION['nombre_B'],' = ',$result,"</strong>
                    <img id='valide' src='valide.png'/>
                    <script>
                    document.getElementById('form').style.display = 'none';
                    document.getElementById('valide').style.display = 'flex';
                    document.getElementById('strong').style.display = 'none';
                    document.getElementById('answer').style.color = '#282828';
                    document.body.style.background = 'green';
                    document.form.style.display = 'none';
                    </script>
                    ";
                    //echo "<strong id='strong'>",$_SESSION['nombre_A'],' ',$_SESSION['operation'],' ',$_SESSION['nombre_B'],"</strong>"," = ",$result;
                    $_SESSION['counter'] += 1;
                    $_SESSION['nombre_A'] = random_int(1,10);
                    $_SESSION['nombre_B'] = random_int(1,10);
                    header("Refresh:2");
                }
                
                else
                {
                    echo "<img id='cross' src='cross.png'/>
                    <script>
                    document.getElementById('form').style.display = 'none';
                    document.getElementById('cross').style.display = 'flex';
                    document.getElementById('strong').style.display = 'none';
                    document.getElementById('answer').style.color = '#282828';
                    document.body.style.background = 'red';
                    document.form.style.display = 'none';
                    </script>
                    ";
                    header("Refresh:2;url=math.php");
                }
            }
            //gestion générique en cas de problème
            ?>
    </body>
</html>