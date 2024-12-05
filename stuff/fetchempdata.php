<?php
$conn = new mysqli("localhost", "root", "", "company_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query for fetching data
$sql = "
    SELECT * FROM staff
    WHERE department = 'Sales' AND salary > 4000
    ORDER BY salary ASC
";
$result = $conn->query($sql);

// Grouping results by department and counting employees
$groupSql = "
    SELECT department, COUNT(*) as employee_count
    FROM staff
    GROUP BY department
";
$groupResult = $conn->query($groupSql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . ", Salary: " . $row["salary"] . "<br>";
    }
}

if ($groupResult->num_rows > 0) {
    while ($row = $groupResult->fetch_assoc()) {
        echo "Department: " . $row["department"] . ", Employees: " . $row["employee_count"] . "<br>";
    }
}

$conn->close();
?>
