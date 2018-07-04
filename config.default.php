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
            'endpointRegion' => 'NA',
            'endpoint' => 'https://mws.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_NA', ''),
            'secretKey' => env('MWS_SECRET_KEY_NA', ''),
        ],
        'MX' => [
            'id' => 'A1AM78C64UM0Y8',
            'endpointRegion' => 'NA',
            'endpoint' => 'https://mws.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_NA', ''),
            'secretKey' => env('MWS_SECRET_KEY_NA', ''),
        ],
        'US' => [
            'id' => 'ATVPDKIKX0DER',
            'endpointRegion' => 'NA',
            'endpoint' => 'https://mws.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_NA', ''),
            'secretKey' => env('MWS_SECRET_KEY_NA', ''),
        ],
        'BR' => [
            'id' => 'A2Q3Y263D00KWC',
            'endpointRegion' => 'BR',
            'endpoint' => 'https://mws.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_BR', ''),
            'secretKey' => env('MWS_SECRET_KEY_BR', ''),
        ],
        'DE' => [
            'id' => 'A1PA6795UKMFR9',
            'endpointRegion' => 'EU',
            'endpoint' => 'https://mws-eu.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secretKey' => env('MWS_SECRET_KEY_EU', ''),
        ],
        'ES' => [
            'id' => 'A1RKKUPIHCS9HS',
            'endpointRegion' => 'EU',
            'endpoint' => 'https://mws-eu.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secretKey' => env('MWS_SECRET_KEY_EU', ''),
        ],
        'FR' => [
            'id' => 'A13V1IB3VIYZZH',
            'endpointRegion' => 'EU',
            'endpoint' => 'https://mws-eu.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secretKey' => env('MWS_SECRET_KEY_EU', ''),
        ],
        'IT' => [
            'id' => 'APJ6JRA9NG5V4',
            'endpointRegion' => 'EU',
            'endpoint' => 'https://mws-eu.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secretKey' => env('MWS_SECRET_KEY_EU', ''),
        ],
        'GB' => [
            'id' => 'A1F83G8C2ARO7P',
            'endpointRegion' => 'EU',
            'endpoint' => 'https://mws-eu.amazonservices.com/',
            'keyId' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secretKey' => env('MWS_SECRET_KEY_EU', ''),
        ],
        'IN' => [
            'id' => 'A21TJRUUN4KGV',
            'endpointRegion' => 'IN',
            'endpoint' => 'https://mws.amazonservices.in/',
            'keyId' => env('MWS_ACCESS_KEY_ID_IN', ''),
            'secretKey' => env('MWS_SECRET_KEY_IN', ''),
        ],
        'AU' => [
            'id' => 'A39IBJ37TRP1C6',
            'endpointRegion' => 'AU',
            'endpoint' => 'https://mws.amazonservices.com.au/',
            'keyId' => env('MWS_ACCESS_KEY_ID_AU', ''),
            'secretKey' => env('MWS_SECRET_KEY_AU', ''),
        ],
        'JP' => [
            'id' => 'A1VC38T7YXB528',
            'endpointRegion' => 'JP',
            'endpoint' => 'https://mws.amazonservices.jp/',
            'keyId' => env('MWS_ACCESS_KEY_ID_JP', ''),
            'secretKey' => env('MWS_SECRET_KEY_JP', ''),
        ],
        'CN' => [
            'id' => 'AAHKV2X7AFYLW',
            'endpointRegion' => 'CN',
            'endpoint' => 'https://mws.amazonservices.com.cn/',
            'keyId' => env('MWS_ACCESS_KEY_ID_CN', ''),
            'secretKey' => env('MWS_SECRET_KEY_CN', ''),
        ],
    ],
];