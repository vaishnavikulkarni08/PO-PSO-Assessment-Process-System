<html>
    <head>
        <title>
           PO attainment
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
  
<table>
<?php
include "db_conn.php";
if (isset($_GET['course_code'])) {
    $courseCode = $_GET['course_code'];

    $sql = "SELECT * FROM poa WHERE course_code = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $courseCode);
$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $sname = $row["staff_name"];
    $scode = $row["subject_code"];
    $ccode = $row["course_code"];
    $cname = $row["course_name"];
  }
  echo"  
  <tr>
        <th>
        <label for='staff_name'>Staff Name:</label>" .$sname."</th>
        <th><label for='subject_code'>Subject code:</label>" .$scode."</th> 
        <th><label for='course_code'>Course code:</label>" .$ccode."</th>
        <th><label for='course_name'>Course Name:</label>" .$cname."</th>
    </tr>";
}    
?>    
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
<?php
// Establish a database connection
include "db_conn.php";
if (isset($_GET['course_code'])) {
    $courseCode = $_GET['course_code'];
// Retrieve data from the "poa" table
$sql = "SELECT * FROM poa WHERE course_code = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $courseCode);
        $stmt->execute();

        $result = $stmt->get_result();

$total1=0;
$total2=0;
$total3=0;
$total4=0;
$total5=0;
$total6=0;
$total7=0;
$total8=0;
$total9=0;
$total10=0;
$total11=0;
$total12=0;
$total13=0;
$total14=0;
$total15=0;
$total16=0;
$total17=0;

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row["course"]."</td>
            <td>".$row["statements"]."</td>
            <td>".($row["po1"] !== 0.00 ? $row["po1"] : " ")."</td>
            <td>".($row["po2"] !== 0.00 ? $row["po2"] : " ")."</td>
            <td>".($row["po3"] !== 0.00 ? $row["po3"] : " ")."</td>
            <td>".($row["po4"] !== 0.00 ? $row["po4"] : "")."</td>
            <td>".($row["po5"] !== 0.00 ? $row["po5"] : "")."</td>
            <td>".($row["po6"] !== 0.00 ? $row["po6"] : "")."</td>
            <td>".($row["po7"] !== 0.000 ? $row["po7"] : "")."</td>
            <td>".($row["po8"] !== 0.00 ? $row["po8"] : "")."</td>
            <td>".($row["po9"] !== 0.00 ? $row["po9"] : "")."</td>
            <td>".($row["po10"] !== 0.00 ? $row["po10"] : "")."</td>
            <td>".($row["po11"] !== 0.00 ? $row["po11"] : "")."</td>
            <td>".($row["po12"] !== 0.00 ? $row["po12"] : "")."</td>
            <td>".($row["total"] !== 0.00 ? $row["total"] : "")."</td>
            <td>".($row["pso1"] !== 0.00 ? $row["pso1"] : "")."</td>
            <td>".($row["pso2"] !== 0.00 ? $row["pso2"] : "")."</td>
            <td>".($row["pso3"] !== 0.00 ? $row["pso3"] : "")."</td>
            <td>".($row["total1"] !== 0.00 ? $row["total1"] : "")."</td>
        </tr>";
    
        $total1 += $row["po1"];
        $total2 += $row["po2"];
        $total3 += $row["po3"];
        $total4 += $row["po4"];
        $total5 += $row["po5"];
        $total6 += $row["po6"];
        $total7 += $row["po7"];
        $total8 += $row["po8"];
        $total9 += $row["po9"];
        $total10 +=$row["po10"];
        $total11 += $row["po11"];
        $total12 += $row["po12"];
        $total13 += $row["total"];
        $total14 += $row["pso1"];
        $total15 += $row["pso2"];
        $total16 += $row["pso3"];
        $total17 += $row["total1"];

}    
    echo"
        <tr>
        <th colspan='2' ><b>Total</b></th>
        <th>".$total1."  </th>
        <th> ".$total2." </th>
        <th>".$total3." </th>
        <th> ".$total4." </th>
        <th> ".$total5." </th>
        <th> ".$total6." </th>
        <th> ".$total7." </th>
        <th> ".$total8." </th>
        <th> ".$total9." </th>
        <th> ".$total10." </th>
        <th> ".$total11." </th>
        <th>". $total12." </th>
        <th> ". $total13."</th>
        <th> ". $total14."</th>
        <th> ".$total15." </th> 
        <th> ".$total16." </th>
        <th>". $total17." </th>
        </tr>";

        $sv1=number_format($total1 / $total13, 2);
        $sv2=number_format($total2 / $total13, 2);
        $sv3=number_format($total3 / $total13, 2);
        $sv4=number_format($total4 / $total13, 2);
        $sv5=number_format($total5 / $total13, 2);
        $sv6=number_format($total6 / $total13, 2);
        $sv7=number_format($total7 / $total13, 2);
        $sv8=number_format($total8 / $total13, 2);
        $sv9=number_format($total9 / $total13, 2);
        $sv10=number_format($total10 / $total13, 2);
        $sv11=number_format($total11 / $total13, 2);
        $sv12=number_format($total12 / $total13, 2);

        $svp1=number_format($total14 / $total17, 2);
        $svp2=number_format($total15 / $total17, 2);
        $svp3=number_format($total16 / $total17, 2);
        echo"
        <tr>
            <th colspan='2' ><b>Set Value</b></th>
            <th>".$sv1."  </th>
            <th> ".$sv2." </th>
            <th> ".$sv3." </th>
            <th> ".$sv4." </th>
            <th> ".$sv5." </th> 
            <th> ".$sv6." </th>
            <th> ".$sv7." </th>
            <th>".$sv8." </th>
            <th> ".$sv9." </th>
            <th> ".$sv10." </th>
            <th> ".$sv11." </th>
            <th> ".$sv12." </th>
            <th>  </th>
            <th> ".$svp1." </th>
            <th> ".$svp2."</th>
            <th> ".$svp3." </th>
            <th> </th>
        </tr>";   
}        

 $gs=0;
 $ga=0;
 $gb=0;
 $gc=0;
 $gd=0;
 $ge=0;
 $gf=0;
 $gappeared=0;       
