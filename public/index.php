<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 7:40 PM
 * To change this template use File | Settings | File Templates.
 */

/* error reporting on */
error_reporting(E_ALL);

$path_array = explode('/', substr(realpath(dirname(__FILE__)), 1));
$seg_count = count($path_array);
$counter = 0;
$doc_root = __DIR__ .'/';
$app_path = realpath(__DIR__.'/..');
$app_path .= '/';
define ('__APP_PATH', $app_path);
define ('__DOC_ROOT', $doc_root);

/* include the app.php file */
include __APP_PATH . 'includes/app.php';
