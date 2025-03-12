<?php
function absoluteDifference($n)
{
    $absoluteDifference = abs($n - 51);

    if ($n > 51) {
        return 3 * $absoluteDifference;
    }
    return $absoluteDifference;
}
echo absoluteDifference(11) . "<br>";
echo absoluteDifference(22) . "<br>";
echo absoluteDifference(25) . "<br>";
?>
