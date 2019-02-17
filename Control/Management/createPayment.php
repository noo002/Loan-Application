<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/payment.php';
require_once '../../Model/paymentDa.php';
require_once '../../Model/loanDetailDa.php';
require_once '../../Model/loanDa.php';
$cf = new commonFunction();


//<a href="../../View/Management/viewPayment.php"></a>
$path = "paymentList.php";

$amountReceived = $_POST['amountReceived'];
$paymentType = $_POST['paymentType'];
session_start();

$validation = true;
if (empty($amountReceived)) {
    $validation = false;
    $message = "Enter the received amount";
    $path = "makePayment.php";
}
if (empty($paymentType)) {
    $validation = false;
    $message = "Select a payment type";
    $path = "makePayment.php";
}
if ($amountReceived < 1) {
    $validation = false;
    $message = "Value cannot small than 0";
}
if ($amountReceived != $_SESSION['loan']['amountPerInstalment'] && $paymentType == 1) {
    $validation = false;
    $message = " instalment amount are not the same";
}
if ($validation) {

    $loanId = $_SESSION['loan']['loanId'];
    $loanDa = new loanDa();
    $loanStatus = $loanDa->getLoanStatus($loanId);
    if ($loanStatus == 1) {
        if ($paymentType == 1) {

            $payment = new payment($loanId, $amountReceived, $paymentType);
            $paymentDa = new paymentDa();
            $result = $paymentDa->newPayment($payment);
            if ($result == 1) {
                $loanDetailDa = new loanDetailDa();
                $result2 = $loanDetailDa->updateLoanDetail($loanId);
                if ($result2 == 1) {
                    $message = "Payment have done";
                    $instalmentLeft = $loanDetailDa->getInstalmentLeft($loanId);
                    if ($instalmentLeft == 0) {
                        $updateLoanStatus = $loanDa->updateLoanStatus($loanId);
                    }
                } else {
                    $message = "Error occur,contact me No1";
                }
            } else {
                $message = "Error Occur, Contact me No2";
            }
            //at here
        } else if ($paymentType == 2) {
            if ($amountReceived < $_SESSION['loan']['amountPerInstalment']) {
                $payment = new payment($loanId, $amountReceived, $paymentType);
                $amountPerInstalment = $_SESSION['loan']['amountPerInstalment'];
                $paymentDa = new paymentDa();
                $totalAmountFromDb = $paymentDa->getTotalPartialPayment($loanId) + $amountReceived;
                $instalment = 0;
                for ($b = 0; $b < 100; $b++) {
                    if ($totalAmountFromDb >= $amountPerInstalment) {
                        $amountPerInstalment = $amountPerInstalment * 2;
                        $instalment = $instalment + 1;
                    }
                    if ($amountPerInstalment > $totalAmountFromDb) {
                        break;
                    }
                }
                $result = $paymentDa->newPayment($payment);
                $loanDa = new loanDa();
                $result2 = $loanDa->updateLoanInstalment($loanId, $instalment);
                $loanDetailDa = new loanDetailDa();
                $instalmentLeft = $loanDetailDa->getInstalmentLeft($loanId);
                if ($instalmentLeft == 0) {
                    $updateLoanStatus = $loanDa->updateLoanStatus($loanId);
                }
                $message = "Partial Payment have made";
            } else {
                $message = "Amount received more than or equal to 1 instalment";
            }
        } else if ($paymentType == 3) {
            $payment = new payment($loanId, $amountReceived, $paymentType);
            $paymentDa = new paymentDa();
            $result = $paymentDa->newPayment($payment);
            if ($result == 1) {
                $loanDetailDa = new loanDetailDa();
                $updatePenalty = $loanDetailDa->updatePenalty($loanId, $amountReceived);
                if ($updatePenalty == 1) {
                    $message = "Penalty have given to this customer";
                } else {
                    $message = "Contact me for this problem";
                }
            } else {
                $message = "let me know about this problem";
            }
        }
    } else {
        $message = "This loan have finished";
    }
}
$cf->messageAndRedict($message, $path);
