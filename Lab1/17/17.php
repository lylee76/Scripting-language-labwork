<?php
function sumOrTripleSum($a, $b)
{
    if ($a === $b) {
        return 3 * ($a + $b);
    }
    return ($a + $b);
}
echo  sumOrTripleSum(1, 1) . "<br>";
echo sumOrTripleSum(5, 6) . "<br>";
echo sumOrTripleSum(8, 9) . "<br>";
?>
