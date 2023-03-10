<?php
/**
 * 安装命令：php ./vqmod/install/index.php
 * see https://github.com/vqmod/vqmod/wiki  
 */
// if (is_dir(dirname(dirname(__DIR__)) . '/.vscode') && function_exists('opcache_reset')) {
//     opcache_reset();
// }

require_once(__DIR__ . '/vqmod.php');

if (DIRECTORY_SEPARATOR === '/') {
    // fix webman for window to file process/Monitor.php
    // see https://www.php.net/manual/zh/pcntl.constants.php
    defined('SIGUSR1') && define('SIGUSR1', 30);
    defined('SIGINT') && define('SIGINT', 2);
}

\VQMod::$vqCachePath = 'runtime/_vqmod_cache/';
\VQMod::$logFolder = 'runtime/_vqmod_logs/';
\VQMod::$modCache = 'runtime/_vqmod.mods';
\VQMod::$checkedCache = 'runtime/_vqmod.checked';

\VQMod::bootup(dirname(dirname(__DIR__)));