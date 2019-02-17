<?php

class customer {

    private $customerId, $name, $picture, $icNo, $homeAddress, $contactNo, $work, $workAddress, $status;

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    function __construct($name, $picture, $icNo, $homeAddress, $contactNo) {
        $this->name = $name;
        $this->picture = $picture;
        $this->icNo = $icNo;
        $this->homeAddress = $homeAddress;
        $this->contactNo = $contactNo;
    }

    function setCustomerId($customerId) {
        $this->customerId = $customerId;
    }

    function setWork($work) {
        $this->work = $work;
    }

    function setWorkAddress($workAddress) {
        $this->workAddress = $workAddress;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}
