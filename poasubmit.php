<?php
session_start();
// Establish a database connection
include "db_conn.php";

// Retrieve form data
$staffName = $_POST['staff_name'];
$subjectCode = $_POST['subject_code'];
$courseCode = $_POST['course_code'];
$courseName = $_POST['course_name'];
$courses = $_POST['course'];
$statements = $_POST['statements'];
$po1 = $_POST['po1'];
$po2 = $_POST['po2'];
$po3 = $_POST['po3'];
$po4 = $_POST['po4'];
$po5 = $_POST['po5'];
$po6 = $_POST['po6'];
$po7 = $_POST['po7'];
$po8 = $_POST['po8'];
$po9 = $_POST['po9'];
$po10 = $_POST['po10'];
$po11 = $_POST['po11'];
$po12 = $_POST['po12'];
$pso1 = $_POST['pso1'];
$pso2 = $_POST['pso2'];
$pso3 = $_POST['pso3'];
$s = intval($_POST['s']); // Convert to integer
$a = intval($_POST['a']); // Convert to integer
$b = intval($_POST['b']); // Convert to integer
$c = intval($_POST['c']); // Convert to integer
$d = intval($_POST['d']); // Convert to integer
$e = intval($_POST['e']); // Convert to integer
$f = intval($_POST['f']); // Convert to integer
$appeared = $s + $a + $b + $c + $d + $e + $f;
$success = true;
$user_id = $_SESSION['id'];

// Prepare and execute the SQL query to insert data into the "grades" table
$stmt = $conn->prepare("INSERT INTO grades (user_id, course_code, s, a, b, c, d, e, f, appeared) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    echo "Error during statement preparation: " . $conn->error;
    exit();
}
$stmt->bind_param("isiiiiiiii", $user_id, $courseCode, $s, $a, $b, $c, $d, $e, $f, $appeared);

// Execute the prepared statement
if (!$stmt->execute()) {
    $success = false;
    echo "Error during statement execution: " . $stmt->error;
}

$stmt->close();

for ($i = 0; $i < count($courses); $i++) {
    $course = $courses[$i];
    $statement = $statements[$i];
    $po1Value = !empty($po1[$i]) ? $po1[$i] : 0;
    $po2Value = !empty($po2[$i]) ? $po2[$i] : 0;
    $po3Value = !empty($po3[$i]) ? $po3[$i] : 0;
    $po4Value = !empty($po4[$i]) ? $po4[$i] : 0;
    $po5Value = !empty($po5[$i]) ? $po5[$i] : 0;
    $po6Value = !empty($po6[$i]) ? $po6[$i] : 0;
    $po7Value = !empty($po7[$i]) ? $po7[$i] : 0;
    $po8Value = !empty($po8[$i]) ? $po8[$i] : 0;
    $po9Value = !empty($po9[$i]) ? $po9[$i] : 0;
    $po10Value = !empty($po10[$i]) ? $po10[$i] : 0;
    $po11Value = !empty($po11[$i]) ? $po11[$i] : 0;
    $po12Value = !empty($po12[$i]) ? $po12[$i] : 0;
    $totalValue = $po1Value + $po2Value + $po3Value + $po4Value + $po5Value + $po6Value + $po7Value + $po8Value + $po9Value + $po10Value + $po11Value + $po12Value;
    $pso1Value = !empty($pso1[$i]) ? $pso1[$i] : 0;
    $pso2Value = !empty($pso2[$i]) ? $pso2[$i] : 0;
    $pso3Value = !empty($pso3[$i]) ? $pso3[$i] : 0;
    $total1Value = $pso1Value + $pso2Value + $pso3Value;

    // Prepare and execute the SQL query to insert data
    $stmt = $conn->prepare("INSERT INTO poa (user_id, staff_name, subject_code, course_code, course_name, course, statements, po1, po2, po3, po4, po5, po6, po7, po8, po9, po10, po11, po12, total, pso1, pso2, pso3, total1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
    if (!$stmt) {
        echo "Error during statement preparation: " . $conn->error;
        exit();
    }
    $stmt->bind_param("issssssiiiiiiiiiiiiiiiii", $user_id, $staffName, $subjectCode, $courseCode, $courseName, $course, $statement, $po1Value, $po2Value, $po3Value, $po4Value, $po5Value, $po6Value, $po7Value, $po8Value, $po9Value, $po10Value, $po11Value, $po12Value, $totalValue, $pso1Value, $pso2Value, $pso3Value, $total1Value);

    // Execute the prepared statement
    if (!$stmt->execute()) {
        $success = false;
        echo "Error during statement execution: " . $stmt->error;
        break; // Stop the loop if execution fails
    }

    $stmt->close();
}

if ($success) {
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Data stored successfully');\n";
    echo "window.location='poacoursecode.php'";
    echo "</script>";
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>