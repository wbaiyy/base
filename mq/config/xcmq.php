<?php
/**
 * xcmq配置
 *
 *
 * 这里作了代码规范化
 */
return [
    'sendMQ' =>[
        // 用什么存储
        'db' => 'file',
        'base' => Yii::getAlias('@runtime/logs'),
        'rule' => [
            'class' => 'xlogger\rule\XLogger_Rule_Time',
            'param' => [
                'prefix' => 'sendMQ',
                'partition' => 'Y-m-d', // Y-m-d
                'database' => 0,
            ],
            'key' => 'addTime',
        ],
        'format' => 'json',
    ],
    'receiveMQ' => [
        // 用什么存储
        'db' => 'file',
        'base' => Yii::getAlias('@runtime/logs'),
        'rule' => [
            'class' => 'xlogger\rule\XLogger_Rule_Time',
            'param' => [
                'prefix' => 'receiveMQ',
                'partition' => 'Y-m-d', // Y-m-d
                'database' => 0,
            ],
            'key' => 'addTime',
        ],
        'format' => 'json',
    ],
    'connect_error' => [
        // 用什么存储
        'db' => 'file',
        'base' => Yii::getAlias('@runtime/logs'),
        'rule' => [
            'class' => 'xlogger\rule\XLogger_Rule_Time',
            'param' => [
                'prefix' => 'connect_error',
                'partition' => 'Y-m-d', // Y-m-d
                'database' => 0,
            ],
            'key' => 'addTime',
        ],
        'format' => 'json',
    ],
];