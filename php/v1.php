<?php

function isMult($num, $mult) {
    return (($num % $mult) == 0);
}

function fizzbuzz($num) {
    for ($i = 1; $i <= $num; $i++) {
        if (isMult($i, 3)) {
            if (isMult($i, 5)) {
                echo 'fizzbuzz';
            } else {
                echo 'fizz';
            }
        } else if (isMult($i, 5)) {
            echo 'buzz';
        } else {
            echo $i;
        }
        echo PHP_EOL;
    }
}

fizzbuzz(50);
