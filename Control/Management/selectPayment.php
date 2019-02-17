<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/loanDetailDa.php';
require_once '../../Model/customerDa.php';

$cf = new commonFunction();
$loanId = $_POST['loanId'];
 
//<a href="../../View/Management/payment.php"></a>
$path = "../../View/Management/payment.php";
session_start();

$loanDa = new loanDetailDa();
$customerDa = new customerDa();
$customerId = $customerDa->getCustomerId($loanId);
$customerName = $customerDa->getCustomerName($customerId);
$customerList = $_SESSION['customerList'];
foreach ($customerList as $row) {
    if ($loanId == $row['loanId']) {
        $result = $row['amountPerInstalment'];
        break;
    }
}

$_SESSION['loan'] = array(
    "customerName" => $customerName,
    "loanId" => $loanId,
    "amountPerInstalment" => $result
);

$cf->redicrect($path);
