<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/loanDetailDa.php';



$cf = new commonFunction();

//<a href="../../View/Management/viewLoan.php"></a>
$path = "../../View/Management/viewLoan.php";

$loanDetailDa = new loanDetailDa();
$loanDetail = $loanDetailDa->getLoanDetail();
session_start();
$_SESSION['loanDetail'] = $loanDetail;
$cf->redicrect($path);
