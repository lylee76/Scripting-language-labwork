<?php
function areStringsEqualLength($string1, $string2)
{
    return strlen($string1) === strlen($string2);
}

$string1 = "Arpana";
$string2 = "kumal";

if (areStringsEqualLength($string1, $string2)) {
    echo "The strings '$string1' and '$string2' have equal lengths.";
} else {
    echo "The strings '$string1' and '$string2' do not have equal lengths.";
}
