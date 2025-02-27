<?php
function calculateAverage($grades) {
    return array_sum($grades) / count($grades);
}

$students = [];
echo "Введите количество студентов: ";
$count = (int)trim(fgets(STDIN));

for ($i = 0; $i < $count; $i++) {
    echo "Введите имя студента: ";
    $name = trim(fgets(STDIN));

    echo "Введите оценки студента: ";
    $grades = array_map('intval', explode(' ', trim(fgets(STDIN))));

    $students[] = ['name' => $name, 'grades' => $grades];
}

echo "Студенты с средним баллом больше или равно 4:\n";
foreach ($students as $student) {
    $average = calculateAverage($student['grades']);
    if ($average >= 4) {
        echo $student['name'] . ": " . number_format($average, 2) . "\n";
    }
}