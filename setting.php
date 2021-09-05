<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <?php
        include 'head.php';

        // echo $_SESSION['facile'];
        // echo '<br>';
        // echo $_SESSION['intermediaire'];
        // echo '<br>';
        // echo $_SESSION['difficile'];
        // echo '<br>';
        // echo $_SESSION['cauchemar'];
        // echo '<br>';
        // echo $_SESSION['addition'];
        // echo '<br>';
        // echo $_SESSION['soustraction'];
        // echo '<br>';
        // echo $_SESSION['multiplication'];
    ?>


    <body>
      <h1 id='specialtitle'>Préférences</h1>
  
      <h2>Difficulté</h3>
      
      <form action="" method="post" id="categorie">
        <div class="alin">
          <div class='selection'>
            <input type="radio" name="difficulte_facile" id="diff" value="Facile" />
            <label for="diff">Facile</label>
          </div>

          <div class='selection'>
            <input type="radio" name="difficulte_intermediaire" id="diff" value="Intermediaire" />
            <label for="diff">Intermediaire</label>
          </div>

          <div class='selection'>
            <input type="radio" name="difficulte_difficile" id="diff" value="Difficile" />
            <label for="diff">Difficile</label>
          </div>

          <div class='selection'>
            <input type="radio" name="difficulte_cauchemar" id="diff" value="Cauchemar" />
            <label for="diff">Cauchemar</label>
          </div>
        </div>

        <?php 
          if (isset($_POST['difficulte_facile']) && $_POST['difficulte_facile'] = 'Facile'){
            $_SESSION['facile'] = 'oui';
            echo "<script>alert('entrée de condition')</script>";
          }else{
            $_SESSION['facile'] = 'non';
          }

          if (isset($_POST['difficulte_intermediaire']) && $_POST['difficulte_intermediaire'] = 'Intermediaire'){
            $_SESSION['intermediaire'] = 'oui';
          }else{
            $_SESSION['intermediaire'] = 'non';
          }

          if (isset($_POST['difficulte_difficile']) && $_POST['difficulte_difficile'] ='Difficile'){
            $_SESSION['difficile'] = 'oui';
          }else{
            $_SESSION['difficile'] = 'non';
          }

          if (isset($_POST['difficulte_cauchemar']) && $_POST['difficulte_cauchemar'] = 'Cauchemar'){
            $_SESSION['cauchemar'] = 'oui';
          }else{
            $_SESSION['cauchemar'] = 'non';
          }
        ?>

        <div class="alin">
          <div class='reverse'>
            <label for="quantity">Temps contre la montre en secondes</label>
            <input id='duree' type="number" id="quantity" name="duration" min="1" value=<?php if (isset($_SESSION['duration'])){echo $_SESSION['duration'];}else{echo '1';}?>>
          </div>
        
          <div class='reverse'>
            <label for="quantity">Objectif de calculs en endurance</label>
            <input id='duree' type="number" id="quantity" name="endurance" min="1" value=<?php if (isset($_SESSION['endurance'])){echo $_SESSION['endurance'];}else{echo '1';}?>>
          </div>
        </div>
        
        <input id='validation' type="submit" name="formSubmit" value="🎮" />

        <?php
          if(isset($_POST['formSubmit']))
          {
            header('Location:menu.php');
          }
        ?>
      </form>
    </body>

      <?php
        if (isset($_POST['duration']))
        {
          $_SESSION['duration'] = $_POST['duration'];
        }else{
          $_SESSION['duration'] = 60;
        }

        if (!isset($_POST['facile'])) 
        {
          $_SESSION['facile'] = 'oui';
          $_SESSION['borneA'] = 1;
          $_SESSION['borneB'] = 9;
        }else{
          $_SESSION['facile'] = 'non';
        }

        if (isset($_POST['diff']) && $_POST['diff'] == 'Oui') 
        {
          $_SESSION['intermediaire'] = 'oui';
          $_SESSION['borneA'] = 11;
          $_SESSION['borneB'] = 99;
        }else{
          $_SESSION['intermediaire'] = 'non';
        }

        if (isset($_POST['difficile']) && $_POST['difficile'] == 'Oui') 
        {
          $_SESSION['difficile'] = 'oui';
          $_SESSION['borneA'] = 111;
          $_SESSION['borneB'] = 999;
        }else{
          $_SESSION['difficile'] = 'non';
        }

        if (isset($_POST['cauchemar']) && $_POST['cauchemar'] == 'Oui') 
        {
          $_SESSION['cauchemar'] = 'oui';
          $_SESSION['borneA'] = 1111;
          $_SESSION['borneB'] = 9999;
        }else{
          $_SESSION['cauchemar'] = 'non';
        }
      ?>
</html>