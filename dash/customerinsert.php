<?php
$connect = mysqli_connect("localhost", "root", "", "event_management");
if (isset($_POST["CNAME"], $_POST["CPHONE"], $_POST["ADR"], $_POST["BUDGET"], $_POST["DATE"], $_POST["EID"])) {
    $CNAME = mysqli_real_escape_string($connect, $_POST["CNAME"]);
    $CPHONE = mysqli_real_escape_string($connect, $_POST["CPHONE"]);
    $ADR = mysqli_real_escape_string($connect, $_POST["ADR"]);
    $BUDGET = mysqli_real_escape_string($connect, $_POST["BUDGET"]);
    $DATE = mysqli_real_escape_string($connect, $_POST["DATE"]);
    $EID = mysqli_real_escape_string($connect, $_POST["EID"]);

    $query = "INSERT INTO customer(`CNAME`,`CPHONE`,`ADR`,`BUDGET`, `DATE`,`EID`) VALUES('$CNAME','$CPHONE','$ADR','$BUDGET','$DATE','$EID')";
    if (mysqli_query($connect, $query)) {
        echo 'Data Inserted';
    }
}