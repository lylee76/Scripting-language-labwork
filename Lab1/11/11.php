<?php
function isDivisibleByFive($number)
{
    return $number % 5 === 0;
}

$testNumber = 111;

if (isDivisibleByFive($testNumber)) {
    echo "The number $testNumber is evenly divisible by 5.";
} else {
    echo "The number $testNumber is not evenly divisible by 5.";
}
