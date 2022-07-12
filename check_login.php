<?php
require_once("db_connect.php");


$username = $_POST["username"];
$password = $_POST["password"];

if (empty(trim($username)) || empty(trim($password))) header("location: admin_login.php?err_msg=Enter Username/Password");

$sql = "SELECT * FROM users WHERE username = '$username' && password = '$password'";

$result = mysqli_query($conn, $sql);

echo mysqli_error($conn);
if ($result) {
    $row = mysqli_num_rows($result);
    echo $row;
    if ($row > 0) {
        header("location: search.php");
    } else {

        header("location: admin_login.php?err_msg=Incorrect Username/Password");
    }
} else {
    echo "no result found";
}
