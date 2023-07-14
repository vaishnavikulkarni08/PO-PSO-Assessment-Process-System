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
            Course Code
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
        h1 {
            text-align: left;
            margin-left: 25px;
        }
        .course-list li {
            margin-bottom: 10px;
            padding: 10px;
               
            
            align-items: center;
        }
        .course-list li a {
            color: #000;
            text-decoration: none;
            margin-left: 10px;
        }
        .course-list li a:hover {
            color: #4CAF50;
            display: inline-block;
            background-color: #f2f2f2;
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
                <td><b>COURSE ATTAINMENT</b></td>
            </tr>
        </table> 
    </center>
<br>  
<body>
<div class="container">
        <div class="title">
            <h1>Course Codes</h1>
        </div>
        
        <ul class="course-list">
            <?php
            $user_id = $_SESSION['id'];
            include "db_conn.php";
            
            // Fetch data from the database
            $sql = "SELECT DISTINCT course_code FROM poa WHERE user_id = '$user_id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li><a href='poaview.php?course_code=" . $row['course_code'] . "'>" . $row['course_code'] . "</a></li>";
                }
            } else {
                echo "<li>No course codes found.</li>";
            }

            $conn->close();
            ?>
        </ul>
    </div>

</body>
</html>
