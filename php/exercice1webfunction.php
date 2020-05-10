<?php

  function affichageprenoms($prenoms)
  {
    $i=0;
    while ($i <= count($prenoms)-1)
    {
      echo "<li>$prenoms[$i]</li>";
      $i++;
    }
  }


?>
