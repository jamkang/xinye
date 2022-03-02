<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
header('Access-Control-Allow-Origin:http://39.106.111.227');
header('Access-Control-Allow-Methods: GET, POST, PUT,DELETE,OPTIONS,PATCH');
header('Access-Control-Allow-Credentials: true'); // 设置是否允许发送 cookies
header('Access-Control-Expose-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');  //服务器 headers 白名单，可以让客户端进行访问
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
header('Access-Control-Max-Age:3600');
header('Content-Type:application/json;charset=utf-8');
// 定义应用目录
define('DS',DIRECTORY_SEPARATOR);
define('APP_PATH', __DIR__ . DS.'..'.DS.'application'.DS);
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
