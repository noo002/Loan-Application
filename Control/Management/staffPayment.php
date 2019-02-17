<?php

require_once '../CommonFunction/CommonFunction.php';


if (isset($_POST['accept'])) {
    $message = "The payment of STAFF1 is accepted";
}


if (isset($_POST['reject'])) {
    $message = "The payment of STAFF1 is rejected";
}

$cf = new commonFunction();
//<a href="../../View/Management/staffPayment.php"></a>
$path = "../../View/Management/staffPayment.php";

$cf->messageAndRedict($message, $path);
