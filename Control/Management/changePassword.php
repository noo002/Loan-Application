<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/staffDa.php';

$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];
//<a href="../../View/Management/changePassword.php"></a>
$path = "../../View/Management/changePassword.php";
if ($oldPassword == $newPassword) {
    $message = "The old password and new password are same";
} else if ($newPassword != $confirmPassword) {
    $message = "The new password must same as confirmed password";
} else {
    $staffDa = new staffDa();
    session_start();
    $staffId = $_SESSION['managementDetail']['staffId'];
    $result = $staffDa->changePassword($staffId, md5($newPassword));
    if ($result == 1) {
        $message = "your password have changed";
    } else {
        $message = "error occur, contact me";
    }
}
$cf = new commonFunction();
$cf->messageAndRedict($message, $path);
