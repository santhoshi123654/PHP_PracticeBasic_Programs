<?php

class ReverseNumber
{
    function reverse_number()
    {
        echo "enter any number :";
        $Num = readline();
        $rev = 0;
        while ($Num != 0) {
            $remainder = $Num % 10;
            $rev = ($rev * 10) + $remainder;
            $Num = $Num / 10;
        }
        echo $rev."\n";
    }
}
$revnum = new ReverseNumber();
$revnum->reverse_number();
?>