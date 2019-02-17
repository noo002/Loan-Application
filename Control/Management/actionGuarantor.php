<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/customer.php';
require_once '../../Model/loan.php';
require_once '../../Model/loanDetail.php';
require_once '../../Model/loanDa.php';
require_once '../../Model/loanDetailDa.php';
require_once '../../Model/customerDa.php';

$guarantor = $_POST['guarantor'];
$name = $_POST['name'];
$image = $_FILES['fileToUpload'];
$icNo = $_POST['icNo'];
$address = $_POST['address'];
$contactNo = $_POST['contactNo'];
if (isset($_POST['work'])) {
    $work = $_POST['work'];
}
if (isset($_POST['workAddress'])) {
    $workAddress = $_POST['workAddress'];
}

$imageExist = false;
if (!empty($image['tmp_name'])) {
    if (getimagesize($image['tmp_name'], $image['name']) == false) {
        $message = "Please upload an image";
    } else {
        $path = addslashes($image['tmp_name']); //the name
        $file = file_get_contents($path);                 //the path mistaked wrong variable in very initial state
        $encodeFile = base64_encode($file);       //encoded as base64 and store to db
        //    echo '<img src="data:image/jpeg;base64,' . $encodeFile . '"/>';  //display the image in form of html
        $imageExist = true;
        $image = $encodeFile;
    }
}
if ($imageExist == false) {
    $imageDirectory = "noimage.png";
    $image = base64_encode(file_get_contents($imageDirectory));
    // echo '<img src="data:image/jpeg;base64,' . $image . '"/>';
}
$customer = new customer($name, $image, $icNo, $address, $contactNo);
if (!empty($work)) {
    $customer->setWork($work);
}
if (!empty($workAddress)) {
    $customer->setWorkAddress($workAddress);
}

// above is for customer only, below is for loan

$borrowAmount = $_POST['borrowAmount'];
$deposit = $_POST['deposit'];
$interestRate = $_POST['interestRate'];
$instalment = $_POST['instalment'];
$instalmentType = $_POST['instalmentType'];
$amountPerInstalment = $_POST['amountPerInstalment'];

$loanDa = new loanDa();
$customerDa = new customerDa();
$loanDetailDa = new loanDetailDa();



$cf = new commonFunction();

if ($guarantor == 1) {
    //<a href="../../View/Management/newGuarantor.php"></a>
    $path = "../../View/Management/newGuarantor.php";

    $cf->redicrect($path);
} else if ($guarantor == 2) {
    session_start();
    //<a href="../../View/Management/dashboard.php"></a>
    $path = "../../View/Management/newCustomer.php";
    $result = $customerDa->registerNewCustomer($customer);
    $loan = new loan($loanDa->getLatestLoanId(), $_SESSION['managementDetail']['staffId'], $customerDa->getLatestCustomerId(), 1);

    $result2 = $loanDa->registerNewLoan($loan);

    $loanDetail = new loanDetail($loanDa->getLatestLoanId(), $borrowAmount, $interestRate, $instalment, $instalmentType, $deposit, $amountPerInstalment);


    $result3 = $loanDetailDa->registerNewLoanDetail($loanDetail);
    if ($result == 1 && $result2 == 1 && $result3 == 1) {
        $message = "New customer have success registered.";
    } else {
        echo "problem occur";
    }
    $cf->messageAndRedict($message, $path);
}




