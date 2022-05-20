<?php
$connection = mysqli_connect('localhost', 'root', '', 'event_management');
$result = mysqli_query($connection, "SELECT  C.CNAME,C.CPHONE,C.ADR ,C.BUDGET, C.DATE , E.ENAME, E.LOCATION , E.TIME, S.SER_NAME, S.SER_PHONE, S.BUDGET FROM CUSTOMER C,
EVENT E, SERVICE S WHERE C.EID=E.EID AND E.SER_ID=S.SER_ID");


//if($result){
//    echo "CONNECTED";
//}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to fit=no">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>

    <div class="table-responsive">
        <table id="userdata" class="table table-striped table-bordered">

            <thead>
                <tr>
                    <td>Customer Name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Budget</td>
                    <td>Date</td>
                    <td>Event Name</td>
                    <td>Time</td>
                    <td>Location</td>
                    <td>Service Name</td>

                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo '
                               <tr>
                                    <td>' . $row["CNAME"] . '</td>
                                    <td>' . $row["CPHONE"] . '</td>
                                    <td>' . $row["ADR"] . '</td>
                                    <td>' . $row["BUDGET"] . '</td>
                                    <td>' . $row["DATE"] . '</td>
                                    <td>' . $row["ENAME"] . '</td>
                                    <td>' . $row["LOCATION"] . '</td>
                                    <td>' . $row["TIME"] . '</td>
                                   
                                    
            

                               </tr>
                               ';
            }
            ?>
        </table>
    </div>
    <br>
    <br>




    </div>

</body>

</html>
<script>
$(document).ready(function() {
    $('#userdata').DataTable();
});
</script>