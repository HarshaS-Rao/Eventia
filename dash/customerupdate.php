<?php
$connect = mysqli_connect("localhost", "root", "", "event_management");
if (isset($_POST["id"])) {
    $value = mysqli_real_escape_string($connect, $_POST["value"]);
    $query = "UPDATE CUSTOMER SET " . $_POST["column_name"] . "='" . $value . "' WHERE CID = '" . $_POST["id"] . "'";
    if (mysqli_query($connect, $query)) {
        echo 'Data Updated';
    }
}
