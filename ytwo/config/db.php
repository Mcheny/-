<?php

if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    return [
        'class' => 'yii\db\Connection',
//    'dsn' => 'mysql:host=localhost;dbname=yii2_basic_tests',
        'username' => 'root',
        'password' => '1991&%(01-18)^lyx$0628&',
        'charset' => 'utf8',
        'tablePrefix'=>'yii_'
    ];
}
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2_basic_test',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'tablePrefix'=>'yii_'
];

