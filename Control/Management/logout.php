<?php

require_once '../CommonFunction/CommonFunction.php';

session_start();

session_destroy();

//<a href="../../View/Login/managementLogin.html"></a>
$path  = "../../View/Login/managementLogin.html";
$message = "You have logout the system";

$cf = new commonFunction();
$cf->messageAndRedict($message, $path);