<?php

define('HOST', 'http');
define('DEBUG', '1');
define('ROOT', dirname(__DIR__));
define('WWW', ROOT.'/public');
define('CERTS', ROOT.'/certs');
define("DOMAIN", 'tsk.local:81');
define("SITE", HOST.'://'.DOMAIN);
define('CORE', ROOT.'/core');
define('HELPERS', CORE.'/helpers');
define('APP', ROOT.'/app');
define('VIEW', ROOT.'/app/views');
define('DEFAULT_LAYOUT', 'default');
define('CONFIG', ROOT.'/config');
define('UPLOAD', WWW.'/upload');

define('GOOGLE_RECAPTCHA', true);
define('GOOGLE_RECAPTCHA_PUBLIC', '123');
define('GOOGLE_RECAPTCHA_SECRET', '321');

define('BEELINE_LOGIN', "1656731");
define('BEELINE_PASSWORD', "9653210541");
// define('BEELINE_NAMING', "PROvodnik");
define('BEELINE_NAMING', "RVK.Uslugi");


$app_path = HOST."://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/board');

require_once ROOT . '/vendor/autoload.php';