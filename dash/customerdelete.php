<?php
$connect = mysqli_connect("localhost", "root", "", "event_management");
if (isset($_POST["id"])) {
    $query = "DELETE FROM CUSTOMER WHERE CID = '" . $_POST["id"] . "'";
    if (mysqli_query($connect, $query)) {
        echo 'Data Deleted';
    }
}
