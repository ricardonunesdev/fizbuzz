#!/usr/bin/python

def is_mult(num, mult):
    return (num % mult) == 0

def fizzbuzz(num):
    for i in range(1, num + 1):
        out = i
        if is_mult(i, 3) and is_mult(i, 5): out = 'fizzbuzz'
        elif is_mult(i, 3): out = 'fizz'
        elif is_mult(i, 5): out = 'buzz'
        print(out)

fizzbuzz(50)
