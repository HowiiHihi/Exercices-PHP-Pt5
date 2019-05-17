<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Pt5 - Exercice 7</title>
</head>
<body>
  <h1>Exercice 7</h1>
  <?php
  $addDepartement = 'Marne';
  $departements = array(
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme');
    echo '<pre>';
    print_r($departements) . '</pre>';
    $departements[51] = $addDepartement;
    echo '<pre>';
    print_r($departements) . '</pre>';
    ?>
  </body>
  </html>
