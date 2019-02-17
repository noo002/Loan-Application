<?php

require_once '../CommonFunction/CommonFunction.php';
$cf = new commonFunction();

$message = "All customer handled by STAFF1 will transfer to STAFF2";
//<a href="../../View/Management/viewStaff.php"></a>
$path = "../../View/Management/viewStaff.php";
$cf->messageAndRedict($message, $path);
