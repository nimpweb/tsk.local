<?php

function debug($arr, $die = false){
    echo '<pre>' . print_r($arr, true) . '</pre>';
    if($die) die;
}

function redirect($http = false){
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

function priceFormat($price) {
    return sprintf('%01.2f', $price);
}

function formatUnit($item, $format = 'short') {
    $source = [
        'м' => array(
            'short' => 'м.',
            'full' => 'метр'
        ),
        'кг' => array(
            'short' => 'кг.',
            'full' => 'килограмм'
        ),
        'компл' => array(
            'short' => 'компл.',
            'full' => 'комплект'
        ),
        'л.' => array(
            'short' => 'л.',
            'full' => 'литр'
        ),
        'пар' => array(
            'short' => 'пар.',
            'full' => 'пару'
        ),
        'пог.м' => array(
            'short' => 'пог.м.',
            'full' => 'погонный метр'
        ),
        'т' => array(
            'short' => 'т.',
            'full' => 'тонну'
        ),
        'шт' => array(
            'short' => 'шт.',
            'full' => 'штуку'
        ),
    ];
    return $source[$item][$format];
}

/**
 * @return mixed
 */
function getRealIpAddr() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

/**
 * @param string $ip
 * @return bool|mixed
 */
function getGeoLocation($ip = '') {
    if ($ip == '') $ip = $_SERVER['REMOTE_ADDR'];
    $query = @unserialize(file_get_contents("http://ip-api.com/php/{$ip}?lang=ru"));
    if ($query && $query['status'] == "success") {
        return $query;
    }
    return false;
}
