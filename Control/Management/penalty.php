<?php

require_once '../CommonFunction/CommonFunction.php';

$cf = new commonFunction();


$message = "The CUSTOMER1 have get penalty of RM100";

//<a href="../../View/Management/viewLoan.php"></a>
$path = "../../View/Management/viewLoan.php";
$cf->messageAndRedict($message, $path);
