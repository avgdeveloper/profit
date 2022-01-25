<?php


// API Endpoint & Credentials
define('URL', 'https://www.become.co/api/rest/test/');
define('USERNAME', 'tzinch');
define('PASSWORD', 'r#eD21mA%gNU');


// Gets data from API
function getDataFromApi() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, USERNAME.':'.PASSWORD);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $result = curl_exec($ch);
    $errno = curl_errno($ch);
    $error  = curl_error($ch);
    if ($errno !== 0) {
        print_r($error);
        exit; 
    }
    $result = json_decode($result);
    if ($result->success == false){
        echo 'something went wrong with API';
        exit;
    }
    return $result;
}