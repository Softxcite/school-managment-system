<?php

namespace App\Core;

class Encryptor
{
    private static $key;

    public static function init()
    {
        self::$key = hash('sha256', Config::get('ENCRYPTION_KEY', 'default_key'));
    }

    public static function encrypt($string)
    {
        $ivlen = openssl_cipher_iv_length('AES-256-CBC');
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext = openssl_encrypt($string, 'AES-256-CBC', self::$key, 0, $iv);
        return base64_encode($iv . $ciphertext);
    }

    public static function decrypt($encrypted)
    {
        $data = base64_decode($encrypted);
        $ivlen = openssl_cipher_iv_length('AES-256-CBC');
        $iv = substr($data, 0, $ivlen);
        $ciphertext = substr($data, $ivlen);
        return openssl_decrypt($ciphertext, 'AES-256-CBC', self::$key, 0, $iv);
    }
}
