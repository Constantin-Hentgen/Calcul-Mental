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
          <div class="selection"><input class='checkbox' type="checkbox" name="facile" value="Oui" <?php echo ($_SESSION['facile']=='oui' ? 'checked' : '');?>>Facile</div>
          <div class="selection"><input class='checkbox' type="checkbox" name="intermediaire" value="Oui" <?php echo ($_SESSION['intermediaire']=='oui' ? 'checked' : '');?>>Intermédiaire</div>
          <div class="selection"><input class='checkbox' type="checkbox" name="difficile" value="Oui" <?php echo ($_SESSION['difficile']=='oui' ? 'checked' : '');?>>Difficile</div>
          <div class="selection"><input class='checkbox' type="checkbox" name="cauchemar" value="Oui" <?php echo ($_SESSION['cauchemar']=='oui' ? 'checked' : '');?>>Cauchemar</div>
        </div>
      <hr/>

      <h3>Type d'opération</h3>
      
      <div class="alin">
        <div class="selection"><input id='addition' class='checkbox' type="checkbox" name="addition" value="Oui" <?php echo ($_SESSION['addition']=='oui' ? 'checked' : '');?>>Addition</div>
        <div class="selection"><input class='checkbox' type="checkbox" name="soustraction" value="Oui" <?php echo ($_SESSION['soustraction']=='oui' ? 'checked' : '');?>>Soustraction</div>
        <div class="selection"><input class='checkbox' type="checkbox" name="multiplication" value="Oui" <?php echo ($_SESSION['multiplication']=='oui' ? 'checked' : '');?>>Multiplication</div>
      </div>

        <hr/>

        <div class="alin">
          <div class='reverse'>
            <label for="quantity">Temps contre la montre en secondes | </label>
            <input id='duree' type="number" id="quantity" name="duration" min="1" value=<?php if (isset($_SESSION['duration'])){echo $_SESSION['duration'];}else{echo '1';}?>>
          </div>
        
          <div class='reverse'>
            <label for="quantity">Objectif de calculs en endurance | </label>
            <input id='duree' type="number" id="quantity" name="endurance" min="1" value=<?php if (isset($_SESSION['endurance'])){echo $_SESSION['endurance'];}else{echo '1';}?>>
          </div>
        </div>
        
        <input id='validation' type="submit" name="formSubmit" value="Valider ✅" />

        <?php
          if(isset($_POST['formSubmit']))
          {
            header('Location:menu.php');
          }
        ?>
      </form>
    </body>

      <?php
      if (isset($post['duration']))
      {
        $_SESSION['duration'] = $_POST['duration'];
      }

      if (isset($_POST['endurance'])){
        $_SESSION['endurance'] = $_POST['endurance'];
      }

        if (isset($_POST['facile']) && $_POST['facile'] == 'Oui') 
        {
          $_SESSION['facile'] = 'oui';
        }

        else
        {
          $_SESSION['facile'] = 'non';
        }

        if (isset($_POST['intermediaire']) && $_POST['intermediaire'] == 'Oui') 
        {
          $_SESSION['intermediaire'] = 'oui';
        }

        else
        {
          $_SESSION['intermediaire'] = 'non';
        }

        if (isset($_POST['difficile']) && $_POST['difficile'] == 'Oui') 
        {
          $_SESSION['difficile'] = 'oui';
        }

        else
        {
          $_SESSION['difficile'] = 'non';
        }

        if (isset($_POST['cauchemar']) && $_POST['cauchemar'] == 'Oui') 
        {
          $_SESSION['cauchemar'] = 'oui';
        }

        else
        {
          $_SESSION['cauchemar'] = 'non';
        }

        if (isset($_POST['addition']) && $_POST['addition'] == 'Oui') 
        {
          $_SESSION['addition'] = 'oui';
        }

        else
        {
          $_SESSION['addition'] = 'non';
        }

        if (isset($_POST['soustraction']) && $_POST['soustraction'] == 'Oui') 
        {
          $_SESSION['soustraction'] = 'oui';
        }

        else
        {
          $_SESSION['soustraction'] = 'non';
        }

        if (isset($_POST['multiplication']) && $_POST['multiplication'] == 'Oui') 
        {
          $_SESSION['multiplication'] = 'oui';
        }

        else
        {
          $_SESSION['multiplication'] = 'non';
        }

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
</html>