<?php

require_once 'Connection.php';
require_once 'payment.php';

class paymentDa {

    public function newPayment($payment) {
        $loanId = $payment->loanId;
        $amountReceived = $payment->amountReceived;
        $paymentType = $payment->paymentType;
        $conn = Connection::getInstance();
        $sqlInserted = "call registerPayment(?,?,?)";
        $stmt = $conn->getDb()->prepare($sqlInserted);
        $stmt->bindParam(1, $loanId);
        $stmt->bindParam(2, $amountReceived);
        $stmt->bindParam(3, $paymentType);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getPayment() {
        $sqlSelected = "call getPayment()";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        try {
            $stmt->execute();
            $result = array();
            foreach ($stmt->fetchAll() as $row) {
                $temp = array(
                    "paymentId" => $row['paymentId'],
                    "customerName" => $row['customerName'],
                    "staffName" => $row['staffName'],
                    "amountReceived" => $row['amountReceived'],
                    "datePaid" => $row['datePaid'],
                    "paymentType" => $row['paymentType']
                );
                array_push($result, $temp);
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getTotalPartialPayment($loanId) {
        $conn = Connection::getInstance();
        $sqlSelected = "call getTotalPartialPayment(?)";
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $loanId);
        try {
            $stmt->execute();
            foreach ($stmt->fetch() as $row) {
                $result = $row;
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    public function SumAmountReceived($loanId){
        $conn = Connection::getInstance();
        $sqlSelected = "select sum(amountReceived) from payment where loanId = ?";
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1,$loanId);
        try{
            $stmt->execute();
            foreach($stmt->fetch() as $row){
                $result = $row; 
                break;
            }
            return $result;
        } catch (Exception $ex) {

        }
                
    }

}
//$da = new paymentDa();
//echo $da->getInstallmentLeft(4);
