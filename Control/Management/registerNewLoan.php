<?php

require_once '../../Model/loan.php';
require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/loanDetail.php';
require_once '../../Model/loanDa.php';
require_once '../../Model/loanDetailDa.php';
require_once '../../Model/customerDa.php';

session_start();

$customerId = $_SESSION['temp']['customerId'];


$borrowAmount = $_POST['borrowAmount'];
$deposit = $_POST['deposit'];
$interestRate = $_POST['interestRate'];
$instalment = $_POST['instalment'];
$instalmentType = $_POST['instalmentType'];
$amountPerInstalment = $_POST['amountPerInstalment'];

$loanDa = new loanDa();
$customerDa = new customerDa();
$loanDetailDa = new loanDetailDa();

$loan = new loan($loanDa->getLatestLoanId(), $_SESSION['managementDetail']['staffId'], $customerId, 1);


$result2 = $loanDa->registerNewLoan($loan);

$loanDetail = new loanDetail($loanDa->getLatestLoanId(), $borrowAmount, $interestRate, $instalment, $instalmentType, $deposit, $amountPerInstalment);


$result3 = $loanDetailDa->registerNewLoanDetail($loanDetail);
if ($result2 == 1 && $result3 == 1) {
    $message = "New loan have success registered.";
} else {
    echo "problem occur";
}
//<a href="viewLoan.php"></a>
$path = "viewLoan.php";
$cf = new commonFunction();
$cf->messageAndRedict($message, $path);
