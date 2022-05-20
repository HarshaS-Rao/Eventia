<?php
$connect = mysqli_connect("localhost", "root", "", "event_management");
if (isset($_POST["id"])) {
    $value = mysqli_real_escape_string($connect, $_POST["value"]);
    $query = "UPDATE manager SET " . $_POST["column_name"] . "='" . $value . "' WHERE MID = '" . $_POST["id"] . "'";
    if (mysqli_query($connect, $query)) {
        echo 'Data Updated';
    }
}