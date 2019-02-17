<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/staffDa.php';


$cf = new commonFunction();
session_start();
if (isset($_POST['detail'])) {
    //<a href="../../View/Management/staffDetail.php"></a>
    $staffId = $_POST['detail'];
    $staffDa = new staffDa();
    $staffDetail = $staffDa->getStaffDetail($staffId);
    $_SESSION['staffDetail'] = $staffDetail;
    $path = "../../View/Management/staffDetail.php";
    $cf->redicrect($path);
}

if (isset($_POST['inactive'])) {
    //<a href="../../View/Management/staffDetail.php"></a>
    $path = "viewStaff.php";
    $staffId = $_POST['inactive'];
    $staffDa = new staffDa();
    $result = $staffDa->updateStaffStatus($staffId);
    if ($result == 1) {
        $message = "The staff is not allowed to login.";
    }
    $cf->messageAndRedict($message, $path);
}