<?php

echo "Enter the number of power values :" ;
	
$Num=readline();
function powers_of_Two($Num){
	$POWER=1;
			echo $POWER."\n" ;
			for($i=1;$i <=$Num;$i++)
			{
				$POWER*=2;
				echo $POWER."\n";
			}
}
powers_of_Two($Num);