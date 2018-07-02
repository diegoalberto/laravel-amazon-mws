<?php
/**
 * Created by PhpStorm.
 * User: zenkr
 * Date: 2018/7/1
 * Time: 22:25
 */

return [
    'config' => [
        //Service URL Base
        //Current setting is United States
        'AMAZON_SERVICE_URL' => 'https://mws.amazonservices.com/',
        //Location of log file to use
        'logpath' => storage_path('logs/mws.log'),

        //Name of custom log function to use
        'logfunction' => '',

        //Turn off normal logging
        'muteLog' => false,
    ],
    'marketPlace' => [
        'CA' => [
            'id' => 'A2EUQ1WTGCTBG2',
            'endpoint' => 'https://mws.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_NA', ''),
            'secretKey' => env('MWS_SECRET_KEY_NA', ''),
        ],
        'MX' => [
            'id' => 'A1AM78C64UM0Y8',
            'endpoint' => 'https://mws.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_NA', ''),
            'secretKey' => env('MWS_SECRET_KEY_NA', ''),
        ],
        'US' => [
            'id' => 'ATVPDKIKX0DER',
            'endpoint' => 'https://mws.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_NA', ''),
            'secretKey' => env('MWS_SECRET_KEY_NA', ''),
        ],
        'BR' => [
            'id' => 'A2Q3Y263D00KWC',
            'endpoint' => 'https://mws.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_BR', ''),
            'secretKey' => env('MWS_SECRET_KEY_BR', ''),
        ],
        'DE' => [
            'id' => 'A1PA6795UKMFR9',
            'endpoint' => 'https://mws-eu.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secretKey' => env('MWS_SECRET_KEY_EU', ''),
        ],
        'ES' => [
            'id' => 'A1RKKUPIHCS9HS',
            'endpoint' => 'https://mws-eu.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secretKey' => env('MWS_SECRET_KEY_EU', ''),
        ],
        'FR' => [
            'id' => 'A13V1IB3VIYZZH',
            'endpoint' => 'https://mws-eu.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secretKey' => env('MWS_SECRET_KEY_EU', ''),
        ],
        'IT' => [
            'id' => 'APJ6JRA9NG5V4',
            'endpoint' => 'https://mws-eu.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secretKey' => env('MWS_SECRET_KEY_EU', ''),
        ],
        'GB' => [
            'id' => 'A1F83G8C2ARO7P',
            'endpoint' => 'https://mws-eu.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secretKey' => env('MWS_SECRET_KEY_EU', ''),
        ],
        'IN' => [
            'id' => 'A21TJRUUN4KGV',
            'endpoint' => 'https://mws.amazonservices.in/',
            'keyId' => env('MWS_ACCESS_KEY_ID_IN', ''),
            'secretKey' => env('MWS_SECRET_KEY_IN', ''),
        ],
        'AU' => [
            'id' => 'A39IBJ37TRP1C6',
            'endpoint' => 'https://mws.amazonservices.com.au/',
            'keyId' => env('MWS_ACCESS_KEY_ID_AU', ''),
            'secretKey' => env('MWS_SECRET_KEY_AU', ''),
        ],
        'JP' => [
            'id' => 'A1VC38T7YXB528',
            'endpoint' => 'https://mws.amazonservices.jp/',
            'keyId' => env('MWS_ACCESS_KEY_ID_JP', ''),
            'secretKey' => env('MWS_SECRET_KEY_JP', ''),
        ],
        'CN' => [
            'id' => 'AAHKV2X7AFYLW',
            'endpoint' => 'https://mws.amazonservices.com.cn/',
            'keyId' => env('MWS_ACCESS_KEY_ID_CN', ''),
            'secretKey' => env('MWS_SECRET_KEY_CN', ''),
        ],
    ],
];