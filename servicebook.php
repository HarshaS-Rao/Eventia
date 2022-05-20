<html>

<head>
    <link rel="stylesheet" href="css/drop.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>
        Main Home
    </title>
</head>

<body>
    <center>
        <h3> Sorry for the inconvenience.. Could you select again with your event and service</h3>
    </center>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <center>
        <div class="wrapper">


            <div class="main-form">
                <form action="serviceinfo.php" method="post">
                    <label>Services</label>
                    <select name='SER_ID'>
                        <option disabled selected>Select Service</option>
                        <?php
                        include "serviceinfo.php";  // Using database connection file here
                        $records = mysqli_query($db, "SELECT DISTINCT SER_ID, SER_NAME From SERVICE");  // Use select query here

                        while ($data = mysqli_fetch_array($records)) {
                            echo "<option value='" . $data['SER_ID'] . "'>" . $data['SER_NAME'] . "</option>";  // displaying data in option menu
                        }
                        ?>
                    </select>
                    <label>Event</label>
                    <select name='EID'>
                        <option disabled selected>Select Event</option>
                        <?php

                        $records = mysqli_query($db, "SELECT EID,ENAME From EVENT");  // Use select query here

                        while ($data = mysqli_fetch_array($records)) {
                            echo "<option value='" . $data['EID'] . "'>" . $data['ENAME'] . "</option>";  // displaying data in option menu
                        }
                        ?>
                    </select>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>


        <script>
        $(".hamburger").click(function() {
            $(".wrapper").toggleClass("collapse");
        });
        </script>


    </center>
    <!--<h1><a href="../logout.php">Logout here</a> </h1>-->
</body>

</html>