$sql = "SELECT * FROM grades WHERE course_code = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $courseCode);
$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $gs = $row["s"];
    $ga = $row["a"];
    $gb = $row["b"];
    $gc = $row["c"];
    $gd = $row["d"];
    $ge = $row["e"];
    $gf = $row["f"];
    $gappeared = $row["appeared"];

}
$sumgrades=(10*$gs)+(9*$ga)+(8*$gb)+(7*$gc)+(5*$gd)+(4*$ge)+(0*$gf);
$resvalue=number_format($sumgrades/($gappeared*10),2);

$obv1=number_format($sv1*$resvalue,2);
$obv2=number_format($sv2*$resvalue,2);
$obv3=number_format($sv3*$resvalue,2);
$obv4=number_format($sv4*$resvalue,2);
$obv5=number_format($sv5*$resvalue,2);
$obv6=number_format($sv6*$resvalue,2);
$obv7=number_format($sv7*$resvalue,2);
$obv8=number_format($sv8*$resvalue,2);
$obv9=number_format($sv9*$resvalue,2);
$obv10=number_format($sv10*$resvalue,2);
$obv11=number_format($sv11*$resvalue,2);
$obv12=number_format($sv12*$resvalue,2);
$obv13=number_format($svp1*$resvalue,2);
$obv14=number_format($svp2*$resvalue,2);
$obv15=number_format($svp3*$resvalue,2);

$poa1 = $sv1 != 0 ? number_format(($obv1 / $sv1) * 100, 2) : '##';
$poa2 = $sv2 != 0 ? number_format(($obv2 / $sv2) * 100, 2) : '##';
$poa3 = $sv3 != 0 ? number_format(($obv3 / $sv3) * 100, 2) : '##';
$poa4 = $sv4 != 0 ? number_format(($obv4 / $sv4) * 100, 2) : '##';
$poa5 = $sv5 != 0 ? number_format(($obv5 / $sv5) * 100, 2) : '##';
$poa6 = $sv6 != 0 ? number_format(($obv6 / $sv6) * 100, 2) : '##';
$poa7 = $sv7 != 0 ? number_format(($obv7 / $sv7) * 100, 2) : '##';
$poa8 = $sv8 != 0 ? number_format(($obv8 / $sv8) * 100, 2) : '##';
$poa9 = $sv9 != 0 ? number_format(($obv9 / $sv9) * 100, 2) : '##';
$poa10 = $sv10 != 0 ? number_format(($obv10 / $sv10) * 100, 2) : '##';
$poa11 = $sv11 != 0 ? number_format(($obv11 / $sv11) * 100, 2) : '##';
$poa12 = $sv12 != 0 ? number_format(($obv12 / $sv12) * 100, 2) : '##';
$poa13 = $svp1 != 0 ? number_format(($obv13 / $svp1) * 100, 2) : '##';
$poa14 = $svp2 != 0 ? number_format(($obv14 / $svp2) * 100, 2) : '##';
$poa15 = $svp3 != 0 ? number_format(($obv15 / $svp3) * 100, 2) : '##';

