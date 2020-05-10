<!-- entraînement-->
  <html>
  <body>
    <h1> <?php echo date('d F Y')?> </h1>

      <!--Je veux mes tableaux en boucle-->

        <?php
          require ('exercice1webfunction.php');

          $prenoms=array ('Toto','Tata','Tutu');
          $resultatsfonction=affichageprenoms($prenoms);



        ?>


  </body>
</html>
