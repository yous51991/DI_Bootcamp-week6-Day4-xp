<?php
$month = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');

$index = array_search("Avril", $month);

if ($index) {
    array_splice($month, $index, 1);
  }
foreach ($month as $key => $value) {
    echo $value."\n";
  }
?>
