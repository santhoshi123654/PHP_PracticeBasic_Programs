<?php

echo "Enter the Value of num1 :" ;
$num1=readline();
echo "Enter the Value of num2 :" ;
$num2=readline();
function swapping_Numbers($num1,$num2){
    $temp=$num1;
	$num1=$num2;
	$num2=$temp;
	
	echo $num1. " num1 after Swapping \n";
    echo $num2. " num2 after Swapping ";
}
swapping_Numbers($num1,$num2);

?>