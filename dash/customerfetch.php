<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "event_management");
$columns = array('CNAME', 'CPHONE', 'ADR', 'BUDGET', 'DATE', 'EID');

$query = "SELECT * FROM CUSTOMER ";

if (isset($_POST["search"]["value"])) {
    $query .= '
 WHERE CNAME LIKE "%' . $_POST["search"]["value"] . '%" 
 OR CPHONE LIKE "%' . $_POST["search"]["value"] . '%" 
 OR ADR LIKE "%' . $_POST["search"]["value"] . '%"
 OR BUDGET LIKE "%' . $_POST["search"]["value"] . '%"
 OR DATE LIKE "%' . $_POST["search"]["value"] . '%"
 OR EID LIKE "%' . $_POST["search"]["value"] . '%"
 ';
}

if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $columns[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' 
 ';
} else {
    $query .= 'ORDER BY CID DESC ';
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
    $sub_array[] = '<div contenteditable class="update" data-id="' . $row["CID"] . '" data-column="CNAME">' . $row["CNAME"] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="' . $row["CID"] . '" data-column="CPHONE">' . $row["CPHONE"] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="' . $row["CID"] . '" data-column="ADR">' . $row["ADR"] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="' . $row["CID"] . '" data-column="BUDGET">' . $row["BUDGET"] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="' . $row["CID"] . '" data-column="DATE">' . $row["DATE"] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="' . $row["CID"] . '" data-column="EID">' . $row["EID"] . '</div>';
    $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="' . $row["CID"] . '">Delete</button>';
    $data[] = $sub_array;
}

function get_all_data($connect)
{
    $query = "SELECT * FROM CUSTOMER";
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