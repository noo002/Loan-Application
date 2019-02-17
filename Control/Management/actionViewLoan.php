<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/loanDetailDa.php';

$cf = new commonFunction();

if (isset($_POST['detail'])) {
    //<a href="../../View/Management/loanDetail.php"></a>
    $path = "../../View/Management/loanDetail.php";
    $customerId = $_POST['detail'];
    $loanDetailDa = new loanDetailDa();
    $loanInformation = $loanDetailDa->getLoanDetailInformation($customerId);
    session_start();
    $_SESSION['loanInfomation'] = $loanInformation;
}
$cf->redicrect($path);
