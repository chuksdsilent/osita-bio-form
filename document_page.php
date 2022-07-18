<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="jquery/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <title>CBSS BIO_FORM</title>
</head>

<body class="bg-light">
    <?php

    require_once("db_connect.php");

    if (isset($_GET['staff_id']) || isset($_POST['staff_id'])) {

        $staff_id = (isset($_POST['staff_id'])) ?  $_POST['staff_id'] : $_GET['staff_id'];

        $sql = "SELECT * FROM staff_info WHERE file_no = '$staff_id'";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        // echo json_encode(array('success' => 1, "result" => $row, "file_no" => $staff_id));

    ?>
        <main class="container mt-3">
            <div class="d-flex justify-content-between">
                <ul class="nav nav-tabs container mt-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="detail_page.php?staff_id=<?php echo $staff_id; ?>">Details</a>
                    </li>
                    <li class="nav-item nav-tabs">
                        <a class="nav-link" href="document_page.php?staff_id=<?php echo $staff_id; ?>">Documents</a>
                    </li>
                </ul>
                <a href="http://localhost/bioform/admin_login.php" class="btn btn-danger">Logout</a>
            </div>
            <p></p>
            <p></p>
            <p>
                <img src="<?php echo $row["passport"]; ?>" style="width: 200px; height: 200px; object-fit: cover;" alt="">
            </p>
            QUALIFICATIONS OBTAINED BEFORE RESUMING WORK AT NASRDA
            </div>
            <p></p>
            <div class="col-12">
                Postgraduate
            </div>
            <div class="col-12">
                <img src="<?php echo $row["pg_file"]; ?>" style="width: 300px; height: 300px; object-fit:cover" alt="">

            </div>
            <div class="col-12">
                Undergraduate
            </div>
            <div class="col-12">
                <img src="<?php echo $row["under_g_file"]; ?>" style="width: 300px; height: 300px; object-fit:cover" alt="">

            </div>
            <div class="col-12">
                SSCE
            </div>
            <div class="col-12">
                <img src="<?php echo $row["ssce_file"]; ?>" style="width: 300px; height: 300px; object-fit:cover" alt="">

            </div>
            <div class="col-12">
                FSLC
            </div>
            <div class="col-12">
                <img src="<?php echo $row["fslc_file"]; ?>" style="width: 300px; height: 300px; object-fit:cover" alt="">

            </div>

            <div>
                QUALIFICATIONS OBTAINED WHILE WORKING IN NASRDA
                <br />
                <?php
                $qualifications = unserialize($row["qualification"]);

                foreach ($qualifications as $key => $value) {

                    echo '<img src="' . $value . '" style="width: 300px; height: 300px; object-fit:cover" alt=""> <br />';
                }
                ?>
            </div>
        </main>
    <?php
    } else {
    }
