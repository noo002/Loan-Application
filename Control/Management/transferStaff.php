<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/loanDa.php';

session_start();

$cf = new commonFunction();



//
$path = "viewCustomer.php";


$staffId = $_POST['staffId'];
$loanId = $_SESSION['tempLoanId'];
$loanDa = new loanDa();

$result = $loanDa->transferStaff($staffId, $loanId);
$staffName = $loanDa->getStaffName($staffId);
unset($_SESSION['tempCustomerId']);
unset($_SESSION['tempLoanId']);
$message = "The customer have transfer to " . $staffName;
$cf->messageAndRedict($message, $path);
