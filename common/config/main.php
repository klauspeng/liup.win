<?php
return [
    'aliases'    => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache'      => [
            'class' => 'yii\caching\FileCache',
        ],
        // url美化
        'urlManager' => [
            'enablePrettyUrl' => TRUE,
            'showScriptName'  => FALSE,
            'suffix'          => '.html',
            'rules'           => [
            ],

        ],
    ],

    // 默认路由
    'defaultRoute' => 'index',

    // gii
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['192.168.*.*'] // 按需调整这里
        ],
    ],
];
