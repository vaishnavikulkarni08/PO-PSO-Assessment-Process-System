<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    // Redirect to index.php or the appropriate login page
    header("Location: index.php");
    exit(); // Terminate further execution
}
 
include "db_conn.php";
// Assuming your form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $course_code = $_POST["course_code"];
    $course_name = $_POST["course_name"];
    $sem = $_POST["sem"];
    $instructor_name = $_POST["course_instructor"];
    $con = $_POST["con"];
    $co1 = $_POST["co1"];
    $co2 = $_POST["co2"];
    $co3 = $_POST["co3"];
    $co4 = $_POST["co4"];
    $co5 = $_POST["co5"];
    $co6 = $_POST["co6"];
    $co7 = $_POST["co7"];
    $co8 = $_POST["co8"];
    $co9 = $_POST["co9"];
    $co10 = $_POST["co10"];
    $co11 = $_POST["co11"];
    $co12 = $_POST["co12"];
    $actions = $_POST["actions"];
    
    $user_id = $_SESSION['id'];
    
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO coa (user_id, course_code, course_name, sem, course_instructor, con, co1, co2, co3, co4, co5, co6, co7, co8, co9, co10, co11, co12, actions) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        echo "Error during statement preparation: " . $conn->error;
        exit();
    }

    $success = true;
    $rowCount = count($_POST['con']);
    for ($i = 0; $i < $rowCount; $i++) {
        // Bind the values to the statement placeholders
        $stmt->bind_param('issssssssssssssssss', $user_id, $course_code, $course_name, $sem, $instructor_name, $con[$i], $co1[$i], $co2[$i], $co3[$i], $co4[$i], $co5[$i], $co6[$i], $co7[$i], $co8[$i], $co9[$i], $co10[$i], $co11[$i], $co12[$i], $actions[$i]);
  
        // Execute the SQL statement
        if (!$stmt->execute()) {
            $success = false;
            break; // Stop the loop if execution fails
        }
    }
   
    if ($success) {
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Data stored successfully');\n";
        echo "window.location='coacoursecode.php'";
        echo "</script>";
    } else {
        echo "Error during statement execution: " . $stmt->error;
    }

}
?>
