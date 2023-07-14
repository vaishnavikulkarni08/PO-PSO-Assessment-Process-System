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
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
    .row.content {height: 550px}
    
   
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
   
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
  <link rel="icon" type="image/x-icon" href="logo.ico">
</head>
<body>
<br>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <br>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Dashboard</a></li>
        <li class="active"><a href="logout.php">Logout</a></li>
      </ul>
      <br>
    </div>
    
    <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-6">
        <div class="col-sm-12">
          <div class="well">
            <h4>Course Articulation Matrix (CAM)</h4>
            <p>
              <h6><a href="course articulation matrix.php">Click here to view page</a></h6>
            </p>
            <h4>Course Code</h4>
            <p>
              <h6><a href="course code.php">Click here to view page</a></h6>
            </p>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="well">
            <h4>Program Articulation Matrix (PAM)</h4>
            <p>
              <h6><a href="program articulation matrix.php">Click here to view page</a></h6>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="col-sm-12">
          <div class="well">
            <h4>CO Attainment</h4>
            <p>
              <h6><a href="coattainment.php">Click here to view page</a></h6>
            </p>
            <h4>Course Code</h4>
            <p>
              <h6><a href="coacoursecode.php">Click here to view page</a></h6>
            </p>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="well">
            <h4>PO Attainment</h4>
            <p>
              <h6><a href="poattainment.php">Click here to view page</a></h6>
            </p>
            <h4>Course Code</h4>
            <p>
              <h6><a href="poacoursecode.php">Click here to view page</a></h6>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
    
   

</body>
</html>


 