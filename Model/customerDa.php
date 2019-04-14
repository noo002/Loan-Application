<?php

require_once 'customer.php';
require_once 'Connection.php';

class customerDa {

    public function getLatestCustomerId() {
        $conn = Connection::getInstance();
        $sqlSelected = " call getLatestCustomerId()";
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

    public function registerNewCustomer($customer) {
        $name = $customer->name;
        $picture = $customer->picture;
        $icNo = $customer->icNo;
        $homeAddress = $customer->homeAddress;
        $contactNo = $customer->contactNo;
        $work = $customer->work;
        $workAddress = $customer->workAddress;
        $status = 1;
        $sqlInserted = "call registerNewCustomer(?,?,?,?,?,?,?,?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlInserted);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $picture);
        $stmt->bindParam(3, $icNo);
        $stmt->bindParam(4, $homeAddress);
        $stmt->bindParam(5, $contactNo);
        $stmt->bindParam(6, $work);
        $stmt->bindParam(7, $workAddress);
        $stmt->bindParam(8, $status);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getCustomerList() {
        $sqlSelected = "call getCustomerList()";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        try {
            $stmt->execute();
            $result = array();
            foreach ($stmt->fetchAll() as $row) {
                $temp = array(
                    "loanId" => $row['loanId'],
                    "customerName" => $row['name'],
                    "staffName" => $row['staffName'],
                    "instalmentLeft" => $row['instalmentLeft'],
                    "totalInstalment" => $row['totalInstalment'],
                    "amountPerInstalment" => $row['amountPerInstalment'],
                    "nextDatePay" => $row['nextDatePay'],
                    "instalmentType" => $row['instalmentType'],
                    "status" => $row['status']
                );
                array_push($result, $temp);
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getCustomerDetail($customerId) {
        $sqlSelected = " call getCustomerDetail(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $customerId);
        try {
            $stmt->execute();
            foreach ($stmt->fetchAll() as $row) {
                $customer = new customer($row['name'], $row['picture'], $row['icNo'], $row['homeAddress'], $row['contactNo']);
            }
            return $customer;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getCustomer() {
        $sqlSelected = "call getCustomer()";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        try {
            $result = array();
            $stmt->execute();
            foreach ($stmt->fetchAll() as $row) {
                $temp = array(
                    "customerId" => $row['customerId'],
                    "customerName" => $row['name']
                );
                array_push($result, $temp);
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getCustomerName($customerId) {
        $sqlSelected = "call getCustomerName(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $customerId);
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

    public function getCustomerId($loanId) {
        $sqlSelected = "call getCustomerId(?)";
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

    public function updateRunCustomer($customerId) {
        $sqlSelected = "call updateCustomerStatus(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $customerId);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function updateCustomerUnRun($customerId) {
        $sqlSelected = "call updateCustomerNoRun(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $customerId);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

}
//$c = new customerDa();
//$data = $c->getCustomerDetail(3);
//echo '<img src="data:image/jpeg;base64,' . $data->picture . '" width="60px" height="60px"/>';

