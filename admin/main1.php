<?php
$con = mysqli_connect('localhost', 'root');


mysqli_select_db($con, 'event_management');

$CNAME = $_POST['CNAME'];



$query = "SELECT CNAME FROM `CUSTOMER`";


mysqli_query($con, $query);
