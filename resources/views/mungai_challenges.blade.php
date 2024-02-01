<?php
// quiz 1. FizzBuzz - Given integers from (1-100) print "fizz"
// if number is a factor of 3, print "Buzz"
// if number is a factor of 5, and print "FizzBuzz" is a factor of both 3 and 5.
// Print out other numbers that don't meet the criteria.

//quiz  2. Given an input, eg 10, print the sum of all
// integers btw the given input that are a factor of 3 and 5.
//  I.e if input is 10 then sum of integers are (3 + 5 + 6 +9) = 23

// quiz 1

// function findFactorsOfNumber()
// {
//     $factorsOfThree = [];
//     $factorsOfFive = [];
//     $factorsOfThreeAndFive = [];

//     for ($i = 1; $i <= 100; $i++) {
//         if ($i % 3 == 0 && $i % 5 == 0) {
//             // A factor of both 3 and 5
//             $factorsOfThreeAndFive[] = $i;
//         } elseif ($i % 3 == 0) {
//             // A factor of 3
//             $factorsOfThree[] = $i;
//         } elseif ($i % 5 == 0) {
//             // A factor of 5
//             $factorsOfFive[] = $i;
//         }
//     }

//     echo 'Factors of 3: ' . implode(', ', $factorsOfThree) . "\n";
//     echo 'Factors of 5: ' . implode(', ', $factorsOfFive) . "\n";
//     echo 'Factors of both 3 and 5: ' . implode(', ', $factorsOfThreeAndFive) . "\n";
// }

// findFactorsOfNumber();

function printFactorsOfNumber()
{
    $factors3 = [];
    $factors5 = [];
    $factors35 = [];
    $factors = [];

    for ($i = 0; $i < 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $factors35[] = $i;
            // echo 'FizzBuzz \n';
        } elseif ($i % 5 == 0) {
            $factors5[] = $i;
            // echo 'Buzz \n';
        } elseif ($i % 3 == 0) {
            $factors3[] = $i;
            // echo 'Fizz \n';
        } else {
            $factors[] = $i;
        }
    }

    echo 'Numbers Divisible By 3: ' . implode(',', $factors3) . "\n";
    echo 'Numbers Divisible By 5: ' . implode(',', $factors5) . "\n";
    echo 'Numbers Divisible By 3 & 5: ' . implode(',', $factors35) . "\n";
    echo 'Numbers Not Divisible: ' . implode(',', $factors) . "\n";
}

printFactorsOfNumber();

?>
