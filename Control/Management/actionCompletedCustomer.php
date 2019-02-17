<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/loanDa.php';
require_once '../../Model/customerDa.php';

$cf = new commonFunction();
$customerId = $_POST['customerId'];
$loanDa = new loanDa();


//<a href="../../View/Management/registerLoan.php"></a>
$customerDa = new customerDa();
$customerName = $customerDa->getCustomerName($customerId);
$temp = array(
    "customerId" => $customerId,
    "customerName" => $customerName
);
session_start();
$_SESSION['temp'] = $temp;
$path = "../../View/Management/registerLoan.php";

$cf->redicrect($path);


