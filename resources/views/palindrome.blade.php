<?php

function isPalindrome($str)
{
    $cleanedString = strtolower(preg_replace('/0-9a-z/', '', $str));
    return $cleanedString === strrev($cleanedString);
}

$stringToCheck = '1221';

if (isPalindrome($stringToCheck)) {
    echo "$stringToCheck is Palindrome";
} else {
    echo "$stringToCheck is not Palindrome!";
}

?>
