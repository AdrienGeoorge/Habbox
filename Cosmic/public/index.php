<?php
/**
 *  Set session
 */
ini_set('session.gc_maxlifetime', 604800);
//ini_set('session.cookie_lifetime', 604800);
//ini_set("session.use_only_cookies", true);
//session_cache_expire(10080);
session_set_cookie_params(604800);
session_start();

use App\Config;
use Core\Routes;
use Core\QueryBuilder;

include_once __DIR__ . '/../Core/Helper.php';
include_once __DIR__ . '/../vendor/autoload.php';

if(Config::debug) {
    ini_set("display_errors", 1);
}

/**
 *  Set QueryBuilder
 */

new Querybuilder;
new Config;

/**
 *  Dispatch URI
 */
Routes::init();
