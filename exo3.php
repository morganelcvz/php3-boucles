<?php

for ($x = 2020; $x <= 2025; $x++) {
  echo "$x <br>";
}

echo "<br>";

for ($x = 10; $x >= 1; $x--) {
    echo "$x <br>";
  }
  
  echo "<br>";

for ($x = 0; $x <= 99; $x++) {
    if ($x%2 == 0) continue; 
    echo "$x <br>";
  }