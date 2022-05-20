<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <center>
        <div class="product-heading">
            <h1>Customer Details</h1>
    </center>
    </div>
    <div class="container-body">

        <div class="product-form" style="position:absolute; right:0;">
            <form action="customer1.php" method="post">
                <div class="form-group">
                    <div class="customer">
                        <label>Customer Name</label>
                        <input align="center" type="text" name="CNAME" required="required" autocomplete="off"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="phone">
                        <label>Phone</label>
                        <input align="center" type="tel" name="CPHONE" pattern="[6789][0-9]{9}" required="required"
                            autocomplete=" off" class="form-control">

                    </div>
                </div>
                <div class="form-group">
                    <div class="Address">
                        <label>Address</label>
                        <input align="center" type="text" name="ADR" required="required" autocomplete="off"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="Budget">
                        <label>Budget</label>
                        <input align="center" type="text" name="BUDGET" required="required" autocomplete="off"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="date">
                        <label>Date</label>

                        <input align="center" type="date" name="DATE" required="required" autocomplete="off"
                            class="form-control" min='2022-03-28'>
                    </div>
                </div>
                <div class="extraspace" style="height: 500px">

                    <button type="submit" class="btn btn-primary">Submit </button>

                </div>
                <div class="extraspace" style="height: 50px">


                </div>
            </form>
        </div>
    </div>

</body>

</html>