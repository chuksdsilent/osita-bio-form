<?php

include_once("db_connect.php");
include_once("helpers.php");

if (isset($_FILES["passport"]) && isset($_FILES["fslc_file"]) && isset($_FILES["ssce_file"]) && isset($_FILES["pg_file"]) && isset($_FILES["under_g_file"])) {

  list($width, $height) = getimagesize($_FILES['passport']['tmp_name']);

  if ($width <= 600 && $height <= 200) {
    $inputfirstname = $_POST["inputfirstname"];
    $inputothernames = $_POST["inputothernames"];
    $inputAddress = $_POST["inputAddress"];
    $inputAddress2 = $_POST["inputAddress2"];
    $inputcountry = $_POST["inputcountry"];
    $inputState = $_POST["inputState"];
    $inputlocalgovt = $_POST["inputlocalgovt"];
    $inputemail = $_POST["inputemail"];
    $inputgender = $_POST["inputgender"];
    $inputmaritalstatus = $_POST["inputmaritalstatus"];
    $checkPG = $_POST["checkPG"];
    $checkUNDERG = $_POST["CheckUNDERG"];
    $checkSSCE = $_POST["CheckSSCE"];
    $checkFLSC = $_POST["CheckFSLC"];
    $inputPG = $_POST["inputPG"];
    $pg_file = upload_file($_FILES["pg_file"]);
    $inputUNDERG = $_POST["inputUNDERG"];
    $under_g_file = upload_file($_FILES["under_g_file"]);
    $inputSSCE = $_POST["inputSSCE"];
    $ssce_file = upload_file($_FILES["ssce_file"]);
    $inputFSLC = $_POST["inputFSLC"];
    $fslc_file = upload_file($_FILES["fslc_file"]);
    $inputQUAL = $_POST["inputQUAL"];
    $qualification = multiple_upload($_FILES["qualification"]);
    $passport = upload_file($_FILES["passport"]);;
    $inputIPPIS = $_POST["inputIPPIS"];
    $inputBankName = $_POST["inputBankName"];
    $inputAccountName = $_POST["inputAccountName"];
    $inputAccountNumber = $_POST["inputAccountNumber"];
    $inputAccountType = $_POST["inputAccountType"];
    $inputSalaryPaypoint = $_POST["inputSalaryPaypoint"];
    $FileNo = $_POST["FileNo"];
    $dateFirstAp = $_POST["dateFirstAp"];
    $dateofAssuption = $_POST["dateofAssuption"];
    $datePresentAp = $_POST["datePresentAp"];
    $dateofConfirm = $_POST["dateofConfirm"];
    $AnyTransfer = $_POST["AnyTransfer"];
    $PlaceofAp = $_POST["PlaceofAp"];
    $inputDepartment = $_POST["inputDepartment"];
    $inputDivision = $_POST["inputDivision"];
    $inputUnit = $_POST["inputUnit"];
    $inputSchedule = $_POST["inputSchedule"];
    $inputAdhoc = $_POST["inputAdhoc"];
    $inputGradeLevel = $_POST["inputGradeLevel"];
    $inputTraining = $_POST["inputTraining"];
    $FileNo = $_POST["FileNo"];
    $dob = $_POST["dob"];
    $dateofRegular = $_POST["dateofRegular"];

    $sql = "
      INSERT INTO 
          staff_info 
        SET 
          file_no = '$FileNo', 
          dob = '$dob', 
          dateofRegular = '$dateofRegular', 
          inputfirstname = '$inputfirstname', 
          fslc_file = '$fslc_file', 
          qualification = '$qualification', 
          passport = '$passport', 
          ssce_file ='$ssce_file', 
          under_g_file = '$under_g_file', 
          pg_file = '$pg_file', 
          checkPG =  '$checkPG', 
          checkUNDERG='$checkUNDERG', 
          checkSSCE='$checkSSCE', 
          checkFLSC='$checkFLSC', 
          inputGradeLevel='$inputGradeLevel',
          inputTraining='$inputTraining',
          inputAdhoc='$inputAdhoc',
          inputSchedule='$inputSchedule',
          inputUnit='$inputUnit',
          inputDivision='$inputDivision',
          inputDepartment='$inputDepartment',
          PlaceofAp='$PlaceofAp',
          AnyTransfer='$AnyTransfer',
          dateofConfirm='$dateofConfirm',
          datePresentAp='$datePresentAp',
          dateofAssuption='$dateofAssuption',
          dateFirstAp='$dateFirstAp',
          inputSalaryPaypoint='$inputSalaryPaypoint',
          inputAccountType='$inputAccountType',
          inputAccountNumber='$inputAccountNumber',
          inputAccountName='$inputAccountName',
          inputBankName='$inputBankName',
          inputIPPIS='$inputIPPIS',
          inputQUAL='$inputQUAL',
          inputFSLC='$inputFSLC',
          inputSSCE='$inputSSCE',
          inputUNDERG='$inputUNDERG',
          inputPG='$inputPG',
          inputmaritalstatus='$inputmaritalstatus',
          inputgender='$inputgender',
          inputemail='$inputemail',
          inputlocalgovt='$inputlocalgovt',
          inputState='$inputState',
          inputcountry='$inputcountry',
          inputAddress2='$inputAddress2',
          inputAddress='$inputAddress',
          inputothernames='$inputothernames'";

    if ($conn->query($sql) === TRUE) {
      echo "successful...";
      header("location: upload_successful.html");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    // echo "height and width does not match";
    header("location: http://localhost/bioform/form.php?err_msg=Passport width should be 2 inches and height 2 inches");
  }
  //   $conn->close();
} else {
  echo "file is not set";
}
