<?php
    class Distance{
     public function distance_of_two_points($x,$y){

            $pwr =pow($x,2)+pow($y,2);
            echo sqrt($pwr);
        }
    }
    $distance = new Distance();
    $distance->distance_of_two_points(2,3);
?>