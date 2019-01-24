<?php

define('BASE','http://localhost/ttmblog');
define('ENVIRNOMENT', 'development');

global $config;
$config = [];

if (ENVIRNOMENT == "development"){
    $config['dbname'] = 'ttmblog';
    $config['host']  = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    $config['dbname'] = 'loja';
    $config['host']  = 'www.truetechmoz.com';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '#ttm0000';
}