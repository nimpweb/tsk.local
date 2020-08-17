<?php


namespace app\includes;


abstract class BillingInteraction {

    protected $collectData = [];
//    protected $certs = [];
    protected $params = [];

    public function __construct($params = null) {
        if ($params) {
            $this->params = $params;
        }
        $this->correctPaths();
    }

    public function getAbonentInfo() {
        $abonent = new Abonent();
        $abonent->account = $this->account;
        $abonent->type = (array_key_exists('ls', $this->params) ? Abonent::TYPE_FL : Abonent::TYPE_UL);

        $data = $this->getAbonentFio();
        if ($data) {
            $abonent->fio = $data;
        }
        $data = $this->getAbonentFioAndAddr();
        if ($data) {
            $abonent->fio = $data['status']['fio'];
            $abonent->fulladdress = $data['status']['adress'];
        }
        $data = $this->getDebtCollection();
        if ($data) {
            foreach($data['ROW'] as $key => $value) {
                if ( in_array((int)$value['SRV'], [Debt::DEBT_COLD_WATER, Debt::DEBT_WATER_DISPOSAL])) {
                    array_push($abonent->debs, $value);
                }
            }
//            debug($data['ROW'], 1);

        }
        $abonent->parseFIO();
        $abonent->parseAddress();
        return $abonent;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->params)) {
            return $this->params[$name];
        }
        return false;
    }

    /**
     * Получить дебеторку по абоненту
     */
    protected function getDebtCollection() {
        return null;
    }

    protected function getAbonentFio() {
        return null;
    }

    protected function getAbonentAddr() {
        return null;
    }

    protected function getAbonentFioAndAddr() {
        return null;
    }

    public function getData() {
        return $this->collectData;
    }

    public function isDataExists() {
        return (count($this->collectData) > 0);
    }

    final private function correctPaths() {
//        if (array_key_exists('certs', $this->params)) {
//            foreach ($this->params['certs'] as $key => &$cert) {
//                $cert['cert'] = '../certs/'. $cert['cert'];
//                $cert['key'] = '../certs/' . $cert['key'];
//            }
//        }
    }
}
