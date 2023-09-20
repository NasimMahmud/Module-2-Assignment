<?php
function generateFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        if ($fibonacci[$i] > 100) {
            break; 
        }
    }

    return $fibonacci;
}

$n = 10;
$fNumbers = generateFibonacci($n);

echo "The first 10 Fibonacci numbers less than or equal to 100 are: ";
foreach ($fNumbers as $number) {
    echo $number . " ";
}
?>
