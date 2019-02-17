<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loanDetail
 *
 * @author Asus
 */
class loanDetail {

    private $loanId, $borrowAmount, $totalPaybackAmount, $receivedAmount, $interest, $instalmentLeft, $totalInstalment, $instalmentType, $amountPerInstalment, $penalty, $deposit, $nextDatePay;

    function __construct($loanId, $borrowAmount, $interest, $totalInstalment, $instalmentType, $deposit, $amountPerInstalment) {
        $this->loanId = $loanId;
        $this->borrowAmount = $borrowAmount;
        $this->interest = $interest;
        $this->totalInstalment = $totalInstalment;
        $this->instalmentType = $instalmentType;
        $this->deposit = $deposit;
        $this->penalty = 0;
        $this->amountPerInstalment = $amountPerInstalment;
        $this->calNextDatePay();
        $this->calculateInstalmentLeft();
        $this->calculateTotalPaybackAmount();
    }

    private function calculateTotalPaybackAmount() {
        $this->totalPaybackAmount = $this->totalInstalment * $this->amountPerInstalment;
    }

    private function calculateInstalmentLeft() {
        $this->instalmentLeft = $this->totalInstalment;
    }

    private function calNextDatePay() {
        if ($this->instalmentType == 1) {
            $this->nextDatePay = date('Y/m/d', strtotime('+1 days'));
        } else if ($this->instalmentType == 2) {
            $this->nextDatePay = date('Y/m/d', strtotime('+7 days'));
            ;
        } else {
            $this->nextDatePay = date('Y/m/d', strtotime('+1 months'));
        }
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

}

//$loanDetail = new loanDetail(1, 1000, 200, 7, 3, 100, 200);
