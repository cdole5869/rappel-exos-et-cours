<!-- entraînement-->
  <html>





  echo "Voulez-vous la note minimum ? 1=oui 2=non :\n";
  $reponse=fread(STDIN,80);

  $notemini=20;
  if ($reponse==1)
  {
    foreach ($tableaunotes as $note)
    {
      $notemini=$note;
    }
  }
  else
  {
    echo "Comme vous voulez\n";
  }


























  <body>
    <h1>Cool 2</h1>
    <ul>
      <li>Cyril</li>
      <li>Sofiane</li>
      <li>Nicolas</li>
    </ul>
    <ul>
    <?php
    $tableau=array('Cyril','Sofiane','Nicolas');
    foreach ($tableau as $prenom)
    {
      echo "<li>$prenom</li>";
    }
    ?>
    </ul>

    <ul>
    <?php
    $tableau=array('Cyril','Sofiane','Nicolas');
    for ($num=0;$num<count($tableau);$num++)
    {
      echo "<li>$tableau[$num]</li>";
    }
    ?>
    </ul>

    <ul>
    <?php
    $tableau=array('Cyril','Sofiane','Nicolas');
    $i= 0;
    while ($i <= 2)
    {
    echo "<li>$tableau[$i]</li>";
    $i++;
    }
    ?>
    </ul>
  </body>
  </html>
