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
                                <th>Customer Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Budget</th>
                                <th>Date</th>
                                <th>Event Name</th>
                                <th>Time</th>
                                <th>Location</th>
                                <th>Service Name</th>
                                <th>Phone</th>
                                <th>BUDGET</th>
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
                    url: "dash/finalfetch.php",
                    type: "POST"
                }
            });
        }

        function update_data(id, column_name, value) {
            $.ajax({
                url: "dash/finalupdate.php",
                method: "POST",
                data: {
                    id: id,
                    column_name: column_name,
                    value: value
                },
                success: function(data) {
                    $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                    $('#user_data').DataTable().destroy();
                    fetch_data();
                }
            });
            setInterval(function() {
                $('#alert_message').html('');
            }, 5000);
        }

        $(document).on('blur', '.update', function() {
            var id = $(this).data("id");
            var column_name = $(this).data("column");
            var value = $(this).text();
            update_data(id, column_name, value);
        });

        $('#add').click(function() {
            var html = '<tr>';
            html += '<td contenteditable id="data1"></td>';
            html += '<td contenteditable id="data2"></td>';
            html += '<td contenteditable id="data3"></td>';
            html += '<td contenteditable id="data4"></td>';
            html += '<td contenteditable id="data5"></td>';
            html += '<td contenteditable id="data6"></td>';
            html += '<td contenteditable id="data7"></td>';
            html += '<td contenteditable id="data8"></td>';
            html += '<td contenteditable id="data9"></td>';
            html += '<td contenteditable id="data10"></td>';
            html += '<td contenteditable id="data11"></td>';
            html +=
                '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
            html += '</tr>';
            $('#user_data tbody').prepend(html);
        });

        $(document).on('click', '#insert', function() {
            var CNAME = $('#data1').text();
            var CPHONE = $('#data2').text();
            var ADR = $('#data3').text();
            var BUDGET = $('#data4').text();
            var DATE = $('#data5').text();
            var ENAME = $('#data6').text();
            var TIME = $('#data7').text();
            var LOCATION = $('#data8').text();
            var SER_NAME = $('#data9').text();
            var SER_PHONE = $('#data10').text();
            var BUDGET = $('#data11').text();

            if (CNAME != '' && CPHONE != '' && ADR != '' && BUDGET != '' && DATE != '' && ENAME != '' &&
                TIME != '' && LOCATION != '' && SER_NAME != '' && SER_PHONE != '' &&
                BUDGET != '') {
                $.ajax({
                    url: "dash/finalinsert.php",
                    method: "POST",
                    data: {
                        CNAME: CNAME,
                        CPHONE: CPHONE,
                        ADR: ADR,
                        BUDGET: BUDGET,
                        DATE: DATE,
                        ENAME: ENAME,
                        LOCATION: LOCATION,
                        TIME: TIME,
                        SER_NAME: SER_NAME,
                        SER_PHONE: SER_PHONE,
                        BUDGET: BUDGET,
                    },
                    success: function(data) {
                        $('#alert_message').html('<div class="alert alert-success">' +
                            data + '</div>');
                        $('#user_data').DataTable().destroy();
                        fetch_data();
                    }
                });
                setInterval(function() {
                    $('#alert_message').html('');
                }, 5000);
            } else {
                alert("All Fields is required");
            }
        });

        $(document).on('click', '.delete', function() {
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to remove this?")) {
                $.ajax({
                    url: "dash/finaldelete.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#alert_message').html('<div class="alert alert-success">' +
                            data + '</div>');
                        $('#user_data').DataTable().destroy();
                        fetch_data();
                    }
                });
                setInterval(function() {
                    $('#alert_message').html('');
                }, 5000);
            }
        });
    });
    </script>

</body>

</html>