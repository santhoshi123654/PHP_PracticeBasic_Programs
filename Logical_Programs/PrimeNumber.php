<?php
class PrimeNumber
{
    function primenumber()
    {
     echo "enter any number :";
     $Number=readline();
     $isPrime = true;
	 for($i=2;$i<=$Number/2;$i++)
	 {
		if($Number % $i == 0)
		{
	        $isPrime=false;
			
		 }
	 }
	 if($isPrime)
	 {
		echo $Number." It is a Prime Number ";
	 }
	 else
	 {
		 echo $Number." It is Not a Prime Number ";
	 }
    }
}
$primeNum = new PrimeNumber();
$primeNum->primenumber();
?>