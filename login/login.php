<?php
session_start(); //session starts here

$dbcon = mysqli_connect("localhost", "root", "", "");
mysqli_select_db($dbcon, "event_management");

if (isset($_POST['login'])) {
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];

    $check_user = "select * from ADMIN WHERE USERNAME='$USERNAME' AND PASSWORD='$PASSWORD'";

    $run = mysqli_query($dbcon, $check_user);

    if (mysqli_num_rows($run)) {
        header('Location: home.php');
        //echo "<script>window.open('home.php','_self')</script>";

        $_SESSION['USERNAME'] = $USERNAME; //here session is used and value of $eid store in $_SESSION.
        $_SESSION['PASSWORD'] = $PASSWORD;
    } else {
        echo 'alert("Email/Password is Invalid");';
        header('Location: loginfront.php');
    }
}