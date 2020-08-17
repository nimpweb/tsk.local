<?php
debug('test', 1);

$account = "0115620";

$post_data = "<?xml version='1.0' encoding='utf-8'?><query><q_name>set_param_debt_srv</q_name>";
$post_data .= "<param><p_num>1</p_num><p_name>acc_pu_</p_name><p_val>" . $account . "</p_val></param>";
$post_data .= "<param><p_num>2</p_num><p_name>dateb_</p_name><p_val>" . date( "d/m/Y" ) . "</p_val></param></query>";
$post_data .= PHP_EOL . "<?xml version='1.0' encoding='utf-8'?><query><q_name>get_debt_srv</q_name></query>";


echo "Order:"."$post_data";

function send_request( $post_data ){

    $result = null;
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_HEADER, 0 );
    curl_setopt( $ch, CURLOPT_POST, true );
    curl_setopt( $ch, CURLOPT_TRANSFERTEXT, 1 );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
    curl_setopt( $ch, CURLOPT_URL, "HTTPS://jiktest.orenpay.ru:8443/" );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $post_data );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded' ) );
    curl_setopt( $ch, CURLOPT_SSLCERT, "/private/2020_test.crt" );
    curl_setopt( $ch, CURLOPT_SSLKEY, "/private/2020_test.key" );
    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 20 );
    curl_setopt( $ch, CURLOPT_TIMEOUT, 20 );

    $response = curl_exec( $ch );
    var_dump($response);
    die();
    $response_error = curl_error( $ch ) ?: null;

    curl_close( $ch );
    if( !$response_error && !empty( $response ) ){
        try {
            $result = simplexml_load_string( $response );
            $result = json_decode( json_encode( $result ), true ); // Пробразовать в массив
        } catch ( Exception $e ){}
    }
    return $result;
}


$data = send_request( $post_data ) ?: array();
print_r( $data );