<?php

//Сделайте функцию, выводящую на экран сумму чисел от 1 до 100.

$sum = 0;

function sum() {

    for ($i = 1; $i <= 100; $i++) {
        $sum += $i;
    }
    echo $sum;
}

sum();
