<?php
   session_start();
// Assuming you have established a database connection
include "db_conn.php";

// Assuming your form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $sem = $_POST["sem"];
    $staff_name = $_POST["staff_name"];
    $course_code = $_POST["course_code"];
    $course_name = $_POST["course_name"];
    $subject_code = $_POST["subject_code"];
    $course = $_POST["course"];
    $statements = $_POST["statements"];
    $po1 = $_POST["po1"];
    $po2 = $_POST["po2"];
    $po3 = $_POST["po3"];
    $po4 = $_POST["po4"];
    $po5 = $_POST["po5"];
    $po6 = $_POST["po6"];
    $po7 = $_POST["po7"];
    $po8 = $_POST["po8"];
    $po9 = $_POST["po9"];
    $po10 = $_POST["po10"];
    $po11 = $_POST["po11"];
    $po12 = $_POST["po12"];
    $pso1 = $_POST["pso1"];
    $pso2 = $_POST["pso2"];
    $pso3 = $_POST["pso3"];

    // Retrieve the user ID from the session
    //session_start();
    $user_id = $_SESSION['id'];
    $success = true;
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO cam (user_id, sem, staff_name, course_code, course_name, subject_code, course, statements, po1, po2, po3, po4, po5, po6, po7, po8, po9, po10, po11, po12, pso1, pso2, pso3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $rowCount = count($_POST['course']);
    for ($i = 0; $i < $rowCount; $i++) {
        // Bind the values to the statement placeholders
        $stmt->bind_param('issssssssssssssssssssss', $user_id, $_POST['sem'], $_POST['staff_name'], $_POST['course_code'], $_POST['course_name'], $_POST['subject_code'], $_POST['course'][$i], $_POST['statements'][$i], $_POST['po1'][$i], $_POST['po2'][$i], $_POST['po3'][$i], $_POST['po4'][$i], $_POST['po5'][$i], $_POST['po6'][$i], $_POST['po7'][$i], $_POST['po8'][$i], $_POST['po9'][$i], $_POST['po10'][$i], $_POST['po11'][$i], $_POST['po12'][$i], $_POST['pso1'][$i], $_POST['pso2'][$i], $_POST['pso3'][$i]);

        // Execute the SQL statement
        if (!$stmt->execute()) {
          $success = false;
      }
    }

    if ($success) {
      echo "<script language=\"JavaScript\">\n";
      echo "alert('Data stored successfully');\n";
      echo "window.location='course code.php'";
      echo "</script>";
  } else {
      echo "Error: " . $conn->error;
  };
}
?>
