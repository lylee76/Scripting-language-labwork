<?php
function carsNeeded($n)
{
    
    $seatsPerCar = 5;

    
    return ceil($n / $seatsPerCar);
}


echo carsNeeded(10) . "\n";  
echo carsNeeded(15) . "\n"; 
echo carsNeeded(20) . "\n";
?> 
