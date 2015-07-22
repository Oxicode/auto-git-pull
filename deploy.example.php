<?php

require 'vendor/autoload.php';

$deployer = new \tmd\AutoGitPull\Deployer(array(
    'deployUser' => 'Oxicode',
    'directory' => '/var/www/mysite/',
    'logDirectory' => __DIR__ . '/log/',
    'notifyEmails' => array(
        'me@example.com'
    )
));

$deployer->postDeployCallback = function () {
    echo 'Yay!';
};

$deployer->deploy();
