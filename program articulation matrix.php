<html>
    <head>
        <title>
            Program articulation matrix
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
                <td><b>PROGRAM ARTICULATION MATRIX</b></td>
            </tr>
        </table> 
    </center>
<br>  
<table>

<tr>
<th> Course Code</th>
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
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    // Redirect to index.php or the appropriate login page
    header("Location: index.php");
    exit(); // Terminate further execution
}
include "db_conn.php";
$user_id = $_SESSION['id'];
// Fetch data from the database
$sql = "SELECT * FROM pamaverage  WHERE user_id = '$user_id'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row["course_code"]."</td>
    <td>".(!empty($row["po1"]) ? $row["po1"] : "")."</td>
            <td>".(!empty($row["po2"]) ? $row["po2"] : "")."</td>
            <td>".(!empty($row["po3"]) ? $row["po3"] : "")."</td>
            <td>".(!empty($row["po4"]) ? $row["po4"] : "")."</td>
            <td>".(!empty($row["po5"]) ? $row["po5"] : "")."</td>
            <td>".(!empty($row["po6"]) ? $row["po6"] : "")."</td>
            <td>".(!empty($row["po7"]) ? $row["po7"] : "")."</td>
            <td>".(!empty($row["po8"]) ? $row["po8"] : "")."</td>
            <td>".(!empty($row["po9"]) ? $row["po9"] : "")."</td>
            <td>".(!empty($row["po10"]) ? $row["po10"] : "")."</td>
            <td>".(!empty($row["po11"]) ? $row["po11"] : "")."</td>
            <td>".(!empty($row["po12"]) ? $row["po12"] : "")."</td>
            <td>".(!empty($row["pso1"]) ? $row["pso1"] : "")."</td>
            <td>".(!empty($row["pso2"]) ? $row["pso2"] : "")."</td>
            <td>".(!empty($row["pso3"]) ? $row["pso3"] : "")."</td>
         </tr>";

         
}
     

 




    $conn->close();
    ?>   
</table>
<br>
    
<center>
<button type='btn' onclick="print()">
    <b>Print</b>
</button></center>
</body>
</html>


