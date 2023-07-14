<html>
    <head>
        <title>
            Course articulation matrix view
        </title>
        <link rel="stylesheet" href="body.css">
        <link rel="icon" type="image/x-icon" href="logo.ico">
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
    <table style="text-align: center; border: 1;">
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
            <td><b>COURSE ARTICULATION MATRIX</b></td>
        </tr>
    </table>
</center>
<br>  

<table>
<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    // Redirect to index.php or the appropriate login page
    header("Location: index.php");
    exit(); // Terminate further execution
}
include "db_conn.php";
if (isset($_GET['course_code'])) {
    $courseCode = $_GET['course_code'];

    $sql = "SELECT * FROM cam WHERE course_code = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $courseCode);
$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $seem=$row["sem"];
    $sname = $row["staff_name"];
    $scode = $row["subject_code"];
    $ccode = $row["course_code"];
    $cname = $row["course_name"];
  }
  echo"
    <tr>
    <th><label for='sem'>Sem:</label>".$seem."</th>
    <th><label for='staff_name'>Staff Name:</label>" .$sname."</th>
    <th><label for='course_code'>Course code:</label>" .$ccode." </th>
    <th><label for='course_name'>Course Name:</label>" .$cname." </th>
    <th><label for='subject_code'>Subject code:</label>" .$scode."</th>
    </tr>";
}
?>  
</table>

<table id="data-table">
<tr>
<th rowspan="2" >Course</>
<th rowspan="2">Statements</th>

<th colspan="12"><b>Program Outcomes</b></th>
<th colspan="3"><b>Program Specification Outcomes</b></th>
</tr>
    

<tr>

