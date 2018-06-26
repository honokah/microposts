<?php
    // Initialize the variable
    $number = 0;

    while ($number != 101) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
    }
?>