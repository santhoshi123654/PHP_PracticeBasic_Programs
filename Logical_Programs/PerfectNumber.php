<?php
class PerfectNumber
{
    function Perfect_number()
    {
        echo "Enter any Number:";
        $n = readline();
        $sum = 0;
        for ($i = 1; $i < $n; $i++) {
            if ($n % $i == 0)
                $sum = $sum + $i;
        }
        if ($sum == $n)
            echo $n . " It is a perfect number.";
        else
            echo $n . " It is Not a perfect number.";
    }
}
$perNum = new PerfectNumber();
$perNum->Perfect_number();
?>