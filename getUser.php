<?php
require_once("db_connect.php");


if ($_POST['staff_id']) {

    $staff_id = $_POST['staff_id'];

    $sql = "SELECT inputfirstname, inputothernames FROM staff_info WHERE file_no = '$staff_id'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    echo json_encode(array('success' => 1, "result" => $row, "file_no" => $staff_id));
} else {
    echo json_encode(array('success' => 0));
}
