<?php
$con = mysqli_connect('localhost', 'root');


mysqli_select_db($con, 'event_management');


$CNAME = $_POST['CNAME'];
$CPHONE = $_POST['CPHONE'];
$ADR = $_POST['ADR'];
$BUDGET = $_POST['BUDGET'];
$DATE = $_POST['DATE'];


$query = "INSERT INTO `customer`(`CNAME`, `CPHONE`, `ADR`,`BUDGET`,`DATE`) VALUES ('$CNAME','$CPHONE','$ADR','$BUDGET','$DATE')";

mysqli_query($con, $query);

if (mysqli_query($con, $query)) {
    echo "<script>window.open('event.php','_self')</script>";
}