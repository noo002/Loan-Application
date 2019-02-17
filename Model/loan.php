<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loan
 *
 * @author Asus
 */
class loan {

    private $loanId, $staffId, $customerId, $dateBorrow, $status;

    function __construct($loanId, $staffId, $customerId, $status) {
        $this->loanId = $loanId;
        $this->staffId = $staffId;
        $this->customerId = $customerId;
        $this->status = $status;
    }

    function setDateBorrow($dateBorrow) {
        $this->dateBorrow = $dateBorrow;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

}
