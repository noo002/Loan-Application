<?php

class staff {

    private $staffId, $name, $email, $gender, $address, $password, $totalCustomer, $contactNo;

    function __construct($name, $email, $gender, $address, $contactNo) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
        $this->address = $address;
        $this->contactNo = $contactNo;
        $this->password();
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    function setStaffId($staffId) {
        $this->staffId = $staffId;
    }

    function setTotalCustomer($totalCustomer) {
        $this->totalCustomer = $totalCustomer;
    }

    private function password() {
        return $this->password = strtoupper($this->random_code(6));
    }

    private function random_code($limit) {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }

}

//$staff = new staff("heng hui jing", "eugence966@hotmail.com", 1, "Farlim");
//echo $staff->password;
