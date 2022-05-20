<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "event_management");
$columns = array('ENAME', 'LOCATION', 'TIME');

$query = "SELECT * FROM Event";

if (isset($_POST["search"]["value"])) {
    $query .= '
 WHERE ENAME LIKE "%' . $_POST["search"]["value"] . '%" 
 OR LOCATION LIKE "%' . $_POST["search"]["value"] . '%" 
 OR TIME LIKE "%' . $_POST["search"]["value"] . '%"
 ';
}

if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $columns[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' 
 ';
} else {
    $query .= 'ORDER BY EID DESC ';
}

$query1 = '';

if ($_POST["length"] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while ($row = mysqli_fetch_array($result)) {
    $sub_array = array();
    $sub_array[] = '<div contenteditable class="update" data-id="' . $row["EID"] . '" data-column="ENAME">' . $row["ENAME"] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="' . $row["EID"] . '" data-column="LOCATION">' . $row["LOCATION"] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="' . $row["EID"] . '" data-column="TIME">' . $row["TIME"] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="' . $row["EID"] . '" data-column="SER_ID">' . $row["SER_ID"] . '</div>';
    $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="' . $row["EID"] . '">Delete</button>';
    $data[] = $sub_array;
}

function get_all_data($connect)
{
    $query = "SELECT * FROM EVENT";
    $result = mysqli_query($connect, $query);
    return mysqli_num_rows($result);
}

$output = array(
    "draw"    => intval($_POST["draw"]),
    "recordsTotal"  =>  get_all_data($connect),
    "recordsFiltered" => $number_filter_row,
    "data"    => $data
);

echo json_encode($output);
