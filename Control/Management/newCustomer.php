<?php

require_once '../CommonFunction/CommonFunction.php';

//<a href="../../View/Management/newCustomer.php"></a>
$path = "../../View/Management/newCustomer.php";
$message = "New customer have success registered.";
$cf = new commonFunction();

$cf->messageAndRedict($message, $path);
