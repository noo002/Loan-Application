<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/customer.php';
require_once '../../Model/customerDa.php';
require_once '../../Model/loanDetailDa.php';
require_once '../../Model/staffDa.php';

session_start();

if (isset($_POST['detail'])) {
    //<a href="../../View/Management/customerDetail.php"></a>
    $path = "../../View/Management/customerDetail.php";
    $loanId = $_POST['detail'];
    $customerDa = new customerDa();
    $loanDetailDa = new loanDetailDa();
    $customerId = $customerDa->getCustomerId($loanId);
    $customerDetail = $customerDa->getCustomerDetail($customerId);
    $loanDetail = $loanDetailDa->getCustomerLoanDetail($loanId);
    $_SESSION['customerDetail'] = $customerDetail;
    $_SESSION['loanDetails'] = $loanDetail;
    $cf = new commonFunction();
    $cf->redicrect($path);
}

if (isset($_POST['transfer'])) {
    //<a href="../../View/Management/transferStaff.php"></a>
    $path = "../../View/Management/transferStaff.php";
    $loanId = $_POST['transfer'];
    $staffDa = new staffDa();
    $customerDa = new customerDa();
    $activeStaff = $staffDa->getActiveStaff();
    $_SESSION['tempLoanId'] = $loanId;
    $_SESSION['activeStaff'] = $activeStaff;
    $cf = new commonFunction();
    $cf->redicrect($path);
}
if (isset($_POST['run'])) {
    $loanId = $_POST['run'];
    $customerDa = new customerDa();
    $customerId = $customerDa->getCustomerId($loanId);
    $result = $customerDa->updateRunCustomer($customerId);
    $cf = new commonFunction();
    $path = "viewCustomer.php";
    $cf->redicrect($path);
}
if (isset($_POST['unRun'])) {
    $loanId = $_POST['unRun'];
    $customerDa = new customerDa();
    $customerId = $customerDa->getCustomerId($loanId);
    $result = $customerDa->updateCustomerUnRun($customerId);

    $cf = new commonFunction();
    $path = "viewCustomer.php";
    $cf->redicrect($path);
}