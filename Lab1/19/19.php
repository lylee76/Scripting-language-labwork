<?php
function addIfToString($str)
{
    if (substr($str, 0, 2) === 'if') {
        return $str;
    }
    return 'if' . $str;
}


echo addIfToString("if else") . "<br>";
echo addIfToString("else") . "<br>";
echo addIfToString("if") . "<br>";
?>