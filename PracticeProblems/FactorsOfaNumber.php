<?php
    
    echo "Enter any Number: ";
        
       $Num = readline();
        function factors_of_Number($Num){
        for($i = 1; $i <= $Num; $i++)
        {
            if($Num % $i == 0)
            {
                echo $i."\n";
                
            }
        }
    }
    factors_of_Number($Num);
