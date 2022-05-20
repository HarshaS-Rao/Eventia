<?php

$db = mysqli_connect("localhost", "root", "", "event_management");



$SER_ID = $_POST['SER_ID'];
$EID = $_POST['EID'];


if ($EID && $SER_ID) {
    $query = "UPDATE EVENT SET SER_ID = $SER_ID WHERE EID = $EID";

    mysqli_query($db, $query);
    echo '<script language="javascript">';
    echo 'alert("Your SERVICE is booked!");';
    echo 'window.location.href="thankyou.php";';
    echo '</script>';
}
