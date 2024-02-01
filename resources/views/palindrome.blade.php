<?php

function checkIfNumberIsPalindrome($number)
{
    $num = (string) $number;
    return $num === strrev($num);
}

function isPalindrome($str)
{
    $cleanedString = strtolower(preg_replace('[^/0-9a-z/]', '', $str));
    return $cleanedString === strrev($cleanedString);
}

$numberToCheck = 2442;

if (checkIfNumberIsPalindrome($numberToCheck)) {
    echo "$numberToCheck is Palindrome";
} else {
    echo "$numberToCheck is not Palindrome!";
}

?>
