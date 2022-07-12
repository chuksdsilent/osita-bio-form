<?php include_once("db_connect.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="jquery/jquery-3.6.0.js></script>
    <script src=" js/bootstrap.min.js></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <title>CBSS BIO_FORM</title>
</head>

<body class="bg-light">
    <div class="Admin container col-2">
        <button type="submit" class="btn btn-primary"><a href="admin_login.html" target="_blank">Admin</a></button>
    </div>
    <section class="heading container">
        <div>CBSS BIO-DATA FORM</div>
    </section>
    <main class="container">
        <form action="save_bio_data.php" method="post" class="row g-3" enctype="multipart/form-data">
            <div class=" sectionA">SECTION A PERSONAL INFORMATION
            </div>
            <div class="col-md-6">
                <input name="inputfirstname" type="text" class="form-control" id="inputfirstname" placeholder="Surname">
            </div>
            <div class="col-md-6">
                <input name="inputothernames" type="text" class="form-control" id="inputothernames" placeholder="Other Names">
            </div>
            <div class="col-12">
                <input name="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="Enter Address">
            </div>
            <div class="col-12">
                <input name="inputAddress2" type="text" class="form-control" id="inputAddress2" placeholder="Enter Address 2">
            </div>
            <div class="col-md-4">
                <input name="inputcountry" type="text" class="form-control" id="inputcountry" placeholder="Country">
            </div>
            <div class="col-md-4">
                <select id="inputState" name="inputState" class="form-select">
                    <option selected>Choose State..</option>
                    <option value="enugu">Enugu</option>
                    <option value="anambra">Anambra</option>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" name="inputlocalgovt" class="form-control" id="inputlocalgovt" placeholder="Local Govt">
            </div>
            <div class="col-md-4">
                <input type="text" name="inputemail" class="form-control" id="inputemail" placeholder="Enter Email Address">
            </div>
            <div class="col-md-4">
                <select name="inputgender" id="inputgender" class="form-select">
                    <option selected>Select Gender..</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="col-md-4">
                <select name="inputmaritalstatus" id="inputmaritalstatus" class="form-select">
                    <option selected>Marital Status..</option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Divorced</option>
                    <option>Widow</option>
                    <option>Widower</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <!-- Date input -->
                <label class="control-label" for="dateofbirth">Date Of Birth</label>
                <input class="form-control" id="dateofbirth" name="dob" placeholder="MM/DD/YYY" type="date" />
            </div>
            <div class="sectionB">SECTION B EDUCATIONAL INFORMATION
            </div>
            <div>
                QUALIFICATIONS OBTAINED BEFORE RESUMING WORK AT NASRDA
            </div>
            <div class="form-check">
                <input class="form-check-input" name="checkPG" type="checkbox" value="POSTGRADUATE" id="CheckPG">
                <label class="form-check-label" for="CheckPG">
                    POSTGRADUATE(MSc, PhD, etc.)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="CheckUNDERG" type="checkbox" value="UNDERGRADUTAE" id="CheckUNDERG">
                <label class="form-check-label" for="CheckUNDERG">
                    UNDERGRADUTAE (BSc, B.A, etc.)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="CheckSSCE" type="checkbox" value="SSCE" id="CheckSSCE">
                <label class="form-check-label" for="CheckSSCE">
                    SSCE (WAEC, NECO, etc.)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="CheckFSLC" type="checkbox" value="FSLC" id="CheckFSLC">
                <label class="form-check-label" for="CheckFSLC">
                    FSLC
                </label>
            </div>
            <div class="col-md-8">
                <input type="text" name="inputPG" class="form-control" id="inputPG" placeholder="Institution Attended with date(POSTGRADUATE)">
            </div>
            <div class="col-md-4">
                <input type="file" name="pg_file" class="form-control" id="inputGroupFile02">
            </div>
            <div class="col-md-8">
                <input type="text" name="inputUNDERG" class="form-control" id="inputUNDERG" placeholder="Institution Attended with date(Undergraduate)">
            </div>
            <div class="col-md-4">
                <input type="file" class="form-control" name="under_g_file" id="inputGroupFile02">
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="inputSSCE" id="inputSSCE" placeholder="Institution Attended with date(SSCE)">
            </div>
            <div class="col-md-4">
                <input type="file" class="form-control" name="ssce_file" id="inputGroupFile02">
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="inputFSLC" id="inputFSLC" placeholder="Institution Attended with date(FSLC)">
            </div>
            <div class="col-md-4">
                <input type="file" class="form-control" name="fslc_file" id="inputGroupFile02">
            </div>
            <div>
                QUALIFICATIONS OBTAINED WHILE WORKING IN NASRDA
            </div>
            <div class="col-md-8">
                <input type="text" name="inputQUAL" class="form-control" id="inputQUAL" placeholder="Use comma to state if more than 1">
            </div>
            <div class="col-md-4">
                <input type="file" name="qualification" class="form-control" id="inputGroupFile02">
            </div>
            <div class="sectionC">
                SECTION C FINANCIAL INFORMATION
            </div>
            <div class="col-md-4">
                <input type="text" name="inputIPPIS" class="form-control" id="inputIPPIS" placeholder="IPPIS Number">
            </div>
            <div class="col-md-4">
                <input type="text" name="inputBankName" class="form-control" id="inputBankName" placeholder="Bank Name">
            </div>
            <div class="col-md-4">
                <input type="text" name="inputAccountName" class="form-control" id="inputAccountName" placeholder="Account Name">
            </div>
            <div class="col-md-4">
                <input type="text" name="inputAccountNumber" class="form-control" id="inputAccountNumber" placeholder="Account Number">
            </div>
            <div class="col-md-4">
                <input type="text" name="inputAccountType" class="form-control" id="inputAccountType" placeholder="Account Type">
            </div>
            <div class="col-md-4">
                <input type="text" name="inputSalaryPaypoint" class="form-control" id="inputSalaryPaypoint" placeholder="Salary Paypoint">
            </div>
            <div class="sectionD">
                SECTION D EMPLOYMENT DETAILS
            </div>
            <div class="form-group col-md-4">
                <!-- Date input -->
                <label class="control-label" for="FileNo">File Number</label>
                <input class="form-control" name="FileNo" id="FileNo" placeholder="Enter File Number" type="text" />
            </div>
            <div class="form-group col-md-4">
                <!-- Date input -->
                <label class="control-label" for="dateFirstAp">Date Of First Appointment</label>
                <input class="form-control" id="dateFirstAp" name="dateFirstAp" placeholder="MM/DD/YYY" type="date" />
            </div>
            <div class="form-group col-md-4">
                <!-- Date input -->
                <label class="control-label" for="dateofAssuption">Date Of Assuption</label>
                <input class="form-control" id="dateofAssuption" name="dateofAssuption" placeholder="MM/DD/YYY" type="date" />
            </div>
            <div class="form-group col-md-4">
                <!-- Date input -->
                <label class="control-label" for="datePresentAp">Date Of Present Appointment</label>
                <input class="form-control" id="datePresentAp" name="datePresentAp" placeholder="MM/DD/YYY" type="date" />
            </div>
            <div class="form-group col-md-4">
                <!-- Date input -->
                <label class="control-label" for="dateofRegular">Date Of Regularization</label>
                <input class="form-control" id="dateofRegular" name="dateofRegular" placeholder="MM/DD/YYY" type="date" />
            </div>
            <div class="form-group col-md-4">
                <!-- Date input -->
                <label class="control-label" for="dateofConfirm">Date Of Confirmation</label>
                <input class="form-control" id="dateofConfirm" name="dateofConfirm" placeholder="MM/DD/YYY" type="date" />
            </div>
            <div class="form-group col-md-8">
                <label class="control-label" for="AnyTransfer">Any Transfer/Merge of Service</label>
                <input class="form-control" id="AnyTransfer" name="AnyTransfer" placeholder="Enter Details" type="date" />
            </div>
            <div class="sectionE">
                SECTION E OTHER INFORMATION
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="PlaceofAp" id="PlaceofAp" placeholder="Place of Primary Assignment">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="inputDepartment" id="inputDepartment" placeholder="Enter Department">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="inputDivision" id="inputDivision" placeholder="Enter Division">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="inputUnit" id="inputUnit" placeholder="Enter Unit">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="inputSchedule" id="inputSchedule" placeholder="Enter Schedule of Duty">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="inputAdhoc" id="inputAdhoc" placeholder="Any Ad-hoc Duty">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="inputGradeLevel" id="inputGradeLevel" placeholder="Enter Grade Level And Designation">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="inputTraining" id="inputTraining" placeholder="Training Attended Since Appointment">
            </div>
            <div class="col-md-4"> </div>
            <div class="col-md-4">
                <label class="control-label" for="uploadPic">Upload Photograph</label>
                <input type="file" class="form-control" name="passport" id="inputGroupFile02">
            </div>
            <div class="col-12">
                Please note that the information provided in this form will be treated as confidential.
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit Form</button>
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