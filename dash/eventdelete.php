<?php
$connect = mysqli_connect("localhost", "root", "", "event_management");
if (isset($_POST["id"])) {
    $query = "DELETE FROM EVENT WHERE EID = '" . $_POST["id"] . "'";
    if (mysqli_query($connect, $query)) {
        echo 'Data Deleted';
    }
}
