<?php

require 'environment.php';

define("BASE_URL", "http://localhost/clonetwitter");

global $config;

$config = array();

if (ENVIRONMENT == "development") {
    $config['dbname'] = 'ctwitter';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    $config['dbname'] = 'ctwitter';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

