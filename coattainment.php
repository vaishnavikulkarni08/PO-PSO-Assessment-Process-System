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
            Course Attainment
        </title>
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
    width: 100%;
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
        <link rel="stylesheet" href="body.css">
<script src="average.js"></script>
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
<form method="POST" action="coasubmit.php">
<table>
<tr><th>
<label for="course_code"><b>Course code:</b></label>
<input type="text" id="course_code" name="course_code" minlength="4" maxlength="15" size="10" required>
</th>





<th >
<label for="course_name"><b>Course Name:</b></label>
<input type="text" id="course_name" name="course_name" minlength="4" maxlength="35" size="30" required>
</th>
<th>Attainment Levels:</th>
</tr>
<tr>
<th >

<label for="sem"><b>Sem:</b></label>
<input type="number" id="sem" name="sem" min="1" max="8" required></th>
<th >
<label for="course_inst"><b>Course Instructor:</b></label>
<input type="text" id="course_inst" name="course_instructor" size="30" required></th>
<th >
  >=65:Level 3,>=50&65:Level 2 and < 50:Level1  </th>

</tr>

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



<tr>
        
        
    <td><input type="text" name="con[]"></td>
    <td><input type="number" name="co1[]" step="any"></td>
    <td><input type="number" name="co2[]" step="any"></td>
    <td><input type="number" name="co3[]" step="any"></td>        
    <td><input type="number" name="co4[]" step="any"></td>
    <td><input type="number" name="co5[]" step="any"></td>
    <td><input type="number" name="co6[]" step="any"></td>
    <td><input type="number" name="co7[]" step="any"></td>
    <td><input type="number" name="co8[]" step="any"></td>
    <td><input type="number" name="co9[]" step="any"></td>
    <td><input type="number" name="co10[]" step="any"></td>
    <td><input type="number" name="co11[]" step="any"></td>
    <td><input type="number" name="co12[]" step="any"></td>
    <td><input type="text" name="actions[]"></td>
        
        
      </tr>
      
    </table>
    
  <table>
    <tr>
        <th colspan="2">Final CO Attainment(Avg. of all COs)</th>
        
      </tr>
</table>
  
  
  
  <table>
    <tr>
        
      <td colspan="2">
      
         <button type="submit" name="submit" value="product" class="btn btn-primary ml-2 float-right"><b>Submit</b></button>
          </form>
          <button type="button" id="add-row"><b>Add Row</b></button>
        <button type="reset"><b>Reset</b></button>
        <button type='btn' onclick="print()"><b>Print</b></button>
        <div id="print"></div>
      </td>
    </tr>
    <script>
    // JavaScript code to dynamically add rows
    document.getElementById("add-row").addEventListener("click", function() {
      var table = document.getElementById("data-table");
      var numrow = table.rows.length;
      if(numrow < 8)
      {
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
          
          
      
          cell1.innerHTML = '<input type="text" name="con[]" step="any">';
          cell2.innerHTML = '<input type="number" name="co1[]" step="any" >';
          cell3.innerHTML = '<input type="number" name="co2[]" step="any">';
          cell4.innerHTML = '<input type="number" name="co3[]" step="any">';
          cell5.innerHTML = '<input type="number" name="co4[]" step="any">';
          cell6.innerHTML = '<input type="number" name="co5[]" step="any">';
          cell7.innerHTML = '<input type="number" name="co6[]" step="any">';
          cell8.innerHTML = '<input type="number" name="co7[]" step="any">';
          cell9.innerHTML = '<input type="number" name="co8[]" step="any">';
          cell10.innerHTML = '<input type="number" name="co9[]" step="any">';
          cell11.innerHTML = '<input type="number" name="co10[]" step="any">';
          cell12.innerHTML = '<input type="number" name="co11[]" step="any">';
          cell13.innerHTML = '<input type="number" name="co12[]" step="any">';
          cell14.innerHTML ='<input type="text" name="actions[]" step="any">';
         
          
      }
      else{
        alert("Maximum limit reached");
      }
  
     
    });
  </script>
  </table>





    </body>
</html>
