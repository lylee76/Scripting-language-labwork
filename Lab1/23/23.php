<?php
function largestnumber($x,$y,$z){
    return max($x,$y,$z);

}
$x=1;
$y=20;
$z=300;

echo "Largest number among The Three is " .largestnumber($x,$y,$z) ."<br>";




?>