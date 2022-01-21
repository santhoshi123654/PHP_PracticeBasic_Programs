<?php
echo "enter any alphabet :";
$x = readline();
function vowels_Consonants($x)
{
  if (
    $x == 'a' || $x == 'e' ||
    $x == 'i' || $x == 'o' ||
    $x == 'u' || $x == 'A' ||
    $x == 'E' || $x == 'I' ||
    $x == 'O' || $x == 'U'
  )
    echo "It is a Vowel" . "\n";
  else
    echo "It is a Consonant" . "\n";
}
vowels_Consonants($x);
?>