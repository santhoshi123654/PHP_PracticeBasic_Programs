<?php
function roots($a, $b, $c)
{
  $distance = $b * $b - 4 * $a * $c;
  if ($distance >= 0) {
    $x1 = (-$b + sqrt($distance)) / (2 * $a);
    $x2 = (-$b - sqrt($distance)) / (2 * $a);
    echo "Roots are: $x1, $x2 \n";
  } else {
    $x1 = -$b / (2 * $a);
    $x2 = sqrt(-$distance) / (2 * $a);
    echo "Roots are: $x1 ± $x2 i \n";
  }
}
echo "Equation is x*x+6x+7=0\n";
roots(1, 6, 7);
echo "\nEquation is x*x+x+3=0\n";
roots(1, 1, 3);
?>