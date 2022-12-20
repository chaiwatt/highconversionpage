<?php

namespace ox01code\Omise\process;

class Omise
{
    static protected $url;
    static protected $public_key;
    static protected $secret_key;

    protected static function init()
    {
        self::$url = env('OMISE_URL');
        self::$public_key = env('OMISE_PUBLIC_KEY');
        self::$secret_key = env('OMISE_SECRET_KEY');
    }
}
