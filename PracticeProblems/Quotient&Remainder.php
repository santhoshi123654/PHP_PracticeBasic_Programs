<?php
echo "Enter the Dividend Number :";
$Dividend_Number = readline();
echo "Enter the Divisor Number :";
$Divisor_Number = readline();
function quotient_remainder($Dividend_Number, $Divisor_Number)
{
    $quotient = $Dividend_Number / $Divisor_Number;
    $remainder = $Dividend_Number % $Divisor_Number;

    echo $quotient . " This is Quotient";
    echo "\n";
    echo $remainder . " This is remainder";
}

quotient_remainder($Dividend_Number,$Divisor_Number);
?>
