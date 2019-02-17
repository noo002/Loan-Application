<?php

class payment {

    private $loanId, $amountReceived, $paymentType;

    function __construct($loanId, $amountReceived, $paymentType) {
        $this->loanId = $loanId;
        $this->amountReceived = $amountReceived;
        $this->paymentType = $paymentType;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

}
