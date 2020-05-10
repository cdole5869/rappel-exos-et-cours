<!-- entraînement-->
  <html>
  <body>
    <h1>Cool</h1>
    <!-- Ici on cemmence le php-->
      <?php
        echo "Bonjour\n";//Toto
        /* on veut sauter une ligne
        mais en php*/
        ?>
        <br>
        <?php
        echo date('j n Y H:i');
        ?>
        <br>
        <?php
        echo date('j');
        ?>
        <br>
        <?php
        $mois=date('n');
        switch ($mois) {
    case '1':
        echo "Janvier";
        break;
    case '2':
        echo "Février";
        break;
    case '3':
        echo "Mars";
        break;
    case '4':
        echo "Avril";
        break;
    case '5':
        echo "Mai";
        break;
    case '6':
        echo "Juin";
        break;
    case '7':
        echo "Juillet";
        break;
}
        ?>
        <br>
        <?php
        echo date('Y');
        ?>
  </body>
</html>
