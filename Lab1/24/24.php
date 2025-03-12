<?php
function convertLastThreeToUpper($str) {
    $len = strlen($str);
    if ($len < 3) {
        return strtoupper($str);
    }
    $lastThree = strtoupper(substr($str, -3));
    return substr($str, 0, $len - 3) . $lastThree;
}


$inputs = ["Shaily", "amylee", "SONU", "arpana"];


foreach ($inputs as $input) {
    echo convertLastThreeToUpper($input) . "<br>";
}
?>
