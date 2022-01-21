<?php

echo "Enter any Year:";
$year = readline();

function year_check($year){
if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0))

	echo $year . " It is a Leap Year ";

else

	echo $year . " It is not a leap Year";
}
year_check($year);