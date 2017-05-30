<?php
@session_start();

$config = array(
    'rewrite' => array(
        'report' => 'log/report',
        'manage' => 'manage/index',
        '<c>/<a>' => '<c>/<a>',
        // '<username>/hello.html' => 'default/index',
        // 'dev/<a>.html' => 'default/<a>',
    ),
    'app_id' => 'project1240',
);

$setting = array(
    "log.antijoy.com" => array(
        'debug' => 1,
        'mysql' => array(
            'MYSQL_HOST' => '127.0.0.1',
            'MYSQL_PORT' => '3306',
            'MYSQL_USER' => 'project1240',
            'MYSQL_DB'   => 'project1240',
            'MYSQL_PASS' => 'oaTx8H034ChsAj6k',
            'MYSQL_CHARSET' => 'utf8',
        ),
    ),
    "project1-log.yooo.moe" => array(
        'debug' => 1,
        'mysql' => array(
            'MYSQL_HOST' => '127.0.0.1',
            'MYSQL_PORT' => '3306',
            'MYSQL_USER' => 'project1240',
            'MYSQL_DB'   => 'project1240',
            'MYSQL_PASS' => 'oaTx8H034ChsAj6k',
            'MYSQL_CHARSET' => 'utf8',
        ),
    ),
    '127.0.0.1' => array(
        'debug' => 1,
        'mysql' => array(
            'MYSQL_HOST' => '127.0.0.1',
            'MYSQL_PORT' => '3306',
            'MYSQL_USER' => 'root',
            'MYSQL_DB'   => 'project1240',
            'MYSQL_PASS' => 'ltre',
            'MYSQL_CHARSET' => 'utf8',
        ),
    ),
);
define('DEBUG', $setting[$_SERVER["HTTP_HOST"]]["debug"]);
return $setting[$_SERVER["HTTP_HOST"]] + $config;