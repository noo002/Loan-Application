<?php

require_once 'loan.php';
require_once 'Connection.php';

class loanDa {

    public function getLatestLoanId() {
        $sqlSelected = "call getLatestLoanId()";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        try {
            $stmt->execute();
            foreach ($stmt->fetch() as $row) {
                $result = $row;
                break;
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function registerNewLoan($loan) {
        $staffId = $loan->staffId;
        $customerId = $loan->customerId;
        $status = $loan->status;
        $sqlInserted = "call registerNewLoan(?,?,?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlInserted);
        $stmt->bindParam(1, $staffId);
        $stmt->bindParam(2, $customerId);
        $stmt->bindParam(3, $status);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function transferStaff($staffId, $loanId) {
        $sqlUpdated = " call transferCustomer(?,?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlUpdated);
        $stmt->bindParam(1, $staffId);
        $stmt->bindParam(2, $loanId);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getStaffName($staffId) {
        $sqlSelected = "call getStaffName(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $staffId);
        try {
            $stmt->execute();
            foreach ($stmt->fetch() as $row) {
                $result = $row;
                break;
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getLoanStatus($loanId) {
        $sqlSelected = "call getLoanStatus(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $loanId);
        try {
            $stmt->execute();
            foreach ($stmt->fetch() as $row) {
                $result = $row;
                break;
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function updateLoanStatus($loanId) {
        $sqlSelected = "call updateLoanStatus(?)";
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

    public function updateLoanInstalment($loanId, $instalmentLeft) {
        $sqlUpdated = "call updateInstalment(?,?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlUpdated);
        $stmt->bindParam(1, $loanId);
        $stmt->bindParam(2, $instalmentLeft);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}

//$da = new loanDa();
//echo $da->getLoanStatus(1);
