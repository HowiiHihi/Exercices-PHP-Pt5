<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Pt5 - Exercice 9</title>
</head>

<body>
  <h1>Exercice 9</h1>
  <?php
  $counties = [
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme'
  ];
    foreach ($counties as $countyNumber => $array){?>
  <p>Département n°<?= $countyNumber ?> : <?= $array ?></p>
  <?php } ?>
</body>

</html>