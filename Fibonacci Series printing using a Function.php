<?php 
function generateFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

function printFibonacciNumbers($n) {
    $fibonacciNumbers = generateFibonacci($n);

    echo "The first $n Fibonacci numbers are: ";
    foreach ($fibonacciNumbers as $number) {
        echo $number . " ";
    }
}
printFibonacciNumbers(15);
?>