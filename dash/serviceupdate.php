<?php
$connect = mysqli_connect("localhost", "root", "", "event_management");
if (isset($_POST["id"])) {
    $value = mysqli_real_escape_string($connect, $_POST["value"]);
    $query = "UPDATE SERVICE SET " . $_POST["column_name"] . "='" . $value . "' WHERE SER_ID = '" . $_POST["id"] . "'";
    if (mysqli_query($connect, $query)) {
        echo 'Data Updated';
    }
}