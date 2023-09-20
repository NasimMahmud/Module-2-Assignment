<?php
//using for loop
function printevenfor() {
    for ($i = 2; $i <= 20; $i += 2) {
        echo $i . " ";
    }
}
printevenfor();


//using while loop



function printevenwhile() {
    $i = 2;
    echo("\n");
    while ($i <= 20) {
        echo $i . " ";
        $i += 2;
    
    }
}
printevenwhile();



//using do while loop

function printevendowhile() {
    $i = 2;
    echo("\n");
    do {
        echo $i . " ";
        $i += 2;
    } while ($i <= 20);
}

// Call the function to print even numbers
printevendowhile();





?>

