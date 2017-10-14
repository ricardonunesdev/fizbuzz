'use strict';

function isMult(num, mult) {
    return ((num % mult) == 0);
}

function fizzbuzz(num) {
    for (let i = 1; i <= num; i++) {
        let out = i;
        if (isMult(i, 3) && isMult(i, 5)) { out = 'fizzbuzz'; }
        else if (isMult(i, 3)) { out = 'fizz'; }
        else if (isMult(i, 5)) { out = 'buzz'; }
        console.log(out);
    }
}

fizzbuzz(50);
