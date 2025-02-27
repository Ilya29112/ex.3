<?php
echo "Введите оценки студентов : ";
$input = trim(fgets(STDIN));

$grades = array_map('intval', explode(' ', $input));

function calculateAverage($grades) {
    $sum = array_sum($grades);
    $count = count($grades);
    return $sum / $count;
}

$average = calculateAverage($grades);

echo "Средняя оценка всех студентов: " . number_format($average, 2) . "\n";