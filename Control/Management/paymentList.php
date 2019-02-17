<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/paymentDa.php';

$paymentDa = new paymentDa();
$result = $paymentDa->getPayment();
session_start();
$_SESSION['payment'] = $result;

//<a href="../../View/Management/viewPayment.php"></a>
$path = "../../View/Management/viewPayment.php";
$cf = new commonFunction();
$cf->redicrect($path);
