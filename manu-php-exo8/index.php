<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Pt5 - Exercice 8</title>
</head>

<body>
  <h1>Exercice 8</h1>
  <?php
    $months = ['Janvier','Février','Mars','Avril','Mai', 'Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
    foreach ($months as $monthNumber => $month){?>
    <!-- On affiche dans la balise <p> la clé (Key) +1 (parce qu'un tableau commence par zéro) et l'entrée correspondante -->
  <p> Le mois numéro <?= $monthNumber +1 ?> : <?= $month ?> </p>
  <!-- On ferme la boucle dans une nouvelle balise PHP -->
  <?php } ?>
</body>

</html>