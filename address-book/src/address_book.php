<?php
class Contact
{
    private $first_name;
    private $last_name;
    private $address;
    private $number;


    function __construct() {
        $this->first_name = '';
        $this->last_name = '';
        $this->address = '';
        $this->number = '';
    }
}

function getFirstName() {
    return $this->first_name;
}

function setFirstName($first_name) {
    $this->first_name = $first_name;
}

function getLastName() {
    return $this->Last_name;
}

function setLastName($Last_name) {
    $this->Last_name = $Last_name;
}

function getAddress() {
    return $this->adress;
}

function setAddress($adress) {
    $this->adress = $adress;
}

function getNumber() {
    return $this->number;
}

function setNumber($number) {
    $this->number = $number;
}

?>