$attainmentLevel1 = $poa1 >= 60 ? 3 : ($poa1 >= 40 && $poa1 < 60 ? 2 : ($poa1 < 40 && $poa1 > 0 ? 1 : 0));
$attainmentLevel2 = $poa2 >= 60 ? 3 : ($poa2 >= 40 && $poa2 < 60 ? 2 : ($poa2 < 40 && $poa2 > 0 ? 1 : 0));
$attainmentLevel3 = $poa3 >= 60 ? 3 : ($poa3 >= 40 && $poa3 < 60 ? 2 : ($poa3 < 40 && $poa3 > 0 ? 1 : 0));
$attainmentLevel4 = $poa4 >= 60 ? 3 : ($poa4 >= 40 && $poa4 < 60 ? 2 : ($poa4 < 40 && $poa4 > 0 ? 1 : 0));
$attainmentLevel5 = $poa5 >= 60 ? 3 : ($poa5 >= 40 && $poa5 < 60 ? 2 : ($poa5 < 40 && $poa5 > 0 ? 1 : 0));
$attainmentLevel6 = $poa6 >= 60 ? 3 : ($poa6 >= 40 && $poa6 < 60 ? 2 : ($poa6 < 40 && $poa6 > 0 ? 1 : 0));
$attainmentLevel7 = $poa7 >= 60 ? 3 : ($poa7 >= 40 && $poa7 < 60 ? 2 : ($poa7 < 40 && $poa7 > 0 ? 1 : 0));
$attainmentLevel8 = $poa8 >= 60 ? 3 : ($poa8 >= 40 && $poa8 < 60 ? 2 : ($poa8 < 40 && $poa8 > 0 ? 1 : 0));
$attainmentLevel9 = $poa9 >= 60 ? 3 : ($poa9 >= 40 && $poa9 < 60 ? 2 : ($poa9 < 40 && $poa9 > 0 ? 1 : 0));
$attainmentLevel10 = $poa10 >= 60 ? 3 : ($poa10 >= 40 && $poa10 < 60 ? 2 : ($poa10 < 40 && $poa10 > 0 ? 1 : 0));
$attainmentLevel11 = $poa11 >= 60 ? 3 : ($poa11 >= 40 && $poa11 < 60 ? 2 : ($poa11 < 40 && $poa11 > 0 ? 1 : 0));
$attainmentLevel12 = $poa12 >= 60 ? 3 : ($poa12 >= 40 && $poa12 < 60 ? 2 : ($poa12 < 40 && $poa12 > 0 ? 1 : 0));
$attainmentLevel13 = $poa13 >= 60 ? 3 : ($poa13 >= 40 && $poa13 < 60 ? 2 : ($poa13 < 40 && $poa13 > 0 ? 1 : 0));
$attainmentLevel14 = $poa14 >= 60 ? 3 : ($poa14 >= 40 && $poa14 < 60 ? 2 : ($poa14 < 40 && $poa14 > 0 ? 1 : 0));
$attainmentLevel15 = $poa15 >= 60 ? 3 : ($poa15 >= 40 && $poa15 < 60 ? 2 : ($poa15 < 40 && $poa15 > 0 ? 1 : 0));

        echo"
        <tr>
            <th colspan='2' ><b>Obtained  Values</b></th>
            <th> ".$obv1."</th>
            <th> ".$obv2." </th>
            <th> ".$obv3." </th>
            <th> ".$obv4." </th>
            <th> ".$obv5." </th>
            <th>  ".$obv6."</th>
            <th> ".$obv7." </th>
            <th> ".$obv8." </th>
            <th> ".$obv9." </th>
            <th> ".$obv10." </th>
            <th> ".$obv11." </th>
            <th> ".$obv12." </th> 
            <th>  </th>
            <th> ".$obv13." </th>
            <th> ".$obv14." </th>
            <th> ".$obv15." </th>
            <th> </th>
        </tr>

        <tr>
            <th colspan='2' ><b>Grades</b></th>
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
            <th colspan='2' ><b>Grade wise score</b></th>
            <th> </th>
            <th>".$gs."  </th>
            <th> ".$ga." </th>
            <th> ".$gb." </th>
            <th> ".$gc." </th>
            <th> ".$gd." </th>
            <th> ".$ge." </th>
            <th> ".$gf." </th>
            <th>  ".$gappeared."</th>
            <th>  ".$sumgrades."</th>
            <th> ".$resvalue." </th>
            <th>  </th> 
            <th>  </th>
            <th>  </th>
            <th>  </th>
            <th>  </th>
            <th> </th>
        </tr>


        <tr>
            <th colspan='2' ><b>PO Attainment(%)</b></th>
            <th>".$poa1." </th>
            <th> ".$poa2." </th>
            <th> ".$poa3." </th>
            <th> ".$poa4." </th>
            <th> ".$poa5." </th>
            <th>".$poa6."  </th>
            <th> ".$poa7." </th>
            <th>".$poa8."  </th>
            <th> ".$poa9." </th>
            <th> ".$poa10." </th>
            <th>  ".$poa11."</th>
            <th>  ".$poa12."</th> 
            <th>  </th>
            <th> ".$poa13." </th>
            <th> ".$poa14." </th>
            <th> ".$poa15." </th>
            <th> </th>
        </tr>


        <tr>
        <th colspan='2' ><b>PO Attainment Level</b></th>
            <th> ".$attainmentLevel1."</th>
            <th> ".$attainmentLevel2." </th>
            <th> ".$attainmentLevel3." </th>
            <th> ".$attainmentLevel4." </th>
            <th> ".$attainmentLevel5." </th>
            <th> ".$attainmentLevel6." </th>
            <th> ".$attainmentLevel7." </th>
            <th> ".$attainmentLevel8." </th>
            <th> ".$attainmentLevel9." </th>
            <th> ".$attainmentLevel10." </th>
            <th> ".$attainmentLevel11." </th>
            <th> ".$attainmentLevel12." </th> 
            <th>  </th>
            <th> ".$attainmentLevel13." </th>
            <th> ".$attainmentLevel14." </th>
            <th> ".$attainmentLevel15." </th>
            <th> </th>
        </tr>";
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

