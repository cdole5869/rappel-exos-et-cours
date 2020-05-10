<?php
session_start();

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['tel'] = $_POST['tel'];
$_SESSION['mail'] = $_POST['mail'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> TP 8 </title>
  </head>
  <body>
    <h1>TP 8</h1>
    <div class="formulaire">
      <span>Informations</span>
        <form method="POST" action="tp8.php">
          <ol>
            <li><input type="text" name="nom" required placeholder="Votre nom"></li>
            <li><input type="text" name="tel" required placeholder="Votre n° de téléphone"></li>
            <li><input type="text" name="mail" required placeholder="Votre e-mail"></li>
            <input type="submit" value="Toto">
            <input type="submit" value="Annuler">
          </ol>
        </form>
        <?php
          echo "Bonjour";
          echo ' ';
          echo $_SESSION['nom'];
          echo ' ';
          echo "votre n° de téléphone est le";
          echo ' ';
          echo $_SESSION['tel'];
          echo ' ' ;
          echo "et votre e-mail est :";
          echo $_SESSION['mail'];
          session_destroy();
        ?>
    </div>
  </body>
</html>
