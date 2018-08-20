<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
<?php
  //Vérification du paramètre building de l'url
  if(!empty($_GET['building'])){
      echo $_GET['building'];
  } //Affichage des paramètres vérifiés
    else {
      echo 'Le paramètre building est manquant';
  }
  ?>
<br />
<?php
//Vérification du paramètre room de l'url
if(!empty($_GET['room'])){
      echo $_GET['room'];
  } //Affichage des paramètres vérifiés
    else {
      echo 'Le paramètre room est manquant';
  }
?>
    </p>
  </body>
</html>
