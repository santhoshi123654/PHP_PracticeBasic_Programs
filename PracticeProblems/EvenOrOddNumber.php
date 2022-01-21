<?php

echo "Enter any Number :";
$Num = readline();
function is_even_or_Odd($Num)
{
	if ($Num % 2 == 0)
		echo $Num . " This number is EVEN NUMBER ";
	else
		echo $Num . " This number is ODD NUMBER";
}
is_even_or_Odd($Num);
?>