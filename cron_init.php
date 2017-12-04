<?php
define('ROOT_PATH', dirname(__FILE__));
include (ROOT_PATH . '/function.php');

// 定义常量
define("PRIVDATA_DIR", ROOT_PATH. '/privdata');
define('CRON_STATUS_DIR', ROOT_PATH . '/cronstatus');
define('CONFIG_DIR', ROOT_PATH . '/config');
define('LOG_DIR', ROOT_PATH . '/privdata/log');
define('CRON_SWITCH_FILE', ROOT_PATH . '/config/cron_switch.ini');

define("KEY_PREFIX", 'cron_demo:');

// 定义任务常量
define('TEST_CRON_KEY', KEY_PREFIX.'test');


