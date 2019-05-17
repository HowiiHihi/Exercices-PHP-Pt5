<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Pt5 - Exercice 4</title>
</head>
<body>
  <h1>Exercice 4</h1>
  <?php
  $replaceMonth = 'Août';
  $months[] = 'Janvier';
  $months[] = 'Février';
  $months[] = 'Mars';
  $months[] = 'Avril';
  $months[] = 'Mai';
  $months[] = 'Juin';
  $months[] = 'Juillet';
  $months[] = 'Aout';
  $months[] = 'Septembre';
  $months[] = 'Octobre';
  $months[] = 'Novembre';
  $months[] = 'Décembre';
  $months[7] = $replaceMonth;
  echo '<pre>';
  print_r($months) . '</pre>';
  ?>
</body>
</html>
