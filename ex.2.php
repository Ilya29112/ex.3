<?php

echo "Введите числа : ";
$input = trim(fgets(STDIN));

$numbers = array_map('intval', explode(' ', $input));

rsort($numbers);

if (count($numbers) >= 3) {
    echo "Третье максимальное число: " . $numbers[2] . "\n";
} else {
    echo "Третьего максимального числа не существует.\n";
}