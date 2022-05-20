<?php

include('login.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/logi.css">
</head>

<body>
    <div class="form-modal">
        <div class="form-toggle">
            <button id="login-toggle" onclick="toggleLogin()">Log in</button>

        </div>

        <div id="login-form">
            <form name="f1" action="login.php" method="POST">
                <input type="email" name="USERNAME" placeholder="Enter email " />
                <input type="password" name="PASSWORD" placeholder="Enter password"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                    required />
                <button type="submit" name="login" class="btn login">Login</button>
            </form>
        </div>


    </div>
    <script type="text/javascript" src="logscript.js"></script>
</body>

</html>