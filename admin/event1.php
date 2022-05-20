<?php
$con = mysqli_connect('localhost', 'root');



mysqli_select_db($con, 'event_management');

$ENAME = $_POST['ENAME'];
$TIME = $_POST['TIME'];
$LOCATION = $_POST['LOCATION'];



$query = "INSERT INTO `EVENT`(`ENAME`, `TIME`, `LOCATION`) VALUES ('$ENAME','$TIME','$LOCATION')";


mysqli_query($con, $query);
if (mysqli_query($con, $query)) {
    echo "<script>window.open('book.php','_self')</script>";
}