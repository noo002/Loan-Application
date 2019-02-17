<?php

require_once '../../Model/staffDa.php';
require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/email.php';

$email = $_POST['managementEmail'];
$password = $_POST['managementPassword'];

$cf = new commonFunction();

$staffDa = new staffDa();
$result = $staffDa->checkExistedStaffEmail($email);
if ($result == 1) {
    session_start();
    $managementLogin = $staffDa->managementLogin($email, md5($password));
    if ($managementLogin == 1) {
        $managementDetail = $staffDa->getManagementDetail($email, md5($password));
        $_SESSION['managementDetail'] = $managementDetail;
        //<a href="viewCustomer.php"></a>
        $path = "viewCustomer.php";
        $cf->redicrect($path);
    } else {
        $message = "Incorrect email or password";
        //<a href="../../View/Login/managementLogin.html"></a>
        $path = "../../View/Login/managementLogin.html";
        if (!isset($_SESSION['count'])) {
            $_SESSION['count'] = 1;
        } else {
            $_SESSION['count'] = $_SESSION['count'] + 1;
        }
        if ($_SESSION['count'] == 3) {
            unset($_SESSION['count']);
            $staffDa->lockAccount($email);
            $subject = "your account was locked";
            $body = "your account have been locked due to 3 time incorrect password\n please perform password recovery to unlock your account";
            $email = new email($email, $subject, $body);
            $email->sendEmail();
        }
        $cf->messageAndRedict($message, $path);
    }
} else {
    $message = "Incorrect email or password";
    //<a href="../../View/Login/managementLogin.html"></a>
    $path = "../../View/Login/managementLogin.html";
    $cf->messageAndRedict($message, $path);
}
