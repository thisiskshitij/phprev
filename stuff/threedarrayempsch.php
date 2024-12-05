<?php
// Initialize the multidimensional array
$weeklySchedule = [
    ["name" => "Alice", "shift" => "Morning", "hours" => [8, 8, 8, 8, 8, 0, 0]],
    ["name" => "Bob", "shift" => "Evening", "hours" => [0, 0, 8, 8, 8, 8, 8]],
];

// Calculate and display total hours worked for each employee
foreach ($weeklySchedule as $employee) {
    $totalHours = array_sum($employee["hours"]);
    echo "Employee: " . $employee["name"] . "\n";
    echo "Shift: " . $employee["shift"] . "\n";
    echo "Total Hours Worked: " . $totalHours . "\n\n";
}
?>