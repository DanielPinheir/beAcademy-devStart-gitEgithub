<?php

$bandas = [
  'Dream Theather',
  'Imagine Dragons',
  'You Two',
  'Pink Floid',
  'Red Hots',
];
echo "<h3>A ordem das bandas é: </h3>";
echo "<ul>";

foreach ($bandas as $cadaBanda => $value) {
  echo "<li>A banda é {$cadaBanda}.</li>";
}

for ($n = 0; $n < sizeof($bandas); $n++) {
  $numeroBanda = $n + 1;
  echo "<li>A banda número {$numeroBanda} é {$bandas[$n]}.</li>";
}

echo "</ul>";
