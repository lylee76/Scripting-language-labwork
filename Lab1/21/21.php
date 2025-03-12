<?php
function addLastChar($str) {
    if (strlen($str) >= 1) {
        $lastChar = substr($str, -1);
        return $lastChar . $str . $lastChar;
    }
    return $str;
}


$inputs = ["Naruto", "One Piece", "0"];


foreach ($inputs as $input) {
    echo addLastChar($input) . "<br>";
}
?>
