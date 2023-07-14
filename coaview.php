<html>
    <head>
        <title>
            Course Attainment
        </title>
        <link rel="stylesheet" href="body.css">
        <link rel="icon" type="image/x-icon" href="logo.ico">
<script src="average.js"></script>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        center {
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 1300px;
            margin: 0 auto;
            text-align: center;
        }

        th, td {
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="number"] {
            padding: 5px;
            width: 50px;
            box-sizing: border-box;
        }

        input[type="text"] {
            padding: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
    </head>
    <body>
    <center>
        <table style="text-align:center;border="1";>
            <tr>
                <td><a href="home.php"><img src="logo.jpg" width="80" height="80"></a></td>
            </tr>
            <tr>
                <th>B.V.V.Sangha's</th>
            </tr>
            <tr>
               <td><b>BASAVESHWAR ENGINEERING COLLEGE, BAGALKOTE</b><br>(An Autonomous Institute, Affiliated to Visvesvaraya Technological University, Belagavi)</td>
            </tr>
            <tr>
                <td><b>Karnataka State, India</b></td>
            </tr>
            <tr>
                <td><b>DEPARTMENT OF INFORMATION SCIENCE AND ENGINEERING</b></td>
            </tr>
            <tr>
                <td><b>COURSE ATTAINMENT THROUGH DIRECT AND INDIRECT ASSESMENT</b>
              </td>
</tr>
<tr>
  <td><b>Academic Year:</b>
</td>
            </tr>
            <tr>

        </table> 
    </center>
<br>  
<table>
<?php
include "db_conn.php";
if (isset($_GET['course_code'])) {
    $courseCode = $_GET['course_code'];

    $sql = "SELECT * FROM coa WHERE course_code = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $courseCode);
    $stmt->execute();
    
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $ccode = $row["course_code"];
        $cname = $row["course_name"];
        $seem = $row["sem"];
        $courseinst = $row["course_instructor"];
      }
echo"
      <tr>
    <th><label>Course code:</label> " .$ccode." </th>
    <th><label>Course Name:</label> " .$cname." </th>
    <th>Attainment Levels:</th>
</tr>
<tr>
    <th><label >Sem:</label> " .$seem." </th>
    <th><label>Course Instructor:</label> " .$courseinst." </th>
    <th>>=65:Level 3,>=50&65:Level 2 and < 50:Level1  </th>
</tr>";
    }
 ?>   

</table>



<table id="data-table">
  <tr>
    <th rowspan="2">CO Numbers</th> 
    <th>  </th>
    <th colspan="5">Direct Assessment</th>
    <th rowspan="2 ">Average Attainment Level(SEE+CIE)</th>
    <th colspan="2"> Indirect Assessment</th>
    <th  rowspan="2 ">Set Average Target(SEE & CIE) </th>
    <th  rowspan="2 ">Set Average Target Level(SEE & CIE) </th>
    <th  rowspan="2 ">Average Attainment Level(80%+20% of level)</th>
    <th  rowspan="2 "> Action plan for next years</th>
</tr>
<tr>
  <th>Set Target for CIE(%)</th>
  <th>Attainment through CIE(%)</th>
  <th>CIE attainment Level</th>
  <th> Set Target for SEE(%)</th>
  <th>Attainment through SEE(%)</th>
  <th>SEE Attainment Level</th>
  <th>Course Exit Survey Value</th>
  <th>Course Exit Survey Level</th>
</tr>

<?php
// Assuming you have established a database connection
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
*/
include "db_conn.php";
if (isset($_GET['course_code'])) {
    $courseCode = $_GET['course_code'];
// Fetch data from the database



    $sql = "SELECT * FROM coa WHERE course_code = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $courseCode);
        $stmt->execute();

        $result = $stmt->get_result();
        $attainmentSum = 0;
    $rowCount = 0;
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
            
            
                <td>".$row["con"]."</td>
                <td>".$row["co1"]."</td>
                <td>".$row["co2"]."</td>
                <td>".$row["co3"]."</td>
                <td>".$row["co4"]."</td>
                <td>".$row["co5"]."</td>
                <td>".$row["co6"]."</td>
                <td>".$row["co7"]."</td>
                <td>".$row["co8"]."</td>
                <td>".$row["co9"]."</td>
                <td>".$row["co10"]."</td>
                <td>".$row["co11"]."</td>
                <td>".$row["co12"]."</td>
                <td>".$row["actions"]."</td>

            
            
            </tr>";
      // Calculate the average attainment level (80%+20% of level) for each row
        $attainmentLevel = $row["co12"]; // Replace "co12" with the appropriate column name
        $attainmentSum += $attainmentLevel;
        $rowCount++;
    }
    
    // Calculate the average attainment level
    $averageAttainmentLevel = $rowCount > 0 ? ($attainmentSum / $rowCount) : 0;
    $averageAttainmentLevel = number_format($averageAttainmentLevel, 2);
    echo"
    <tr>
        <th colspan='12'>Final CO Attainment(Avg. of all COs)</th>
        <th>".$averageAttainmentLevel."</th>
        <th></th>
        
      </tr>";
    
    $conn->close();
}        
?>  
</table>
  <br><br>
  <center>
<button type='btn' onclick="print()"><b>Print</b></button>
</center>
           
     





    </body>
</html>
