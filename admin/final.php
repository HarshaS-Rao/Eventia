<?php
$con = mysqli_connect('localhost', 'root');



mysqli_select_db($con, 'event_management');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$CNAME = $_POST['CNAME'];
$CPHONE = $_POST['CPHONE'];
$ADR = $_POST['ADR'];
$BUDGET = $_POST['BUDGET'];
$DATE = $_POST['DATE'];
$ENAME = $_POST['ENAME'];
$TIME = $_POST['TIME'];
$LOCATION = $_POST['LOCATION'];
$SER_NAME = $_POST['SER_NAME'];



$query = "SELECT  CNAME,CPHONE,ADR ,BUDGET, DATE ,ENAME,TIME ,LOCATION ,SER_NAME FROM CUSTOMER C,
EVENT E,SERVICE S WHERE C.EID=E.EID AND E.SER_ID=S.SER_ID ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($data = mysqli_fetch_array($records)) {
        echo   " . $data['CNAME'] . "  " . $data['CPHONE'] . " " . $data['ADR'] . "  " . $data['BUDGET']. "  " . $data['DATE']. "  " . $data['ENAME']. "  " . $data['TIME']. "  " . $data['LOCATION']. "  " . $data['SER_NAME']" ";
    }
    
 else {
    echo "0 results";
}

$con->close();



mysqli_query($con, $query);