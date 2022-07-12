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
    <div class="Admin container col-2">

    </div>
    <ul class="nav nav-tabs container mt-3">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="detail_page.html">Details</a>
      </li>
      <li class="nav-item nav-tabs">
        <a class="nav-link" href="document_page.php?staff_id=<?php echo $staff_id; ?>">Documents</a>
      </li>
    </ul>
    <section class="heading container">
      <h4>CBSS BIO-DATA FORM</h4>
    </section>
    <main class="container">
      <form class="row g-3">
        <h6 class="sectionA fw-bold">
          PERSONAL INFORMATION
        </h6>
        <div class="row">
          <div class="col-6">
            <div class="row">
              <div class="col-12 mt-2">
                Surname
              </div>
              <div class="col-12 mt-2 fw-bold">
                <?php echo $row["inputfirstname"]; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mt-2">
                Other Names
              </div>
              <div class="col-12 mt-2 fw-bold">
                <?php echo $row["inputothernames"]; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mt-2">
                Address 1
              </div>
              <div class="col-12 mt-2 fw-bold">
                <?php echo $row["inputAddress"]; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mt-2">
                Address 2
              </div>
              <div class="col-12 mt-2 fw-bold">
                <?php echo $row["inputAddress2"]; ?>
              </div>
            </div>
          </div>
          <div class="col-6">
            <img src="<?php echo $row["passport"]; ?>" style="width: 200px; height: 200px; object-fit: cover;" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="col mt-2">
            Country
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputcountry"]; ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col mt-2">
            Choose State
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputState"]; ?>
          </div>

        </div>
        <div class="col-md-4">
          <div class="col mt-2">
            Local Govt
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputlocalgovt"]; ?>
          </div>

        </div>
        <div class="col-12">
          <div class="col mt-2">
            Email Address
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputemail"]; ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col mt-2">
            Gender
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputgender"]; ?>
          </div>
        </div>
        <div class="col-md-4">

          <div class="col mt-2">
            Marital Status
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputmaritalstatus"]; ?>
          </div>
        </div>
        <div class="col-md-4">
          <!-- Date input -->
          Date Of Birth:
        </div>
        <div class="sectionB">
        </div>
        <h6 class="fw-bold">
          QUALIFICATIONS OBTAINED BEFORE RESUMING WORK AT NASRDA
        </h6>
        <div class="col-md-8">
          <div class="col mt-2 fw-bold">
            <?php echo $row["checkPG"]; ?>
          </div>
        </div>
        <div class="col-md-8">
          <!-- FOR UNDERGRADUATE -->

          <div class="col mt-2 fw-bold">
            <?php echo $row["checkUNDERG"]; ?>
          </div>
        </div>
        <div class="col-md-8">
          <!-- FOR SSCE -->

        </div>
        <div class="col-md-8">
          <!-- FOR FSLC -->
        </div>
        <div class="col-12">
          <div class="col mt-2">
            Institution Attended with date(POSTGRADUATE)
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputPG"]; ?>
          </div>
        </div>
        <div class="col-12">
          <div class="col mt-2">
            Institution Attended with date(Undergraduate)
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputUNDERG"]; ?>
          </div>
        </div>
        <div class="col-12">
          <div class="col mt-2">
            Institution Attended with date(SSCE)
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputSSCE"]; ?>
          </div>
        </div>
        <div class="col-12">
          <div class="col mt-2">
            Institution Attended with date(FSLC)
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputFSLC"]; ?>
          </div>
        </div>
        <h5 class="fw-bold">
          QUALIFICATIONS OBTAINED WHILE WORKING IN NASRDA
        </h5>
        <div class="col-12">
          <!-- Output result here -->

        </div>
        <div class="sectionC">
          <h6>
            FINANCIAL INFORMATION
          </h6>
        </div>
        <div class="col-md-4">

          <div class="col mt-2">
            IPPIS Number
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputIPPIS"]; ?>
          </div>
        </div>
        <div class="col-md-4">

          <div class="col mt-2">
            Bank Name
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputBankName"]; ?>
          </div>
        </div>
        <div class="col-md-4">

          <div class="col mt-2">
            Account Name
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputAccountNumber"]; ?>
          </div>
        </div>
        <div class="col-md-4">

          <div class="col mt-2">
            Account Number:
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputAccountNumber"]; ?>
          </div>
        </div>
        <div class="col-md-4">

          <div class="col mt-2">
            Account Type
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputAccountType"]; ?>
          </div>
        </div>
        <div class="col-12">

          <div class="col mt-2">
            Salary Paypoint
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["inputSalaryPaypoint"]; ?>
          </div>
        </div>
        <div class="sectionD">
          EMPLOYMENT DETAILS
        </div>
        <div class="col-md-4">

          <div class="col mt-2">
            File Number
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["file_no"]; ?>
          </div>
        </div>
        <div class="col-md-4">

          <div class="col mt-2">
            Date Of First Appointment
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo date_format(date_create($row["dateFirstAp"]), "d M, Y"); ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col mt-2">
            Date Of Assuption
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo date_format(date_create($row["dateofAssuption"]), "d M, Y"); ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col mt-2">
            Date Of Present Appointment
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo date_format(date_create($row["datePresentAp"]), "d M, Y"); ?>
          </div>
        </div>
        <div class="col-md-4">


          <div class="col mt-2">
            Date Of Regularization
          </div>
          <div class="col mt-2 fw-bold">
            <!-- <?php echo date_format(date_create($row["datePresentAp"]), "d M, Y"); ?> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="col mt-2">
            Date Of Confirmation
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo date_format(date_create($row["dateofConfirm"]), "d M, Y"); ?>
          </div>
        </div>
        <div class="col-md-8">
          <div class="col mt-2">
            Any Transfer/Merge of Service
          </div>
          <div class="col mt-2 fw-bold">
            <?php echo $row["AnyTransfer"]; ?>
          </div>
        </div>
        <div class="sectionE">
          <h6 class="fw-bold">OTHER INFORMATION</h6>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="col mt-2">
              Place of Primary Assignment:
            </div>
            <div class="col mt-2 fw-bold">
              <?php echo $row["PlaceofAp"]; ?>
            </div>
          </div>
          <div class="col-12">
            <div class="col mt-2">
              Department
            </div>
            <div class="col mt-2 fw-bold">
              <?php echo $row["inputDepartment"]; ?>
            </div>
          </div>
          <div class="col-12">
            <div class="col mt-2">
              Division
            </div>
            <div class="col mt-2 fw-bold">
              <?php echo $row["inputDivision"]; ?>
            </div>
          </div>
          <div class="col-12">

            <div class="col mt-2">
              Unit
            </div>
            <div class="col mt-2 fw-bold">
              <?php echo $row["inputUnit"];; ?>
            </div>
          </div>
          <div class="col-12">
            <div class="col mt-2">
              Schedule of Duty
            </div>
            <div class="col mt-2 fw-bold">
              <?php echo $row["inputSchedule"]; ?>
            </div>
          </div>
          <div class="col-12">

            <div class="col mt-2">
              Any Ad-hoc Duty
            </div>
            <div class="col mt-2 fw-bold">
              <?php echo $row["inputAdhoc"]; ?>
            </div>
          </div>
          <div class="col-12">

            <div class="col mt-2">
              Grade Level And Designation
            </div>
            <div class="col mt-2 fw-bold">
              <?php echo $row["inputGradeLevel"]; ?>
            </div>
          </div>
          <div class="col-12">

            <div class="col mt-2">
              Training Attended Since Appointment
            </div>
            <div class="col mt-2 fw-bold">
              <?php echo $row["inputTraining"]; ?>
            </div>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Print</button>
        </div>
        <p></p>
      </form>
    </main>
    <footer class="container">
      <div>

      </div>
    </footer>
</body>

</html>
<?php

  } else {
    echo json_encode(array('success' => 0));
  }
?>