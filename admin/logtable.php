<html>

<head>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>
        Event Dashboard
    </title>
</head>

<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <div class="wrapper">



        <div class="main_container">
            <div class="container box">
                <div class="table-responsive">
                    <div align="right">
                        <button type="button" name="add" id="add" title="Add tuple" class="btn btn-info">Add</button>
                    </div>
                    <br />
                    <div id="alert_message"></div>
                    <table id="user_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>TIME STAMP</th>
                                <th>LOG</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
    $(document).ready(function() {

        fetch_data();

        function fetch_data() {
            var dataTable = $('#user_data').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "dash/logfetch.php",
                    type: "POST"
                }
            });
        }


    });
    </script>

</body>

</html>