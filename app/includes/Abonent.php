<?php


namespace app\includes;


class Debt {
    const DEBT_COLD_WATER = 2;
    const DEBT_WATER_DISPOSAL = 16;

    public $money;
}

class Abonent {

    const TYPE_FL = 1;
    const TYPE_UL = 2;

    public $account;
    public $debs = [];
    public $fio;
    public $firstname;
    public $middlename;
    public $lastName;
    public $fulladdress;

    public function parseFIO() {
        if (strlen($this->fio) > 0) {
            list($this->firstname, $this->middlename, $this->lastName) = explode(' ', $this->fio);
        }
    }

    public function parseAddress() {
        require_once 'parserAddress.php';
        $mas = addressparser($this->fulladdress);
        debug($mas, 1);
    }
}