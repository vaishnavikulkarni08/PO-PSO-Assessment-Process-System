<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    // Redirect to index.php or the appropriate login page
    header("Location: index.php");
    exit(); // Terminate further execution
}
 ?>
<html>
    <head>
        <title>
           PO attainment
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
        #data-table {
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
                <td><b>PO Attainment</b></td>
            </tr>
        </table> 
    </center>
    <form method="POST" action="poasubmit.php">
    <table>
<tr><th>
<label for="staff_name"><b>Staff Name:</b></label>
<input type="text" id="staff_name" name="staff_name" minlength="4" maxlength="35" size="30" required>
</th>
<th><label for="subject_code"><b>Subject code:</b></label>
<input type="text" id="subject_code" name="subject_code" minlength="4" maxlength="15" size="10" required>
</th> 
<th><label for="course_code"><b>Course code:</b></label>
<input type="text" id="course_code" name="course_code" minlength="4" maxlength="15" size="10" required></th>
<th >
<label for="course_name"><b>Course Name:</b></label>
<input type="text" id="course_name" name="course_name" minlength="4" maxlength="35" size="30" required></th>
</tr>
</table>
<table id="data-table">
<tr>
<th>Course</th>
<th>Statements</th>
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
<th>Total</th>
<th> PSO1</th>
<th> PSO2</th>
<th> PSO3</th>
<th>Total</th>
</tr>
<tr>
        <td><input type="text" name="course[]" ></td>
        <td><input type="text" name="statements[]"></td>
        <td><input type="number" name="po1[]" ></td>
        <td><input type="number" name="po2[]" ></td>
        <td><input type="number" name="po3[]" ></td>
        <td><input type="number" name="po4[]" ></td>        
        <td><input type="number" name="po5[]" ></td>
        <td><input type="number" name="po6[]" ></td>
        <td><input type="number" name="po7[]" ></td>
        <td><input type="number" name="po8[]" ></td>
        <td><input type="number" name="po9[]" ></td>
        <td><input type="number" name="po10[]" ></td>
        <td><input type="number" name="po11[]" ></td>
        <td><input type="number" name="po12[]" ></td>
        <td> </td>
        <td><input type="number" name="pso1[]" ></td>
        <td><input type="number" name="pso2[]" ></td>
        <td><input type="number" name="pso3[]" ></td>
        <td> </td>
        
      </tr>
    
        <tr>
        <th colspan="2" ><b>Total</b></th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th>
        <th>  </th> 
        <th>  </th>
        <th>  </th>
</tr>
        <tr>
        <td colspan="2" ><b>Set Value</b></th>


<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th> 
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th> </th>
<th>  </th>
<th> </th>
</tr>   <tr>
        <td colspan="2" ><b>Obtained  Values</b></th>
<th> </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th> 
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th> </th>
</tr>
<tr>
        <td colspan="2" ><b>Grades</b></th>
<th> </th>
<th> S </th>
<th> A </th>
<th> B </th>
<th> C </th>
<th> D </th>
<th> E  </th>
<th> F </th>
<th> Appeared  </th>
<th>  </th>
<th> Res.Value </th>
<th>  </th> 
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th> </th>
</tr>
<tr>
        <td colspan="2" ><b>Grade wise score</b></th>
<th> </th>
<th> <input type="number" name="s" > </th>
<th> <input type="number" name="a" > </th>
<th>  <input type="number" name="b" ></th>
<th> <input type="number" name="c" > </th>
<th>  <input type="number" name="d" ></th>
<th>  <input type="number" name="e" ></th>
<th> <input type="number" name="f" > </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th> 
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th> </th>
</tr>
<tr>
        <td colspan="2" ><b>PO Attainment(%)</b></th>
<th> </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th> 
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th> </th>
</tr>
<tr>
        <td colspan="2" ><b>PO Attainment Level</b>
        </th>
<th> </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th> 
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th> </th>
</tr>




    <table>
    <tr>
        
      <td colspan="2">
      <button type="button" id="add-row"><b>Add Row</b></button>
        <button type="submit">
          <b>Submit</b>
        </button>
        <button type="reset"><b>Reset</b></button>
        <button type='btn' onclick="print()"><b>Print</b></button>
        <div id="print"></div>
      </td>
    </tr>
    <script>
    // JavaScript code to dynamically add rows
    document.getElementById("add-row").addEventListener("click", function() {
      var table = document.getElementById("data-table");
      var totalRow = table.rows[table.rows.length - 7]; // Get the "Total" row
      if (table.rows.length <= 13)
      {
          var row = table.insertRow(totalRow.rowIndex);

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
          var cell18 = row.insertCell(17);
          var cell19 = row.insertCell(18);
          

      
          cell1.innerHTML = '<input type="text" name="course[]">';
          cell2.innerHTML = '<input type="text" name="statements[]">';
          cell3.innerHTML = '<input type="number" name="po1[]" >';
          cell4.innerHTML = '<input type="number" name="po2[]" >';
          cell5.innerHTML = '<input type="number" name="po3[]" >';
          cell6.innerHTML = '<input type="number" name="po4[]" >';
          cell7.innerHTML = '<input type="number" name="po5[]" >';
          cell8.innerHTML = '<input type="number" name="po6[]" >';
          cell9.innerHTML = '<input type="number" name="po7[]" >';
          cell10.innerHTML = '<input type="number" name="po8[]" >';
          cell11.innerHTML = '<input type="number" name="po9[]" >';
          cell12.innerHTML = '<input type="number" name="po10[]" >';
          cell13.innerHTML = '<input type="number" name="po11[]" >';
          cell14.innerHTML = '<input type="number" name="po12[]" >';
          cell15.innerHTML = '';
          cell16.innerHTML = '<input type="number" name="pso1[]" >';
          cell17.innerHTML = '<input type="number" name="pso2[]" >';
          cell18.innerHTML = '<input type="number" name="pso3[]" >';
          cell19.innerHTML = '';
      }
      else{
        alert("Maximum number of rows reached");
      }    
    });
  </script>
  </table>
  




  </form>
    </body>
</html>