<th> PO1</th>
<th> PO2</th>
<th> PO3</th>
<th> PO4</th>
<th> PO5</th>
<th> PO6</th>
<th> PO7</th>
<th> PO8</th>
<th> PO9</th>
<th> PO10</th>
<th> PO11</th>
<th> PO12</th> 
<th> PSO1</th>
<th> PSO2</th>
<th> PSO3</th>
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
}*/
include "db_conn.php";
if (isset($_GET['course_code'])) {
    $courseCode = $_GET['course_code'];
    $userId = $_SESSION['id'];
// Fetch data from the database



    $sql = "SELECT * FROM cam WHERE course_code = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $courseCode);
        $stmt->execute();

        $result = $stmt->get_result();

        $sum1 = 0;
        $sum2 = 0;
        $sum3 = 0;
        $sum4 = 0;
        $sum5 = 0;
        $sum6 = 0;
        $sum7 = 0;
        $sum8 = 0;
        $sum9 = 0;
        $sum10 = 0;
        $sum11 = 0;
        $sum12= 0;
        $sum13 = 0;
        $sum14 = 0;
        $sum15 = 0;

        $rowCount1 = 0;
        $rowCount2 = 0;
        $rowCount3 = 0;
        $rowCount4 = 0;
        $rowCount5 = 0;
        $rowCount6 = 0;
        $rowCount7 = 0;
        $rowCount8 = 0;
        $rowCount9 = 0;
        $rowCount10 = 0;
        $rowCount11 = 0;
        $rowCount12 = 0;
        $rowCount13 = 0;
        $rowCount14 = 0;
        $rowCount15 = 0;
        

    

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["course"]."</td>
                <td>".$row["statements"]."</td>
                <td>".($row["po1"] !== 0 ? $row["po1"] : "")."</td>
                <td>".($row["po2"] !== 0 ? $row["po2"] : "")."</td>
                <td>".($row["po3"] !== 0 ? $row["po3"] : "")."</td>
                <td>".($row["po4"] !== 0 ? $row["po4"] : "")."</td>
                <td>".($row["po5"] !== 0 ? $row["po5"] : "")."</td>
                <td>".($row["po6"] !== 0 ? $row["po6"] : "")."</td>
                <td>".($row["po7"] !== 0 ? $row["po7"] : "")."</td>
                <td>".($row["po8"] !== 0 ? $row["po8"] : "")."</td>
                <td>".($row["po9"] !== 0 ? $row["po9"] : "")."</td>
                <td>".($row["po10"] !== 0 ? $row["po10"] : "")."</td>
                <td>".($row["po11"] !== 0 ? $row["po11"] : "")."</td>
                <td>".($row["po12"] !== 0 ? $row["po12"] : "")."</td>
                <td>".($row["pso1"] !== 0 ? $row["pso1"] : "")."</td>
                <td>".($row["pso2"] !== 0 ? $row["pso2"] : "")."</td>
                <td>".($row["pso3"] !== 0 ? $row["pso3"] : "")."</td>
            </tr>";
        
            $sum1 += ($row["po1"] !== 0) ? $row["po1"] : 0;
            $sum2 += ($row["po2"] !== 0) ? $row["po2"] : 0;
            $sum3 += ($row["po3"] !== 0) ? $row["po3"] : 0;
            $sum4 += ($row["po4"] !== 0) ? $row["po4"] : 0;
            $sum5 += ($row["po5"] !== 0) ? $row["po5"] : 0;
            $sum6 += ($row["po6"] !== 0) ? $row["po6"] : 0;
            $sum7 += ($row["po7"] !== 0) ? $row["po7"] : 0;
            $sum8 += ($row["po8"] !== 0) ? $row["po8"] : 0;
            $sum9 += ($row["po9"] !== 0) ? $row["po9"] : 0;
            $sum10 += ($row["po10"] !== 0) ? $row["po10"] : 0;
            $sum11 += ($row["po11"] !== 0) ? $row["po11"] : 0;
            $sum12 += ($row["po12"] !== 0) ? $row["po12"] : 0;
            $sum13 += ($row["pso1"] !== 0) ? $row["pso1"] : 0;
            $sum14 += ($row["pso2"] !== 0) ? $row["pso2"] : 0;
            $sum15 += ($row["pso3"] !== 0) ? $row["pso3"] : 0;

            if ($row["po1"] !== 0) {
                $rowCount1++;
            }
            if ($row["po2"] !== 0) {
                $rowCount2++;
            }
            if ($row["po3"] !== 0) {
                $rowCount3++;
            }
            if ($row["po4"] !== 0) {
                $rowCount4++;
            }
            if ($row["po5"] !== 0) {
                $rowCount5++;
            }
            if ($row["po6"] !== 0) {
                $rowCount6++;
            }
           
            if ($row["po7"] !== 0) {
                $rowCount7++;
            }

            if ($row["po8"] !== 0) {
                $rowCount8++;
            }
            if ($row["po9"] !== 0) {
                $rowCount9++;
            }
            if ($row["po10"] !== 0) {
                $rowCount10++;
            }
            if ($row["po11"] !== 0) {
                $rowCount11++;
            }
            if ($row["po12"] !== 0) {
                $rowCount12++;
            }
            if ($row["pso1"] !== 0) {
                $rowCount13++;
            }
            if ($row["pso2"] !== 0) {
                $rowCount14++;
            }
            if ($row["pso3"] !== 0) {
                $rowCount15++;
            }
                       
    }
       
    $average1 = ($rowCount1 > 0) ? ($sum1 / $rowCount1) : 0;    $average1 = number_format($average1, 2);
    $average2 = ($rowCount2 > 0) ? ($sum2 / $rowCount2) : 0;    $average2 = number_format($average2, 2);
    $average3 = ($rowCount3 > 0) ? ($sum3 / $rowCount3) : 0;    $average3 = number_format($average3, 2);
    $average4 = ($rowCount4 > 0) ? ($sum4 / $rowCount4) : 0;    $average4 = number_format($average4, 2);
    $average5 = ($rowCount5 > 0) ? ($sum5 / $rowCount5) : 0;    $average5 = number_format($average5, 2);
    $average6 = ($rowCount6 > 0) ? ($sum6 / $rowCount6) : 0;    $average6 = number_format($average6, 2);
    $average7 = ($rowCount7 > 0) ? ($sum7 / $rowCount7) : 0;    $average7 = number_format($average7, 2);
    $average8 = ($rowCount8 > 0) ? ($sum8 / $rowCount8) : 0;    $average8 = number_format($average8, 2);
    $average9 = ($rowCount9 > 0) ? ($sum9 / $rowCount9) : 0;    $average9 = number_format($average9, 2);
    $average10 = ($rowCount10 > 0) ? ($sum10 / $rowCount10) : 0;    $average10 = number_format($average10, 2);
    $average11 = ($rowCount11 > 0) ? ($sum11 / $rowCount11) : 0;    $average11 = number_format($average11, 2);
    $average12 = ($rowCount12 > 0) ? ($sum12 / $rowCount12) : 0;    $average12 = number_format($average12, 2);
    $average13 = ($rowCount13 > 0) ? ($sum13 / $rowCount13) : 0;    $average13 = number_format($average13, 2);
    $average14 = ($rowCount14 > 0) ? ($sum14 / $rowCount14) : 0;    $average14 = number_format($average14, 2);
    $average15 = ($rowCount15 > 0) ? ($sum15 / $rowCount15) : 0;    $average15 = number_format($average15, 2);
 

    $checkQuery = "SELECT * FROM pamaverage WHERE course_code = '$courseCode'";
    $checkResult = $conn->query($checkQuery);
    if ($checkResult->num_rows == 0)
    {
        $sql = "INSERT INTO pamaverage (course_code,user_id, po1, po2, po3, po4, po5, po6, po7, po8, po9, po10, po11, po12, pso1, pso2, pso3)
        VALUES ('$courseCode', '$userId', ".($average1 !== 0 ? $average1 : "' '").", ".($average2 !== 0 ? $average2 : "' '").", ".($average3 !== 0 ? $average3 : "' '").", ".($average4 !== 0 ? $average4 : "' '").", ".($average5 !== 0 ? $average5 : "' '").", ".($average6 !== 0 ? $average6 : "' '").", ".($average7 !== 0 ? $average7 : "' '").", ".($average8 !== 0 ? $average8 : "' '").", ".($average9 !== 0 ? $average9 : "' '").", ".($average10 !== 0 ? $average10 : "' '").", ".($average11 !== 0 ? $average11 : "' '").", ".($average12 !== 0 ? $average12 : "' '").", ".($average13 !== 0 ? $average13 : "' '").", ".($average14 !== 0 ? $average14 : "' '").", ".($average15 !== 0 ? $average15 : "' '").")";

            if ($conn->query($sql) === TRUE) {
                echo "<script language=\"JavaScript\">\n";
                echo "alert('Average stored successfully');\n";
                echo "</script>";
               
                echo"
                <tr>            
                <th colspan=2>Average</th>
                <th>".($average1 !==0 ? $average1 : " ")."</th>
                <th>".($average2 !==0 ? $average2 : "")."</th>
                <th>".($average3 !==0 ? $average3 : "")."</th>
                <th>".($average4 !==0 ? $average4 : "")."</th>
                <th>".($average5 !==0 ? $average5 : "")."</th>
                <th>".($average6 !==0 ? $average6 : "")."</th>
                <th>".($average7 !==0 ? $average7 : "")."</th>
                <th>".($average8 !==0 ? $average8 : "")."</th>
                <th>".($average9 !==0 ? $average9 : "")."</th>
                <th>".($average10 !==0 ? $average10 : "")."</th>
                <th>".($average11 !==0 ? $average11 : "")."</th>
                <th>".($average12 !==0 ? $average12 : "")."</th> 
                <th>".($average13 !==0 ? $average13 : "")."</th>
                <th>".($average14 !==0 ? $average14 : "")."</th>
                <th>".($average15 !==0 ? $average15 : "")."</th> 
                </tr>"; 
            } else {
                echo "Error inserting averages: " . $conn->error;
            }
    }
    else{
        echo"
        <tr>            
        <th colspan=2>Average</th>
        <th>".($average1 !==0 ? $average1 : " ")."</th>
                <th>".($average2 !==0 ? $average2 : " ")."</th>
                <th>".($average3 !==0 ? $average3 : " ")."</th>
                <th>".($average4 !==0 ? $average4 : " ")."</th>
                <th>".($average5 !==0 ? $average5 : " ")."</th>
                <th>".($average6 !==0 ? $average6 : " ")."</th>
                <th>".($average7 !==0 ? $average7 : " ")."</th>
                <th>".($average8 !==0 ? $average8 : " ")."</th>
                <th>".($average9 !==0 ? $average9 : " ")."</th>
                <th>".($average10 !==0 ? $average10 : " ")."</th>
                <th>".($average11 !==0 ? $average11 : " ")."</th>
                <th>".($average12 !==0 ? $average12 : " ")."</th> 
                <th>".($average13 !==0 ? $average13 : " ")."</th>
                <th>".($average14 !==0 ? $average14 : " ")."</th>
                <th>".($average15 !==0 ? $average15 : " ")."</th> 
        </tr>";
    }    

    
   
    $conn->close();
}   
?>   
</table>
<br>    
<center>
<button type='btn' onclick="print()">
    <b>Print</b>
</button></center>
</body>
</html>


