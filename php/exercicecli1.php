<?php
  echo "Bonjour, quel est le nombre de notes à saisir ?\n";
  $nombredenotes=fread(STDIN,80);

  $tableaunotes[0]=0;

  for($num=0;$num<$nombredenotes;$num++)
  {
    echo "Sasir la note \n";
    $note=fread(STDIN,80);
    $tableaunotes[$num]=$note;
  }
    print_r($tableaunotes);

?>
