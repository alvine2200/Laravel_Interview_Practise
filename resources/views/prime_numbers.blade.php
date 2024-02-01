<?php
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function printPrimeNumbers($limit)
{
    for ($i = 2; $i < $limit; $i++) {
        if (isPrime($i)) {
            echo $i . "\n";
        }
    }
}

printPrimeNumbers(10);

?>
