<?php
$connect = mysqli_connect("localhost", "root", "", "event_management");
if (isset($_POST["SER_NAME"], $_POST["SER_PHONE"], $_POST["BUDGET"])) {
    $SER_NAME = mysqli_real_escape_string($connect, $_POST["SER_NAME"]);
    $SER_PHONE = mysqli_real_escape_string($connect, $_POST["SER_PHONE"]);
    $BUDGET = mysqli_real_escape_string($connect, $_POST["BUDGET"]);


    $query = "INSERT INTO service(`SER_NAME`, `SER_PHONE`,`BUDGET`) VALUES('$SER_NAME','$SER_PHONE','$BUDGET')";
    if (mysqli_query($connect, $query)) {
        echo 'Data Inserted';
    }
}