<?php
class Fibonacci_Series{
    function Fibonacci($n){
  
        $num1 = 0;
        $num2 = 1;
      
        $number = 0;
        while ($number < $n){
            echo ' '.$num1;
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $number+= 1;
        }
    }
}
    echo "enter any number to get fibinocci series :";
    $n = readline();
    $fibi = new Fibonacci_Series();
    $fibi->Fibonacci($n);
    ?>