<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Pt5 - Exercice 6</title>
</head>

<body>
  <h1>Exercice 6</h1>
  <?php
    $counties = [
      '02' => 'Aisne',
      '59' => 'Nord',
      '60' => 'Oise',
      '62' => 'Pas-de-Calais',
      '80' => 'Somme'
    ];
  ?>
  <p>Le département numéro 59 est le <?= $counties['59'] ?></p>
</body>

</html>