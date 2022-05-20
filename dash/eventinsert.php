<?php
$connect = mysqli_connect("localhost", "root", "", "event_management");
if (isset($_POST["ENAME"], $_POST["LOCATION"], $_POST["TIME"], $_POST["SER_ID"])) {
    $ENAME = mysqli_real_escape_string($connect, $_POST["ENAME"]);
    $LOCATION = mysqli_real_escape_string($connect, $_POST["LOCATION"]);
    $TIME = mysqli_real_escape_string($connect, $_POST["TIME"]);
    $SER_ID = mysqli_real_escape_string($connect, $_POST["SER_ID"]);

    $query = "INSERT INTO EVENT(`ENAME`, `LOCATION`, `TIME`,`SER_ID`) VALUES('$ENAME','$LOCATION','$TIME','$SER_ID')";
    if (mysqli_query($connect, $query)) {
        echo 'Data Inserted';
    }
}