<?php

$db = mysqli_connect("localhost", "root", "", "event_management");



$EID = $_POST['EID'];
$CID = $_POST['CID'];


if ($CID && $EID) {
    $query = "UPDATE Customer SET EID = $EID WHERE CID = $CID";

    mysqli_query($db, $query);
    echo '<script language="javascript">';
    echo 'alert("Your EVENT is booked!");';
    echo 'window.location.href="services.php";';
    echo '</script>';
}