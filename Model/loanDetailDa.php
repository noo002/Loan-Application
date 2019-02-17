<?php

require_once 'Connection.php';
require_once 'loanDetail.php';

class loanDetailDa {

    public function registerNewLoanDetail($loanDetail) {

        $loanId = $loanDetail->loanId;
        $borrowAmount = $loanDetail->borrowAmount;
        $totalPaybackAmount = $loanDetail->totalPaybackAmount;
        $interest = $loanDetail->interest;
        $instalmentLeft = $loanDetail->instalmentLeft;
        $totalInstalment = $loanDetail->totalInstalment;
        $instalmentType = $loanDetail->instalmentType;
        $amountPerInstalment = $loanDetail->amountPerInstalment;
        $penalty = $loanDetail->penalty;
        $deposit = $loanDetail->deposit;
        $nextDatePay = $loanDetail->nextDatePay;

        $sqlInserted = " call registerNewLoanDetail(?,?,?,?,?,?,?,?,?,?,?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlInserted);
        $stmt->bindParam(1, $loanId);
        $stmt->bindParam(2, $borrowAmount);
        $stmt->bindParam(3, $totalPaybackAmount);
        $stmt->bindParam(4, $interest);
        $stmt->bindParam(5, $instalmentLeft);
        $stmt->bindParam(6, $totalInstalment);
        $stmt->bindParam(7, $instalmentType);
        $stmt->bindParam(8, $amountPerInstalment);
        $stmt->bindParam(9, $penalty);
        $stmt->bindParam(10, $deposit);
        $stmt->bindParam(11, $nextDatePay);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getCustomerLoanDetail($loanId) {
        $sqlSelected = " call getCustomerLoanDetail(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $loanId);
        try {
            $stmt->execute();
            foreach ($stmt->fetchAll() as $row) {
                $result = array(
                    "staffName" => $row['name'],
                    "totalPaybackAmount" => $row['totalPaybackAmount'],
                    "borrowAmount" => $row['borrowAmount'],
                    "interest" => $row['interest'],
                    "totalInstalment" => $row['totalInstalment'],
                    "amountPerInstalment" => $row['amountPerInstalment'],
                    "penalty" => $row['Penalty'],
                    "instalmentLeft" => $row['instalmentLeft'],
                    "instalmentType" => $row['instalmentType']
                );
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getLoanDetail() {
        $sqlSelected = "call getLoanDetail()";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        try {
            $stmt->execute();
            $result = array();
            foreach ($stmt->fetchAll() as $row) {
                $temp = array(
                    "customerId" => $row['customerId'],
                    "customerName" => $row['customerName'],
                    "staffName" => $row['staffName'],
                    "totalInstalment" => $row['totalInstalment'],
                    "instalmentLeft" => $row['instalmentLeft'],
                    "amountperinstalment" => $row['amountperinstalment'],
                    "instalmentType" => $row['instalmentType'],
                    "nextDatePay" => $row['nextDatePay'],
                    "penalty" => $row['penalty']
                );
                array_push($result, $temp);
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getLoanDetailInformation($customerId) {
        $sqlSelected = "call getLoanDetailInfomation(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $customerId);
        try {
            $stmt->execute();
            foreach ($stmt->fetchAll() as $row) {
                $result = array(
                    "totalPaybackAmount" => $row["totalPaybackAmount"],
                    "borrowAmount" => $row['borrowAmount'],
                    "amountPerInstalment" => $row['amountPerInstalment'],
                    "interest" => $row['interest'],
                    "deposit" => $row['deposit'],
                    "Penalty" => $row['Penalty'],
                    "totalInstalment" => $row['totalInstalment'],
                    "instalmentLeft" => $row['instalmentLeft'],
                    "instalmentType" => $row['instalmentType']
                );
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function updateLoanDetail($loanId) {
        $sqlSelected = "call updateLoanDetail(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $loanId);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getInstalmentLeft($loanId) {
        $sqlSelected = "call getInstalmentLeft(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $loanId);
        try {
            $stmt->Execute();
            foreach ($stmt->fetch() as $row) {
                $result = $row;
                break;
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function updatePenalty($loanId, $penaltyAmount) {
        $sqlSelected = "call updatePenalty(?,?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $loanId);
        $stmt->bindParam(2, $penaltyAmount);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

}

//$da = new loanDetailDa();
//echo $da->getInstalmentLeft(1);
