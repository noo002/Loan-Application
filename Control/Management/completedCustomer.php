<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/customerDa.php';

$customerDa = new customerDa();
$customerList = $customerDa->getCustomer();
session_start();
$_SESSION['completedLoan'] = $customerList;
//<a href="../../View/Management/registerLoan.php"></a>
$path = "../../View/Management/completedCustomer.php";
$cf = new commonFunction();
$cf->redicrect($path);
