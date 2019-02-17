<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/staff.php';
require_once '../../Model/staffDa.php';

$staffDa = new staffDa();
$staffList = $staffDa->getAllStaffList();
session_start();
$_SESSION['staffList'] = $staffList;

//<a href="../../View/Management/viewStaff.php"></a>
$path = "../../View/Management/viewStaff.php";
$cf = new commonFunction();
$cf->redicrect($path);
