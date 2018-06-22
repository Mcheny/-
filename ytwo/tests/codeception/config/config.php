<?php

/**
 * Application configuration shared by all test types
 */
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    return [
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=localhost;dbname=testlinux',
            ],
            'mailer' => [
                'useFileTransport' => true,
            ],
            'urlManager' => [
                'showScriptName' => true,
            ],
        ],
    ];
}else{
    return [
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=localhost;dbname=yii2_basic_tests',
            ],
            'mailer' => [
                'useFileTransport' => true,
            ],
            'urlManager' => [
                'showScriptName' => true,
            ],
        ],
    ];
}


