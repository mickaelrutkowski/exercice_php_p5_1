<!DOCTYPE html PUBLIC>
<html lang="fr" >
<head>
  <title>Formulaires</title>
  <meta "charset=utf-8" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  $month = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novenvbre', 'Décembre'];
  ?>
  <table>
    <tr>
      <td><?= 'mois' ?></td>
    </tr>
    <tr>
      <td><?php echo $month[0] ?></td>
    </tr>
  </table>
</body>
</html>
