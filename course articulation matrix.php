<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    // Redirect to index.php or the appropriate login page
    header("Location: index.php");
    exit(); // Terminate further execution
}
 ?>
<!DOCTYPE html>

<html>
<head>
    <title>Course Articulation Matrix</title>
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
            font-size: 18;
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
<form method="POST" action="submit.php">
    <table>
        <tr>
            <th><label for="sem"><b>Sem:</b></label><input type="number" id="sem" name="sem" min="1" max="8"></th>
            <th><label for="staff_name"><b>Staff Name: </b></label><input type="text" id="staff_name" name="staff_name" minlength="4" maxlength="35" size="30"></th>
       
            <th><label for="course_code"><b>Course code:</b></label><input type="text" id="course_code" name="course_code" minlength="4" maxlength="15" size="10"></th>
            <th><label for="course_name"><b>Course Name:</b></label><input type="text" id="course_name" name="course_name" minlength="4" maxlength="35" size="30"></th>
            <th><label for="subject_code"><b>Subject code:</b></label><input type="text" id="subject_code" name="subject_code" minlength="4" maxlength="15" size="10"></th>
        </tr>
    </table>

    <table id="data-table">
        <tr>
            <th rowspan="2">Course</th>
            <th rowspan="2">Statements</th>
            <th colspan="12"><b>Program Outcomes</b></th>
            <th colspan="3"><b>Program Specification Outcomes</b></th>
        </tr>
        <tr>
            <th>PO1</th>
            <th>PO2</th>
            <th>PO3</th>
            <th>PO4</th>
            <th>PO5</th>
            <th>PO6</th>
            <th>PO7</th>
            <th>PO8</th>
            <th>PO9</th>
            <th>PO10</th>
            <th>PO11</th>
            <th>PO12</th>
            <th>PSO1</th>
            <th>PSO2</th>
            <th>PSO3</th>
        </tr>
        <tr>
            <td><input type="text" name="course[]" required></td>
            <td><input type="text" name="statements[]" required></td>
            <td><input type="number" name="po1[]" min="1" max="3"></td>
            <td><input type="number" name="po2[]" min="1" max="3"></td>
            <td><input type="number" name="po3[]" min="1" max="3"></td>
            <td><input type="number" name="po4[]" min="1" max="3"></td>
            <td><input type="number" name="po5[]" min="1" max="3"></td>
            <td><input type="number" name="po6[]" min="1" max="3"></td>
            <td><input type="number" name="po7[]" min="1" max="3"></td>
            <td><input type="number" name="po8[]" min="1" max="3"></td>
            <td><input type="number" name="po9[]" min="1" max="3"></td>
            <td><input type="number" name="po10[]" min="1" max="3"></td>
            <td><input type="number" name="po11[]" min="1" max="3"></td>
            <td><input type="number" name="po12[]" min="1" max="3"></td>
            <td><input type="number" name="pso1[]" min="1" max="3"></td>
            <td><input type="number" name="pso2[]" min="1" max="3"></td>
            <td><input type="number" name="pso3[]" min="1" max="3"></td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="2">
                <button type="button" id="add-row"><b>Add Row</b></button>
                <button type="submit"><b>Submit</b></button>
                <button type="reset"><b>Reset</b></button>
                <button type="btn" onclick="print()"><b>Print</b></button>
                <div id="print"></div>
            </td>
        </tr>
        <script>
            // JavaScript code to dynamically add rows
            document.getElementById("add-row").addEventListener("click", function() {
                var table = document.getElementById("data-table");
                var numrow = table.rows.length;
                if (numrow < 8) {
                    var row = table.insertRow(numrow);

                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);
                    var cell5 = row.insertCell(4);
                    var cell6 = row.insertCell(5);
                    var cell7 = row.insertCell(6);
                    var cell8 = row.insertCell(7);
                    var cell9 = row.insertCell(8);
                    var cell10 = row.insertCell(9);
                    var cell11 = row.insertCell(10);
                    var cell12 = row.insertCell(11);
                    var cell13 = row.insertCell(12);
                    var cell14 = row.insertCell(13);
                    var cell15 = row.insertCell(14);
                    var cell16 = row.insertCell(15);
                    var cell17 = row.insertCell(16);

                    cell1.innerHTML = '<input type="text" name="course[]">';
                    cell2.innerHTML = '<input type="text" name="statements[]">';
                    cell3.innerHTML = '<input type="number" name="po1[]" min="1" max="3">';
                    cell4.innerHTML = '<input type="number" name="po2[]" min="1" max="3">';
                    cell5.innerHTML = '<input type="number" name="po3[]" min="1" max="3">';
                    cell6.innerHTML = '<input type="number" name="po4[]" min="1" max="3">';
                    cell7.innerHTML = '<input type="number" name="po5[]" min="1" max="3">';
                    cell8.innerHTML = '<input type="number" name="po6[]" min="1" max="3">';
                    cell9.innerHTML = '<input type="number" name="po7[]" min="1" max="3">';
                    cell10.innerHTML = '<input type="number" name="po8[]" min="1" max="3">';
                    cell11.innerHTML = '<input type="number" name="po9[]" min="1" max="3">';
                    cell12.innerHTML = '<input type="number" name="po10[]" min="1" max="3">';
                    cell13.innerHTML = '<input type="number" name="po11[]" min="1" max="3">';
                    cell14.innerHTML = '<input type="number" name="po12[]" min="1" max="3">';
                    cell15.innerHTML = '<input type="number" name="pso1[]" min="1" max="3">';
                    cell16.innerHTML = '<input type="number" name="pso2[]" min="1" max="3">';
                    cell17.innerHTML = '<input type="number" name="pso3[]" min="1" max="3">';
                } else {
                    alert("Maximum limit reached");
                }
            });
        </script>
    </table>
</form>
</body>

</html>
