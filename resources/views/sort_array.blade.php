@php
    $numbers = [1, 79, 0, 34, 23, 65, 90];

    $numbers2 = [98, 45, 76, 678, 32, 76];
    // sort($numbers);

    //sorts in ascending order;
    // dd($numbers);

    //sort in descending order;
    // rsort($numbers);

    // dd($numbers);

    // $newArray = array_merge($numbers, $numbers2);
    // rsort($newArray);

    // dd($newArray);

    // array_push($numbers, 100, 1000);
    // array_pop($numbers);

    // split array to string
    // $newNumbers = implode(',', $numbers);
    // $new = explode(',', $newNumbers);

    // counting and sum of array values
    // $sum = array_sum($numbers);

    // using foreach
    $val = 0;
    $num = 0;
    // foreach ($numbers as $num) {
    //     $val += $num;
    // }

    $numbersLength = count($numbers);

    //using for loop
    // for ($num = 0; $num < $numbersLength; $num++) {
    //     $newnum = $numbers[$num];
    //     echo "$newnum \n";
    //     $val += $numbers[$num];
    // }

    //using while
    while ($num < $numbersLength) {
        $newnum = $numbers[$num];
        echo "$newnum \n";
        $val += $numbers[$num];
        $num++;
    }
    dd($val);

@endphp
