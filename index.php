<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
<?php
/*Vérification des paramètres de l'url*/
  if(isset($_GET['building']) && isset($_GET['room'])){
    /*Affichage des paramètres vérifiés*/
    echo $_GET['building']
?>
<br />
<?php
    echo $_GET['room'];
  }
?>
    </p>
  </body>
</html>
