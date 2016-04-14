<?php
/*
//如果要启用调试
//需要先composer require luofei614/socketlog
//去掉注释,相关调试方法自行百度/谷歌socketlog
require './vendor/luofei614/socketlog/php/SocketLog.class.php';
slog(array(
    'host'                => '10.0.2.2',
    'error_handler'       => true,
    'optimize'            => true,
    'show_included_files' => true,
    'allow_client_ids'    => array('williamWong','hwl')
),'set_config');
//*/
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
//网站根目录
define('SITE_ROOT', str_replace('\\', '/', dirname(__FILE__)) . '/');
// 定义应用目录
define('APP_PATH','./Application/');

// 定义基于url网站根目录
define('URL_ROOT', (isset($_SERVER['SCRIPT_NAME']) ? rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/\\') : ''));

//加载composer
require './vendor/autoload.php';
// 引入ThinkPHP入口文件
require './vendor/thinkphp/thinkphp/ThinkPHP/ThinkPHP.php';
// 亲^_^ 后面不需要任何代码了 就是如此简单
