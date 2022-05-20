<?php
$con = mysqli_connect('localhost', 'root');



mysqli_select_db($con, 'event_management');

$SER_NAME = $_POST['SER_NAME'];





$query = "INSERT INTO `service`(`SER_NAME`) VALUES ('$SER_NAME')";



mysqli_query($con, $query);

if (mysqli_query($con, $query)) {
    echo "<script>window.open('servicebook.php','_self')</script>";
}