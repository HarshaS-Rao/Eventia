<html>

<head>
    <link rel="stylesheet" href="css/drop.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>
        Eventia
    </title>
</head>

<body>
    <!--<h1>Welcome</h1><br>-->
    <?php
    //echo $_SESSION['eid'];
    //
    ?>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <div class="wrapper">
        <center>
            <h3> Sorry for the inconvenience.. Could you select again with your name and event...</h3>
        </center>
        <center>
            <div class="main-form">
                <form action="bookinfo.php" method="post">
                    <label>Event</label>
                    <select name='EID'>
                        <option disabled selected>Select Event</option>
                        <?php
                        include "bookinfo.php";  // Using database connection file here
                        $records = mysqli_query($db, "SELECT DISTINCT EID, ENAME From EVENT");  // Use select query here

                        while ($data = mysqli_fetch_array($records)) {
                            echo "<option value='" . $data['EID'] . "'>" . $data['ENAME'] . "</option>";  // displaying data in option menu
                        }
                        ?>
                    </select>
                    <label>Customer</label>
                    <select name='CID'>
                        <option disabled selected>Select Customer</option>
                        <?php
                        // include "appointinfo.php";  // Using database connection file here
                        $records = mysqli_query($db, "SELECT CID,CNAME From CUSTOMER");  // Use select query here

                        while ($data = mysqli_fetch_array($records)) {
                            echo "<option value='" . $data['CID'] . "'>" . $data['CNAME'] . "</option>";  // displaying data in option menu
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