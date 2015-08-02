<?php
/**
 * Setup environments
 * 
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 * 
 * You can define the current environment via: 
 *     define('WP_ENV', 'production');
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


// Set environment based on hostname
switch ($hostname) {
    case 'lppschools.dev:8888':
        define('WP_ENV', 'development');
        break;
    
    case 'lengthofdaylight.com':
        define('WP_ENV', 'staging');
        break;

    case 'www.lppschools.com':
    default: 
        define('WP_ENV', 'production');
}

