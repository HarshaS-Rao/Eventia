<?php
$connect = mysqli_connect("localhost", "root", "", "event_management");
if (isset($_POST["MNAME"], $_POST["MPHONE"], $_POST["EID"])) {
    $MNAME = mysqli_real_escape_string($connect, $_POST["MNAME"]);
    $MPHONE = mysqli_real_escape_string($connect, $_POST["MPHONE"]);
    $EID = mysqli_real_escape_string($connect, $_POST["EID"]);


    $query = "INSERT INTO manager(`MNAME`, `MPHONE`, `EID`) VALUES('$MNAME','$MPHONE','$EID')";
    if (mysqli_query($connect, $query)) {
        echo 'Data Inserted';
    }
}