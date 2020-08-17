<?php


namespace app\includes;


class OrenBilling extends BillingInteraction {

//    private $url = '';
//    private $account = '';

    public function __construct($params = null)
    {
        parent::__construct($params);
    }

    public function getDebtCollection()
    {
//        if (!isset($params['account'])) return null;
        parent::getDebtCollection(); // TODO: Change the autogenerated stub
        if ($this->account === null) return $this;

        $data = "<?xml version='1.0' encoding='utf-8'?><query><q_name>set_param_debt_srv</q_name>";
        $data .= "<param><p_num>1</p_num><p_name>acc_pu_</p_name><p_val>" . $this->account . "</p_val></param>";
        $data .= "<param><p_num>2</p_num><p_name>dateb_</p_name><p_val>" . date("d/m/Y") . "</p_val></param></query>";
        $data .= PHP_EOL . "<?xml version='1.0' encoding='utf-8'?><query><q_name>get_debt_srv</q_name></query>";

        $data = $this->send_request($data);
        return $data;
    }

    protected function getAbonentFio() {

    }

    protected function getAbonentAddr() {}

    public function getAbonentFioAndAddr() {
        $data = "<?xml version='1.0' encoding='utf-8'?>";
        $data .= "<query><q_name>getFioAdrAccpu</q_name>";
        $data .= "<param><p_num>1</p_num><p_name>accpu_</p_name><p_val>{$this->account}</p_val></param></query>";

        $data = $this->send_request($data);

        return $data;
    }

    /**
     * Отправется POST запрос к серверу
     * @param null $params
     * @return mixed|array or null
     */
    private final function send_request($params = null) {
        debug('dir="'.__DIR__.'"', 1);
        $result = null;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_TRANSFERTEXT, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_URL, $this->remote_url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
//        if (isset($this->certs) && !empty($this->certs)) {
//            foreach($this->certs as $cert) {
//                curl_setopt($ch, CURLOPT_SSLCERT, __DIR__ .'/certs/'.$cert['cert']);
//                curl_setopt($ch, CURLOPT_SSLKEY, __DIR__ .'/certs/'.$cert['key']);
//            }
//        }
        curl_setopt($ch, CURLOPT_SSLCERT, "C:\\OpenServer\\domains\\lk.vodokanal.local\\certs\\2020_test.crt");
        curl_setopt($ch, CURLOPT_SSLKEY, "c:\\OpenServer\\domains\\lk.vodokanal.local\certs\\2020_test.key");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);

        $response = curl_exec($ch);
        $response_error = curl_error($ch) ?: null;

        curl_close($ch);
        if (!$response_error && !empty($response)) {
            try {
                $result = simplexml_load_string($response);
                $result = json_decode(json_encode($result), true); // Пробразовать в массив
            } catch (Exception $e) {
            }
        }
        return $result;
    }

}