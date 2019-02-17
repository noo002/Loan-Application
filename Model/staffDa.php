<?php

require_once 'Connection.php';
require_once 'staff.php';

class staffDa {

    public function registerNewStaff($staff) {
        $sqlInserted = "call registerNewStaff(?,?,?,?,?,?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlInserted);
        //name,email,gender,contact,address,password
        $name = $staff->name;
        $email = $staff->email;
        $gender = $staff->gender;
        $contactNo = $staff->contactNo;
        $address = $staff->address;
        $password = strtoupper(md5($staff->password));
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $gender);
        $stmt->bindParam(4, $contactNo);
        $stmt->bindParam(5, $address);
        $stmt->bindParam(6, $password);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function checkExistedStaffEmail($email) {
        $sqlInserted = "call checkExistedStaffEmail(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlInserted);
        $stmt->bindParam(1, $email);
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

    public function getAllStaffList() {
        $conn = Connection::getInstance();
        $sqlSelected = "call getAllStaffList()";
        $stmt = $conn->getDb()->prepare($sqlSelected);
        try {
            $stmt->execute();
            $result = array();
            foreach ($stmt->fetchAll() as $row) {
                $temp = array(
                    "staffId" => $row['staffId'],
                    "staffName" => $row['name'],
                    "totalCustomer" => $row['totalCustomer'],
                    "contactNo" => $row['contactNo'],
                    "status" => $row['status']
                );
                array_push($result, $temp);
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getStaffDetail($staffId) {
        $conn = Connection::getInstance();
        $sqlSelected = "call getStaffDetail(?)";
        $stmt = $conn->getDb()->prepare($sqlSelected);
        try {
            $stmt->bindParam(1, $staffId);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $row) {
                $result = array(
                    "name" => $row['name'],
                    "email" => $row['email'],
                    "gender" => $row['gender'],
                    "address" => $row['address']
                );
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getActiveStaff() {
        $conn = Connection::getInstance();
        $sqlSelected = "call getActiveStaff()";
        $stmt = $conn->getDb()->prepare($sqlSelected);
        try {
            $stmt->execute();
            $result = array();
            foreach ($stmt->fetchAll() as $row) {
                $temp = array(
                    "staffId" => $row['staffId'],
                    "staffName" => $row['name'],
                    "totalCustomer" => $row['totalCustomer'],
                    "contactNo" => $row['contactNo']
                );
                array_push($result, $temp);
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function checkManagementExist($email) {
        $sqlSelected = " call checkManagementExist(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $email);
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

    public function managementLogin($email, $password) {
        $sqlSelected = "call managementLogin(?,?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $password);
        $stmt->bindParam(2, $email);
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

    public function getManagementDetail($email, $password) {
        $sqlSelected = "call getManagementDetail(?,?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        try {
            $stmt->execute();
            foreach ($stmt->fetchAll() as $row) {
                $result = array(
                    "staffId" => $row['staffId'],
                    "managementName" => $row['name'],
                    "email" => $row['email'],
                    "gender" => $row['gender']
                );
            }
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function lockAccount($email) {
        $sqlSelected = "call lockAccount(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $email);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function changePassword($staffId, $password) {
        $sqlSelected = "call changePassword(?,?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlSelected);
        $stmt->bindParam(1, $staffId);
        $stmt->bindParam(2, $password);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function updateStaffStatus($staffId) {
        $sqlUpdated = "call updateStaffStatus(?)";
        $conn = Connection::getInstance();
        $stmt = $conn->getDb()->prepare($sqlUpdated);
        $stmt->bindParam(1, $staffId);
        try {
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

}

//$da = new staffDa();
//$da->lockAccount("eugence966@hotmail.com");
