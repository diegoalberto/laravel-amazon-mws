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
    'access_key' => [
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
    'market_place' => [
        'CA' => [
            'id' => 'A2EUQ1WTGCTBG2',
            'endpoint' => 'NA'
        ],
        'MX' => [
            'id' => 'A1AM78C64UM0Y8',
            'endpoint' => 'NA'
        ],
        'US' => [
            'id' => 'ATVPDKIKX0DER',
            'endpoint' => 'NA'
        ],
        'BR' => [
            'id' => 'A2Q3Y263D00KWC',
            'endpoint' => 'BR'
        ],
        'DE' => [
            'id' => 'A1PA6795UKMFR9',
            'endpoint' => 'EU'
        ],
        'ES' => [
            'id' => 'A1RKKUPIHCS9HS',
            'endpoint' => 'EU'
        ],
        'FR' => [
            'id' => 'A13V1IB3VIYZZH',
            'endpoint' => 'EU'
        ],
        'IT' => [
            'id' => 'APJ6JRA9NG5V4',
            'endpoint' => 'EU'
        ],
        'GB' => [
            'id' => 'A1F83G8C2ARO7P',
            'endpoint' => 'EU'
        ],
        'IN' => [
            'id' => 'A21TJRUUN4KGV',
            'endpoint' => 'IN'
        ],
        'AU' => [
            'id' => 'A39IBJ37TRP1C6',
            'endpoint' => 'AU'
        ],
        'JP' => [
            'id' => 'A1VC38T7YXB528',
            'endpoint' => 'JP'
        ],
        'CN' => [
            'id' => 'AAHKV2X7AFYLW',
            'endpoint' => 'CN'
        ],
    ],
];