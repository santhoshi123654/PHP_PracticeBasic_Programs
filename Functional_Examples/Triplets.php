
<?php

function triplet_num($A, $arr_size, $sum)
{
    for ( $i = 0;   $i < $arr_size - 2;  $i++)
    {
        for ($j = $i + 1;$j < $arr_size - 1;    $j++)
        {
            for ($k = $j + 1;$k < $arr_size;$k++)
             {
                if ($A[$i] + $A[$j] +$A[$k] == $sum) 
                {
                    echo "Triplet is", " ", $A[$i], ", ", $A[$j], ", ", $A[$k];
                    return true;
                }
            }
        }
    }
    // if no triplet was found
   echo "No Triplet";
}
$A = array(1,-2,3,6,-5,-1);
$sum = 0;
$arr_size = sizeof($A);

triplet_num($A, $arr_size, $sum);

?>
