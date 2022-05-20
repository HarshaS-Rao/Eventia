<?php
$connect = mysqli_connect("localhost", "root", "", "event_management");
if (isset($_POST["id"])) {
    $query = "DELETE FROM service WHERE SER_ID = '" . $_POST["id"] . "'";
    if (mysqli_query($connect, $query)) {
        echo 'Data Deleted';
    }
}