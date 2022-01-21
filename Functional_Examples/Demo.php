<?php
//do while loop

$x = 1;  
    do {  
        echo "Hello World \n";  
        $x++;  
    } while ($x < 10); 


//while loop
    $x=1;

while($x<=10){
    echo $x."\n";
    $x++;
}


//for loop
$n=5;
for($i=1;$i<=$n;$i++){
    echo "hello world \n";
}



//for each loop

$names= array("abc","def","hij");
foreach($names as$values){
    echo "$values"."\n";
}

//Switch statement
echo "enter the day name:";
$day = readline();

switch ($day) {
  case "sunday":
    echo "sunday is holiday!";
    break;
  case "monday":
    echo "today is monday!";
    break;
  case "tuesday":
    echo "today  is tuesday!";
    break;
  default:
    echo "The day is neither saturday,wednesday,thrusday,friday!";
}

//if

$i=10;
if($i<=20){
    echo "\n".$i;
    $i++;
}
echo "\n";
//if else
$i=20;
if($i<20){
    echo $i ."\n";
    $i++;
}
else{
    echo "It is false";
}
echo "\n";
//if else ladder
$x = 5;
if ($x > 10) {
    echo "It is true";
  } elseif ($x < 20) {
    echo "elseif is executed \n";
  } else {
    echo "it is false";
  }

//sorting arrays

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x]."\n";
  
}


?>