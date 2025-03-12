<?php
function addFirstThreeChars($str) {
    $firstThree = strlen($str) >= 3 ? substr($str, 0, 3) : $str;
    return $firstThree . $str . $firstThree;
}
$inputs = ["BCA", "BIM", "BIT"];


foreach ($inputs as $input) {
    echo addFirstThreeChars($input) . "<br>";
}
?>
