<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Pt5 - Exercice 10</title>
</head>
<body>
  <h1>Exercice 10</h1>
  <?php
  $departements = array(
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme');
    foreach ($departements as $index => $valeur) {
      echo 'Le département ' . $valeur . ' porte le numéro ' . $index . '<br />';
    }
    ?>
  </body>
  </html>
