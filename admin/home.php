<?php
session_start();
?>

<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">


</head>

<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <header>
        <div class='log-icon'>
            <a href="logout.php">
                <i class="fas fa-sign-out-alt" title="Log out" style="font-size: 1.5em;"></i>
            </a>
        </div>
        <div class="welcome-text">
            <div class="welcome-name">
                <h1>
                    Welcome
                </h1>
                <h1 class="name">
                    admin
                </h1>

                <a href="customertable.php">Customer</a>
                <a href="eventtable.php">Event</a>
                <a href="servicetable.php">Service</a>
                <a href="managertable.php">Manager</a>
                <a href="logtable.php">Logs</a>

            </div>
        </div>
    </header>

</body>

</html>