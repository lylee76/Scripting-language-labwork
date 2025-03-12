<?php
function fourCopiesOfTwoChars($str) {
    if (strlen($str) < 2) {
        return $str;
    }
    $front = substr($str, 0, 2);
    return $front . $front . $front . $front;
}

// Sample Input and Output
echo fourCopiesOfTwoChars("Ar") . "<br>"; // Output: CCCC
echo fourCopiesOfTwoChars("pa") . "<br>";      // Output: JSJSJSJS
echo fourCopiesOfTwoChars("na") . "<br.";       // Output: a
?>
