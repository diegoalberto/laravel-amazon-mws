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
    'accessKey' => [
        'NA' => [
            'id' => env('MWS_ACCESS_KEY_ID_NA', ''),
            'secret_key' => env('MWS_SECRET_KEY_NA', ''),
        ],
        'EU' => [
            'id' => env('MWS_ACCESS_KEY_ID_EU', ''),
            'secret_key' => env('MWS_SECRET_KEY_EU', ''),
        ],
    ],
    'region' => [
        'NA' => ['CA', 'MX', 'US'],
        'BR' => ['BR'],
        'EU' => ['DE', 'ES', 'FR', 'IT', 'GB'],
        'IN' => ['IN'],
        'FE' => ['AU', 'JP'],
        'CN' => ['CN'],
    ],
    'endpoint' => [
        'NA' => 'https://mws.amazonservices.com/',
        'BR' => 'https://mws.amazonservices.com/',
        'EU' => 'https://mws-eu.amazonservices.com/',
        'IN' => 'https://mws.amazonservices.in/',
        'CN' => 'https://mws.amazonservices.com.cn/',
        'AU' => 'https://mws.amazonservices.com.au/',
        'JP' => 'https://mws.amazonservices.jp/',
    ],
    'marketPlace' => [
        'CA' => [
            'id' => 'A2EUQ1WTGCTBG2',
            'endpoint' => 'https://mws.amazonservices.com/'
        ],
        'MX' => [
            'id' => 'A1AM78C64UM0Y8',
            'endpoint' => 'https://mws.amazonservices.com/'
        ],
        'US' => [
            'id' => 'ATVPDKIKX0DER',
            'endpoint' => 'https://mws.amazonservices.com/'
        ],
        'BR' => [
            'id' => 'A2Q3Y263D00KWC',
            'endpoint' => 'https://mws.amazonservices.com/'
        ],
        'DE' => [
            'id' => 'A1PA6795UKMFR9',
            'endpoint' => 'https://mws-eu.amazonservices.com/'
        ],
        'ES' => [
            'id' => 'A1RKKUPIHCS9HS',
            'endpoint' => 'https://mws-eu.amazonservices.com/'
        ],
        'FR' => [
            'id' => 'A13V1IB3VIYZZH',
            'endpoint' => 'https://mws-eu.amazonservices.com/'
        ],
        'IT' => [
            'id' => 'APJ6JRA9NG5V4',
            'endpoint' => 'https://mws-eu.amazonservices.com/'
        ],
        'GB' => [
            'id' => 'A1F83G8C2ARO7P',
            'endpoint' => 'https://mws-eu.amazonservices.com/'
        ],
        'IN' => [
            'id' => 'A21TJRUUN4KGV',
            'endpoint' => 'https://mws.amazonservices.in/'
        ],
        'AU' => [
            'id' => 'A39IBJ37TRP1C6',
            'endpoint' => 'https://mws.amazonservices.com.au/'
        ],
        'JP' => [
            'id' => 'A1VC38T7YXB528',
            'endpoint' => 'https://mws.amazonservices.jp/'
        ],
        'CN' => [
            'id' => 'AAHKV2X7AFYLW',
            'endpoint' => 'https://mws.amazonservices.com.cn/'
        ],
    ],
];