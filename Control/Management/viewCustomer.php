<?php

require_once '../../Model/customer.php';
require_once '../../Model/customerDa.php';
require_once '../CommonFunction/CommonFunction.php';
$customerDa = new customerDa();
$customerList = $customerDa->getCustomerList();
session_start();
$_SESSION['customerList'] = $customerList;


//<a href="../../View/Management/viewCustomer.php"></a>
$path = "../../View/Management/viewCustomer.php";
$cf = new commonFunction();
$cf->redicrect($path);
