<?php
if(!defined('LIBRARIES')) die("Error");

/* Root */
define('ROOT',__DIR__);

/* Timezone */
date_default_timezone_set('Asia/Ho_Chi_Minh');

/* Cấu hình coder */
define('NN_MSHD','MSHD');
define('NN_AUTHOR','tanphat0508.nina@gmail.com');

/* Cấu hình chung */
$config = array(
	'author' => array(
		'name' => 'Đỗ Tấn Phát',
		'email' => 'tanphat0508.nina@gmail.com',
		'timefinish' => '03/2021'
	),
	'arrayDomainSSL' => array(),
	'database' => array(
		'server-name' => $_SERVER["SERVER_NAME"],
		'url' => '/thang3_2022/up_dulich_tara_312322w/',
		'type' => 'mysql',
		'host' => 'localhost',
		'username' => 'nina64_312322w',
		'password' => '5oSHdmjkbq',
		'dbname' => 'nina64_312322w',
		'port' => 3306,
		'prefix' => 'table_',
		'charset' => 'utf8'
	),
	'website' => array(
		'error-reporting' => false,
		'secret' => '$nina@',
		'salt' => '94%9OvKR%*',
		'default_pass' => 'FYZNWIZ',
		'default_md5' => '8e1c820c05995b06662fbe627b00230f',
		'debug-developer' => true,
		'debug-css' => true,
		'debug-js' => true,
		'index' => false,
		'upload' => array(
			'max-width' => 1600,
			'max-height' => 1600
		),
		'lang' => array(
			'vi'=>'Tiếng Việt',
				// 'en'=>'Tiếng Anh'
		),
		'lang-doc' => 'vi|en',
		'slug' => array(
			'vi'=>'Tiếng Việt',
				// 'en'=>'Tiếng Anh'
		),
		'seo' => array(
			'vi'=>'Tiếng Việt',
				// 'en'=>'Tiếng Anh'
		),
		'comlang' => array(
			"gioi-thieu" => array("vi"=>"gioi-thieu"),
			"san-pham" => array("vi"=>"san-pham"),
			"tin-tuc" => array("vi"=>"tin-tuc"),
			"thu-vien-anh" => array("vi"=>"thu-vien-anh"),
			"video" => array("vi"=>"video"),
			"lien-he" => array("vi"=>"lien-he")
		)
	),
	'googleAPI' => array(
		'recaptcha' => array(
			'active' => false,
			'urlapi' => 'https://www.google.com/recaptcha/api/siteverify',
			'sitekey' => '6LezS5kUAAAAAF2A6ICaSvm7R5M-BUAcVOgJT_31',
			'secretkey' => '6LezS5kUAAAAAGCGtfV7C1DyiqlPFFuxvacuJfdq'
		)
	),
	'cart' => array(
		'active' => false ,
	),
	'order' => array(
		'ship' => false
	),
	'oneSignal' => array(
		'active' => false,
		'id' => 'af12ae0e-cfb7-41d0-91d8-8997fca889f8',
		'restId' => 'MWFmZGVhMzYtY2U0Zi00MjA0LTg0ODEtZWFkZTZlNmM1MDg4'
	),
	'login' => array(
		'admin' => 'LoginAdmin'.NN_MSHD,
		'member' => 'LoginMember'.NN_MSHD,
		'attempt' => 5,
		'delay' => 15
	),
	'license' => array(
		'version' => "7.0.0",
		'powered' => "nina@nina.vn"
	)
);

/* Error reporting */
error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);

/* Cấu hình base */
//require_once LIBRARIES."checkSSL.php";
//$http = getProtocol();
$http = 'http://';
$config_url = $config['database']['server-name'].$config['database']['url'];
$config_base = $http.$config_url;

/* Cấu hình login */
$login_admin = $config['login']['admin'];
$login_member = $config['login']['member'];

/* Cấu hình upload */
require_once LIBRARIES."constant.php";
?>