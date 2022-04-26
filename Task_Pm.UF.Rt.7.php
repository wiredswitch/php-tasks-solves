<?php

/*
 * Напишите функцию, которая параметром будет принимать число и делить его на 2 столько раз,
 * пока результат не станет меньше 10. Пусть функция возвращает количество итераций,
 * которое потребовалось для достижения результата.
 * Вариант с омощью цикла while 
 */

$i = 0;                                   //счетчик итераций

function division($num)
{

    while ($num >= 10) {            // пока $num >=10
        $num = $num / 2;            // Делим $num на 2
        $i++;                       //Включаем счетчик итераций
    }
    echo $i;                        //Выводим количество итераций
}

division(1000);
