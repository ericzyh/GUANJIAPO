<?php 
//echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />服务器升级维护，请10分钟后再来 : )';return;
/*
 * 调度器，唯一入口
 */
//报错级别
error_reporting(E_ALL&~E_NOTICE);
//开启session
session_start();
//全局变量配置
$filepath		= 	$_SERVER['DOCUMENT_ROOT'];
$config = array(
'inc_dir'					=> $filepath.'/inc/', // 包含文件根目录，最好无法通过Web直接访问到，下同
'controller_dir'			=> $filepath.'/controllers/',// 控制器根目录
'model_dir'					=> $filepath.'/models/', // 模型根目录
'view_dir'					=> $filepath.'/tpl/',  // 视图根目录
'default_controller'		=> 'w', // 默认的控制器,如用户没有指定控制器或者控制器不存在，使用默认值
'default_action'			=> 'i', //默认的方法，如用户没有指定方法或者方法不存在，使用默认值
'upload_dir'				=> $filepath.'/files/'
);
//载入基础配置文件
include($config['inc_dir'] . 'conf.inc.php');
//载入数据库操作文件
include($config['inc_dir'] . 'class.db.php');
//载入控制层基类文件
include($config['inc_dir'] . 'class.controller.php'); 

// 截取URI
$uri = isset($_SERVER['REQUEST_URI']) ? explode('?', $_SERVER['REQUEST_URI']) : null;
$uri = isset($uri[0]) ? explode('/', $uri[0]) : null;
// 取出URI PATH_INF中的controller和action名称
$controller = isset($uri[1])  && ctype_alnum($uri[1]) ? $uri[1] : $config['default_controller']; 
$action = isset($uri[2]) ? $uri[2] : $config['default_action'];
// 验证controller是否存在
if (!file_exists($config['controller_dir'] . $controller . '.php'))
{
	 echo '404';
} 
// 载入控制器类
include($config['controller_dir'] . $controller . '.php');
// 实例化控制器，然后转发方法调用
$controller_class_name = ucfirst($controller);
$_obj = new $controller_class_name;
if (method_exists($_obj, $action))
{
	call_user_func(array(&$_obj, $action));
}
else
{
	call_user_func(array(&$_obj, $config['default_action']));
}
?>
