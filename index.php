<?php
$answer = 'no';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <?php
    if ($answer == 'yes'){
      ?>
      <p>Vous avez repondu oui</p>
      <?php
    }
    elseif ($answer == 'no'){
      ?>
      <p>Vous avez répondu non</p>
      <?php
    }
    ?>
  </body>
</html>
