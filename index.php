<?php
// on déclare notre fonction
function text($phrase,$element)
{
// on retourne le paramètre
  return $phrase . ' ' . $element;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 4 exo 2</title>
</head>
<body>
  <?php
// si on affiche le paramètre
// echo de la variable
  $word = text('Ceci est une chaîne de caractères.','Ceci est une seconde chaîne de caractères'); ?>
  <p> <?php echo $word;?> </p>
  </body>
</html>
