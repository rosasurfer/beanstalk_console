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
 * Load an existing parent configuration. This is the place to load the class loader of the parent project to find custom
 * classes required for visualizing message queues.
 *
 * To prevent symbolic link issues on Windows the file format of ".parent-config" is plain text with the first line pointing
 * to the parent project's PHP configuration file.
 */
if (is_file($filename = dirname(__FILE__).'/.parent-config')) {
    ini_set('auto_detect_line_endings', 1);

    if ($lines = file($filename, FILE_IGNORE_NEW_LINES)) {
        $parentConfig = trim(reset($lines));
        if (!is_file($parentConfig)) {
            echo 'parent config file not found: "'.$parentConfig.'"';
            exit(1);
        }
        require($parentConfig);
    }
}
