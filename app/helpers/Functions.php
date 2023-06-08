<?php

// =======================================================
function aes_encrypt($value)
{
    // encrypt $value
    return bin2hex(openssl_encrypt($value, 'aes-256-cbc', OPENSSL_KEY, OPENSSL_RAW_DATA, OPENSSL_IV));
}

// =======================================================
function aes_decrypt($value)
{
    // decrypt $value
    if(strlen($value) % 2 != 0){
        return false;
    }

    return openssl_decrypt(hex2bin($value), 'aes-256-cbc', OPENSSL_KEY, OPENSSL_RAW_DATA, OPENSSL_IV);
}

// =======================================================
function printData($data, $die = true)
{
    // debug
    echo '<pre>';
    if(is_object($data) || is_array($data)){
        print_r($data);
    } else {
        echo $data;
    }

    if($die){
        die('<br>FIM</br>');
    }
}