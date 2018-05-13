<?php

$GLOBALS['config'] = array(
    /**
     * List of servers available for all users
     */
    'servers' => array(/* 'Local Beanstalkd' => 'beanstalk://localhost:11300', ... */),
    /**
     * Saved samples jobs are kept in this file, must be writable
     */
    'storage' => dirname(__FILE__) . DIRECTORY_SEPARATOR . 'storage.json',
    /**
     * Optional Basic Authentication
     */
    'auth' => array(
        'enabled' => false,
        'username' => 'admin',
        'password' => 'password',
    ),
    /**
     * Version number
     */
    'version' => '1.7.8',
);


/**
 * Load an existing global configuration.
 *
 * This is the place to load the auto-loader of a parent project and/or to configure global logging/error handling.
 */
$global_config = dirName(__FILE__).'/.global-config.php';
if (is_file($global_config)) {
    require($global_config);
}
